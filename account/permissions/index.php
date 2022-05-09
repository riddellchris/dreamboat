<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/start_of_page_top_of_centering_divs.php";


echo "<span class='prompt-font'>When you have more users than you, we can worry about permissions.</span>";



require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>