<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/start_of_page_top_of_centering_divs.php";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT * FROM user_email_settings WHERE user_id = '".$_SESSION['viewing_client_id']."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);





/*
echo "<br>";
if($row['reviews'] == 'off'){echo "<span style='text-transform:uppercase;font-family:helvetica;'>No review emails - means reviews will not run</span>";}
echo "<a class='";
if($row['reviews'] == 'on'){echo 'green-button';}else{echo 'red-button';}
echo " wide-button' href='change_settings.php?type=reviews'>regular reviews";
if($row['reviews'] == 'on'){echo ' - on';}else{echo ' - off';}
echo "</a>";
*/

echo "<br>";
echo "<a class='";
if($row['reminders'] == 'on'){echo 'green-button';}else{echo 'red-button';}
echo " wide-button' href='change_settings.php?type=reminders'>reminders you set";
if($row['reminders'] == 'on'){echo ' - on';}else{echo ' - off';}
echo "</a>";

/*
echo "<br>";
echo "<a class='";
if($row['achievements'] == 'on'){echo 'green-button';}else{echo 'red-button';}
echo " wide-button' href='change_settings.php?type=achievements'>things you achieve";
if($row['achievements'] == 'on'){echo ' - on';}else{echo ' - off';}
echo "</a>";
*/

echo "<br>";
echo "<a class='";
if($row['system_alerts'] == 'on'){echo 'green-button';}else{echo 'red-button';}
echo " wide-button' href='change_settings.php?type=system_alerts'>System alerts";
if($row['system_alerts'] == 'on'){echo ' - on';}else{echo ' - off';}
echo "</a>";

echo "<br>";
echo "<a class='";
if($row['system_updates'] == 'on'){echo 'green-button';}else{echo 'red-button';}
echo " wide-button' href='change_settings.php?type=system_updates'>System updates and improvements";
if($row['system_updates'] == 'on'){echo ' - on';}else{echo ' - off';}
echo "</a>";











//all of these should be built when we get to text and audio pilots which is not the case now.... we need to build more about what alerts from the auto pilot are emailed vs just displayed within the system once in

echo "<br>";
echo "<a class='";
if($row['all_discussion'] == 'on'){echo 'green-button';}else{echo 'red-button';}
echo " wide-button' href='change_settings.php?type=all_discussion'>all discussion";
if($row['all_discussion'] == 'on'){echo ' - on';}else{echo ' - off';}
echo "</a>";


echo "<br>";
echo "<a class='";
if($row['items_added'] == 'on'){echo 'green-button';}else{echo 'red-button';}
echo " wide-button' href='change_settings.php?type=items_added'>items added";
if($row['items_added'] == 'on'){echo ' - on';}else{echo ' - off';}
echo "</a>";
echo "<br>";


echo "<a class='";
if($row['items_completed'] == 'on'){echo 'green-button';}else{echo 'red-button';}
echo " wide-button' href='change_settings.php?type=items_completed'>items completed";
if($row['items_completed'] == 'on'){echo ' - on';}else{echo ' - off';}
echo "</a>";
echo "<br>";


echo "<a class='";
if($row['tracking_data_altered'] == 'on'){echo 'green-button';}else{echo 'red-button';}
echo " wide-button' href='change_settings.php?type=tracking_data_altered'>tracking data altered";
if($row['tracking_data_altered'] == 'on'){echo ' - on';}else{echo ' - off';}
echo "</a>";
echo "<br>";


echo "<a class='";
if($row['planning_column_updates'] == 'on'){echo 'green-button';}else{echo 'red-button';}
echo " wide-button' href='change_settings.php?type=planning_column_updates'>planning column updates";
if($row['planning_column_updates'] == 'on'){echo ' - on';}else{echo ' - off';}
echo "</a>";




if($_SESSION['this_page'] != $_SESSION['last_page_used']){echo "<a class='grey-button wide-button' style='padding-top:0px;' href='../../'>back</a>";	}//otherwise it's broken so don't display it lol
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>