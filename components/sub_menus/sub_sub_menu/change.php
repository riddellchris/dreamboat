<?php
if(!isset($_SESSION)){session_start();}


//the first of two DIFFERENT $if_content decisions on this page
if($_GET['primary_folder'] == 'content'){$if_content = 'content_'.$_GET['secondary_folder']."_";}
else{$if_content = $_GET['primary_folder']."_";}


//should have some sort of parsing here to start for ultimate security
//if$_GET == a valid string option

$page_name = $_GET['page'];
$to = $_GET['to'];


//echo $if_content.$page_name.'_page';
//exit();

$_SESSION[$if_content.$page_name.'_page'] = $to;





//the SECOND of two DIFFERENT $if_content decisions on this page
if($_GET['primary_folder'] == 'content'){$if_content = '/content/'.$_GET['secondary_folder'];}
else{$if_content = '/'.$_GET['primary_folder'];}

if($to == 'initial_giveaways' OR $to == 'active_users'){$extras = "index.php?version=".rand(4,4000000);}

//echo "Location: ".$if_content."/".$page_name."/".$to."/".$extras;
//exit();
header("Location: ".$if_content."/".$page_name."/".$to."/".$extras);
exit();
