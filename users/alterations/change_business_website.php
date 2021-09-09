<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/users/alterations/pieces/standard_top.php";

echo "<form action='edit_business_website.php?".url_folder_get_string_creation()."' method='post'>";
echo "<span class='prompt-font'>what is the web address of ".$_SESSION['viewing_client_first_name']." ".$_SESSION['viewing_client_last_name']."&#39;s now?</span>";
$value = $_SESSION['viewing_client_business_website'];
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/submits/standard.php";
echo "</form>";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/end_of_page_bottom_of_centering_divs.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
