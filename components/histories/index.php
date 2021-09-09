<?php
if(!isset($_SESSION)){session_start();}
if(is_numeric(strpos($_SERVER['REQUEST_URI'],'/improvements/')) == 1){$details_page = 'improvements_details';}
if(is_numeric(strpos($_SERVER['REQUEST_URI'],'/homework/')) == 1){$details_page = 'homework_details';}
if(is_numeric(strpos($_SERVER['REQUEST_URI'],'/issues/')) == 1){$details_page = 'issues_details';}


if(is_numeric(strpos($_SERVER['REQUEST_URI'],'/profile/')) == 1){$details_page = 'profile_details';}
if(is_numeric(strpos($_SERVER['REQUEST_URI'],'/management/')) == 1){$details_page = 'management_details';}
if(is_numeric(strpos($_SERVER['REQUEST_URI'],'/demand/')) == 1){$details_page = 'management_details';}
if(is_numeric(strpos($_SERVER['REQUEST_URI'],'/clients/')) == 1){$details_page = 'management_details';}
if(is_numeric(strpos($_SERVER['REQUEST_URI'],'/staff/')) == 1){$details_page = 'management_details';}
if(is_numeric(strpos($_SERVER['REQUEST_URI'],'/business/')) == 1){$details_page = 'management_details';}


require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
echo "<div style='height:35px;'>";
echo "</div>";
echo "<div style='height:55px;text-align:center;'>";
echo "<a class='login-submit' href='".$_SESSION['last_page_used']."'>back</a>";
echo "</div>";

$sql = "SELECT * FROM $details_page  WHERE client_id = '".$_SESSION['viewing_client_id']."' ORDER BY update_id DESC";

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$last_entry = '';

echo "<div style ='max-width:1100px;margin:auto;font-family:Comfortaa;'>";
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

if($last_entry != $row[$_GET['view']] && $row[$_GET['view']] != ''){


//this should have who updated what
echo "<div style='padding:10px;display:inline-block;width:100%;'>";
	echo "<div style='float:left;font-size:20px;white-space: pre-line;text-align:left;'>";
	echo $row[$_GET['view']];
	echo "</div>";
	echo "<div style='color:grey;float:right;'>";	
		time_since_string($row['timestamp']);
	echo "</div>";
echo "</div>";
	echo "<br>";	
}
$last_entry = $row[$_GET['view']];

}
echo "</div>";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>