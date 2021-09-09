<?php
if(!isset($_SESSION)){session_start();}
if($_SESSION['primary_folder'] != 'content'){
	require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
}


if($_SESSION['primary_folder'] == 'notifications'){$notifications = 'yes';}
else{$notifications = 'no';}

echo "<div style='height:22px;'>&nbsp;</div>";
echo "<div style='width:100%; text-align:center;";

if($_SESSION['primary_folder'] == 'sales' && $_SESSION['secondary_folder'] != 'recurring_sales'){echo "height: 200px;";}

	echo "'>";	
	if(	$_SESSION['tertiary_folder'] == 'future_questions' OR 
		$_SESSION['tertiary_folder'] == 'general_notes'){
			echo "<span class='pilots_eyes_only_font'>";
				echo "THIS IS FOR THE CURRENT CLIENT ONLY <BR> AND NOT shared with clients";
			echo "</span>";
	}
	if(	$_SESSION['secondary_folder'] == 'homework' && $_SESSION['dreamboat_crew'] == 'yes' ){
			echo "<span class='pilots_eyes_only_font'>";
				echo "AS A PILOT <BR>getting this right the is the priority & focus";
			echo "</span>";
	}

	if($_SESSION['primary_folder'] == 'sales' && $_SESSION['secondary_folder'] == 'recurring_sales'){
	
	require $_SERVER['DOCUMENT_ROOT']."/components/crm/recurring_sales_total.php";
		echo "<div class='prompt-font' style='color:red'>";
			echo "revenue: ".$total_recurring_sales;
			echo "<br>";
			echo "gross profit: ".$total_recurring_gross_profit;
		echo "</div>";			
	}
echo "</div>";


echo "<div style='width:100%; text-align:center;font-family:Comfortaa;'>";

echo "<span style='color:#3DCCCC;'>";
if(isset($_SESSION['ai_list_warning'])){echo $_SESSION['ai_list_warning'];}
echo "</span>";

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/folder_to_database_relationships.php";


if($_SESSION['primary_folder'] != 'content'){
	if($notifications == 'no'){
		if(	$_SESSION['list_view_'.$_SESSION['primary_folder'].'_'.$_SESSION['secondary_folder']] == 'deleted' OR
			$_SESSION['list_view_'.$_SESSION['primary_folder'].'_'.$_SESSION['secondary_folder']] == 'inactive'){
				if(	$_SESSION['list_view_'.$_SESSION['primary_folder'].'_'.$_SESSION['secondary_folder']] == 'deleted'){
					//$deleted = 'yes';
					//$status  = '';
				
			 	$sql_for_display = "SELECT * FROM ".$database." WHERE user_id = '".$_SESSION['viewing_client_id']."' AND deleted = 'yes'";
			 	if($_SESSION['primary_folder'] == 'wheelhouse'){$sql_for_display .= " AND category = '".$_SESSION['secondary_folder']."' ";}
			 	if($_SESSION['primary_folder'] == 'issues'){$sql_for_display .= " AND category = 'issues'  AND mode = '".$_SESSION['secondary_folder']."' ";}
			 	if($_SESSION['primary_folder'] == 'improvements'){$sql_for_display .= " AND category = 'improvements'  AND mode = '".$_SESSION['secondary_folder']."' ";}
			 	if($_SESSION['secondary_folder'] == 'technology'){$sql_for_display .= " AND category = 'technology'  AND mode = '".$_SESSION['tertiary_folder']."' ";}			 			 		
			 	if($_SESSION['secondary_folder'] == 'clients'){$sql_for_display .= " AND client = 'yes' ";}		 	
			 	if($_SESSION['secondary_folder'] == 'staff'){$sql_for_display .= " AND staff = 'yes' ";}	
			 	if($_SESSION['secondary_folder'] == 'referrers'){$sql_for_display .= " AND referrer = 'yes' ";}
			 	if($_SESSION['secondary_folder'] == 'products'){$sql_for_display .= " AND product = 'yes' ";}
			 	if($_SESSION['secondary_folder'] == 'services'){$sql_for_display .= " AND service = 'yes' ";}
			 	if($_SESSION['secondary_folder'] == 'businesses'){$sql_for_display .= " AND business = 'yes' ";}	 	
			 	if($_SESSION['secondary_folder'] == 'groups'){$sql_for_display .= " AND non_biz_group = 'yes' ";}	 	
			if($_SESSION['primary_folder'] == 'sales'){
				$sql_for_display .= " AND mode = '".$_SESSION['secondary_folder']."' ";
				if(($_SESSION['secondary_folder'] == 'new_potentials' OR $_SESSION['secondary_folder'] == 'potential_upsells') AND
					isset($_SESSION['funnel_focus'][$_SESSION['secondary_folder']])
					){
					if($_SESSION['funnel_focus'][$_SESSION['secondary_folder']] == '10'){	$sql_for_display.= " AND probability >= 0 AND probability  < 10 ";}
					if($_SESSION['funnel_focus'][$_SESSION['secondary_folder']] == '20'){	$sql_for_display.= " AND probability >= 10 AND probability < 20 ";}
					if($_SESSION['funnel_focus'][$_SESSION['secondary_folder']] == '30'){	$sql_for_display.= " AND probability >= 20 AND probability < 30 ";}
					if($_SESSION['funnel_focus'][$_SESSION['secondary_folder']] == '40'){	$sql_for_display.= " AND probability >= 30 AND probability < 40 ";}
					if($_SESSION['funnel_focus'][$_SESSION['secondary_folder']] == '50'){	$sql_for_display.= " AND probability >= 40 AND probability < 50 ";}
					if($_SESSION['funnel_focus'][$_SESSION['secondary_folder']] == '60'){	$sql_for_display.= " AND probability >= 50 AND probability < 60 ";}
					if($_SESSION['funnel_focus'][$_SESSION['secondary_folder']] == '70'){	$sql_for_display.= " AND probability >= 60 AND probability < 70 ";}
					if($_SESSION['funnel_focus'][$_SESSION['secondary_folder']] == '80'){	$sql_for_display.= " AND probability >= 70 AND probability < 80 ";}
					if($_SESSION['funnel_focus'][$_SESSION['secondary_folder']] == '90'){	$sql_for_display.= " AND probability >= 80 AND probability < 90 ";}
					if($_SESSION['funnel_focus'][$_SESSION['secondary_folder']] == '100'){	$sql_for_display.= " AND probability >= 90 AND probability < 100 ";}
					}
				}	 	
				}
				if(	$_SESSION['list_view_'.$_SESSION['primary_folder'].'_'.$_SESSION['secondary_folder']] == 'inactive'){
					//$deleted = '';
					//$status = 'resolved';
				
					
			 	$sql_for_display = "SELECT * FROM ".$database." WHERE user_id = '".$_SESSION['viewing_client_id']."' AND status = 'resolved'";
			 	if($_SESSION['primary_folder'] == 'wheelhouse'){$sql_for_display .= " AND category = '".$_SESSION['secondary_folder']."' ";}
			 	if($_SESSION['primary_folder'] == 'issues'){$sql_for_display .= " AND category = 'issues'  AND mode = '".$_SESSION['secondary_folder']."' ";}
			 	if($_SESSION['primary_folder'] == 'improvements'){$sql_for_display .= " AND category = 'improvements'   AND mode = '".$_SESSION['secondary_folder']."' ";}
			 	if($_SESSION['secondary_folder'] == 'technology'){$sql_for_display .= " AND category = 'technology'  AND mode = '".$_SESSION['tertiary_folder']."' ";}	
			 	if($_SESSION['secondary_folder'] == 'clients'){$sql_for_display .= " AND client = 'yes' ";}		 	
			 	if($_SESSION['secondary_folder'] == 'staff'){$sql_for_display .= " AND staff = 'yes' ";}
			 	if($_SESSION['secondary_folder'] == 'referrers'){$sql_for_display .= " AND referrer = 'yes' ";}	 			 			
			 	if($_SESSION['secondary_folder'] == 'products'){$sql_for_display .= " AND product = 'yes' ";}
			 	if($_SESSION['secondary_folder'] == 'services'){$sql_for_display .= " AND service = 'yes' ";}
			 	if($_SESSION['secondary_folder'] == 'businesses'){$sql_for_display .= " AND business = 'yes' ";}	 	
			 	if($_SESSION['secondary_folder'] == 'groups'){$sql_for_display .= " AND non_biz_group = 'yes' ";}
			if($_SESSION['primary_folder'] == 'sales'){
				$sql_for_display .= " AND mode = '".$_SESSION['secondary_folder']."' ";
				if(($_SESSION['secondary_folder'] == 'new_potentials' OR $_SESSION['secondary_folder'] == 'potential_upsells') AND
					isset($_SESSION['funnel_focus'][$_SESSION['secondary_folder']])
					){
					if($_SESSION['funnel_focus'][$_SESSION['secondary_folder']] == '10'){	$sql_for_display.= " AND probability >= 0 AND probability  < 10 ";}
					if($_SESSION['funnel_focus'][$_SESSION['secondary_folder']] == '20'){	$sql_for_display.= " AND probability >= 10 AND probability < 20 ";}
					if($_SESSION['funnel_focus'][$_SESSION['secondary_folder']] == '30'){	$sql_for_display.= " AND probability >= 20 AND probability < 30 ";}
					if($_SESSION['funnel_focus'][$_SESSION['secondary_folder']] == '40'){	$sql_for_display.= " AND probability >= 30 AND probability < 40 ";}
					if($_SESSION['funnel_focus'][$_SESSION['secondary_folder']] == '50'){	$sql_for_display.= " AND probability >= 40 AND probability < 50 ";}
					if($_SESSION['funnel_focus'][$_SESSION['secondary_folder']] == '60'){	$sql_for_display.= " AND probability >= 50 AND probability < 60 ";}
					if($_SESSION['funnel_focus'][$_SESSION['secondary_folder']] == '70'){	$sql_for_display.= " AND probability >= 60 AND probability < 70 ";}
					if($_SESSION['funnel_focus'][$_SESSION['secondary_folder']] == '80'){	$sql_for_display.= " AND probability >= 70 AND probability < 80 ";}
					if($_SESSION['funnel_focus'][$_SESSION['secondary_folder']] == '90'){	$sql_for_display.= " AND probability >= 80 AND probability < 90 ";}
					if($_SESSION['funnel_focus'][$_SESSION['secondary_folder']] == '100'){	$sql_for_display.= " AND probability >= 90 AND probability < 100 ";}
					}
				}	
				}
			}
		else{
			//$deleted = 'no';
			//$status = 'active';
		
		
		
			$sql_for_display = "SELECT * FROM ".$database." WHERE deleted = 'no' AND status = 'active' AND user_id = '".$_SESSION['viewing_client_id']."'";
			if($_SESSION['primary_folder'] == 'wheelhouse'){$sql_for_display .= " AND category = '".$_SESSION['secondary_folder']."' ";}
			 	if($_SESSION['primary_folder'] == 'issues'){$sql_for_display .= " AND category = 'issues'  AND mode = '".$_SESSION['secondary_folder']."' ";}
		 	if($_SESSION['primary_folder'] == 'improvements'){$sql_for_display .= " AND category = 'improvements'   AND mode = '".$_SESSION['secondary_folder']."' ";}	
			 	if($_SESSION['secondary_folder'] == 'technology'){$sql_for_display .= " AND category = 'technology'  AND mode = '".$_SESSION['tertiary_folder']."' ";}			
		 	if($_SESSION['secondary_folder'] == 'clients'){$sql_for_display .= " AND client = 'yes' ";}		 	
		 	if($_SESSION['secondary_folder'] == 'staff'){$sql_for_display .= " AND staff = 'yes' ";}
			if($_SESSION['secondary_folder'] == 'referrers'){$sql_for_display .= " AND referrer = 'yes' ";}	
		 	if($_SESSION['secondary_folder'] == 'products'){$sql_for_display .= " AND product = 'yes' ";}
		 	if($_SESSION['secondary_folder'] == 'services'){$sql_for_display .= " AND service = 'yes' ";}
		 	if($_SESSION['secondary_folder'] == 'businesses'){$sql_for_display .= " AND business = 'yes' ";}	 	
		 	if($_SESSION['secondary_folder'] == 'groups'){$sql_for_display .= " AND non_biz_group = 'yes' ";}
			if($_SESSION['primary_folder'] == 'sales'){
				$sql_for_display .= " AND mode = '".$_SESSION['secondary_folder']."' ";
				if(($_SESSION['secondary_folder'] == 'new_potentials' OR $_SESSION['secondary_folder'] == 'potential_upsells') AND
					isset($_SESSION['funnel_focus'][$_SESSION['secondary_folder']])
					){
					if($_SESSION['funnel_focus'][$_SESSION['secondary_folder']] == '10'){	$sql_for_display.= " AND probability >= 0 AND probability  < 10 ";}
					if($_SESSION['funnel_focus'][$_SESSION['secondary_folder']] == '20'){	$sql_for_display.= " AND probability >= 10 AND probability < 20 ";}
					if($_SESSION['funnel_focus'][$_SESSION['secondary_folder']] == '30'){	$sql_for_display.= " AND probability >= 20 AND probability < 30 ";}
					if($_SESSION['funnel_focus'][$_SESSION['secondary_folder']] == '40'){	$sql_for_display.= " AND probability >= 30 AND probability < 40 ";}
					if($_SESSION['funnel_focus'][$_SESSION['secondary_folder']] == '50'){	$sql_for_display.= " AND probability >= 40 AND probability < 50 ";}
					if($_SESSION['funnel_focus'][$_SESSION['secondary_folder']] == '60'){	$sql_for_display.= " AND probability >= 50 AND probability < 60 ";}
					if($_SESSION['funnel_focus'][$_SESSION['secondary_folder']] == '70'){	$sql_for_display.= " AND probability >= 60 AND probability < 70 ";}
					if($_SESSION['funnel_focus'][$_SESSION['secondary_folder']] == '80'){	$sql_for_display.= " AND probability >= 70 AND probability < 80 ";}
					if($_SESSION['funnel_focus'][$_SESSION['secondary_folder']] == '90'){	$sql_for_display.= " AND probability >= 80 AND probability < 90 ";}
					if($_SESSION['funnel_focus'][$_SESSION['secondary_folder']] == '100'){	$sql_for_display.= " AND probability >= 90 AND probability < 100 ";}
					}
				}	
			$sql_for_display .= "ORDER BY rank ASC;";
			}
			
			
			
//	echo $sql_for_display;
//	exit();		
			
			
	}
	else{
		$database = 'notifications_and_alerts';
		$sql_for_display = "SELECT * FROM ".$database." WHERE for_user_id = '".$_SESSION['viewing_client_id']."' ORDER BY notification_id DESC;";
	}
}
else{
		$database = 'wheelhouse';
		$sql_for_display = "SELECT * FROM ".$database." WHERE deleted = 'no' AND status = 'active' AND user_id = '2'";
	 	if($_SESSION['primary_folder'] == 'improvements'){$sql_for_display .= " AND category = 'improvements'   AND mode = 'planned' ";}
}
	
	
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/box/box.php";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result_for_display = mysqli_query($conn, $sql_for_display);
$number_of_results_to_display = mysqli_num_rows($result_for_display);



$_SESSION['ai_number_of_'.$_SESSION['secondary_folder']] = $number_of_results_to_display;

	if($notifications == 'no' && $_SESSION['primary_folder'] != 'content'){ 

		echo "<div style='width:100%;max-width:1100px;padding:20px 0px;text-align:center;margin-left:auto;margin-right:auto;margin-bottom:6vh;'>";

echo "<style>
	.login-submit{
		min-width:unset;
		//padding:unset;
		padding-right:unset;
		padding-left:unset;
		width:100%;
		display:inline-block;
		max-height:52px;
		margin:unset;
		text-align:center;
	}

      </style>
";

					
					
if($_SESSION['primary_folder'] == 'profile'){					
	if($_SESSION['secondary_folder'] == 'progress'){	$_SESSION['adding_new'] = 'progress';		$achieved_name = 'very old';		$button_copy =  "add your progress";}
}
if($_SESSION['primary_folder'] == 'business'){	
	if($_SESSION['secondary_folder'] == 'products'){	$_SESSION['adding_new'] = 'products';		$achieved_name = 'old products';	$button_copy =  "ADD A product";}	
	if($_SESSION['secondary_folder'] == 'services'){	$_SESSION['adding_new'] = 'services';		$achieved_name = 'old services';	$button_copy =  "ADD A service";}			
}
if($_SESSION['primary_folder'] == 'network'){
	if($_SESSION['secondary_folder'] == 'people'){		$_SESSION['adding_new'] = 'people';		$achieved_name = 'archived';		$button_copy =  "add a person";}
	if($_SESSION['secondary_folder'] == 'businesses'){	$_SESSION['adding_new'] = 'businesses';		$achieved_name = 'archived';		$button_copy =  "add a business";}				
	if($_SESSION['secondary_folder'] == 'groups'){		$_SESSION['adding_new'] = 'organisations';	$achieved_name = 'archived';		$button_copy =  "add a community/group/organisation";}
	if($_SESSION['secondary_folder'] == 'events'){		$_SESSION['adding_new'] = 'events';		$achieved_name = 'old';			$button_copy =  "add an event";}								
}
if($_SESSION['primary_folder'] == 'biz_dev'){	
	if($_SESSION['secondary_folder'] == 'events'){	 	$_SESSION['adding_new'] = 'events';		$achieved_name = 'past events';		$button_copy =  "ADD a planned event";}
	if($_SESSION['secondary_folder'] == 'one_to_ones'){	$_SESSION['adding_new'] = 'one_to_ones';	$achieved_name = 'past one to ones';	$button_copy =  "ADD A planned one to one";}
	if($_SESSION['secondary_folder'] == 'referrers'){	$_SESSION['adding_new'] = 'referrers';		$achieved_name = 'old referrers';	$button_copy =  "ADD A referrer";}
 }								
if($_SESSION['primary_folder'] == 'sales'){
	if($_SESSION['secondary_folder'] == 'new_potentials'){	 $_SESSION['adding_new'] = 'new_potentials';		$achieved_name = 'closed';		$button_copy =  "ADD A potential inital sale";}	
	if($_SESSION['secondary_folder'] == 'recurring_sales'){	 $_SESSION['adding_new'] = 'recurring_sales';	$achieved_name = 'ended';		$button_copy =  "ADD A recurring sale";}						
	if($_SESSION['secondary_folder'] == 'potential_upsells'){$_SESSION['adding_new'] = 'potential_upsells';	$achieved_name = 'closed';		$button_copy =  "ADD A potential upsell";}		
	//if($_SESSION['secondary_folder'] == 'all'	      ){ $_SESSION['adding_new'] = 'sale';		$achieved_name = 'archived sales';	$button_copy =  "ADD A sale";}												
}
if($_SESSION['primary_folder'] == 'marketing'){	
	if($_SESSION['secondary_folder'] == 'target_markets'){	$_SESSION['adding_new'] = 'target_markets';	$achieved_name = 'redundant';		$button_copy =  "ADD A target market";}						
	if($_SESSION['secondary_folder'] == 'promotions'){	$_SESSION['adding_new'] = 'promotions';		$achieved_name = 'achieved';		$button_copy =  "ADD A promotion";}
	if($_SESSION['secondary_folder'] == 'channels'){	$_SESSION['adding_new'] = 'channels';		$achieved_name = 'redundant';		$button_copy =  "ADD A channel";}
	if($_SESSION['secondary_folder'] == 'angles'){		$_SESSION['adding_new'] = 'angles';		$achieved_name = 'redundant';		$button_copy =  "ADD A marketing angle";}									
}							
if($_SESSION['primary_folder'] == 'management'){	
	if($_SESSION['secondary_folder'] == 'assets'){		$_SESSION['adding_new'] = 'assets';		$achieved_name = 'old assets';		$button_copy =  "ADD An asset";}
	if($_SESSION['secondary_folder'] == 'other'){		$_SESSION['adding_new'] = 'other';		$achieved_name = 'old areas';		$button_copy =  "ADD other management areas";}							
	if($_SESSION['secondary_folder'] == 'staff'){		$_SESSION['adding_new'] = 'staff';		$achieved_name = 'old staff';		$button_copy =  "ADD A STAFF MEMBER";}
	if($_SESSION['secondary_folder'] == 'systems'){		$_SESSION['adding_new'] = 'systems';		$achieved_name = 'old systems';		$button_copy =  "ADD A system";}	
	if($_SESSION['secondary_folder'] == 'clients'){		$_SESSION['adding_new'] = 'clients'; 		$achieved_name = 'past '.$_SESSION['viewing_client_what_clients_are_called'];	
	$button_copy =  "ADD ".$_SESSION['viewing_client_what_clients_are_called'];}									
}		

if($_SESSION['primary_folder'] == 'issues'){		
	if($_SESSION['secondary_folder'] == 'critical'){	$_SESSION['adding_new'] = 'critical';		$achieved_name = 'historical';		$button_copy =  "add a critical issue";}
	if($_SESSION['secondary_folder'] == 'important'){	$_SESSION['adding_new'] = 'important';		$achieved_name = 'historical';		$button_copy =  "add an important issue";}
	if($_SESSION['secondary_folder'] == 'other'){		$_SESSION['adding_new'] = 'other';		$achieved_name = 'historical';		$button_copy =  "add an issue";}
}
if($_SESSION['primary_folder'] == 'wheelhouse'){
	if($_SESSION['secondary_folder'] == 'dreams'){		$_SESSION['adding_new'] = 'dreams';		$achieved_name = 'achieved';		$button_copy =  "add a dream";}
	if($_SESSION['secondary_folder'] == 'goals'){		$_SESSION['adding_new'] = 'goals';		$achieved_name = 'achieved';		$button_copy =  "add a goal";}
	if($_SESSION['secondary_folder'] == 'milestones'){	$_SESSION['adding_new'] = 'milestones';		$achieved_name = 'achieved';		$button_copy =  "add a milestone";}
	if($_SESSION['secondary_folder'] == 'tasks'){		$_SESSION['adding_new'] = 'tasks';		$achieved_name = 'achieved';		$button_copy =  "add a task";}	
	if($_SESSION['secondary_folder'] == 'homework'){	$_SESSION['adding_new'] = 'homework';		$achieved_name = 'completed';		$button_copy = "add some homework";}
}
if($_SESSION['primary_folder'] == 'improvements'){
	if($_SESSION['secondary_folder'] == 'planned'){		$_SESSION['adding_new'] = 'improvements';	$achieved_name = 'archived';		$button_copy =  "add a planned improvement";}
	if($_SESSION['secondary_folder'] == 'underway'){	$_SESSION['adding_new'] = 'improvements';	$achieved_name = 'archived';		$button_copy =  "add an underway improvement";}
	if($_SESSION['secondary_folder'] == 'completed'){	$_SESSION['adding_new'] = 'improvements';	$achieved_name = 'archived';		$button_copy =  "add a completed improvement";}		
}	
if($_SESSION['primary_folder'] == 'admin'){
	if($_SESSION['secondary_folder'] == 'users'){
		if($_SESSION['tertiary_folder'] == 'future_questions'){$_SESSION['adding_new'] = 'future_questions';	$achieved_name = 'irrelevant';		$button_copy = "add a question";}								
		if($_SESSION['tertiary_folder'] == 'general_notes'){	$_SESSION['adding_new'] = 'general_notes';	$achieved_name = 'dated';		$button_copy = "add a general note";}	
	}
	if($_SESSION['secondary_folder'] == 'technology'){
		if($_SESSION['tertiary_folder'] == 'support_requests'){		$_SESSION['adding_new'] = 'support_requests';		$achieved_name = 'solved';		$button_copy = "add a support request";}								
		if($_SESSION['tertiary_folder'] == 'bugs_to_fix'){		$_SESSION['adding_new'] = 'bugs_to_fix';		$achieved_name = 'fixed';		$button_copy = "add a bug to fix";}	
		if($_SESSION['tertiary_folder'] == 'general_maintenance'){	$_SESSION['adding_new'] = 'general_maintenance';	$achieved_name = 'managed';		$button_copy = "add a general maintenance";}								
		if($_SESSION['tertiary_folder'] == 'iterative_improvements'){	$_SESSION['adding_new'] = 'iterative_improvements';	$achieved_name = 'completed';		$button_copy = "add a iterative improvement";}	
		if($_SESSION['tertiary_folder'] == 'other_development'){	$_SESSION['adding_new'] = 'other_development';		$achieved_name = 'completed';		$button_copy = "add some other development";}								
		if($_SESSION['tertiary_folder'] == 'new_features'){		$_SESSION['adding_new'] = 'new_features';		$achieved_name = 'built';		$button_copy = "add a new feature";}	
	}
}






if(	$_SESSION['list_view_'.$_SESSION['primary_folder'].'_'.$_SESSION['secondary_folder']] != 'deleted' &&
	$_SESSION['list_view_'.$_SESSION['primary_folder'].'_'.$_SESSION['secondary_folder']] != 'inactive' ){	$active_selected= " selected ";		$active_ing = 'ing';	$color='DodgerBlue';}
if(	$_SESSION['list_view_'.$_SESSION['primary_folder'].'_'.$_SESSION['secondary_folder']] == 'deleted'){ 	$deleted_selected = " selected ";	$deleted_ing = 'ing';	$color='grey';}	
if(	$_SESSION['list_view_'.$_SESSION['primary_folder'].'_'.$_SESSION['secondary_folder']] == 'inactive'){ 	$inactive_selected = " selected ";	$inactive_ing = 'ing';	$color='#a5d2ff';}

	
			echo "<div style='width:33.3%;float:left;'>";
				echo "<form method='post' action='/components/lists/view.php'>";
				echo "<select name='list_to_view' class='login-submit'  style='float:left;width:100%;text-align-last: center;background-color:".$color."'  onchange='this.form.submit()'>";
					echo "<option value='active' 	".$active_selected."	>view".$active_ing." active</option>";
					echo "<option value='deleted'	".$deleted_selected."	>view".$deleted_ing."  deleted</option>";					
					echo "<option value='inactive'	".$inactive_selected."	>view".$inactive_ing."  ".$achieved_name."</option>";	
/*
			if($_SESSION['list_view_'.$_SESSION['primary_folder'].'_'.$_SESSION['secondary_folder']] != 'deleted'){
				echo "<a style='float:left;color:grey;font-family:helvetica;text-decoration:none;padding-left:10%;color:#a3b6ff;' href='/components/lists/view.php?now=deleted'>DELETED</a>";
				}
			else{echo  "<a style='float:left;color: orange;font-family:helvetica;text-decoration:none;padding-left:10%;' href='/components/lists/view.php?now=active'>VIEW ACTIVE</a>";}
			if($_SESSION['list_view_'.$_SESSION['primary_folder'].'_'.$_SESSION['secondary_folder']] != 'inactive'){
				echo "<a style='float:right;color:grey;font-family:helvetica;text-decoration:none;text-transform:uppercase;padding-right:10%;color:#a3b6ff;' href='/components/lists/view.php?now=inactive'>".$achieved_name."</a>";
				}
			else{echo  "<a style='float:right;color: orange;font-family:helvetica;text-decoration:none;padding-right:10%;' href='/components/lists/view.php?now=active'>VIEW ACTIVE</a>";}



*/
				echo "</select>";
				echo "</form>";				
			echo "</div>";	
			echo "<div style='width:33.3%;float:left;'>";							

				//if($_SESSION['list_view_'.$_SESSION['primary_folder'].'_'.$_SESSION['secondary_folder']] != 'deleted' AND $_SESSION['list_view_'.$_SESSION['primary_folder'].'_'.$_SESSION['secondary_folder']] != 'inactive'){			
					echo "<a class='login-submit' href='/components/items/add_new.php'>";
				//}
					
				//if($_SESSION['list_view_'.$_SESSION['primary_folder'].'_'.$_SESSION['secondary_folder']] != 'deleted' AND $_SESSION['list_view_'.$_SESSION['primary_folder'].'_'.$_SESSION['secondary_folder']] != 'inactive'){								
					echo $button_copy."</a>";
				//}
			echo "</div>";	
			
			//just limiting our requirements for review right now	as at the 20/5/20 keeping it simple stupid		
			//i think the reality here is that it's far from critical to launch with today - it's really only required lets say three month into any engagement with your clients - when you have set it up for them. 
			//let's keep it simple 
			/*
			if($_SESSION['tertiary_folder'] != 'item'){
				if($primary == 'business'){$show_review_now = 'yes';}
				if($primary == 'network'){$show_review_now = 'yes';}
				if($primary == 'biz_dev'){$show_review_now = 'yes';}
				if($primary == 'sales'){$show_review_now = 'yes';}
				//nothing for marketing just yet
				if($primary == 'management' && $secondary == 'clients'){$show_review_now = 'yes';}
			}
			if($show_review_now == 'yes'){			
				echo "<div class='login-submit' style='width:33.3%; float:left;background-color: orange;height:24px;'>";
					echo "run update";
				echo "</div>";			
			}
			else{*/
				echo "<div style='width:33.3%; float:left;background-color: transparent;height:24px;'>";
					echo "&nbsp;";
				echo "</div>";					
			//}


		echo "</div>";
	}
	
	
	

require $_SERVER['DOCUMENT_ROOT']."/components/notifications_and_alerts/find_item_ids_in_this_folder_with_outstanding_alerts.php";
//var_dump($item_ids_with_active_alerts);
	//exit();


	$displaying_active_issue = 0;
	$top_of_list = 'yes';
	
	//echo $sql_for_display;

	while($row = mysqli_fetch_array($result_for_display, MYSQLI_ASSOC)){
	$displaying_active_issue ++;
		echo "<div class='standard_box'";
		//echo $row['item_id'];
		if(in_array($row['item_id'], $item_ids_with_active_alerts)){$color = 'orange'; $contrast_color = 'yellow';}
		else{
			if($row['deleted'] == 'yes'){$color = '#858181'; $contrast_color = '#c2c2c2';}
			else{$color = $row['background_color']; $contrast_color = $row['contrast_color'];}
		
		}
	
		
		echo " style='background-image: linear-gradient(".$row['degrees']."deg, ".$color.", ".$contrast_color.");'>";
		
			echo "<div class='bottom-left'>";					
			echo"</div>";
			
			echo "<div class='top-left'>";
			echo "</div>";	
			
			echo "<div class='centered' style='color:".$text[$color_combo]."'>";
				require $_SERVER['DOCUMENT_ROOT']."/components/layouts/box/item_title_display.php";						
			echo "</div>";			
		if($_SESSION['primary_folder'] != 'content'){ 		
			echo "<div class='top-right'>";
				if($notifications == 'no'){ 
					if($top_of_list != 'yes'){
					echo "<a class='corner-link' href='/components/lists/slide_item.php?item_id=".$row['item_id']."&direction=up'>Move up ";
						echo"</a>";
					}
					else{$top_of_list = 'no';}
				}
			echo "</div>";

			echo "<div class='bottom-right'>";
				if($notifications == 'no'){ 
					if($number_of_results_to_display  != $displaying_active_issue){
						echo "<a class='corner-link' href='/components/lists/slide_item.php?item_id=".$row['item_id']."&direction=down'>Move down";								
					echo "</a>";}
				}				
			echo "</div>";
}
		echo "</div>";
	if($_SESSION['primary_folder'] != 'content'){ 
		echo "<div class='view_full ";
			if(in_array($row['item_id'], $item_ids_with_active_alerts)){echo ' alert ';}
			if($notifications == 'no'){ 		
				echo "' onclick= location.href='/".$_SESSION['primary_folder']."/".$_SESSION['secondary_folder'];
				if($_SESSION['tertiary_folder'] != ''){echo "/".$_SESSION['tertiary_folder'];}
				echo "/item/display.php?item_id=".$row['item_id']."'>";	
				echo "VIEW FULL";
			}
			if($notifications == 'yes'){ 		
				echo "' onclick= location.href='".$row['link_to']."'>";	
				echo "GO TO IT >>>";
			}		
			
		echo "</div>";
	}
	
	echo "<div style='height:40px'></div>";
	

}
echo "</div>";
	echo "<div style='height:40px'></div>";
	
	
/*
echo $_SESSION['primary_folder'];
echo $_SESSION['secondary_folder'];

exit();*/

?>