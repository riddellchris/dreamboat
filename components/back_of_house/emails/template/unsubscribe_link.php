<?php
if(!isset($_SESSION)){session_start();}

$code = md5(rand(999, 99999));

$sql = "INSERT INTO admin_email_unsubscribe_keys (user_id, email_type, email_address, key_detail, used)
	VALUES ('".mysqli_real_escape_string($conn, $_SESSION['user_id'])."', '".$email_type."', '".$email."'   ,'".$code."','no')";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);


$unsubscribe_link = "<div style='color:#cecece;width:100%;margin:auto;display: block;text-align:center;'>
			To unsubscribe from ".$email_type." emails just click the link 
			<a style='color:#a8a8a8' href='https://dreamboat.com.au/back_of_house/emails/unsubscribe.php?code=".$code."&user_id=".$_SESSION['user_id']."'>here</a>
		     </div>";
?>