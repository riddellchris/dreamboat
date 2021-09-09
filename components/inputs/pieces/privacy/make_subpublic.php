<?php
if(!isset($_SESSION)){session_start();}

if($_GET['type'] == 'friends'		){$_SESSION['flow_sub_privacy_friends'] 	= 'public';}
if($_GET['type'] == 'family'		){$_SESSION['flow_sub_privacy_family'] 		= 'public';}
if($_GET['type'] == 'colleagues'	){$_SESSION['flow_sub_privacy_colleagues']	= 'public';}
if($_GET['type'] == 'work_contacts'	){$_SESSION['flow_sub_privacy_work_contacts'] 	= 'public';}

require $_SERVER['DOCUMENT_ROOT']."/inputs/pieces/privacy/marked_public.php";
?>