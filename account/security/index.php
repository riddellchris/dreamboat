<?php
if(!isset($_SESSION)){session_start();}

$show_login_page = 'yes';

if(isset($_SESSION['logged_in'])){
	if($_SESSION['logged_in'] == 'yes'){	$show_login_page == 'no'; header("Location: https://www.dreamboat.com.au/"); exit();}
}

if($show_login_page == 'yes'){

	require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
	require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/start_of_page_top_of_centering_divs.php";
	
	
	echo "	<form action='/account/security/login_submit.php' method='post'>
	
	
	
			<div class='login-form' style='max-width:400px;padding-top:30px;padding-bottom:30px;text-align:center;margin-left:auto;margin-right:auto;'>
				<div class='login-cells prompt-font' style='text-shadow: 0px 0px 0px grey;'>";
		 		if(isset($_SESSION['reseting_password_for_user_id'])){echo 'now ';}
	
			      if(isset($_SESSION['message'])){echo "try again";unset($_SESSION['message']);}
			      else{
			      	if(!isset($_SESSION['reseting_password_for_user_id'])){echo "<span style='color:red'>welcome</span>";}
			      		echo"<br>Please enter";
			      	}
		
				unset($_SESSION['reseting_password_for_user_id']);
				unset($_SESSION['reseting_password_for_first_name']);
	
				
	echo "	
	
	
		</div>
		<div class='login-cells'>
			<input class='secure_input' name='email' placeholder='your email' style='text-align:center;' autofocus></input>
		</div>
		<div class='login-cells'>
			<input class='secure_input' type='password' name='password' placeholder='and password' style='text-align:center;'></input>
		</div>
		<div class='login-cells'>
			<input type='submit' value='and come aboard' class='login-submit' name='attempt_to_login' style='text-align:center;'></input>
		</div>
		<div class='login-cells'>
			<span class='prompt-font' style='color:#cecece;'>OR</span>
	
		</div>
		<div class='login-cells'>
			<a type='submit'  class='grey-button wide-button'  href='/account/security/reset_password.php'>reset your password</a>
	
		</div>
	</div> 
	</form>";
	

	require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/end_of_page_bottom_of_centering_divs.php";
	require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";

}
?>