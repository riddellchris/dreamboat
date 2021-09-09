<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

require $_SERVER['DOCUMENT_ROOT']."/components/content/components/code.php";

echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."By applying the Dreamboat process to some or all of your organisation:</div>";

ECHO "<BR>";


echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."Productivity & profitability will increase.</div>";


echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."Staff will be happier and more engaged.</div>";


echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."Processess will simplify, waste will decrease.</div>";


echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."Growth will be easier and less stressful.</div>";

echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."So what's not to love?</div>";



echo "<div class='prompt-font' style='".$container_div_class."text-align:center;'><a href='/knowledgebase/' style='color:red;'>To learn more simply visit our knowledgebase here >></a></div>";

echo "<br><br><br><br><br><br><br><br>";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";