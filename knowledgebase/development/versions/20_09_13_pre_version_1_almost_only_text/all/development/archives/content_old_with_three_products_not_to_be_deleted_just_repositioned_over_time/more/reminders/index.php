<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/content/some_start_of_page_styling_etc.php";

echo "
<style>
	.reminders{	
		padding:10px 12px 14px;
		margin-left:0px;
		background-color:#ff0000;
		float:right;
	}
	.reminders:hover{
		background-color:#ad0707;
	}
	.reminders.nav-links:hover{color:#ffffff;}
</style>";

echo "<div id='reminder_div' class='hidden' style='background-color: #45c14c;padding:8px;'>";
require $_SERVER['DOCUMENT_ROOT']."/components/reminders/display.php";
	echo "</div>";
//sample box - review this promotion

echo "<div class='prompt-font'>";
echo "so you don't miss a beat our reminder system helps you keep track of those burning issues and set your own checkpoints as you need<br> it really is that simple<br><br>

set your own reminder, date and be notified within the system and by email as you required.<br><br>

Keeping both you and your pilot on track as you require.<br><br>


";
echo "</div>";
echo "<div class='prompt-font'>";
	//echo "";
	$url	= '/content/contact_us/';
	$copy = 'to talk to our team just click here';
	require $_SERVER['DOCUMENT_ROOT']."/components/content/pieces/contact_us_link.php";
echo "</div>";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";