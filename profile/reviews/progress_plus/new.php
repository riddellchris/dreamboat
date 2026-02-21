<?php
if(!isset($_SESSION)){session_start();}
//require $_SERVER['DOCUMENT_ROOT']."/design/layouts/start_of_page.php";	
$_SESSION['next_prompt_id'] = 175;

header("Location: /progress_plus/questions/index.php");
exit();
//require $_SERVER['DOCUMENT_ROOT']."/progress_plus/questions/index.php";	
//require $_SERVER['DOCUMENT_ROOT']."/design/layouts/end_of_page.php";	
?>