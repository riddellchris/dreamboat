<?php
if(!isset($_SESSION)){session_start();}
//require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";

//this could be cleaner but built this way just to minimise testing right now to be honest
if($_SESSION['dreamboat_crew'] == 'yes'){
	if($_SESSION['user_id'] == $_SESSION['viewing_client_id']){
		require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
		echo "<div class='prompt-font' style='width:100%;text-align:center;height:50vh;bottom: 0;position: absolute;'>You can't message yourself silly<br>Try someone else</div>";
		require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
	}
	else{	require $_SERVER['DOCUMENT_ROOT']."/messages/display.php";}
}
else{
	require $_SERVER['DOCUMENT_ROOT']."/messages/display.php";
}

