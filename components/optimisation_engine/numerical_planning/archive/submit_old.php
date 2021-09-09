<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/discussion/safely_replacing_apostrophies_function.php";	







//if(isset($_POST['time_requirement']) && !empty($_POST['time_requirement'])){
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	


//CR 15.06.2020 There is still some problem here with this folder showing up as unknown here when it really should just show up as unset
if($_POST['quaternary_folder'] == 'item'){$quaternary_folder = 'item';}
else{$quaternary_folder = '';}



	
	$sql = "INSERT INTO resource_requirements (
					primary_folder, 		     
					secondary_folder, 
					tertiary_folder, 
					quaternary_folder, 					
					related_id,						    			 
					user_id, 			     
					resource_description) 
		VALUES(			
					'".mysqli_real_escape_string($conn, $_POST['primary_folder'])."',
					'".mysqli_real_escape_string($conn, $_POST['secondary_folder'])."',
					'".mysqli_real_escape_string($conn, $_POST['tertiary_folder'])."',
					'".mysqli_real_escape_string($conn, $quaternary_folder)."',					
					'".mysqli_real_escape_string($conn, $_POST['item_id'])."',								
					'".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."',
					'".mysqli_real_escape_string($conn, $_POST['time_requirement'])."')";

	//echo $sql;
//	exit();
				
	$result = mysqli_query($conn, $sql);
	
	//the appropriate alert just hasn't been completed yet	
	//create alert notification and send email iff required
	//$notification_type = 'standard_discussion';
	//require $_SERVER['DOCUMENT_ROOT']."/components/notifications_and_alerts/create_new_notification_and_alert.php";
//}




header("Location: ".$_SESSION['this_page']);
exit();

?>