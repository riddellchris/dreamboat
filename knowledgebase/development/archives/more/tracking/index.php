<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/content/some_start_of_page_styling_etc.php";


//dummy chart of revenue and profit with goals
require $_SERVER['DOCUMENT_ROOT']."/tracking/revenue_and_profit/index.php";



echo "<div class='prompt-font'>";
	echo "keeping track of your critical variables, not only ensures success but keeps you on track to where you want to go.";
	echo "<br><br>";
	echo "our simple tracking functions allow you to declutter the noise into simple, critical variables so you can manage them, set goals in the right direction and achieve them too.";
	echo "<br><br>";
	echo "working alone or with your pilot you'll both find more success with this simple tracking function.";
	echo "<br><br>";
	echo "monitor revenues, profit, hours worked and productivity all in one simple solution so that you can drive all these critical variables forward each and every day.";
echo "</div>";

echo "<div class='prompt-font'>";
	//echo "";
	$url	= '/content/contact_us/';
	$copy = 'to request a walkthrough just click here';
	require $_SERVER['DOCUMENT_ROOT']."/components/content/pieces/contact_us_link.php";
echo "</div>";


require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";