<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";



require $_SERVER['DOCUMENT_ROOT']."/components/content/components/code.php";

echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."If we can sufficiently improve individual <a href='/knowledgebase/productivity/' style='color:red;' target='_blank'>productivity</a> across the economy.</div>";
	echo "<img src='/solutions/economic_normalisation/diagrams/Solution_2.svg'  style='max-height:65vh;'>";
	
echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."Wages can improve as some proportion of this improved productivity.</div>";
	echo "<img src='/solutions/economic_normalisation/diagrams/productivity_and_wage_growth.svg' style='max-height:65vh;'>";
	
echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."Economic growth can occur without more debt.</div>";
	echo "<img src='/solutions/economic_normalisation/diagrams/Solution_3.svg'  style='max-height:65vh;'>";
	
echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."GDP per capita, may stop decaying.</div>";
	echo "<img src='/solutions/economic_normalisation/diagrams/gdp_per_capita.svg'  style='max-height:65vh;'>";	
	
	
echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."Monetary policy may work again.</div>";
	echo "<img src='/solutions/economic_normalisation/diagrams/Solution_4.svg'  style='max-height:65vh;'>";
	
echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."And a <a href='/knowledgebase/about_us/vision' target='_blank' style='color:red;'>new direction</a> can be achieved...</div>";

echo "<div class='prompt-font' style='".$container_div_class.";text-align:center;'><a href='/solutions/initial_product/' style='color:red;'>NEXT >></a></div>";

echo "<br><br><br><br><br>";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";