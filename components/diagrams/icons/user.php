<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

echo "<br><br><br><br><br><br><br><br><br><br><br><br>";
echo "<div style='text-align: center;font-size: 800px;'>";
echo "<i class='fas fa-user' style=''></i>";
echo "</div>";
