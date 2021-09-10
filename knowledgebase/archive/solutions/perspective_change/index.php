<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/content/components/code.php";

echo $initial_div;
	echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."If we view the economy as a set of productivity networks... </div>";
		echo "<img src='/solutions/perspective_change/diagrams/networks.svg'  style='max-height:65vh;'>";	

	echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."...where individuals are in control of everything...</span></div>";	
		echo "<br>";	
	
	echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."...we can reduce the economy to related individual productivity networks like this... </span></div>";
		echo "<img src='/solutions/perspective_change/diagrams/individual_no_issues.svg'  style='max-height:65vh;'>";	
		echo "<br>";	

	echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."...where vs the model of collective optimal productivity issues can easily be identified, measured and removed.  </span></div>";
		echo "<img src='/solutions/perspective_change/diagrams/individual_with_issues.svg'  style='max-height:65vh;'>";	
		echo "<br>";	

	echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."Not all issues will be able to be removed by the individual...  </span></div>";
		echo "<br>";	
	echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."...but the vast majority will be able to be mitigated...  </span></div>";
		echo "<img src='/solutions/perspective_change/diagrams/mitigated_productivity_network.svg'  style='max-height:65vh;'>";	
		echo "<br>";	
		
		
	echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."...creating more individual, business and economic productivity...</span></div>";
		echo "<br>";	
		
	echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."...for individuals & businesses alike.</span></div>";
		echo "<br>";
	echo "<div class='prompt-font' style='".$container_div_class."color: lightgrey;font-size: larger;text-align:center;'>N.B. This is about helping individuals re-orgainse their productivity networks not just work harder, be more motivated, just squeezing more out of anyone etc.</span></div>";
		echo "<br>";		
	echo "<div class='prompt-font' style='".$container_div_class.";text-align:center;'><a href='/solutions/economic_normalisation/' style='color:red;'>NEXT >></a></div>";		



echo "<br><br><br><br>";

echo "</div>";	
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";