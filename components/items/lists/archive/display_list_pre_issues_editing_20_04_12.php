<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";

if($_SESSION['primary_folder'] == 'notifications'){$notifications = 'yes';}else{$notifications = 'no';}


if(	$_SESSION['secondary_folder'] == 'future_questions' OR 
	$_SESSION['secondary_folder'] == 'general_notes' OR
	$_SESSION['secondary_folder'] == 'homework'){
	echo "<div style='width:100%; text-align:center;'>";	
		echo "<span class='prompt-font' style='color:red'>NOT shared with clients</span>";
	echo "</div>";
}




echo "<div style='width:100%; text-align:center;'>";

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/folder_to_database_relationships.php";


if($notifications == 'no'){ 

	if(	$_SESSION['list_view_'.$_SESSION['primary_folder'].'_'.$_SESSION['secondary_folder']] == 'deleted' OR
		$_SESSION['list_view_'.$_SESSION['primary_folder'].'_'.$_SESSION['secondary_folder']] == 'inactive'){
			if(	$_SESSION['list_view_'.$_SESSION['primary_folder'].'_'.$_SESSION['secondary_folder']] == 'deleted'){
		 	$sql_for_display = "SELECT * FROM ".$database." WHERE user_id = '".$_SESSION['viewing_client_id']."' AND deleted = 'yes'";
		 	if($_SESSION['primary_folder'] == 'wheelhouse' && $_SESSION['secondary_folder'] != 'issues' ){$sql_for_display .= " AND category = '".$_SESSION['secondary_folder']."' ";}
		 	if($_SESSION['primary_folder'] == 'improvements'){$sql_for_display .= " AND mode = '".$_SESSION['secondary_folder']."' ";}		 		
		 	if($_SESSION['secondary_folder'] == 'clients'){$sql_for_display .= " AND client = 'yes' ";}		 	
		 	if($_SESSION['secondary_folder'] == 'staff'){$sql_for_display .= " AND staff = 'yes' ";}	
		 	if($_SESSION['secondary_folder'] == 'referrers'){$sql_for_display .= " AND referrer = 'yes' ";}
	 	if($_SESSION['secondary_folder'] == 'products'){$sql_for_display .= " AND product = 'yes' ";}
	 	if($_SESSION['secondary_folder'] == 'services'){$sql_for_display .= " AND service = 'yes' ";}
	 	if($_SESSION['secondary_folder'] == 'businesses'){$sql_for_display .= " AND business = 'yes' ";}	 	
	 	if($_SESSION['secondary_folder'] == 'groups'){$sql_for_display .= " AND non_biz_group = 'yes' ";}	 	
	 	
			}
			if(	$_SESSION['list_view_'.$_SESSION['primary_folder'].'_'.$_SESSION['secondary_folder']] == 'inactive'){	
		 	$sql_for_display = "SELECT * FROM ".$database." WHERE user_id = '".$_SESSION['viewing_client_id']."' AND status = 'resolved'";
		 	if($_SESSION['primary_folder'] == 'wheelhouse' && $_SESSION['secondary_folder'] != 'issues' ){$sql_for_display .= " AND category = '".$_SESSION['secondary_folder']."' ";}
		 	if($_SESSION['primary_folder'] == 'improvements'){$sql_for_display .= " AND mode = '".$_SESSION['secondary_folder']."' ";}
		 	if($_SESSION['secondary_folder'] == 'clients'){$sql_for_display .= " AND client = 'yes' ";}		 	
		 	if($_SESSION['secondary_folder'] == 'staff'){$sql_for_display .= " AND staff = 'yes' ";}
		 	if($_SESSION['secondary_folder'] == 'referrers'){$sql_for_display .= " AND referrer = 'yes' ";}	 			 			
		 	if($_SESSION['secondary_folder'] == 'products'){$sql_for_display .= " AND product = 'yes' ";}
		 	if($_SESSION['secondary_folder'] == 'services'){$sql_for_display .= " AND service = 'yes' ";}
	 	if($_SESSION['secondary_folder'] == 'businesses'){$sql_for_display .= " AND business = 'yes' ";}	 	
	 	if($_SESSION['secondary_folder'] == 'groups'){$sql_for_display .= " AND non_biz_group = 'yes' ";}
			}
		}
	else{
		$sql_for_display = "SELECT * FROM ".$database." WHERE deleted = 'no' AND status = 'active' AND user_id = '".$_SESSION['viewing_client_id']."'";
		if($_SESSION['primary_folder'] == 'wheelhouse' && $_SESSION['secondary_folder'] != 'issues' ){$sql_for_display .= " AND category = '".$_SESSION['secondary_folder']."' ";}
	 	if($_SESSION['primary_folder'] == 'improvements'){$sql_for_display .= " AND mode = '".$_SESSION['secondary_folder']."' ";}			
	 	if($_SESSION['secondary_folder'] == 'clients'){$sql_for_display .= " AND client = 'yes' ";}		 	
	 	if($_SESSION['secondary_folder'] == 'staff'){$sql_for_display .= " AND staff = 'yes' ";}
		if($_SESSION['secondary_folder'] == 'referrers'){$sql_for_display .= " AND referrer = 'yes' ";}	
	 	if($_SESSION['secondary_folder'] == 'products'){$sql_for_display .= " AND product = 'yes' ";}
	 	if($_SESSION['secondary_folder'] == 'services'){$sql_for_display .= " AND service = 'yes' ";}
	 	if($_SESSION['secondary_folder'] == 'businesses'){$sql_for_display .= " AND business = 'yes' ";}	 	
	 	if($_SESSION['secondary_folder'] == 'groups'){$sql_for_display .= " AND non_biz_group = 'yes' ";}
		$sql_for_display .= "ORDER BY rank ASC;";
		}
}
else{

$database = 'notifications_and_alerts';
	$sql_for_display = "SELECT * FROM ".$database." WHERE for_user_id = '".$_SESSION['viewing_client_id']."' ORDER BY notification_id DESC;";

}
	
	
//echo $sql_for_display;
//exit();
	
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/box/box.php";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result_for_display = mysqli_query($conn, $sql_for_display);
$number_of_results_to_display = mysqli_num_rows($result_for_display);

	if($notifications == 'no'){ 

		echo "<div style='width:100%;padding:20px 0px;text-align:center;'>";
			if($_SESSION['list_view_'.$_SESSION['primary_folder'].'_'.$_SESSION['secondary_folder']] != 'deleted'){
				echo "<a style='float:left;color:grey;font-family:helvetica;text-decoration:none;padding-left:10%;color:#a3b6ff;' href='/components/lists/view.php?now=deleted'>DELETED</a>";
				}
			else{echo  "<a style='float:left;color: orange;font-family:helvetica;text-decoration:none;padding-left:10%;' href='/components/lists/view.php?now=active'>VIEW ACTIVE</a>";}
				
			if($_SESSION['list_view_'.$_SESSION['primary_folder'].'_'.$_SESSION['secondary_folder']] != 'deleted' AND $_SESSION['list_view_'.$_SESSION['primary_folder'].'_'.$_SESSION['secondary_folder']] != 'inactive'){			
				echo "<a class='login-submit' href='/components/items/add_new.php'>";}
				
				
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
					if($_SESSION['secondary_folder'] == 'events'){	 	$_SESSION['adding_new'] = 'events';		$achieved_name = 'past events';		$button_copy =  "ADD An event";}
					if($_SESSION['secondary_folder'] == 'one_to_ones'){	$_SESSION['adding_new'] = 'one_to_ones';	$achieved_name = 'past one to ones';	$button_copy =  "ADD A one to one";}
					if($_SESSION['secondary_folder'] == 'referrers'){	$_SESSION['adding_new'] = 'referrers';		$achieved_name = 'old referrers';	$button_copy =  "ADD A referrer";}
				 }								
				if($_SESSION['primary_folder'] == 'sales'){
					if($_SESSION['secondary_folder'] == 'new_potentials'){	$_SESSION['adding_new'] = 'prospect';		$achieved_name = 'dead prospect';	$button_copy =  "ADD A potential inital sale";}	
					if($_SESSION['secondary_folder'] == 'recurring_sales'){	$_SESSION['adding_new'] = 'recurring_sale';	$achieved_name = 'ended';		$button_copy =  "ADD A recurring sale";}						
					if($_SESSION['secondary_folder'] == 'potential_upsells'){$_SESSION['adding_new'] = 'potential_upsells';	$achieved_name = 'dead prospect';	$button_copy =  "ADD A potential upsell";}		
					if($_SESSION['secondary_folder'] == 'all'	      ){$_SESSION['adding_new'] = 'sale';		$achieved_name = 'archived sales';	$button_copy =  "ADD A sale";}												
				}
				if($_SESSION['primary_folder'] == 'marketing'){	
					if($_SESSION['secondary_folder'] == 'target_markets'){	$_SESSION['adding_new'] = 'target_market';	$achieved_name = 'redundant';		$button_copy =  "ADD A target market";}						
					if($_SESSION['secondary_folder'] == 'promotions'){	$_SESSION['adding_new'] = 'promotion';		$achieved_name = 'achieved';		$button_copy =  "ADD A promotion";}
					if($_SESSION['secondary_folder'] == 'channels'){	$_SESSION['adding_new'] = 'channels';		$achieved_name = 'redundant';		$button_copy =  "ADD A channel";}
					if($_SESSION['secondary_folder'] == 'angles'){		$_SESSION['adding_new'] = 'marketing_angle';	$achieved_name = 'redundant';		$button_copy =  "ADD A marketing angle";}									
				}							
				if($_SESSION['primary_folder'] == 'management'){	
					if($_SESSION['secondary_folder'] == 'assets'){		$_SESSION['adding_new'] = 'assets';		$achieved_name = 'old assets';		$button_copy =  "ADD An asset";}
					if($_SESSION['secondary_folder'] == 'other'){		$_SESSION['adding_new'] = 'other_management';	$achieved_name = 'old areas';		$button_copy =  "ADD other management areas";}							
					if($_SESSION['secondary_folder'] == 'staff'){		$_SESSION['adding_new'] = 'staff';		$achieved_name = 'old staff';		$button_copy =  "ADD A STAFF MEMBER";}
					if($_SESSION['secondary_folder'] == 'systems'){		$_SESSION['adding_new'] = 'systems';		$achieved_name = 'old systems';		$button_copy =  "ADD A system";}	
					if($_SESSION['secondary_folder'] == 'clients'){		$_SESSION['adding_new'] = 'clients'; 		$achieved_name = 'past '.$_SESSION['viewing_client_what_clients_are_called'];	
					$button_copy =  "ADD ".$_SESSION['viewing_client_what_clients_are_called'];}									
				}		
				if($_SESSION['primary_folder'] == 'wheelhouse'){
					if($_SESSION['secondary_folder'] == 'dreams'){		$_SESSION['adding_new'] = 'dreams';		$achieved_name = 'achieved';		$button_copy =  "add a dream";}
					if($_SESSION['secondary_folder'] == 'goals'){		$_SESSION['adding_new'] = 'goals';		$achieved_name = 'achieved';		$button_copy =  "add a goal";}
					if($_SESSION['secondary_folder'] == 'milestones'){	$_SESSION['adding_new'] = 'milestones';		$achieved_name = 'achieved';		$button_copy =  "add a milestone";}
					if($_SESSION['secondary_folder'] == 'tasks'){		$_SESSION['adding_new'] = 'tasks';		$achieved_name = 'achieved';		$button_copy =  "add a task";}	
					if($_SESSION['secondary_folder'] == 'issues'){		$_SESSION['adding_new'] = 'issues';		$achieved_name = 'historical';		$button_copy =  "add an issue";}
				}
				if($_SESSION['primary_folder'] == 'improvements'){
					if($_SESSION['secondary_folder'] == 'planned'){		$_SESSION['adding_new'] = 'improvements';	$achieved_name = 'archived';		$button_copy =  "add a planned improvement";}
					if($_SESSION['secondary_folder'] == 'underway'){	$_SESSION['adding_new'] = 'improvements';	$achieved_name = 'archived';		$button_copy =  "add an underway improvement";}
					if($_SESSION['secondary_folder'] == 'completed'){	$_SESSION['adding_new'] = 'improvements';	$achieved_name = 'archived';		$button_copy =  "add a completed improvement";}		
				}	
				if($_SESSION['primary_folder'] == 'admin'){
					if($_SESSION['secondary_folder'] == 'homework'){	$_SESSION['adding_new'] = 'homework';		$achieved_name = 'completed';		$button_copy = "add some homework";}
					if($_SESSION['secondary_folder'] == 'future_questions'){$_SESSION['adding_new'] = 'future_questions';	$achieved_name = 'irrelevant';		$button_copy = "add a question";}								
					if($_SESSION['secondary_folder'] == 'general_notes'){	$_SESSION['adding_new'] = 'general_notes';	$achieved_name = 'dated';		$button_copy = "add a general note";}	
				}

					
								
			if($_SESSION['list_view_'.$_SESSION['primary_folder'].'_'.$_SESSION['secondary_folder']] != 'deleted' AND $_SESSION['list_view_'.$_SESSION['primary_folder'].'_'.$_SESSION['secondary_folder']] != 'inactive'){								
				echo $button_copy."</a>";}
			
			
			if($_SESSION['list_view_'.$_SESSION['primary_folder'].'_'.$_SESSION['secondary_folder']] != 'inactive'){
				echo "<a style='float:right;color:grey;font-family:helvetica;text-decoration:none;text-transform:uppercase;padding-right:10%;color:#a3b6ff;' href='/components/lists/view.php?now=inactive'>".$achieved_name."</a>";
				}
			else{echo  "<a style='float:right;color: orange;font-family:helvetica;text-decoration:none;padding-right:10%;' href='/components/lists/view.php?now=active'>VIEW ACTIVE</a>";}
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

		echo "</div>";

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
	echo "<div style='height:40px'></div>";
	}


echo "</div>";
	echo "<div style='height:40px'></div>";

?>