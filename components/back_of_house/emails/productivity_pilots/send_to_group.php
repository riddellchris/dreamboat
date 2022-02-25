<?php

require_once $_SERVER['DOCUMENT_ROOT']."/back_of_house/PHPMailer_5_2/PHPMailerAutoload.php";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/account_connection/alerts.php";

$mail->From = "alerts@dreamboat.com.au";
$mail->FromName = "DREAMBOAT";

$mail->AddAddress('productivity-pilots@dreamboat.co' , 'Productivity Pilots');  // Add a recipient
//$mail->AddAddress("ellen@example.com");               // Name is optional

$mail->IsHTML(true);                                  // Set email format to HTML


require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/template/header.php";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/template/horizontal_line.php";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/template/footer.php";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/template/body_top.php";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/template/body_bottom.php";

$mail->Subject = $note;
$mail->Body    = $header.$footer;
$mail->AltBody = $note;



if(!$mail->Send()) {
   echo "Message could not be sent.";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}
else{
echo "Email successfully sent to the Productivity Pilots group";
}



?>