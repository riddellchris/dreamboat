<?php
if(!isset($_SESSION)){session_start();}

if($_GET['now'] == 'active'){	$_SESSION['list_view_'.$_GET['primary_folder'].'_'.$_GET['secondary_folder']] = 'active';}
if($_GET['now'] == 'inactive'){	$_SESSION['list_view_'.$_GET['primary_folder'].'_'.$_GET['secondary_folder']] = 'inactive';}
if($_GET['now'] == 'deleted'){	$_SESSION['list_view_'.$_GET['primary_folder'].'_'.$_GET['secondary_folder']] = 'deleted';}


header("Location: /".$_GET['primary_folder']);
exit();