<?php
if(!isset($_SESSION)){session_start();}


function been_a_week_test($date_time_1){


	$SecondsDifference = ($_SERVER['REQUEST_TIME'] - 	 strtotime($date_time_1));
  	//$SecondsDifference = gmdate("Y-m-d\ H:i:s\ ", date($_SERVER['REQUEST_TIME'])) +10*60*60 - strtotime($date_time_1) ;

	if($SecondsDifference > 7*24*60*60 && $date_time_1 != '0000-00-00 00:00:00'){	return 'yes';exit();}
	else{return 'no'; exit();}
}



if(	$_GET['secondary_folder'] == 'initial_outreach' OR
	$_GET['secondary_folder'] == 'gap_filling'){ 	$incoming_clients = 'yes';}
else{												$incoming_clients = 'no';}


require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
if($incoming_clients == 'yes'){
	echo "	<div style='text-align:center;'>
			<span class='prompt-font blink_me' style='color:red;'>";
			
				if($_GET['secondary_folder'] == 'initial_outreach'){	echo "Find the early adopters";}
				if($_GET['secondary_folder'] == 'gap_filling'){	echo "Fill the gaps";}
			
					echo "</span>
		</div>";
	require $_SERVER['DOCUMENT_ROOT']."/users/incoming_clients/funnel_chart/display.php";
}

if($incoming_clients == 'yes'){$client_gained_sql = " AND client_gained = 'no'";}
if($_GET['secondary_folder'] == 'regular_users'){$client_gained_sql = " AND (client_gained = 'yes' OR contract_sent <> '0000-00-00') ";}


//This allows Chris to see everything / all users frankly
//probably this needs to show the pilots for those end users in time.
if($_SESSION['user_id'] == 1 || 4404 || 4405){
	$sql = "SELECT * FROM user_account_details 
			WHERE client_status = 'active'
			AND dead = 'no'
			ORDER BY first_name, second_name	
			";
}
else{



	
	//To make possible to add in multiple users we can easily address this by pulling out information for this $_SESSION['user_id']
	//from say user_pilot_relationships
	//then we simply have a combined SQL query for this query below and that should do it.

	$sql = "SELECT * FROM user_pilot_relationships
			WHERE pilots_user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'			
			";

			//echo $sql; exit();
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$result = mysqli_query($conn, $sql);	

	//now we just need to build out that sql query for which looks something like:
		/*
			Where pilots_id = '".mysqli_real_escape_string($conn, 1)."'


			pilots_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'
		*/

		$pilot_user_match_string = ''; //not unset so that we can just use .= the whole time
		$count_of_pilot_user_matches = 0; //not unset so that we can use ++ at the end of it
		$pilot_user_match_string .= " ( "; // required to build an or statement

		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
			$pilot_user_match_string .= " user_id = '".mysqli_real_escape_string($conn, $row['user_id'])."' ";
			$count_of_pilot_user_matches ++;
			if($count_of_pilot_user_matches > 0 AND $count_of_pilot_user_matches < mysqli_num_rows(($result))){
				$pilot_user_match_string .= " OR ";
			}
		}
		$pilot_user_match_string .= " ) "; // required to build an or statement

	
// test this first
		//echo $pilot_user_match_string;exit();
		/*
			Then this :     WHERE pilots_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'
			will simply become: 	WHERE ".$pilot_user_match_string."
		*/



	$sql = "SELECT * FROM user_account_details 
			WHERE ".$pilot_user_match_string." 
			AND client_status = 'active'
			AND dead = 'no'
			ORDER BY first_name, second_name	
			";
}
			//	echo $sql; exit();
//this gives us all the user_ids
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);





//echo $sql;
//exit();
echo "<div style='width:100%;text-align:center;margin:auto;";
if($incoming_clients == 'no'){echo "padding-top:25vh;";}
echo "'>";

if($incoming_clients == 'no'){
	if(isset($_SESSION['masked_domain'])){
		echo "	<br><br>";
		echo "<a href='/components/whitelabeling/unset.php'>UNSET THEME</a>";
		echo "	<br><br>";
	}

	echo "<a class='login-submit'  ";
	if($_SESSION['viewing_client_id'] == $_SESSION['user_id']){echo "style='background-color:red;color:white;' ";}
	else{echo "style='background-color:#13ad13;color:white;' href='/users/alterations/select_client.php?clients_user_id=".$_SESSION['user_id']."' ";}

	echo ">";
	if($_SESSION['viewing_client_id'] == $_SESSION['user_id']){echo "I'm selected";}
	else{echo "select me";}
	echo "</a>";
	echo "	<br><br><br><br>";
}









echo "<a class='login-submit' href='/users/alterations/add_new.php?page=".$_GET['secondary_folder']."' style = 'margin-bottom:50px;'>Add new</a><br><br><br>";




//CR 17.06.20 DON'T DELETE THIS!!!!
//This is extremely important 
//echo ">>if user is management - display select to view subordinates list of clients<br>";




echo "<div style='display: table;text-align:left;font-family:helvetica;text-transform:uppercase;margin-top:auto;margin-bottom:auto;margin-left:auto;margin-right:auto;'>";


echo "<style>
	.list_cell{display:table-cell;padding:10px;text-align:center;}
	</style>
";


	echo "<div style='display: table-row;'>";
	echo "<div class='list_cell'></div>";
	if($_SESSION['user_id'] == 1){
		echo "<div class='list_cell'>&nbsp;&nbsp;&nbsp;&nbsp;USER ID</div>";
	}
		echo "<div class='list_cell'></div>";
		echo "<div class='list_cell'></div>";
		echo "<div class='list_cell'></div>";
		//echo "<div class='list_cell'></div>";
		//echo "<div class='list_cell'></div>";
	
if($incoming_clients == 'no'){
require_file('/components/functions/text_and_design/span_of_text_in_color.php');

	echo "<div class='list_cell'></div>";
	echo "<div class='list_cell'  style='background-color: red;'>DEMO MODULE</div>";	

}


	
		echo "<div class='list_cell'>locked<br>by<br>pilot</div>";
		echo "<div class='list_cell'>number<br>of<br>logins<br>recorded</div>";	
		echo "<div class='list_cell'>initial<br>password<br>changed<br>from<br>hello</div>";

		//echo "<div class='list_cell'>number<br>of<br>password<br>changes</div>";		
		//echo "<div class='list_cell'>monthly<br>reviews</div>";	
		
	echo "</div>";






while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

	echo "<div style='display: table-row;'>";
	

		echo "<div class='list_cell'><a href='/users/alterations/mark_dead.php?id=".$row['user_id']."' style='color:red;' title='Mark this user dead'>x</a></div>";

		if($_SESSION['user_id'] == 1){
			echo "<div class='list_cell'  style='padding-left:30px;'>";
			echo $row['user_id'];
		echo "</div>";

		}



		echo "<div class='list_cell' title='To change this users name - select them and go to /profile/details/' style='padding-left:30px;";
			if(in_array($row['user_id'], $users_with_notifications)){echo "color:orange;";}
			else{echo "color:#707070;";}
			echo "'>";
			echo $row['first_name']." ".$row['second_name'];
		echo "</div>";
		//$title = "title = 'Business name'";
		//echo"<div class='list_cell'> <a ".$title." href='/users/alterations/change_business_name.php?clients_user_id=".$row['user_id']."'>";
		//	if($row['business_name']==''){echo ' --- ';}else{echo $row['business_name'];}
		//echo "</a></div>";
		//$title = "title = 'Business website'";
		//echo"<div class='list_cell'> <a ".$title." href='/users/alterations/change_business_website.php?clients_user_id=".$row['user_id']."'> ";
		//	if($row['business_website']==''){echo ' --- ';}else{echo $row['business_website'];}
		//echo "</a></div>";
		$title = "title = 'Email address'";
		echo"<div class='list_cell'> <a ".$title." href='/users/alterations/change_email.php?clients_user_id=".$row['user_id']."'>";
			if($row['email']==''){echo ' --- ';}else{echo $row['email'];}
		echo "</a></div>";
		$title = "title = 'Phone number'";		
		echo"<div class='list_cell'> <a ".$title." href='/users/alterations/change_phone_number.php?clients_user_id=".$row['user_id']."'>";
				if($row['phone_number']==''){echo ' --- ';}else{echo $row['phone_number'];}
		echo "</a></div>";
		
		


	

	if($row['proven_referrer']=='yes'){$set =  "no";}	else{$set =  "yes";}
	echo"<div class='list_cell'> <a href='/users/alterations/change_referrer.php?clients_user_id=".$row['user_id']."&set=".$set."'";
		if($row['proven_referrer']=='yes'){echo "style='color: #00ff00;'";}else{echo "style='color:#cecece;'";}
		echo ">";
		echo $row['proven_referrer'];
	echo "</a></div>";	

		echo"<div class='list_cell'> <a href='/users/alterations/edit_lock.php?clients_user_id=".$row['user_id'];
				if($row['locked_by_pilot']=='yes'){echo "&locked=no' title='currently locked'";}
				else{echo "&locked=yes' title='currently UNlocked'";}		
		
			echo ">";
				if($row['locked_by_pilot']=='yes'){echo "<i style='color: red;' class='fas fa-key' title='currently locked&#10;click to change'></i>";}
				else{echo "<i style='color: #00ff00;' class='fas fa-key'  title='currently UNlocked&#10;click to change'></i>";}
		echo "</a></div>";		
		echo"<div class='list_cell'>";
				echo $row['number_of_logins_recorded'];
		echo "</div>";
		echo"<div class='list_cell'>";
		
				
		
				if($row['password_initial_default_changed']=='yes'){echo "<span style='color: #00ff00;'>yes</span>";}
										  else{echo "<span ";
										  
										  if($row['number_of_logins_recorded'] > 0){echo "class='blink_me'";}
										  
										  
										  
										  
										  echo "style='color: #ff0000;'>no</span>";}
		echo "</div>";		

		//echo"<div class='list_cell'>";
		//		echo $row['number_of_password_resets'];
		//echo "</div>";		
		//echo"<div class='list_cell'>";
		//	if(in_array($row['user_id'], $users_with_monthly_reviews_on)){echo "on";}
		//	if(in_array($row['user_id'], $users_with_monthly_reviews_off)){echo "off";}
		//echo "</div>";					
				
		
		if($row['user_id'] != $_SESSION['viewing_client_id']){
		echo "<div><a style='float:right;color:#13ad13;text-decoration:none;' href='/users/alterations/select_client.php?clients_user_id=".$row['user_id']."'>Select ></a></div>";
		}
		else{echo "<span style='color:red;float:right;'>selected &nbsp;&nbsp;</span>";}
		
	if($incoming_clients == 'yes'){	
		echo"<div class='list_cell'>";	
			echo "<a href='/users/alterations/change_client_status.php?change_client_status_to=yes&id=".$row['user_id']."'
				style='color:black;'>make client>></a>";
			echo "</div>";	
	}
	echo "</div>";
	echo "<br>";
}
echo "</div>";
echo "</div>";






echo "<div style='width:100%;text-align:center;margin-top:25px;margin-left:auto;margin-right:auto;font-family:Comfortaa;'>";


/*
print_copy_for_pilots_only("
	if you pay for anything greater than or including fortnightly half hour sessions - platform access and text based discussion is included.<br>
	Below that platform access is included for both unlimited text an monthly half hour sessions
	below that platform access must be paid for at $20 a month + GST other than just free access to the mental health component of the platform.");
	echo "</div>";*/
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>