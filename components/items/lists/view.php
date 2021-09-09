<?php
if(!isset($_SESSION)){session_start();}

if($_POST['list_to_view'] == 'active'){		$_SESSION['list_view_'.$_GET['primary_folder'].'_'.$_GET['secondary_folder']] = 'active';}
if($_POST['list_to_view'] == 'inactive'){	$_SESSION['list_view_'.$_GET['primary_folder'].'_'.$_GET['secondary_folder']] = 'inactive';}
if($_POST['list_to_view'] == 'deleted'){	$_SESSION['list_view_'.$_GET['primary_folder'].'_'.$_GET['secondary_folder']] = 'deleted';}
//if($_POST['list_to_view'] == 'homework'){	$_SESSION['list_view_'.$_GET['primary_folder'].'_'.$_GET['secondary_folder']] = 'homework';}

header("Location: ".$_SESSION['this_page']);
exit();