<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/content/components/code.php";

echo $initial_div;

	echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."In one 20-30 minute conversation a fortnight.... </div>";

	echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."We continously map each individual's productivity network and the issues involved.... </div>";
		echo "<img src='https://dreamboat.com.au/solutions/initial_product/diagrams/mitigated_productivity_network.svg'  style='max-height:65vh;'>";	
			
	echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."Combine with other's in their network.</div>";
		echo "<img src='https://dreamboat.com.au/solutions/initial_product/diagrams/combined_networks.svg'  style='max-height:65vh;'>";	


	
	echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."Mix with other historical & predictive data...</div>";	
		//red stars	

	echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."...to optimise the whole network's productivity...</div>";
	echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."...then prioritise & mitigate the most critical issues...</div>";
		echo "<img src='https://dreamboat.com.au/solutions/initial_product/diagrams/critical_issues.svg'  style='max-height:65vh;'>";	



	echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."...and improve productivity for everyone.</div>";
	//	echo "<img src='https://dreamboat.com.au/solutions/initial_product/diagrams/mitigated.svg'  style='max-height:65vh;'>";	

		
	echo "<div class='prompt-font' style='".$container_div_class.";text-align:center;'><a href='/knowledgebase/' style='color:red;'>READ MORE >></a></div>";		

echo "<br><br><br><br>";

echo "</div>";	
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";