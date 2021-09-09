<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/PHPMailer_5_2/PHPMailerAutoload.php";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/emails/account_connection/notifications.php";

$mail->From = "notifications@dreamboat.com.au";
$mail->FromName = "DREAMBOAT";
$mail->AddAddress("chris.riddell@dreamboat.co", "Chris Riddell");  // Add a recipient
$mail->AddReplyTo($email, $name);
$mail->IsHTML(true);                                  // Set email format to HTML


require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/emails/template/header.php";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/emails/template/body_top_not_centered.php";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/emails/template/body_bottom.php";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/emails/template/footer.php";


$mail->Subject = "CONTACT US FROM DREAMBOAT";
$mail->Body    = $header.$body_top."<span style='
    font-family: helvetica;
    text-transform: none;
'>".$name."<BR>
    		       just contacted us saying:<br><br>
    		     ".$feedback."<br><br><br>
    		     You can contact them back via their email ".$email." about /knowledgebase/".$_GET['secondary_folder']."/".$_GET['tertiary_folder']."/<br>
    		     Or use their phone number ".$number."<br>
    		     ".$body_bottom.$footer;

if(!$mail->Send()) {
   echo "Message could not be sent.";
   echo "Mailer Error: " . $mail->ErrorInfo;
  //exit;
}
else{
//echo "Email successfully sent to Chris Riddell";
}



?>