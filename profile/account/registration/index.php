<?php 
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php"; 
?>

<form action="register_to_db.php" method="post">
	<div class='login-cells prompt-font'>
		Register for Dreamboat
	</div>
	
	<?php
	if(!isset($_SESSION)){session_start();}
	if(isset($_SESSION['rego_error'])){echo"
	<div class='login-cells error-message'>
	".$_SESSION['rego_error']."	
	</div>";
	unset($_SESSION['rego_error']);
	}
	?>
	
	
	<div class='login-cells'>
		<input class='secure_input'  name='first_name' type='text' placeholder='with your first name' size='14' autofocus></input>
	</div>
	<div class='login-cells'>
		<input class='secure_input'  name='second_name' type='text' placeholder='your last/surname' size='14' ></input>
	</div>
	<div class='login-cells'>
		<input class='secure_input'  name='phone' type='text' placeholder='your digits' size='14' ></input>
	</div>
	<div class='login-cells'>
		<input class='secure_input'  name='email1' type='text' placeholder='your@email.com' size='30' ></input>
	</div>
	<div class='login-cells'>
		<input class='secure_input'  name='email2' type='text' placeholder='your@email.again.com' size='30' ></input>
	</div>
	<div class='login-cells'>
		<input class='secure_input'  name='password1' type='password' size='30' placeholder='your password'></input>
	</div>
	<div class='login-cells'>
		<input class='secure_input'  name='password2' type='password' size='30' placeholder='your password confirmation'></input>
	</div>
	<div class='login-cells'>
		<input type='submit' value='let&#39;s do it' class='login-submit' ></input>
	</div>
	
	<?php
	echo "<br>";
	echo "<a class='grey-button wide-button' style='padding-top:0px;' href='../../'>back</a>";
	?>

</form>

<?php require $_SERVER['DOCUMENT_ROOT'].'/components/layouts/standard_page/end.php';?>