<?php
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/support/styling.php";
?>

<form action='reset_password_action.php' method='post' style='margin-top:30vh;text-align:center;'>
	<div class='login-cells prompt-font'>
		Enter your
	</div>
	<div class='login-cells'>
		<input class='secure_input' name='email' placeholder='email' style='text-align:center;' autofocus></input>
	</div>
	<div class='login-cells'>
		<input type='submit' value='and reset it >>' class='login-submit' style='text-align:center;'></input>
	</div>
</form>

<?php
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>