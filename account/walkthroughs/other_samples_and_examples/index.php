<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

echo "<div style='width: 100%; text-align:center;margin-top: 25vh;'>";
    echo "<div class='prompt-font'>Everyone wants to see a gauge</div>";

    echo "
    <div id='chart_div' style='width: 400px; height: 120px; margin: auto;'></div>";
echo "</div>";


require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
