<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/start_of_page_top_of_centering_divs.php";
echo "	<span class='prompt-font'>
		Sorry this page isn&#39;t yet active for you

	</span>";
//this should track improvmenets, new meeting with people, and rating them
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";