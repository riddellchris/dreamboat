<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/content/some_start_of_page_styling_etc.php";

//sample list of systematic reviews on live on the page
//most interesting review input page

echo "<div class='prompt-font'>";
echo "
our reviews platform keeps your data up to date as you need it.<br><br>
Rather than requesting input after input we are all about helping you put in the data that really matters when it actually matters.<br><br>

Update your data with periodic reviews such as:<br>
//networking and sales reviews<br><br>

Or review your progress weekly to keep yourself on track
All thanks to Dreamboat's review program.<br>

";
echo "</div>";
echo "<div class='prompt-font'>";
	//echo "";
	$url	= '/content/contact_us/';
	$copy = 'to learn more about this feature just contact us here';
	require $_SERVER['DOCUMENT_ROOT']."/components/content/pieces/contact_us_link.php";
echo "</div>";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";




?>