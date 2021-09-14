<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/sub_menus/styles.php";
require $_SERVER['DOCUMENT_ROOT']."/components/sub_menus/defaults.php";

if(check_primary_folder('profile')){
	$page_name = 'profile';
	$number_of_menu_options = 4;
	$option_1 = 'business';
	$option_2 = 'products';
	$option_3 = 'services';
	$option_4 = 'customer_journey';		
}
if(check_primary_folder('network')){
	$page_name = 'network';
	$number_of_menu_options = 3;
	$option_1 = 'groups';
	$option_2 = 'businesses';
	$option_3 = 'people';
}
if(check_primary_folder('biz_dev')){
	$page_name = 'biz_dev';
	$number_of_menu_options = 3;
	$option_1 = 'events';
	$option_2 = 'one_to_ones';
	$option_3 = 'referrers';
}
if(check_primary_folder('sales')){
	$page_name = 'sales';
	$number_of_menu_options = 3;
	$option_1 = 'products';
	$option_2 = 'prospects';
	$option_3 = 'clients';
}

if(check_primary_folder('marketing')){
	$page_name = 'marketing';
	$number_of_menu_options = 4;
	$option_1 = 'target_market';
	$option_2 = 'positioning';
	$option_3 = 'channels';
	$option_4 = 'promotions';
}
if(check_primary_folder('results')){
	$page_name = 'results';

	$sql="SELECT commission_yes_no FROM user_account_details WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'";
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
	if($row['commission_yes_no']== 'yes'){
		$number_of_menu_options = 4;
		$option_1 = 'sales';
		$option_2 = 'revenue';
		$option_3 = 'commission';
		$option_4 = 'income';
	}
	if($row['commission_yes_no']== 'no'){
		$number_of_menu_options = 3;
		$option_1 = 'sales';
		$option_2 = 'revenue';
		$option_3 = 'income';
	}



}
if(check_primary_folder('admin')){
	$page_name = 'admin';
	$number_of_menu_options = 6;
	$option_1 = 'list';
	$option_2 = 'progress';
	$option_3 = 'issues';
	$option_4 = 'improvements';	
	$option_5 = 'homework';
	$option_6 = 'future_questions';	
	
	if(check_secondary_folder('improvements')){
		$sub_sub_page_name = 'wellbeing';
		$sub_sub_number_of_menu_options = 3;
		$sub_sub_option_1 = 'completed';
		$sub_sub_option_2 = 'underway';
		$sub_sub_option_3 = 'planned';
	}
}
if(check_primary_folder('notifications')){
	$page_name = 'notifications';
	$number_of_menu_options = 2;
	$option_1 = 'alerts';
	$option_2 = 'achievements';
}

if(check_primary_folder('legal')){
$page_name = 'legal';
$number_of_menu_options = 2;
$option_1 = 'privacy_policy';
$option_2 = 'terms_and_conditions';
}

require $_SERVER['DOCUMENT_ROOT']."/components/sub_menus/display.php";
require $_SERVER['DOCUMENT_ROOT']."/components/sub_menus/sub_sub_menu/display.php";
?>