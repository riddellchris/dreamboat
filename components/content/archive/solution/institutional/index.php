<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/styling/main_css.php";
require $_SERVER['DOCUMENT_ROOT']."/components/content/components/code.php";


echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."A new independent <span style='color:red;'> productivity improvement </span> body is required.</div>";





	echo "<img src='/solution/institutional/diagrams/institutional.svg'  style='max-height:65vh;'>";



echo "<br><br>";echo "<br><br>";

echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."To <span style='color:red;'> faciliate & expedite productivity improvement & wage growth</span> with every member of the workforce.</div>";

echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."Thereby enabling a functioning economic system for the 21st century, and avoiding the <a href='/knowledgebase/economy/downside_risks/' style='color:red;' target='_blank'>downside risks</a> that lie ahead.</div>";

echo "<div class='prompt-font' style='".$container_div_class.";text-align:center;'><a href='/solution/general/' style='color:red;'>How would this occur? &nbsp;&nbsp;&nbsp;>></a></div>";

echo "<br><br><br><br>";


require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";