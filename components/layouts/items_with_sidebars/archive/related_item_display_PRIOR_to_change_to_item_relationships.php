<?php
if(!isset($_SESSION)){session_start();}

/* 
How it used to be, and the old sales issue that is still outstanding
*//*
//profile
if($show_this_type  == 'progress'){		$primary_folder_will_be	= 'profile';		$database_to_extract_from = 'progress';			$connect_a = 'a related piece of progress';	$add_some = 'a new piece of progress';	$link_to_url = '/profile/progress/';}
//sales
if($show_this_type  == 'sales'){		$primary_folder_will_be	= 'sales';		$database_to_extract_from = 'sales';			$connect_a = 'a related sales activity';	$add_some = 'a new sales activity';	$link_to_url = '/sales/';} //no second folder defined - goes to whererever the menu is currently at
*/

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT * FROM items_central_index WHERE adding_new_code = '".$show_this_type."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


$primary_folder_will_be	   	= $row['primary_folder'];
$database_to_extract_from  	= $row['found_in_database'];
$connect_a 			= "a related ".$row['singular_string'];
$add_some 			= "a new ".$row['singular_string'];

//activities
if($show_this_type  == 'activities'){	$link_to_url = '/activities/';} //no second folder defined - goes to whererever the menu is currently at
//issues
if($show_this_type  == 'issues'){	$link_to_url = '/issues/all/';} //no second folder defined - goes to whererever the menu is currently at


if(	$show_this_type  != 'activities' &&
	$show_this_type  != 'issues'	){	$link_to_url = $row['primary_folder'];}//no second folder defined - goes to whererever the menu is currently at

$current_items_acutal_type = $_GET['secondary_folder'];

$recommended_entry = 'no';
if($_GET['primary_folder'] == 'sales' && $show_this_type  == 'businesses'){		$recommended_entry = 'yes';}
if($_GET['primary_folder'] == 'sales' && $show_this_type  == 'people'){			$recommended_entry = 'yes';}

if($_GET['primary_folder'] == 'marketing' && $show_this_type  == 'target_markets'){	$recommended_entry = 'yes';}
if($_GET['primary_folder'] == 'marketing' && $show_this_type  == 'promotions'){		$recommended_entry = 'yes';}
if($_GET['primary_folder'] == 'marketing' && $show_this_type  == 'channels'){		$recommended_entry = 'yes';}
if($_GET['primary_folder'] == 'marketing' && $show_this_type  == 'angles'){		$recommended_entry = 'yes';}

if($_GET['primary_folder'] == 'biz_dev' && $show_this_type  == 'businesses'){		$recommended_entry = 'yes';}
if($_GET['primary_folder'] == 'biz_dev' && $show_this_type  == 'groups'){		$recommended_entry = 'yes';}
if($_GET['primary_folder'] == 'biz_dev' && $show_this_type  == 'people'){		$recommended_entry = 'yes';}


if($show_this_type  == 'activities' 	&& $_GET['primary_folder'] != 'activities'){		$recommended_entry = 'yes';}
if($show_this_type  == 'issues' 	&& $_GET['primary_folder'] != 'issues'){		$recommended_entry = 'yes';}

if($show_this_type == 'issues'){$show_this_type = 'all';}

//user_id just for a little bit of security right now
//only do this one way now... no reverse needed as double entries are going in as at 21.01.21
 $sql = "SELECT * FROM item_relationships 
	WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'
	AND status = 'active'
	AND 	(		item_a_type = '".$show_this_type."'
			AND	item_b_type = '".$current_items_acutal_type."'
			AND 	item_b_id   = '".mysqli_real_escape_string($conn, $_GET['item_id'])."')";

if($show_this_type == 'all'){$show_this_type = 'issues';}
				
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

$result = mysqli_query($conn, $sql);
$number_of_results = mysqli_num_rows($result); 

echo "<style>
select{box-shadow:none;padding:none;color: #d9d9d9; font-weight:300; text-decoration: underline;}
</style>
";

$display_show_this_type = str_replace('_',' ', $show_this_type);

echo "<a target='_blank' href='".$link_to_url."' class='prompt-font' style='font-size: large; ";
	
if($recommended_entry == 'yes' && $number_of_results == 0){echo "color: red;";}
else{echo "color: #d6edff;";}

echo "'>".$display_show_this_type."</a><br>";

if($number_of_results == 0){
	//echo "no related ".$show_this_type;

}
else{
//echo 'ehhlo';
	unset($related_item_ids);
	$i=0;
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		//get all related items out
		if(	$row['item_b_type'] !=  $current_items_acutal_type && 
			$row['item_b_id'] !=  	$_GET['item_id']
										){$related_item_ids[$i] = $row['item_b_id'];}
		else{								  $related_item_ids[$i] = $row['item_a_id'];}
		$i++;
	}

	$related_items_count = $i;
	//then echo our their titles as links - with option to disconnect if you please
	//var_dump($related_item_ids);	
	for($i = 0; $i < $related_items_count; $i++){		
		$sql = "SELECT * FROM ".$database_to_extract_from."
			WHERE user_id 	= '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'
			AND status 	= 'active'	
			AND item_id 	= '".$related_item_ids[$i]."'";
			
		//with some additional queries for special cases to limit it.....
		if($show_this_type  == 'products'){	$sql .= " AND product 		= 'yes'";}	
		if($show_this_type  == 'services'){	$sql .= " AND service 		= 'yes'";}
		if($show_this_type  == 'groups'){	$sql .= " AND non_biz_group 	= 'yes'";}	
		if($show_this_type  == 'businesses'){	$sql .= " AND business 		= 'yes'";}		
		if($show_this_type  == 'referrers'){	$sql .= " AND referrer 		= 'yes'";}	
		if($show_this_type  == 'staff'){	$sql .= " AND staff 		= 'yes'";}
		if($show_this_type  == 'clients'){	$sql .= " AND client 		= 'yes'";}
		if($show_this_type  == 'dreams'){	$sql .= " AND category 		= 'dreams'";}	
		if($show_this_type  == 'milestones'){	$sql .= " AND category 		= 'milestones'";}		
		if($show_this_type  == 'goals'){	$sql .= " AND category 		= 'goals'";}	
		if($show_this_type  == 'tasks'){	$sql .= " AND category 		= 'tasks'";}
		if($show_this_type  == 'issues'){	$sql .= " AND category 		= 'issues'";}					
		if($show_this_type  == 'improvements'){	$sql .= " AND category 		= 'improvements'";}							
			
		$result = mysqli_query($conn, $sql);
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		
		
			//a simple red "X" should go in here to disconnect items
			//please note that these things shouldn't be linked as they are via "folder" directions rather database/item_id relationships as items are changing folders... for example people/staff/clients/referrers
			
			echo "<a href='/components/layouts/items_with_sidebars/remove_connection.php?this_item_id=".$_GET['item_id']."&that_item_id=".$related_item_ids[$i]."' style='font-family:Comfortaa;font-size:1.2em;color:red;'>x</a>&nbsp;&nbsp;";
			
			echo " <a style='font-family:Comfortaa;font-size:1em;color: #281e96;' href='";
			
			$done = 'no';
			if($done == 'no' && $show_this_type == 'improvements'){
				//this goes to a unique check in the /improvements/planned folder/ to readjust the folder for a minute because my sql is so bad
				$url = "/".$primary_folder_will_be."/planned/item/display.php?item_id=".$related_item_ids[$i];
				$done = 'yes';
			}
			if($done == 'no' && $show_this_type == 'activities'){
				//this goes to a unique check in the /improvements/planned folder/ to readjust the folder for a minute because my sql is so bad
				$url = "/".$primary_folder_will_be."/all/item/display.php?item_id=".$related_item_ids[$i];
				$done = 'yes';
			}			
			if($done == 'no'){$url = "/".$primary_folder_will_be."/".$show_this_type."/item/display.php?item_id=".$related_item_ids[$i];}
			unset($done);
			echo $url;			
			echo "'>".$row['title']."</a>";//title may not always be correct so need to adjust per the correct column
			echo "<br>";
		}	
	}
}



echo "<form action='/components/items/connect.php?primary_folder=".$_GET['primary_folder']."&secondary_folder=".$_GET['secondary_folder']."&tertiary_folder=".$_GET['tertiary_folder']."&quarternary_folder=".$_SESSION['quarternary_folder']."&item_id=".$_GET['item_id']."' method='post'>";
	echo "<select name ='connect_or_new' class='prompt-font ";
	if(	$show_this_type == 'dreams'	OR
		$show_this_type == 'goals'	OR
		$show_this_type == 'milestones'	OR
		$show_this_type == 'tasks'	OR
		$show_this_type == 'services'	OR		
		$show_this_type == 'issues'	){	echo " right_select ";}
	else{						echo " left_select ";}	
	echo "' onchange='this.form.submit()' style='font-size:1.1em;text-transform:initial;";

		if(	$show_this_type == 'progress'){		echo "width: 325px;";}	

		if(	$show_this_type == 'products'){		echo "width: 225px;";}
		if(	$show_this_type == 'services'){		echo "width: 267px;";}	

		if(	$show_this_type == 'people'){		echo "width: 220px;";}			
		if(	$show_this_type == 'organisations'){	echo "width: 325px;";}
		
		
	// these should be worked on to perfectly fit the text for each one		
	//	if(	$show_this_type == 'businesses'){	echo "width: 325px;";}		

	//	if(	$show_this_type == 'events'){		echo "width: 255px;";}	
	//	if(	$show_this_type == 'one_to_ones'){	echo "width: 243px;";}	
	//	if(	$show_this_type == 'referrers'){	echo "width: 292px;";}	

		if(	$show_this_type == 'sales'){		echo "width: 275px;";}	

		if(	$show_this_type == 'target_markets'){	echo "width: 280px;";}	
		if(	$show_this_type == 'channels'){		echo "width: 225px;";}	
		if(	$show_this_type == 'promotions'){	echo "width: 245px;";}	
		if(	$show_this_type == 'angles'){		echo "width: 295px;";}	
	
	//	if(	$show_this_type == 'staff'){		echo "width: 335px;";}	
	//	if(	$show_this_type == 'clients'){		echo "width: 335px;";}	
	//	if(	$show_this_type == 'systems'){		echo "width: 335px;";}	
	//	if(	$show_this_type == 'assets'){		echo "width: 335px;";}	
	//	if(	$show_this_type == 'other'){		echo "width: 335px;";}	
		
		if(	$show_this_type == 'dreams'){		echo "width: 255px;";}	
		if(	$show_this_type == 'goals'){		echo "width: 203px;";}	
		if(	$show_this_type == 'milestones'){	echo "width: 252px;";}	
		if(	$show_this_type == 'tasks'){		echo "width: 210px;";}			
		if(	$show_this_type == 'issues'){		echo "width: 206px;";}

		if(	$show_this_type == 'improvements'){	echo "width: 280px;";}	
		if(	$show_this_type == 'future_questions'){	echo "width: 225px;";}	
		
		echo "' >";
		echo "<option class='";
		if(	$show_this_type == 'dreams'	OR
			$show_this_type == 'goals'	OR
			$show_this_type == 'milestones'	OR
			$show_this_type == 'tasks'	OR
			$show_this_type == 'services'	OR
			$show_this_type == 'issues'	){echo " right_select ";}
		else{					echo " left_select ";}			
		
			echo "'>connect ".$connect_a."</span></option>";
	
		require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

			
		 $sql = "SELECT * FROM ".$database_to_extract_from." 
			WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'
			AND status = 'active'
			AND deleted = 'no'";		
		if(	$show_this_type == 'dreams'	OR
			$show_this_type == 'goals'	OR
			$show_this_type == 'milestones'	OR
			$show_this_type == 'tasks'	OR
			//$show_this_type == 'issues'	OR
			$show_this_type == 'improvements'	
			
			){
				$sql .= " AND category = '".$show_this_type."'";}
		$sql .= "
			AND item_id <> '".mysqli_real_escape_string($conn, $_GET['item_id'])."'
			ORDER BY title ASC";
		
		
	//	if($show_this_type == 'issues'){echo $sql;exit();}
		
		
			
		$result = mysqli_query($conn, $sql);
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
			echo $row['title'];
			echo "<option value='".$show_this_type."_".$row['item_id']."'>".$row['title'];	
		
		
			echo "</option>";	
		}
		echo "<option class='";
		if(	$show_this_type == 'dreams'	OR
			$show_this_type == 'goals'	OR
			$show_this_type == 'milestones'	OR
			$show_this_type == 'tasks'	OR
			$show_this_type == 'services'	OR			
			$show_this_type == 'issues'	){echo " right_select ";}
		else{					echo " left_select ";}			




		echo "' value='new_".$show_this_type."'> + add ".$add_some."</span></option>";		
		
		
	echo "</select>";
echo "</form>";


echo "<br>";
echo "<br>";
echo "<br>";