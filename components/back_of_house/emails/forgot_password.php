<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/PHPMailer_5_2/PHPMailerAutoload.php";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/emails/account_connection/notifications.php";
$mail->From = "notifications@dreamboat.com.au";
$mail->FromName = "DREAMBOAT";
$mail->AddAddress($email , $first_name." ".$second_name);  // Add a recipient
$mail->IsHTML(true);                                  // Set email format to HTML


require $_SERVER[DOCUMENT_ROOT]."/components/back_of_house/emails/template/header.php";
require $_SERVER[DOCUMENT_ROOT]."/components/back_of_house/emails/template/footer.php";
require $_SERVER[DOCUMENT_ROOT]."/components/back_of_house/emails/template/body_top.php";
require $_SERVER[DOCUMENT_ROOT]."/components/back_of_house/emails/template/body_bottom.php";

$mail->Subject = "Let's reset your password";
$mail->Body    =  $header.$horizontal_line.$body_top."<span style='text-shadow: 2px 2px 4px grey;
    font-family: helvetica;
    text-transform: uppercase;
    font-size: 28px;
    color: #281e96;'>TO RESET YOUR PASSWORD</span><BR>
<a href='".$url."'  style='min-width: 300px;
		    padding-top: 15px;
		    padding-bottom: 12px;
		    font-family: Helvetica Neue,Helvetica,Arial,sans-serif;
		    font-size: 16px;
		    font-weight: 600;
		    font-style: normal;
		    color: #281e96;
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
		    background: #fafafa;
		    text-indent: 0px;
		    text-shadow: none;
		    display: inline-block;'>click here</a>".$body_bottom.$horizontal_line.$footer;
$mail->AltBody = "To start resetting your password just use the link below:<br>".$url;



if(!$mail->Send()) {
   echo "Message could not be sent.";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

//echo "Message has been sent";

?>