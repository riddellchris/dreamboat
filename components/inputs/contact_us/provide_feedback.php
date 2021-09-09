<?php
if(!isset($_SESSION)){session_start();}

if($_SESSION['next_prompt_id'] == 152){$_SESSION['contact_us_first_name'] 	= $_POST['standard_input'];$_SESSION['next_prompt_id'] = 153; header("Location: /contact_us/provide_feedback/");exit();}
if($_SESSION['next_prompt_id'] == 153){$_SESSION['contact_us_second_name'] 	= $_POST['standard_input'];$_SESSION['next_prompt_id'] = 154; header("Location: /contact_us/provide_feedback/");exit();}
if($_SESSION['next_prompt_id'] == 154){$_SESSION['contact_us_phone_number'] 	= $_POST['standard_input'];$_SESSION['next_prompt_id'] = 155; header("Location: /contact_us/provide_feedback/");exit();}
if($_SESSION['next_prompt_id'] == 155){$_SESSION['contact_us_email_address'] 	= $_POST['standard_input'];$_SESSION['next_prompt_id'] = 156; header("Location: /contact_us/provide_feedback/");exit();}
if($_SESSION['next_prompt_id'] == 156){$_SESSION['contact_us_message'] 		= $_POST['textarea_input'];$_SESSION['next_prompt_id'] = 157; header("Location: /contact_us/provide_feedback/");exit();}
if($_SESSION['next_prompt_id'] == 157){$_SESSION['contact_us_subject'] 		= $_POST['standard_input'];


	//if logged in we must get out their email and phone number
	if($_SESSION['logged_in'] == 'yes'){
		$sql = "SELECT * FROM user_account_details WHERE user_id = '".$_SESSION['user_id']."'";
		require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";	
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		//these first two are already within the session variable but no worries - j
		echo $_SESSION['contact_us_first_name'] = $row['first_name'];
		echo $_SESSION['contact_us_second_name']  = $row['second_name'];
		echo $_SESSION['contact_us_phone_number']  = $row['phone_number'];
		echo $_SESSION['contact_us_email_address']  = $row['email'];
		//echo hello;
		//exit();
		
	}




	//Send email
	require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/contact_us.php";
	
	
	
	$_SESSION['contact_us_first_name'] 	= mysqli_real_escape_string($conn, $_SESSION['contact_us_first_name']);
	$_SESSION['contact_us_second_name'] 	= mysqli_real_escape_string($conn, $_SESSION['contact_us_second_name']);
	$_SESSION['contact_us_phone_number'] 	= mysqli_real_escape_string($conn, $_SESSION['contact_us_phone_number']);
	$_SESSION['contact_us_email_address'] 	= mysqli_real_escape_string($conn, $_SESSION['contact_us_email_address']);
	$_SESSION['contact_us_message'] 	= mysqli_real_escape_string($conn, $_SESSION['contact_us_message']);
	$_SESSION['contact_us_subject'] 	= mysqli_real_escape_string($conn, $_SESSION['contact_us_subject']);
	
	$sql = "INSERT INTO admin_contact_us_messages (type_of_contact, user_id, first_name, second_name, phone_number, email_address, subject, details)
		VALUES('provide_feedback', 
		'".$_SESSION['user_id']."', 
		'".$_SESSION['contact_us_first_name']."', 
		'".$_SESSION['contact_us_second_name']."', 
		'".$_SESSION['contact_us_phone_number']."', 
		'".$_SESSION['contact_us_email_address']."', 
		'".$_SESSION['contact_us_message']."', 
		'".$_SESSION['contact_us_subject']."')";
	require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";	
	
	//exit();
	$result = mysqli_query($conn, $sql);
	
	//unset all those variables
	unset($_SESSION['contact_us_first_name']);
	unset($_SESSION['contact_us_second_name']);
	unset($_SESSION['contact_us_phone_number']);
	unset($_SESSION['contact_us_email_address']);
	unset($_SESSION['contact_us_subject']);
	unset($_SESSION['contact_us_message']);
	
	
	$_SESSION['next_prompt_id'] = 158; 
	header("Location: /contact_us/provide_feedback/");
	exit();
}



?>