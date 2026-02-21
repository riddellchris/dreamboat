<?php
require $_SERVER['DOCUMENT_ROOT']."/components/functions/required_functions.php";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/start_of_page_top_of_centering_divs.php";
//must be a sub menu in here somewhere
//current subscription
//payments made
//contact us
echo "<span class='prompt-font'>
		Your current subscription is.... 
	</span>";
require $_SERVER['DOCUMENT_ROOT']."/account/pieces/back_button.php";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>