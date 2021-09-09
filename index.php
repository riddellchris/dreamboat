<?php
if(!isset($_SESSION)){session_start();}

if($_SESSION['logged_in'] == 'yes'){
	header("Location: ".$_SESSION['users_homepage']);
}
else{
	//this is sometimes used off the back of email notifications to ensure that we move to the right place
	if($_GET['to'] == 'login'){header("Location: /account/security/"); exit();}
	else{
		$_SESSION['reset_sub_menu_defaults'] = 'yes';
		header ("Location: /slideshow/");exit();}
}

?>