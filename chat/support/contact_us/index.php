<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/start_of_page_top_of_centering_divs.php";
require $_SERVER['DOCUMENT_ROOT']."/support/styling.php";
?>




<form action="submit.php" method="post" style='font-family:Comfortaa; color:lightslategrey;padding-top: 15px;'>
	What&#39;s your name?<br>
	<input class='secure_input' type="text" name="name" autofocus><br>
	Your phone number?<br>
	<input class='secure_input'  type="text" name="number"><br>
	Your email?<br>
	<input class='secure_input'  type="text" name="mail"><br>
	And what would you like to say?<br>
	<textarea rows='8' type="text" name="feedback" class='textarea_input' style='max-width:400px;font-family:Comfortaa;text-align:left;'></textarea><br><br>
	<input class='login-submit' type="submit" value="Contact us >>">
</form>


<?php
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/end_of_page_bottom_of_centering_divs.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>