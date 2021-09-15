<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/PHPMailer_5_2/PHPMailerAutoload.php";

///this should really be from notifications@ dreamboat but i'm not quite there yet // some error coming up Message could not be sent.Mailer Error: SMTP connect() failed. https://github.com/PHPMailer/PHPMailer/wiki/Troubleshooting
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/emails/account_connection/notifications.php";
$mail->From = "notifications@dreamboat.com.au";

$email = "test-vy52ssdop@srv1.mail-tester.com";
$first_name = "Chris";
$last_name = "Riddell";
$subject = "you have a reminder";

$mail->FromName = "DREAMBOAT";
$mail->AddAddress($email, $first_name." ".$last_name);  // Add a recipient

$mail->IsHTML(true);                                  // Set email format to HTML


require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/emails/template/header.php";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/emails/template/body_top.php";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/emails/template/body_bottom.php";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/emails/template/footer.php";


$mail->Subject = $subject;
$mail->Body    =  $header.$body_top."
			<span style='	text-shadow: 2px 2px 4px grey;
				    	font-family: helvetica;
				    	text-transform: uppercase;
				    	font-size: 28px;
				    	color: #281e96;'>
						".$_SESSION['email_instruction']."<br>
					<a href ='https://www.dreamboat.com.au/index.php?to=login'
					
				  style='min-width: 300px;
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
					    display: inline-block;'>login</a>
		   
			</span>   
		    ".$body_bottom.$footer;
		    
		    
$mail->AltBody = $_SESSION['email_instruction']."<br>".$url;

if(!$mail->Send()) {
   echo "Message could not be sent.";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}
else{

//this should store into email sent database what was sent to whom, when and at what address
echo "Email successfully sent to Chris Riddell";

$sql = "INSERT INTO admin_emails_sent (
					user_id, 
					email_address, 
					first_name, 
					last_name, 
					subject, 
					from_what_address
					)
	VALUES 			(
					'".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."',
					'".$email_address_for_sending."',	
					'".$first_name."',	
					'".$last_name."',	
					'".$subject."',					
					'notifications'
				)";
				
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
mysqli_query($conn, $sql);


}

unset($_SESSION['email_title']);
unset($_SESSION['email_instruction']);
unset($_SESSION['button_copy']);

?>