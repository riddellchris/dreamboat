<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
		
//		echo $_GET['item_id'];
//		exit();
		
		
		
		
if($_GET['primary_folder'] != 'components'){				$_SESSION['editing_title_of_primary_folder'] 	=	$_GET['primary_folder'];} 	else{$_GET['primary_folder'] 	= $_SESSION['editing_title_of_primary_folder'];}
if($_GET['secondary_folder'] != 'items'){					$_SESSION['editing_title_of_secondary_folder'] 	=	$_GET['secondary_folder'];}	else{$_GET['secondary_folder']	= $_SESSION['editing_title_of_secondary_folder'];}
if($_GET['item_id'] != 'components/items/edit_title.php'	      ){$_SESSION['editing_title_of_item_id'] 		=	$_GET['item_id'];}	else{$_GET['item_id']	= $_SESSION['editing_title_of_item_id'];}


//echo $_SESSION['editing_title_of_primary_folder'];
//echo $_SESSION['editing_title_of_secondary_folder'];
//echo $_GET['item_id'];

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/folder_to_database_relationships.php";
	
	 $sql = "SELECT * FROM ".$database." WHERE item_id = '".$_SESSION['editing_title_of_item_id'] ."' AND user_id = '".$_SESSION['viewing_client_id']."'";
//exit();
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$_SESSION['title_of_item_actually_being_edited'] = $row['title'];
	
	
	
	
	

if($_SESSION['editing_title_of_primary_folder'] == 'profile'){
	if($_SESSION['editing_title_of_secondary_folder'] == 'progress'){		$_SESSION['editing_type_of_item_for_display'] = 'progress';}
}
if($_SESSION['editing_title_of_primary_folder'] == 'business'){
	if($_SESSION['editing_title_of_secondary_folder'] == 'services'){		$_SESSION['editing_type_of_item_for_display'] = 'service';}
	if($_SESSION['editing_title_of_secondary_folder'] == 'products'){		$_SESSION['editing_type_of_item_for_display'] = 'product';}
	
}
if($_SESSION['editing_title_of_primary_folder'] == 'network'){
	if($_SESSION['editing_title_of_secondary_folder'] == 'people'){			$_SESSION['editing_type_of_item_for_display'] = 'person';}
	if($_SESSION['editing_title_of_secondary_folder'] == 'businesses'){		$_SESSION['editing_type_of_item_for_display'] = 'business';}
	if($_SESSION['editing_title_of_secondary_folder'] == 'groups'){			$_SESSION['editing_type_of_item_for_display'] = 'community/group/organisation';}	
}
if($_SESSION['editing_title_of_primary_folder'] == 'biz_dev'){
	if($_SESSION['editing_title_of_secondary_folder'] == 'events'){			$_SESSION['editing_type_of_item_for_display'] = 'event';}
	if($_SESSION['editing_title_of_secondary_folder'] == 'one_to_ones'){		$_SESSION['editing_type_of_item_for_display'] = 'one to one';}
	if($_SESSION['editing_title_of_secondary_folder'] == 'referrers'){		$_SESSION['editing_type_of_item_for_display'] = 'referrer';}		
}
if($_SESSION['editing_title_of_primary_folder'] == 'sales'){
	if($_SESSION['editing_title_of_secondary_folder'] == 'new_potentials'){		$_SESSION['editing_type_of_item_for_display'] = 'inital sale';}
	if($_SESSION['editing_title_of_secondary_folder'] == 'potential_upsells'){	$_SESSION['editing_type_of_item_for_display'] = 'potential upsell';}
	if($_SESSION['editing_title_of_secondary_folder'] == 'recurring_sale'){		$_SESSION['editing_type_of_item_for_display'] = 'recurring sale';}	
	if($_SESSION['editing_title_of_secondary_folder'] == 'sale'){			$_SESSION['editing_type_of_item_for_display'] = 'sale';}	
}
if($_SESSION['editing_title_of_primary_folder'] == 'marketing'){
	if($_SESSION['editing_title_of_secondary_folder'] == 'target_markets'){		$_SESSION['editing_type_of_item_for_display'] = 'target market';}
	if($_SESSION['editing_title_of_secondary_folder'] == 'channels'){		$_SESSION['editing_type_of_item_for_display'] = 'channel';}
	if($_SESSION['editing_title_of_secondary_folder'] == 'angles'){			$_SESSION['editing_type_of_item_for_display'] = 'marketing angle';}
	if($_SESSION['editing_title_of_secondary_folder'] == 'promotions'){		$_SESSION['editing_type_of_item_for_display'] = 'promotion';}		
}
if($_SESSION['editing_title_of_primary_folder'] == 'management'){
	if($_SESSION['editing_title_of_secondary_folder'] == 'clients'){		$_SESSION['editing_type_of_item_for_display'] = substr($_SESSION['viewing_client_what_clients_are_called'], 0, -1);}
	if($_SESSION['editing_title_of_secondary_folder'] == 'staff'){			$_SESSION['editing_type_of_item_for_display'] = 'staff member';}
	if($_SESSION['editing_title_of_secondary_folder'] == 'systems'){		$_SESSION['editing_type_of_item_for_display'] = 'system';}
	if($_SESSION['editing_title_of_secondary_folder'] == 'assets'){			$_SESSION['editing_type_of_item_for_display'] = 'asset';}	
	if($_SESSION['editing_title_of_secondary_folder'] == 'other'){			$_SESSION['editing_type_of_item_for_display'] = 'management topic';}			
}
if($_SESSION['editing_title_of_primary_folder'] == 'wheelhouse'){
	if($_SESSION['editing_title_of_secondary_folder'] == 'dreams'){			$_SESSION['editing_type_of_item_for_display'] = 'dream';}
	if($_SESSION['editing_title_of_secondary_folder'] == 'goals'){			$_SESSION['editing_type_of_item_for_display'] = 'goal';}
	if($_SESSION['editing_title_of_secondary_folder'] == 'milestones'){		$_SESSION['editing_type_of_item_for_display'] = 'milestone';}
	if($_SESSION['editing_title_of_secondary_folder'] == 'tasks'){			$_SESSION['editing_type_of_item_for_display'] = 'task';}
	if($_SESSION['editing_title_of_secondary_folder'] == 'issues'){			$_SESSION['editing_type_of_item_for_display'] = 'issue';}
}
if($_SESSION['editing_title_of_primary_folder'] == 'improvements'){			$_SESSION['editing_type_of_item_for_display'] = 'improvement';}
if($_SESSION['editing_title_of_primary_folder'] == 'admin'){
//	if($_SESSION['editing_title_of_secondary_folder'] == 'homework'){		$_SESSION['editing_type_of_item_for_display'] = 'homework';}
	if($_SESSION['editing_title_of_secondary_folder'] == 'future_questions'){	$_SESSION['editing_type_of_item_for_display'] = 'future question';}
	if($_SESSION['editing_title_of_secondary_folder'] == 'general_notes'){		$_SESSION['editing_type_of_item_for_display'] = 'general note';}
	
	if($_SESSION['editing_title_of_secondary_folder'] == 'support_requests'){	$_SESSION['editing_type_of_item_for_display'] = 'support requests';}
	if($_SESSION['editing_title_of_secondary_folder'] == 'bugs_to_fix'){		$_SESSION['editing_type_of_item_for_display'] = 'bugs to fix';}
	if($_SESSION['editing_title_of_secondary_folder'] == 'general_maintenance'){	$_SESSION['editing_type_of_item_for_display'] = 'general maintenance';}	
	if($_SESSION['editing_title_of_secondary_folder'] == 'iterative_improvements'){	$_SESSION['editing_type_of_item_for_display'] = 'iterative improvements';}
	if($_SESSION['editing_title_of_secondary_folder'] == 'other_development'){	$_SESSION['editing_type_of_item_for_display'] = 'other development';}
	if($_SESSION['editing_title_of_secondary_folder'] == 'new_features'){		$_SESSION['editing_type_of_item_for_display'] = 'new features';}	
	
	
	
}





/*	OLD STUFF I JUST HAVEN'T THROWN OUT YET
	if($_SESSION['editing_title_of_secondary_folder'] == 'sales'){		$_SESSION['editing_type_of_item_for_display'] = 'sales task';}
	if($_SESSION['editing_title_of_secondary_folder'] == 'marketing'){	$_SESSION['editing_type_of_item_for_display'] = 'bd or marketing activity';}
*/


	
	
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/start_of_page_top_of_centering_divs.php";


echo "<form action='edit_submit.php' method='post'>";
echo "<span class='prompt-font'>Edit the name of this ".$_SESSION['editing_type_of_item_for_display']."?</span>";
$value = $_SESSION['title_of_item_actually_being_edited'];
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/submits/standard.php";
hidden_form_inputs_for_folders_and_items();
echo "</form>";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/end_of_page_bottom_of_centering_divs.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>