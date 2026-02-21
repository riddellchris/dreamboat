<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";

if(	$_GET['to'] == 'daily' OR
	$_GET['to'] == 'weekly' OR
	$_GET['to'] == 'monthly'){
		$_SESSION['menu_set_diary'] = $_GET['to'];
		header("Location: /work_diary/");
		exit();
		}
else{header("Location: /");exit();}

?>