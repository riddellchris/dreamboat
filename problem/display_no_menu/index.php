<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

require $_SERVER['DOCUMENT_ROOT']."/components/content/components/code.php";

echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."The Australian <a href='/knowledgebase/economy/' style='color:red;' target='_blank'>economy</a> is decaying, with significant <a href='/knowledgebase/economy/disaster/downside_risks/' target='_blank' style='color:red;'>downside risks</a>.</div>";

ECHO "<BR>";


echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."Monetary policy is becoming <span style='color: red;'>defunct</span>.</div>";


echo " <style>

		.eco_div{width:90%;padding-left:8%;}
	</style>";

echo "<br><br>";
echo "<div class='eco_div'>";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/problem/interest_rate_chart/div.php";
echo "</div>";

echo "<br><br>";
echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."Household debt is <span style='color: red;'>maxed out</span>.</div>";
	echo "<div class='eco_div'>";
	require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/problem/household_debt_to_gdp/div.php";
	echo "</div>";

echo "<br><br>";
echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."<span style='color: red;'>Growth is decaying</span>.</div>";
	echo "<div class='eco_div'>";
	require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/problem/gdp_percentage_change/div.php";
	echo "</div>";
	
echo "<br><br>";
echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."<span style='color:red;'>Worse still,</span> GDP per capita is decaying even faster.</div>";
	echo "<div class='eco_div'>";
	require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/problem/gdp_per_capita/div.php";
	echo "</div>";
	
echo "<br><br>";
echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."Wages are struggling to consistently improve above inflation.</div>";
	echo "<div class='eco_div'>";
	require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/problem/wages/div.php";
	echo "</div>";
	
echo "<br><br>";
echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."And productivity has started to flatline.<small style='color: lightgrey;'>(excluding a COVID statistical blip)</small></div>";
	echo "<div class='eco_div'>";
	require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/problem/productivity/div.php";
	echo "</div>";	
	
echo "<br><br><br><br>";
echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."Government spending can't change the future sustainably.</div>";
echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."It's unlikely policy changes can fix this either.</div>";
echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."And <a href='https://www.rba.gov.au/monetary-policy/' target='_blank' style='color:red;'>monetary policy</a> seems to be largely dead now.</div>";
echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."To avoid the <a href='/knowledgebase/economy/downside_risks/' target='_blank' style='color:red;'>risks</a> ahead and continued decay.....</div>";
echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."... a new solution is required.</div>";

echo "<div class='prompt-font' style='".$container_div_class.";text-align:center;'><a href='/solutions/perspective_change/' style='color:red;'>NEXT>></a></div>";

echo "<br><br><br><br>";


require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";