<?php

$mail = new PHPMailer;

$mail->IsSMTP();                                        // Set mailer to use SMTP
$mail->Host = "gsyd1.siteground.net";               // Specify main and backup server
$mail->Port = 587;                                      // Set the SMTP port
$mail->SMTPAuth = true;                                 // Enable SMTP authentication
$mail->Username = "notifications@dreamboat.com.au";     // SMTP username
$mail->Password = "ki$4131{j1c<";                       // SMTP password
$mail->SMTPSecure = "tls";                              // Enable encryption, "ssl" also accepted

//these are the two new lines as of 11/05/21
//let's see if it comes through though!
//$mail->SMTPKeepAlive = true;   
//$mail->Mailer = “smtp”; // don't change the quotes!


//$mail-> SMTPDebug = 4;                                // TURN ON DEBUGGING

?>