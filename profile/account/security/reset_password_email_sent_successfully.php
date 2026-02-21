<?php
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
?>

<form action='reset_password_action.php' method='post'  style='margin-top:30vh;text-align:center;'>
	<div class='login-cells prompt-font'>
		NOT TO BE BLUNT...<BR>
		BUT CHECK YOUR INBOX<br>
		And your spam folder<br>
		to find your <span style='color:red;'>password reset</span> email
	</div>
	<?php
	echo "<br>";
	echo "<a class='grey-button wide-button' style='padding-top:0px;' href='/account/security/'>back</a>";
	?>
</form>

<?php
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>