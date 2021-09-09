<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/content/some_start_of_page_styling_etc.php";


//dummy org chart

echo "<div class='prompt-font'>";
echo "
no longer will your management issues get in the way of your success with Dreamboat's simple management area.<br><br>
Track your staff, assets, clients and more in a simple fashion such that you can document what's going on and move forward as fast as possible.<br><br>
All too often sales and marketing and impacted, delayed and limited by management concerns so that's why we are about helping you move through them as fast as possible.

";

echo "</div>";

echo "<div class='prompt-font'>";
	//echo "";
	$url	= '/content/contact_us/';
	$copy = 'to talk to our team just click here';
	require $_SERVER['DOCUMENT_ROOT']."/components/content/pieces/contact_us_link.php";
echo "</div>";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";