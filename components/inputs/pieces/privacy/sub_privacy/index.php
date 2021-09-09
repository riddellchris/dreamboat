<?php
if(!isset($_SESSION)){session_start();}

echo "<style>
@media screen and (max-width: 600px){.work_contacts{font-size:11px;}.colleagues{font-size:11px;}}
@media screen and (min-width: 600px){.work_contacts{font-size:16px;}.colleagues{font-size:16px;}}
</style>
";


//just a second backup with no default
/*
if(!isset($_SESSION['flow_sub_privacy_friends']		)){$_SESSION['flow_sub_privacy_friends'] = 'public';}
if(!isset($_SESSION['flow_sub_privacy_family']		)){$_SESSION['flow_sub_privacy_family'] = 'public';}
if(!isset($_SESSION['flow_sub_privacy_colleagues']	)){$_SESSION['flow_sub_privacy_colleagues'] = 'public';}
if(!isset($_SESSION['flow_sub_privacy_work_contacts']	)){$_SESSION['flow_sub_privacy_work_contacts'] = 'public';}
*/

if($_SESSION['flow_sub_privacy_friends'] == 'public'	){require $_SERVER['DOCUMENT_ROOT']."/inputs/pieces/privacy/sub_privacy/friends_public.php";}
if($_SESSION['flow_sub_privacy_friends'] == 'private'	){require $_SERVER['DOCUMENT_ROOT']."/inputs/pieces/privacy/sub_privacy/friends_private.php";}
if($_SESSION['flow_sub_privacy_family'] == 'public'	){require $_SERVER['DOCUMENT_ROOT']."/inputs/pieces/privacy/sub_privacy/family_public.php";}
if($_SESSION['flow_sub_privacy_family'] == 'private'	){require $_SERVER['DOCUMENT_ROOT']."/inputs/pieces/privacy/sub_privacy/family_private.php";}
if($_SESSION['flow_sub_privacy_colleagues'] == 'public'	){require $_SERVER['DOCUMENT_ROOT']."/inputs/pieces/privacy/sub_privacy/colleagues_public.php";}
if($_SESSION['flow_sub_privacy_colleagues'] == 'private'){require $_SERVER['DOCUMENT_ROOT']."/inputs/pieces/privacy/sub_privacy/colleagues_private.php";}
if($_SESSION['flow_sub_privacy_work_contacts'] == 'public'	){require $_SERVER['DOCUMENT_ROOT']."/inputs/pieces/privacy/sub_privacy/work_contacts_public.php";}
if($_SESSION['flow_sub_privacy_work_contacts'] == 'private'	){require $_SERVER['DOCUMENT_ROOT']."/inputs/pieces/privacy/sub_privacy/work_contacts_private.php";}





?>