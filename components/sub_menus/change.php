<?php
if(!isset($_SESSION)){session_start();}


//the first of two DIFFERENT $if_content decisions on this page
if($_SESSION['primary_folder'] == 'content'){$if_content = 'content_';}
else{$if_content = '';}

//should have some sort of parsing here to start for ultimate security
//if$_GET == a valid string option
$page_name = $_GET['page'];
$to = $_GET['to'];

$_SESSION[$if_content.$page_name.'_page'] = $to;


//the SECOND of two DIFFERENT $if_content decisions on this page
if($_SESSION['primary_folder'] == 'content'){$if_content = '/content';}
else{$if_content = '';}

header("Location: ".$if_content."/".$page_name."/".$to."/");
exit();
