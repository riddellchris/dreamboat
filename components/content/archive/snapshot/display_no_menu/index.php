<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/content/components/code.php";

echo $initial_div;

//in short doing everything we can to save Australia's economy

echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."We are mapping, monitoring and optimising Australia's productivity networks to maximise:</div>";
	echo "<img src='/solution/display_no_menu/diagrams/Solution_2.svg'  style='max-height:65vh;'>";
	
echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."Profitability by improving productivity....</div>";

echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."Wages by thanks to increased outputs....</div>";

echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."Employment thanks to increased spending....</div>";

echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."& economic growth thanks all of the above.</div>";
	echo "<img src='/solution/display_no_menu/diagrams/productivity_and_wage_growth.svg' style='max-height:65vh;'>";
	
echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."We're doing this to avoid the economic disasters ahead...</div>";
	echo "<img src='/solution/display_no_menu/diagrams/Solution_3.svg'  style='max-height:65vh;'>";

echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."& create a stable economic future for Australia and the world.</div>";

echo "<div class='prompt-font' style='".$container_div_class.";text-align:center;'><a href='/problem/' style='color:red;'>NEXT>></a></div>";

//echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."Thanks to a non-government organisation targeting solving the economic problem, not winning votes.</div>";
echo "<br><br><br><br><br>";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";