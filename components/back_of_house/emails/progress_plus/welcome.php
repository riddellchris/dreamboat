<?php

//require $_SERVER['DOCUMENT_ROOT']."/back_of_house/PHPMailer_5_2/PHPMailerAutoload.php";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/account_connection/progress_plus.php";

$mail->From = "progress_plus@dreamboat.com.au";
$mail->FromName = "DREAMBOAT";
$mail->AddAddress($email , $first_name." ".$second_name);  // Add a recipient
//$mail->AddAddress("ellen@example.com");               // Name is optional

$mail->IsHTML(true);                                  // Set email format to HTML

require $_SERVER[DOCUMENT_ROOT]."/back_of_house/emails/template/header.php";
require $_SERVER[DOCUMENT_ROOT]."/back_of_house/emails/template/horizontal_line.php";
require $_SERVER[DOCUMENT_ROOT]."/back_of_house/emails/template/unsubscribe_link.php"; 
require $_SERVER[DOCUMENT_ROOT]."/back_of_house/emails/template/footer.php";
require $_SERVER[DOCUMENT_ROOT]."/back_of_house/emails/template/body_top.php";
require $_SERVER[DOCUMENT_ROOT]."/back_of_house/emails/template/body_bottom.php";

$mail->Subject = "Welcome to Progress Plus ".$first_name;
$mail->Body    = $header.$horizontal_line.$body_top."<span style='text-shadow: 2px 2px 4px grey;
    font-family: helvetica;
    text-transform: uppercase;
    font-size: 28px;
    color: #281e96;'>Hi ".$first_name.",<br><br>Welcome to Progresss Plus,<br>Built to help you improve your productivity each and every night.<br>To ensure you don't miss our end of day emails ensure this email goes to your inbox.".$body_bottom.$horizontal_line.$unsubscribe_link.$footer;
$mail->AltBody = "Hi ".$first_name.",<br><br>Welcome to Progresss Plus,<br>Built to help you improve your productivity each and every night.<br>To ensure you don't miss our end of day emails ensure this email goes to your inbox.";



if(!$mail->Send()) {
   echo "Message could not be sent.";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}
else{
echo "Email successfully sent to ".$first_name." ".$second_name;
}



?>