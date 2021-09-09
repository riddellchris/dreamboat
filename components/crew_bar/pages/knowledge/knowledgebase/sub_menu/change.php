<?php
if(!isset($_SESSION)){session_start();}

if($_GET['to'] == 'view'){$_SESSION['knowledgebase_sub_menu'] = 'view existing';}
if($_GET['to'] == 'add'){$_SESSION['knowledgebase_sub_menu'] = 'add to';}

header("Location: ".$_SESSION['this_page']);
exit();

?>