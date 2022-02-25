<?php

require $_SERVER['DOCUMENT_ROOT']."/back_of_house/PHPMailer_5_2/PHPMailerAutoload.php";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/account_connection/alerts.php";


$email = 'criddell13@gmail.com';

$mail->From = "alerts@dreamboat.com.au";
$mail->FromName = "DREAMBOAT";
$mail->AddAddress($email , $first_name." ".$second_name);  // Add a recipient
//$mail->AddAddress("ellen@example.com");               // Name is optional

$mail->IsHTML(true);                                  // Set email format to HTML

require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/template/header.php";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/template/horizontal_line.php";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/template/footer.php";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/template/body_top.php";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/template/body_bottom.php";

$mail->Subject = $pilots_first_name." sent you a message!";
$mail->Body    = $header.$horizontal_line.$body_top."<span style='text-shadow: 2px 2px 4px grey;
    font-family: helvetica;
    text-transform: uppercase;
    font-size: 28px;
    color: #281e96;'>".$pilots_first_name." sent you a message on Dreamboat!<br>To read and respond just click the button below:</span><BR>
<a href='https://www.dreamboat.com.au/network/messages/'  style='min-width: 300px;
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
		    display: inline-block;'>Click to read & respond</a>".$body_bottom.$horizontal_line.$footer;
$mail->AltBody = $pilots_first_name." sent you a message on Dreamboat!<br>To read and respond just visit the url below<br>".$url;



if(!$mail->Send()) {
   echo "Message could not be sent.";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}
else{
echo "Email successfully sent to ".$first_name." ".$second_name." at ".$email;
}



?>