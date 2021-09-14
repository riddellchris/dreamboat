<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/folder_to_database_relationships.php";
	
$_SESSION['page_to_return_to'] = $_SESSION['this_page'];	

if($_GET['detail'] == 'phone'			){$_SESSION['updating_crm_field'] = 'phone'; 			$_SESSION['updating_crm_database'] = 'people';	$current_value_column = 'phone';		$text_description = 'phone number';}	
if($_GET['detail'] == 'email'			){$_SESSION['updating_crm_field'] = 'email';			$_SESSION['updating_crm_database'] = 'people';	$current_value_column = 'email';		$text_description = 'email address';}	
if($_GET['detail'] == 'price'			){$_SESSION['updating_crm_field'] = 'price';  			$_SESSION['updating_crm_database'] = 'sales';	$current_value_column = 'price';		$text_description = 'total price';}	
if($_GET['detail'] == 'gross_profit'	){$_SESSION['updating_crm_field'] = 'gross_profit';  	$_SESSION['updating_crm_database'] = 'sales';	$current_value_column = 'gross_profit';	$text_description = 'gross profit';}
if($_GET['detail'] == 'probability'		){$_SESSION['updating_crm_field'] = 'probability';  	$_SESSION['updating_crm_database'] = 'sales';	$current_value_column = 'probability';	$text_description = 'probability of success';}

if($_GET['detail'] == 'api_authentication_type'	){$_SESSION['updating_crm_field'] = 'api_authentication_type';	$_SESSION['updating_crm_database'] = 'systems';	$current_value_column = 'api_authentication_type';		$text_description = 'Auth Type';}	
if($_GET['detail'] == 'api_identifier'			){$_SESSION['updating_crm_field'] = 'api_identifier';  			$_SESSION['updating_crm_database'] = 'systems';	$current_value_column = 'api_identifier';				$text_description = 'API Identifier';}	
if($_GET['detail'] == 'api_code'				){$_SESSION['updating_crm_field'] = 'api_code';  				$_SESSION['updating_crm_database'] = 'systems';	$current_value_column = 'api_code';						$text_description = 'API Key';}
if($_GET['detail'] == 'api_access_point'		){$_SESSION['updating_crm_field'] = 'api_access_point';  		$_SESSION['updating_crm_database'] = 'systems';	$current_value_column = 'api_access_point';				$text_description = 'API Access Point';}



$sql = "SELECT * FROM ".$_SESSION['updating_crm_database']." WHERE item_id = '".mysqli_real_escape_string($conn, $_GET['item_id'])."' AND user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'";
//echo $sql;exit();

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$users_name = $row['title'];

$current_value = $row[$current_value_column];
/*
if($_GET['details'] == 'business'	){
	$sql = "SELECT * FROM businesses WHERE item_id = '".$row['business_id']."'";
	$result = mysqli_query($conn, $sql);
	$row2	= mysqli_fetch_array($result, MYSQLI_ASSOC);
	$business_name = $row2['title'];
}
*/
	

	
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/start_of_page_top_of_centering_divs.php";

echo "<form action='add_detail_submit.php' method='post'>";

//this should techinically use a check to see if the s in included or just the apostrophe... not something for today
echo "<span class='prompt-font'>What is ".$users_name."&#39s ".$text_description."?</span>";
$value = $current_value;

require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/submits/standard.php";
hidden_form_inputs_for_folders_and_items();
echo "</form>";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/end_of_page_bottom_of_centering_divs.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>