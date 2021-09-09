<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/users/alterations/pieces/standard_top.php";

echo "<form action='edit_business_name.php?".url_folder_get_string_creation()."' method='post'>";
echo "<span class='prompt-font'>what is the name of ".$_SESSION['viewing_client_first_name']." ".$_SESSION['viewing_client_last_name']."&#39;s business now?</span>";
$value = $_SESSION['viewing_client_business_name'];

require $_SERVER['DOCUMENT_ROOT']."/users/alterations/pieces/standard_bottom.php";

