<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/users/alterations/pieces/standard_top.php";

echo "<form action='edit_email_address.php?".url_folder_get_string_creation()."' method='post'>";
echo "<span class='prompt-font'>what is ".$_SESSION['viewing_client_first_name']." ".$_SESSION['viewing_client_last_name']."&#39;s email now?</span>";
$value = $_SESSION['viewing_client_email'];
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/submits/standard.php";
echo "</form>";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/end_of_page_bottom_of_centering_divs.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
