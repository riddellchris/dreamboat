<?php
if(!isset($_SESSION)){session_start();}

if($_GET['type'] == 'data'){        $go_to = $_GET['type'];}
if($_GET['type'] == 'map'){         $go_to = $_GET['type'];}
if($_GET['type'] == 'insights'){    $go_to = $_GET['type'];}
if($_GET['type'] == 'overview'){    $go_to = $_GET['type'];}
if($_GET['type'] == 'profile'){     $go_to = $_GET['type'];}
if($_GET['type'] == 'business'){    $go_to = $_GET['type'];}
if($_GET['type'] == 'network'){     $go_to = $_GET['type'];}
if($_GET['type'] == 'biz_dev'){     $go_to = $_GET['type'];}
if($_GET['type'] == 'management'){  $go_to = $_GET['type'];}
if($_GET['type'] == 'sales'){       $go_to = $_GET['type'];}
if($_GET['type'] == 'marketing'){   $go_to = $_GET['type'];}
if($_GET['type'] == 'wheelhouse'){  $go_to = $_GET['type'];}
if($_GET['type'] == 'activities'){  $go_to = $_GET['type'];}
if($_GET['type'] == 'time'){        $go_to = $_GET['type'];}
if($_GET['type'] == 'issues'){      $go_to = $_GET['type'];}
if($_GET['type'] == 'upgrades'){    $go_to = $_GET['type'];}
if($_GET['type'] == 'results'){     $go_to = $_GET['type'];}
if($_GET['type'] == 'finances'){    $go_to = $_GET['type'];}
if($_GET['type'] == 'messages'){    $go_to = $_GET['type'];}
if($_GET['type'] == 'notifications'){$go_to = $_GET['type'];}


header("Location: /users/navigation_management/index.php?adjusting=".$go_to);
exit();