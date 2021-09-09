<?php

require_once $_SERVER['DOCUMENT_ROOT']."/back_of_house/PHPMailer_5_2/PHPMailerAutoload.php";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/account_connection/progress_plus.php";

$mail->From = "alerts@dreamboat.com.au";
$mail->FromName = "DREAMBOAT";

$mail->AddAddress($email , $first_name." ".$second_name);  // Add a recipient
//$mail->AddAddress("ellen@example.com");               // Name is optional

$mail->IsHTML(true);                                  // Set email format to HTML


require $_SERVER[DOCUMENT_ROOT]."/back_of_house/emails/template/header.php";
require $_SERVER[DOCUMENT_ROOT]."/back_of_house/emails/template/horizontal_line.php";
$email_type = 'Progress Plus End Of Day';
require $_SERVER[DOCUMENT_ROOT]."/back_of_house/emails/template/unsubscribe_link.php"; 
require $_SERVER[DOCUMENT_ROOT]."/back_of_house/emails/template/footer.php";
require $_SERVER[DOCUMENT_ROOT]."/back_of_house/emails/template/body_top.php";
require $_SERVER[DOCUMENT_ROOT]."/back_of_house/emails/template/body_bottom.php";

$mail->Subject = $first_name." it's that time of day again :)";
$mail->Body    = $header.$horizontal_line.$body_top."<span style='text-shadow: 2px 2px 4px grey;
    font-family: helvetica;
    text-transform: uppercase;
    font-size: 28px;
    color: #281e96;'>Great stuff ".$first_name." you finished work! <br>Now let's log your progress plus! <br>Just click the button below:</span><BR>
<a href='".$url."'  style='min-width: 300px;
		    padding-top: 15px;
		    padding-bottom: 12px;
		    font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
		    font-size: 16px;
		    font-weight: 600;
		    font-style: normal;
		    color: white;
		    text-transform: uppercase;
		    text-decoration:none;
		    letter-spacing: .1em;
		    -webkit-appearance: none;
		    height: 52px;
		    border: 0px solid #f7f7f7;
		    text-align: center;
		    margin: 6px;
		    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.4);
		    line-height: normal;
		    box-sizing: border-box;
		    background-color: red;
		    text-indent: 0px;
		    text-shadow: none;
		    display: inline-block;'>Let's do it</a>".$body_bottom.$horizontal_line.$unsubscribe_link.$footer;
$mail->AltBody = "You finished work! <br>Now let's log your progress plus! <br>Just visit the url below<br>".$url;



if(!$mail->Send()) {
   echo "Message could not be sent.";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}
else{
echo "Email successfully sent to ".$first_name." ".$second_name;
}



?>