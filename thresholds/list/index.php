<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
//require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/top_of_centering_divs.php";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

echo "<a class='grey-button wide-button' style='padding-top:0px;' href='../../'>back</a>";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";

?>