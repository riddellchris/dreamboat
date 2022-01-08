<?php
if(!isset($_SESSION)){session_start();}

echo $_GET['focus'];
exit();

require_once $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/initial_folder_settings.php";

//SOMETHING FUNKY GOING ON HERE WITH THIS PAGE
/*echo $_GET['primary_folder'];
echo $_GET['secondary_folder'];
exit();*/
//lazy man's code here on this page but it's working for now...



#BUG:: this needs some work still

$skip_setting = 'no';

if($_GET['focus'] ==  '0-10%' &&  $_SESSION['funnel_focus'][$_GET['secondary_folder']] == '10'){unset($_SESSION['funnel_focus'][$_GET['secondary_folder']]); $skip_setting = 'yes';}
if($_GET['focus'] == '10-20%' &&  $_SESSION['funnel_focus'][$_GET['secondary_folder']] == '20'){unset($_SESSION['funnel_focus'][$_GET['secondary_folder']]); $skip_setting = 'yes';}
if($_GET['focus'] == '20-30%' &&  $_SESSION['funnel_focus'][$_GET['secondary_folder']] == '30'){unset($_SESSION['funnel_focus'][$_GET['secondary_folder']]); $skip_setting = 'yes';}
if($_GET['focus'] == '30-40%' &&  $_SESSION['funnel_focus'][$_GET['secondary_folder']] == '40'){unset($_SESSION['funnel_focus'][$_GET['secondary_folder']]); $skip_setting = 'yes';}
if($_GET['focus'] == '40-50%' &&  $_SESSION['funnel_focus'][$_GET['secondary_folder']] == '50'){unset($_SESSION['funnel_focus'][$_GET['secondary_folder']]); $skip_setting = 'yes';}
if($_GET['focus'] == '50-60%' &&  $_SESSION['funnel_focus'][$_GET['secondary_folder']] == '60'){unset($_SESSION['funnel_focus'][$_GET['secondary_folder']]); $skip_setting = 'yes';}
if($_GET['focus'] == '60-70%' &&  $_SESSION['funnel_focus'][$_GET['secondary_folder']] == '70'){unset($_SESSION['funnel_focus'][$_GET['secondary_folder']]); $skip_setting = 'yes';}
if($_GET['focus'] == '70-80%' &&  $_SESSION['funnel_focus'][$_GET['secondary_folder']] == '80'){unset($_SESSION['funnel_focus'][$_GET['secondary_folder']]); $skip_setting = 'yes';}
if($_GET['focus'] == '80-90%' &&  $_SESSION['funnel_focus'][$_GET['secondary_folder']] == '90'){unset($_SESSION['funnel_focus'][$_GET['secondary_folder']]); $skip_setting = 'yes';}
if($_GET['focus'] == '90-100%' && $_SESSION['funnel_focus'][$_GET['secondary_folder']] == '100'){unset($_SESSION['funnel_focus'][$_GET['secondary_folder']]); $skip_setting = 'yes';}


if($skip_setting != 'yes'){
	//this sets it as correct always
	if($_GET['focus'] ==  '0-10%'){$_SESSION['funnel_focus'][$_GET['secondary_folder']] = '10';}
	if($_GET['focus'] == '10-20%'){$_SESSION['funnel_focus'][$_GET['secondary_folder']] = '20';}
	if($_GET['focus'] == '20-30%'){$_SESSION['funnel_focus'][$_GET['secondary_folder']] = '30';}
	if($_GET['focus'] == '30-40%'){$_SESSION['funnel_focus'][$_GET['secondary_folder']] = '40';}
	if($_GET['focus'] == '40-50%'){$_SESSION['funnel_focus'][$_GET['secondary_folder']] = '50';}
	if($_GET['focus'] == '50-60%'){$_SESSION['funnel_focus'][$_GET['secondary_folder']] = '60';}
	if($_GET['focus'] == '60-70%'){$_SESSION['funnel_focus'][$_GET['secondary_folder']] = '70';}
	if($_GET['focus'] == '70-80%'){$_SESSION['funnel_focus'][$_GET['secondary_folder']] = '80';}
	if($_GET['focus'] == '80-90%'){$_SESSION['funnel_focus'][$_GET['secondary_folder']] = '90';}
	if($_GET['focus'] == '90-100%'){$_SESSION['funnel_focus'][$_GET['secondary_folder']] = '100';}
}

unset($skip_setting);

/*
echo $_GET['primary_folder'];
echo $_GET['secondary_folder'];
exit();
*/

header("Location: /".$_GET['primary_folder']."/".$_GET['secondary_folder']."/");
exit();


?>