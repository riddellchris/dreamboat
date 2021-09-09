<?php

require_once $_SERVER['DOCUMENT_ROOT']."/back_of_house/PHPMailer_5_2/PHPMailerAutoload.php";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/account_connection/work_diary.php";

$mail->AddReplyTo($email_of_client, $clients_first_name." ".$clients_second_name);
$mail->From = "work_diary@dreamboat.com.au";
$mail->FromName = "DREAMBOAT";
$mail->AddAddress($email , $first_name." ".$second_name);  // Add a recipient
//$mail->AddAddress("ellen@example.com");               // Name is optional

$mail->IsHTML(true);                                  // Set email format to HTML


require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/template/header_not_centered.php";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/template/horizontal_line.php";
//$email_type = 'Work Diary Start of Day Reminder';
//require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/template/unsubscribe_link.php"; 
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/template/footer.php";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/template/body_top_not_centered.php";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/emails/template/body_bottom.php";






echo $sql = "SELECT * FROM work_diary WHERE input_id = '".$work_diary_to_send."' AND user_id = '".$clients_user_id."'";

require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
echo "<BR><BR>";
var_dump($row);



$responses ='';
if($row['rate_out_of_10'] != ''		){$responses .= "My day was a :<br>			".$row['rate_out_of_10']."<br><br>";}
if($row['most_significant'] != ''	){$responses .= "And the most significant thing was:<br>".$row['most_significant']."<br><br>";}
if($row['enjoy_most'] != ''		){$responses .= "I enjoyed:<br>				".$row['enjoy_most']."<br><br>";}
if($row['wasnt_ideal'] != ''		){$responses .= "The following wasn't ideal:<br>	".$row['wasnt_ideal']."<br><br>";}
if($row['what_to_do_more_of'] != ''	){$responses .= "The work you want to do more of is:<br>".$row['what_to_do_more_of']."<br><br>";}
if($row['how_to_do_that'] != ''		){$responses .= "Which you can do more of by:<br>	".$row['how_to_do_that']."<br><br>";}
if($row['prefer_less_of'] != ''		){$responses .= "Which you can do more of by:<br>	".$row['prefer_less_of']."<br><br>";}
if($row['time_best_spent'] != ''	){$responses .= "And where your time is best spent for the business:<br>".$row['time_best_spent']."<br><br>";}
if($row['focus_going_forward_now'] != ''){$responses .= "Here's what you need to focus on today:<br>	".$row['focus_going_forward_now']."<br><br>";}
if($row['achieve_tomorrow'] != ''	){$responses .= "Here's what you wanted to achieve today:<br>	".$row['achieve_tomorrow']."<br><br>";}





$mail->Subject = $clients_first_name." ".$clients_second_name." completed their Work Diary"; 
$mail->Body    = $header.$horizontal_line.$body_top."<span style='text-shadow: 2px 2px 4px grey;
		    font-family: helvetica;
		    font-size: 28px;
		    color: #281e96;'>Hi ".$first_name.",<br>$clients_first_name's Work Diary responses are below:<br><br>".$responses."<br><br>".$body_bottom.$horizontal_line.$footer;
		    
		    /*   Or to message them directly just click here:</span><BR>
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
		    display: inline-block;'>View full work diary response</a>*/
		    
$mail->AltBody = "You finished work! <br>Now let's complete your work diary! <br>Just visit the url below<br>".$url;



if(!$mail->Send()) {
   echo "Message could not be sent.";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}
else{
echo "Email successfully sent to ".$first_name." ".$second_name;
}



?>