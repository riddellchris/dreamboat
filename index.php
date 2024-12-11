<?php
if(!isset($_SESSION)){session_start();}

if($_SESSION['logged_in'] == 'yes'){
	if($_SESSION['viewing_client_id'] != $_SESSION['user_id']){	
		header("Location: ".$_SESSION['viewing_client_home_page']);
	}
	else{
		header("Location: ".$_SESSION['users_homepage']);
	}

}
else{
	//this is sometimes used off the back of email notifications to ensure that we move to the right place
	if($_GET['to'] == 'login'){header("Location: /account/security/"); exit();}
	else{
		$_SESSION['reset_sub_menu_defaults'] = 'yes';

		if($_SESSION['masked_domain'] == 'agedcareforeveryone'){
			header ("Location: /industries/aged_care/display_website/index.php");exit();
		}
		else{
			header ("Location: /knowledgebase/");exit();
		}
	
	
	}
}

?>
