<?php
if(!isset($_SESSION)){session_start();}


if($_SESSION['dreamboat_crew'] == 'yes'){
//display of these is below as part of an array
require $_SERVER['DOCUMENT_ROOT']."/components/optimisation_engine/labels/find_currently_applied.php";
}


require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/folder_to_database_relationships.php";
$cleaned_item_id = mysqli_real_escape_string($conn, $_GET['item_id']);
$sql = "SELECT * FROM ".$database." WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' AND item_id = '".$cleaned_item_id."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);




function is_person_based_item(){
	if(	check_secondary_folder('people') 	OR 
		check_secondary_folder('staff') 	OR 	
		check_secondary_folder('clients') 	OR 	
		check_secondary_folder('referrers')){
		return true;
		}
	else{return false;}
}





function item_link_creation($database, $code, $make_on_off, $copy){
	$link = "<a class='corner-link' href='/components/items/move.php?db=".$database."&id=".$_GET['item_id']."&to=".$code."'>";
	if($make_on_off == 'on'){$link .= "make ";}
	$link .= $copy."</a>";
	
	return $link;	
}


//BOTTOM LEFT
if(is_person_based_item()){	if($row['category'] == 'staff'){$people_code = "non_staff"; 	$people_copy = "non staff";}
							if($row['category'] != 'staff'){$people_code = "staff";			$people_copy = "staff";}}
$code = ''; $copy = '';
if(check_folders_two_deep('business',	'services'		)){	$code = 'products';				$copy = 'product';}
if(check_folders_two_deep('network',	'groups'		)){	$code = '';						$copy = '';}
if(check_folders_two_deep('network',	'businesses'	)){	$code = 'groups'; 				$copy = 'group';}	
if(check_folders_two_deep('network',	'people'		)){	$code = $people_code; 			$copy = $people_copy;}	
if(check_folders_two_deep('biz_dev',	'referrers'		)){ $code = $people_code; 			$copy = $people_copy;}	
if(check_folders_two_deep('management',	'staff'			)){	$code = $people_code; 			$copy = $people_copy;}	
if(check_folders_two_deep('management',	'clients'		)){ $code = $people_code; 			$copy = $people_copy;}		
if(check_folders_two_deep('wheelhouse',	'goals'			)){	$code = 'dreams'; 				$copy = 'dream';}
if(check_folders_two_deep('wheelhouse',	'milestones'	)){	$code = 'goals'; 				$copy = 'goal';}
if(check_folders_two_deep('wheelhouse',	'tasks'			)){	$code = 'milestones'; 			$copy = 'milestone';}
if(check_folders_two_deep('wheelhouse',	'homework'		)){	$code = 'tasks'; 				$copy = 'task';}				
if(check_primary_folder('activities'					)){	$code = ''; 					$copy = '';}								
if(check_folders_two_deep('issues',	'critical'			)){	$code = 'important'; 			$copy = 'important';}
if(check_folders_two_deep('issues',	'important'			)){	$code = 'other'; 				$copy = 'other';}											
if(check_folders_two_deep('sales',	'new_potentials'	)){	$code = 'potential_upsells'; 	$copy = 'potential upsell';}		
if(check_folders_two_deep('sales',	'potential_upsells'	)){	$code = 'recurring_sales';	 	$copy = 'recurring sale';}
if(check_folders_two_deep('upgrades',	'underway'		)){	$code = 'completed';			$copy = 'completed';}
if(check_folders_two_deep('upgrades',	'planned'		)){	$code = 'underway';				$copy = 'underway';}
if($copy != ''){$bottom_left = item_link_creation($database, $code, 'on', $copy);}
else{$bottom_left = 'empty';}



//BOTTOM RIGHT
if(is_person_based_item()){	if($row['referrer'] == 'yes'){	$people_code = "non_referrer";	$people_copy = "non referrer";}
							if($row['referrer'] != 'yes'){	$people_code = "referrer";		$people_copy = "referrer";}}
$code = ''; $copy = '';
if(check_folders_two_deep('business',	'products'		)){	$code = 'services';				$copy = 'service';}
if(check_folders_two_deep('network',	'businesses'	)){	$code = ''; 					$copy = '';}
if(check_folders_two_deep('network',	'groups'		)){	$code = 'businesses';			$copy = 'business';}
if(check_folders_two_deep('network',	'people'		)){	$code = $people_code; 			$copy = $people_copy;}	
if(check_folders_two_deep('biz_dev',	'referrers'		)){ $code = $people_code; 			$copy = $people_copy;}		
if(check_folders_two_deep('management',	'staff'			)){	$code = $people_code; 			$copy = $people_copy;}		
if(check_folders_two_deep('management',	'clients'		)){ $code = $people_code; 			$copy = $people_copy;}		
if(check_folders_two_deep('wheelhouse',	'dreams'		)){	$code = 'goals';				$copy = 'goal';}
if(check_folders_two_deep('wheelhouse',	'goals'			)){	$code = 'milestones';			$copy = 'milestone';}
if(check_folders_two_deep('wheelhouse',	'milestones'	)){	$code = 'tasks';				$copy = 'task';}
if(check_folders_two_deep('wheelhouse',	'tasks'			)){	$code = 'homework';				$copy = 'homework';}	
if(check_primary_folder('activities'					)){	$code = ''; 					$copy = '';}									
if(check_folders_two_deep('issues',	'important'			)){	$code = 'critical';				$copy = 'critical';}
if(check_folders_two_deep('issues',	'other'				)){	$code = 'important';			$copy = 'important';}				
if(check_folders_two_deep('sales',	'potential_upsells'	)){	$code = 'new_potentials';		$copy = 'new potential';}
if(check_folders_two_deep('sales',	'recurring_sales'	)){	$code = 'potential_upsells';	$copy = 'potential upsell';}	
if(check_folders_two_deep('upgrades',	'completed'		)){	$code = 'underway';				$copy = 'underway';}
if(check_folders_two_deep('upgrades',	'underway'		)){	$code = 'planned';				$copy = 'planned';}


if($copy != ''){$bottom_right = item_link_creation($database, $code, 'on', $copy);}
else{$bottom_right = 'empty';}

//TOP LEFT
if($row['deleted'] != 'yes'){	$code = "deleted"; 	$copy = "delete";}
if($row['deleted'] == 'yes'){	$code = "undeleted";	$copy = "undelete";}
$top_left = item_link_creation($database, $code, 'off', $copy);


//TOP RIGHT
if($row['status'] != 'resolved'){	$code = "resolved"; 	$copy = 'archive';}
if($row['status'] == 'resolved'){	$code = "active";	$copy = 'unarchive';}								
$top_right = item_link_creation($database, $code, 'off', $copy);

//BOTTOM MIDDLE
if(is_person_based_item()){	
	$singular = substr($_SESSION['viewing_client_what_clients_are_called'], 0, -1);
	if($row['category'] == 'client'){	$people_code = "non_client";	$people_copy = "non ".$singular;}
	if($row['category'] != 'client'){	$people_code = "clients";		$people_copy = $singular;}
	$code = $people_code; $copy = $people_copy;
	$bottom_middle = item_link_creation($database, $code, 'on', $copy);
}
else{$bottom_middle = '';}		
	

require $_SERVER['DOCUMENT_ROOT']."/components/optimisation_engine/labels/display.php";

echo "<div class='standard_box' style='  ";
	if($row['deleted'] == 'yes'){	$row['background_color'] = '#858181'; $row['contrast_color'] ='#c2c2c2';}
	echo " background-image: linear-gradient(".$row['degrees']."deg, ".$row['background_color'].", ".$row['contrast_color'].");";
	echo "'>";

	if($bottom_left != 'empty'){echo "<div class='bottom-left'>".$bottom_left."</div>";}
	echo "<div class='top-left'>".$top_left."</div>";	
	echo "<div class='top-right'>".$top_right."</div>";
	if($bottom_right != 'empty'){echo "<div class='bottom-right'>".$bottom_right."</div>";}
	echo "<div class='centered' style='color:".$text[$color_combo]."'>";
		//this also includes homework stars if you're looking for them
		require $_SERVER['DOCUMENT_ROOT']."/components/layouts/pieces/box/item_title_display.php";
	echo "</div>";
	if($bottom_middle != '' && $_GET['secondary_folder'] != 'clients'){
	echo "<div class='bottom-middle'";
		echo "style='text-decoration:none;";
		if($code != 'client'){echo "left:41%;";}else{echo "left:43%;";}//just to try and fudge centeredness as much as possible
		echo "'>".$bottom_middle."</div>";	
	}
	echo $row['prompt'];
echo "</div>";	


if(	$_SESSION['dreamboat_crew'] == 'yes' 	&& 
	isset($_GET['critical_nodes']) 			&&
	isset($_GET['issues_on_or_off']) 		&&
	isset($_GET['edges_selected'])){

	//	require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/points/pilot_based_positioning.php";

	}









if(	check_primary_folder('issues') 		OR 
	check_primary_folder('activities')	OR 
	check_primary_folder('upgrades')){	require $_SERVER['DOCUMENT_ROOT']."/components/optimisation_engine/numerical_planning/display.php";}
	
if(	is_person_based_item() 		OR 
	check_primary_folder('sales') OR
	check_folders_two_deep('management', 'systems')
	
	){		require $_SERVER['DOCUMENT_ROOT']."/components/layouts/pieces/crm_elements/display.php";}



echo "<div style='width:100%; padding: 3px 0px;color:#fff;display:block;float: left;min-height: 40px;'>";
	require $_SERVER['DOCUMENT_ROOT']."/components/discussion/display.php";
echo "</div>";