<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

require $_SERVER['DOCUMENT_ROOT']."/components/content/components/code.php";

echo "<div class='prompt-font' style='".$container_div_class."color:red;'>As a member of the workforce and a user of Dreamboat you will benefit from:</div>";

echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."Less productivity sapping issues at work</div>";
echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."A happier working day</div>";
echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."Satisfaction from achieving more with less every day</div>";
echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."And ultimately more money in the bank as a result of this success.</div>";


echo "<div class='prompt-font' style='".$container_div_class.";text-align:center;'><a href='/impact/on_businesses/' style='color:red;'>And what about businesses? &nbsp;&nbsp;&nbsp;>></a></div>";

echo "<br><br><br><br>";


require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";