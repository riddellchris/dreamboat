<?php
if(!isset($_SESSION)){session_start();}
//require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";


require $_SERVER['DOCUMENT_ROOT']."/support/styling.php";
?>

<style>
.secure_input{max-width: unset; text-align:unset;background-color:#ffb0b0;box-shadow:unset;}
.secure_input:focus{background-color:red;box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.4);}
.textarea_input{max-width: unset;box-shadow: unset;background-color: #9696ff;}
.textarea_input:focus{background-color: darkblue;box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.4);}
.login-submit{max-width: unset;background-color: forestgreen;} <!--#61ff61-->
.login-submit:focus{background-color:forestgreen;}
</style>

<?php

if(isset($_GET['tertiary_folder'])){
echo "
<form action='/knowledgebase/components/feedback/submit.php?primary_folder=".$_GET['primary_folder']."&secondary_folder=".$_GET['secondary_folder']."&tertiary_folder=".$_GET['tertiary_folder']."' method='post' style='font-family:Comfortaa; color:lightslategrey;padding-top: 15px;'>";
}

?>

	What&#39;s your name?<br>
	<input class='secure_input' type="text" name="name" style='width:100%;' <?php if(isset($_SESSION['feedback_name'])){echo " value = '".$_SESSION['feedback_name']."'";} ?>>	<br>
	Your phone number?<br>
	<input class='secure_input'  type="text" name="number" style='width:100%;' <?php if(isset($_SESSION['feedback_number'])){echo " value = '".$_SESSION['feedback_number']."'";} ?>>		<br>
	Your email?<br>
	<input class='secure_input'  type="text" name="mail" style='width:100%;'		<?php if(isset($_SESSION['feedback_email'])){echo " value = '".$_SESSION['feedback_email']."'";} ?>>		<br>
	And what would you like to say?<br>
	<textarea rows='8' type="text" name="feedback" class='textarea_input' style='width:100%;font-family:Comfortaa;text-align:left;'></textarea><br><br>
	<input class='login-submit' type="submit" value="Contact us >>" style='width:100%;'>
</form>

<?php
//require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";