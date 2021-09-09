<?php
if(!isset($_SESSION)){session_start();}

$user_to_display = $_SESSION['viewing_client_id'];

if($_GET['primary_folder'] == 'results'){require $_SERVER['DOCUMENT_ROOT']."/components/tracking/input_table/controls/for_results.php";}
if($_GET['primary_folder'] == 'map'){require $_SERVER['DOCUMENT_ROOT']."/components/tracking/input_table/controls/for_map_links.php";}