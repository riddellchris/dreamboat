<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/start_of_page_top_of_centering_divs.php";
require $_SERVER['DOCUMENT_ROOT']."/support/styling.php";
?>
<h2 class='prompt-font'>Need support?<br><small> Message us and we&#39;ll get back to you in no time flat </small></h2>

<style>
.secure_input{margin-bottom:15px;}
</style>


<form action="submit.php" method="post" style='font-family:Comfortaa; color:lightslategrey;padding-top: 15px;'>
What&#39;s your name?:<br>
<input class='secure_input' type="text" name="name"><br>
Your phone number?:<br>
<input class='secure_input'  type="text" name="number"><br>
Your email?:<br>
<input class='secure_input'  type="text" name="mail"><br>
And how can we help?<br>
<textarea rows='8' type="text" name="feedback" class='textarea_input' style='max-width:400px;font-family:Comfortaa;text-align:left;'></textarea><br><br>
<input class='login-submit' type="submit" value="Get support >>">
</form>


<?php
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>