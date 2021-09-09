<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/content/some_start_of_page_styling_etc.php";


//just leave this out for now as it's not a demo we have running - just text is more than fine
//very basic 4 layer word tree
//https://developers.google.com/chart/interactive/docs/gallery/wordtree

//target market
//angles
//channels
//promotions

echo "<div class='prompt-font'>";
echo "
no longer will your marketing be hit and miss thanks to Dreamboat's simple and reliable marketing planning systems.<br><br>

//define and prioritise your target markets<br>
//connect your channels<br>
//your promotions &<br>
//your marketing angles all in one simple solution.<br><br>

so your planning and prioritisng works with you and your business every day. <br><br>

take notes, assess success and improve all in one simple solution.<br><br><br>

";
echo "</div>";
echo "<div class='prompt-font'>";
	//echo "";
	$url	= '/content/contact_us/';
	$copy = 'to talk request a walkthrough just contact us here';
	require $_SERVER['DOCUMENT_ROOT']."/components/content/pieces/contact_us_link.php";
echo "</div>";


//in time this will expand to collect external data but this is not an issue today
//18.5.20
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";