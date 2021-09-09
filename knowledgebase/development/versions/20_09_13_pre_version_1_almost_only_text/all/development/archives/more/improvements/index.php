<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/content/some_start_of_page_styling_etc.php";


//three to four box list of dummy improvements to the business
//update branding
//expand and improve contracts for new clients
//improve internal processes
//hire new part time staff member

require $_SERVER['DOCUMENT_ROOT']."/components/lists/display_list.php";


echo "<div class='prompt-font'>";



echo "
don't get bogged down by all the things you could, should or would love to be doing to improve your business thanks to dreamboat's improvement planning systems.<br><br><br>
";

echo "helping you focus on selling more today we'll capture all those thoughts so that you can relax and focus on today, bringing them out as required and critical for your success.<br><br>";

echo "it really is that simple.";
echo "</div>";


echo "<div class='prompt-font'>";
	//echo "";
	$url	= '/content/contact_us/';
	$copy = 'to request a walkthrough just click here';
	require $_SERVER['DOCUMENT_ROOT']."/components/content/pieces/contact_us_link.php";
echo "</div>";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";