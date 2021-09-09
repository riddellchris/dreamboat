<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

require $_SERVER['DOCUMENT_ROOT']."/components/content/components/code.php";

echo "<div class='prompt-font' style='".$container_div_class."'>By applying the Dreamboat process to some or all of your organisation:</div>";

ECHO "<BR>";


echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."Productivity will increase across the board</div>";

echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."Profits will increase as staff productivity rises</div>";

echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."Staff will be happier and more engaged.</div>";

echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."And stress will decrease as issues are removed.</div>";


echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."Processess will simplify, staff will drive incremenatal improvements and waste will decrease too.</div>";

echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."Ultimately you business will become simpler to handle and more enjoyable for everyone.</div>";

echo "<div class='prompt-font' style='".$container_div_class.";text-align:center;'><a href='/impact/on_economies/' style='color:red;'>And the economy? &nbsp;&nbsp;&nbsp;>></a></div>";

echo "<br><br><br><br>";


require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";