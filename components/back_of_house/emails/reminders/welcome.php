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
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/template/body_top.php";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/template/body_bottom.php";
$body_top = "<div style = 'display: block;    
			   height: 100%;
			   min-height:600px;
     			   margin: 0px;
    			   padding: 0px;'>
    		<div style ='display: table; width:100%;     box-sizing: border-box; text-align: left;overflow: hidden;padding-top:40px;padding-bottom:40px;'>
		<div style ='display: table-cell; vertical-align: middle;'>
    			   
    			   
    			   ";
    			   
    			   
$mail->Subject = $first_name." welcome to your Productivity Improvement Diary";
$mail->Body    = 

 $header.$horizontal_line.$body_top."<span style='text-shadow: 2px 2px 4px grey;
    font-family: helvetica;
    font-size: 28px;
    color: #281e96;text-align:left;'>Hi ".$first_name.",<br><br>Welcome to the Dreamboat Productivity Improvement Diary, where over time you can  expect to get far more control over where your time is going and what you're earning.<br><br>Each day we'll help you review where your time went and where it can be better spent so that your productivity improves each and every day.<br><br>
    
    
    To ensure your work schedule is correct reset your passwork and login to <br><a href='https://dreamboat.com.au/settings/work schedule/'>/settings/work schedule/</a><br>so we can email you at the end of the best time each day.<br><Br>Yours Sincerely,<br> The Dreamboat Team".$body_bottom.$horizontal_line.$footer;
    

$mail->AltBody = "Welcome to the Dreamboat Productivity Improvement Diary, where over time you can  expect to get far more control over where your time is going and what you're earning.<br>First please visit dreamboat.com.au<br> and reset your password<br><br>Then ensure your work schedule is correct<br>by logging in and visiting<br>settings/work schedule/<br>so we can email you at the end of the each day.";



if(!$mail->Send()) {
   echo "Message could not be sent.";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}
else{
echo "Productivity Productivity Improvement Diary successfully sent to ".$first_name." ".$second_name." at ".$email."<br><br> <a href='/users/'>Return to the users</a>";
}



?>