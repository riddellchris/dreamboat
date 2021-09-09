<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/content/some_start_of_page_styling_etc.php";

echo "<div class='prompt-font'>";
echo "
keeping your sales front of mind..<br><br>
//planned<br>
//prioritised<br>
//and flowing<br>
<br><br>
//all day every day
<br><br>";
////dumy funnel
require $_SERVER['DOCUMENT_ROOT']."/components/crm/funnel_display.php";

echo "
<br><br><br>
<br><br>
//with the combination of Dreamboat's interactive funnel you can try above, weekly meetings and regular reviews, you'll keep your sales flowing consistently each and every week.
";

echo "</div>";
echo "<div class='prompt-font'>";
	$url	= '/content/contact_us/';
	$copy 	= 'to request a walkthrough just contact us here';
	require $_SERVER['DOCUMENT_ROOT']."/components/content/pieces/contact_us_link.php";
echo "</div>";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";