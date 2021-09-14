<?php
if(!isset($_SESSION)){session_start();}
//var_dump($_POST);
//exit();

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

  $sql = "UPDATE user_account_details
	SET	
		first_name 				= '".mysqli_real_escape_string($conn, $_POST['first_name'])."',	
		second_name 				= '".mysqli_real_escape_string($conn, $_POST['second_name'])."',
		phone_number 				= '".mysqli_real_escape_string($conn, $_POST['phone_number'])."',		
		email 					= '".mysqli_real_escape_string($conn, $_POST['email'])."',		
		role 					= '".mysqli_real_escape_string($conn, $_POST['role'])."',						
		type_of_person				= '".mysqli_real_escape_string($conn, $_POST['type_of_person'])."',
		own_yes_no				= '".mysqli_real_escape_string($conn, $_POST['own_yes_no'])."',			
		network_access_yes_no			= '".mysqli_real_escape_string($conn, $_POST['network_access_yes_no'])."',				
		work_solo_yes_no			= '".mysqli_real_escape_string($conn, $_POST['work_solo_yes_no'])."',		
		work_in_a_team_yes_no			= '".mysqli_real_escape_string($conn, $_POST['work_in_a_team_yes_no'])."',	
		sales_process_involvement_yes_no	= '".mysqli_real_escape_string($conn, $_POST['sales_process_involvement_yes_no'])."',	
		overall_management_yes_no		= '".mysqli_real_escape_string($conn, $_POST['overall_management_yes_no'])."',	
		financial_management_yes_no		= '".mysqli_real_escape_string($conn, $_POST['financial_management_yes_no'])."',	
		staff_management_yes_no			= '".mysqli_real_escape_string($conn, $_POST['staff_management_yes_no'])."',	
		direction_involvement_yes_no		= '".mysqli_real_escape_string($conn, $_POST['direction_involvement_yes_no'])."',	
		client_engagement_yes_no		= '".mysqli_real_escape_string($conn, $_POST['client_engagement_yes_no'])."',				
		commission_yes_no			= '".mysqli_real_escape_string($conn, $_POST['commission_yes_no'])."'
          WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'";
          
	$_SESSION['viewing_client_first_name'] = $_POST['first_name'];
	$_SESSION['viewing_client_last_name'] = $_POST['second_name'];	


$result = mysqli_query($conn, $sql);

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT * FROM user_account_details WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
						
require $_SERVER['DOCUMENT_ROOT']."/account/variables/initial_setup.php";


header("Location: ".$_SESSION['this_page']);
exit();
?>