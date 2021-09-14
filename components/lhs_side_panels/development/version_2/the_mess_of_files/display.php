<?php
if(!isset($_SESSION)){session_start();}
$sql = "SELECT * FROM management_details WHERE client_id = '".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."' ORDER BY update_id DESC LIMIT 1";

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
?> 
 
<div class='details-font'><?php require $_SERVER['DOCUMENT_ROOT']."/components/lhs_side_panels/block_titles.php";?></div>
<form action='/business/edit_update.php' method='post' style='width:100%;padding-top:1vh;text-align:left;padding-left:25px;'>	

require $_SERVER['DOCUMENT_ROOT']."/components/lhs_side_panels/functions.php";

require $_SERVER['DOCUMENT_ROOT']."/components/lhs_side_panels/full_block_list.php";

<input type = 'submit' class='login-submit' style='width: calc(100% - 60px);margin-top:25px;' value='update'>
</form>


