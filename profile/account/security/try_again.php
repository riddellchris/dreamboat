<?php
if(!isset($_SESSION)){session_start();}
if($_SESSION['logged_in'] == 'yes'){header("Location: https://dreamboat.co");exit();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
?>


<form action='login/submit.php' method='post'>
	<div style ='display: table; width:100%;height:100%;text-align:center;overflow: hidden;'>
		<div style ='display: table-cell; vertical-align: middle;'>
			<div class='login-cells prompt-font' style='font-family:helvetica;text-transform:uppercase;font-size:28px;color:#281e96;'>
				that&#39;s not it
			</div>
			<div class='login-cells'>
				<input  class='secure_input' name='email'	placeholder='please enter your email' style='text-align:center;' autofocus></input>
			</div>
			<div class='login-cells'>
				<input class='secure_input'  type='password' name='password' placeholder='and password' style='text-align:center;'></input>
			</div>
			<div class='login-cells'>
				<input type='submit' value='try again' class='login-submit' name='attempt_to_login' style='text-align:center;'></input>
			</div>
			<!--
			<div class='login-cells '>
				<input type='submit' class='no-button' value='or reset your password' name='reset_password' style='text-align:center;'></input>
			-->
			</div>
		</div>
	</div>
</form>

<?php
require $_SERVER['DOCUMENT_ROOT']."/components/standard_page/layouts/end.php";
?>