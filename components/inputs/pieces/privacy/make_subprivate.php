<?php
if(!isset($_SESSION)){session_start();}

if($_GET['type'] == 'friends'		){$_SESSION['flow_sub_privacy_friends'] 	= 'private';}
if($_GET['type'] == 'family'		){$_SESSION['flow_sub_privacy_family'] 		= 'private';}
if($_GET['type'] == 'colleagues'	){$_SESSION['flow_sub_privacy_colleagues']	= 'private';}
if($_GET['type'] == 'work_contacts'	){$_SESSION['flow_sub_privacy_work_contacts'] 	= 'private';}

require $_SERVER['DOCUMENT_ROOT']."/inputs/pieces/privacy/marked_public.php";
?>