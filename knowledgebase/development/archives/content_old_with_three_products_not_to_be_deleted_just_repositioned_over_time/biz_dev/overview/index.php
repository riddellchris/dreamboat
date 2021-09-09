<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/content/some_start_of_page_styling_etc.php";



//one to one tracking charts dummy 6-8 weeks wide some ups and downs

echo "<div class='prompt-font'>";
//not updating in weekly tracking because there isn't actually a user account  for user_id 2
require $_SERVER['DOCUMENT_ROOT']."/components/crm/weekly_tracking_display.php";



echo "
<br><br>
ensure your business development stays on track thanks to dreamboat's business development systems.<br><br><br>


//log your successes<br>
//prioritise your action<br>
//ensure consistency all in one simple platform<br><br><br><br>";

echo "
//track and focus on your referrers<br> 
//track your one to ones and events <br><br><br>
to build a clearer picture of what's really working<br>

combined with regular reviews and pilot assistance and you'll be flying in no time.";
echo "</div>";


echo "<div class='prompt-font'>";
	//echo "";
	$url	= '/content/contact_us/';
	$copy = 'to request a walkthrough just click here';
	require $_SERVER['DOCUMENT_ROOT']."/components/content/pieces/contact_us_link.php";
echo "</div>";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";