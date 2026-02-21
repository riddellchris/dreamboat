<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/start_of_page_top_of_centering_divs.php";


//echo $_SESSION['dreamboat_crew'];

if(!isset($_SESSION['show_as_dreamboat_crew'])){$_SESSION['show_as_dreamboat_crew'] == 'yes';}

echo "<a class='";
if($_SESSION['show_as_dreamboat_crew'] == 'yes'){echo 'green-button';}else{echo 'red-button';}
echo " wide-button' href='change_settings.php?type=show_as_dreamboat_crew'>show as dreamboat crew";
if($_SESSION['show_as_dreamboat_crew'] == 'yes'){echo ' - on';}else{echo ' - off';}
echo "</a>";




if($_SESSION['this_page'] != $_SESSION['last_page_used']){echo "<a class='grey-button wide-button' style='padding-top:0px;' href='../../'>back</a>";	}//otherwise it's broken so don't display it lol
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>