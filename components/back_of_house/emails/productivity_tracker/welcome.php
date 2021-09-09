<?php

require_once $_SERVER['DOCUMENT_ROOT']."/back_of_house/PHPMailer_5_2/PHPMailerAutoload.php";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/account_connection/alerts.php";

$mail->From = "alerts@dreamboat.com.au";
$mail->FromName = "DREAMBOAT";
$mail->AddAddress($email , $first_name." ".$second_name);  // Add a recipient
//$mail->AddAddress("ellen@example.com");               // Name is optional

$mail->IsHTML(true);                                  // Set email format to HTML

require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/template/header.php";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/template/horizontal_line.php";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/template/unsubscribe_link.php"; 
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/template/footer.php";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/template/body_top_not_centered.php";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/template/body_bottom.php";

$mail->Subject = $first_name." welcome to the Productivity Tracker";
$mail->Body    = 

 $header.$horizontal_line.$body_top."<span style='text-shadow: 2px 2px 4px grey;
    font-family: helvetica;
    font-size: 28px;
    color: #281e96;text-align:left;'>Hi ".$first_name.",<br><br>Welcome to the Dreamboat Productivity Tracker, where you can expect to get far more control over where your time is going and what you're earning.<br><br>We'll help you monitor & improve your earnings, by assessing and addressing the factors that impact it.<br><br>
    
    
    Then ensure your work schedule is correct<br>by logging in and visiting<br>settings/work schedule/<br>so we can email you at the end of the each day.".$body_bottom.$horizontal_line.$unsubscribe_link.$footer;
    

$mail->AltBody = "Welcome to the Dreamboat Productivity Tracker,<br>First please visit dreamboat.com.au<br> and reset your password<br><br>Then ensure your work schedule is correct<br>by logging in and visiting<br>settings/work schedule/<br>so we can email you at the end of the each day.";



if(!$mail->Send()) {
   echo "Message could not be sent.";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}
else{
echo "Productivity Tracker Email successfully sent to ".$first_name." ".$second_name;
}



?>