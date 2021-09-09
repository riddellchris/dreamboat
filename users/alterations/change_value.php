<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/users/alterations/pieces/standard_top.php";

echo "<form action='edit_subscription_value.php?".url_folder_get_string_creation()."' method='post'>";
echo "<span class='prompt-font'>what is the value of ".$_SESSION['viewing_client_first_name']." ".$_SESSION['viewing_client_last_name']."&#39;s subscription now?</span>";
$value = $_SESSION['viewing_client_current_subscription_value'];
require $_SERVER['DOCUMENT_ROOT']."/users/alterations/pieces/standard_bottom.php";
