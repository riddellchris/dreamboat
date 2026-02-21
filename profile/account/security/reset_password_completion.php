<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

if(!isset($_SESSION['reseting_password_for_first_name']) &&
   !isset($_SESSION['reseting_password_for_user_id'])){
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT * FROM user_account_details WHERE password_reset_key = '".$_GET['token']."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$_SESSION['reseting_password_for_first_name'] = $row['first_name'];
$_SESSION['reseting_password_for_user_id'] = $row['user_id'];
}

?>

<form action='reset_password_completion_action.php' method='post' style='margin-top:30vh;text-align:center;'>
	<div class='login-cells prompt-font'>
		OK now <?php echo $_SESSION['reseting_password_for_first_name']; ?> what&#39;s your new password?
	</div>
	<div class='login-cells'>
		<input type='password' class='secure_input' name='password1' placeholder='once' style='text-align:center;' autofocus></input>
	</div>
	<div class='login-cells'>
		<input type='password' class='secure_input' name='password2' placeholder='twice' style='text-align:center;'></input>
	</div>
	<div class='login-cells'>
		<input type='submit' value='and reset' class='login-submit' style='text-align:center;'></input>
	</div>
</form>

<?php
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>