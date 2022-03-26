<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

echo "<div style='width: 100%; text-align:center;margin-top: 25vh;'>";
    echo "<div class='prompt-font blink_me'><a href='/account/security/logout.php' style='color: red;'>start slideshow</a></div>";
echo "</div>";


require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
