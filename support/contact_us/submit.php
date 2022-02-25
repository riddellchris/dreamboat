<?php
if(!isset($_SESSION)){session_start();}
//var_dump($_POST);exit();


require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	if(isset($_POST['name'])){		$name		= mysqli_real_escape_string($conn, $_POST['name']);		}else{$name = '';}
	if(isset($_POST['number'])){	$number		= mysqli_real_escape_string($conn, $_POST["number"]);	}else{$number = '';}
	if(isset($_POST['mail'])){		$mail		= mysqli_real_escape_string($conn, $_POST['mail']);		}else{$mail = '';}
	if(isset($_POST['feedback'])){	$feedback	= mysqli_real_escape_string($conn, $_POST['feedback']);	}else{$feedback = '';}

$sql = "INSERT INTO feedback
		(name, number, email, comments)
	VALUES ('".$name."', '".$number."', '".$mail."', '".$feedback."')";
mysqli_query($conn, $sql);	

$feedback = nl2br( $_POST['feedback'] );

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/emails/feedback.php";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/start_of_page_top_of_centering_divs.php";
?>
<span class='prompt-font'>thanks for contacting us!<br>We&#39;ll get back to you ASAP!<br><br>Now, <a href='/' style='color:red;'>get back to it>></a></span>
<?php require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";?>
