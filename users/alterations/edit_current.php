<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/layouts/start_of_page.php";
require $_SERVER['DOCUMENT_ROOT']."/layouts/start_of_page_top_of_centering_divs.php";
?>

<form action='add_new_submit.php' method='post'>

<input class='secure_input' name='first_name' placeholder = 'first name'></input><br>
<input class='secure_input'  name='second_name' placeholder = 'second name'></input><br>
<input class='secure_input'  name='phone_number' placeholder = 'phone number'></input><br>
<input class='secure_input'  name='email' placeholder = 'email'></input><br>
<input class='secure_input'  name='business_name' placeholder = 'business name'></input><br>

	
<input type = 'submit' class='login-submit'>
</form>

<?
require $_SERVER['DOCUMENT_ROOT']."/layouts/end_of_page_bottom_of_centering_divs.php";
require $_SERVER['DOCUMENT_ROOT']."/layouts/end_of_page.php";
?>