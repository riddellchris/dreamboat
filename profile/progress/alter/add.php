<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
	
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/start_of_page.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/start_of_page_top_of_centering_divs.php";


echo "<form action='/profile/progress/alter/add_submit.php' method='post'>";
echo "<span class='prompt-font'>What progress has been made?</span>";
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/submits/standard.php";
echo "</form>";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/end_of_page_bottom_of_centering_divs.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/end_of_page.php";
?>