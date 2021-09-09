<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/content/components/code.php";


echo "<div style='display:inline-block; position:relative;'>";


	echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."Using comparative data we help people learn the <span style='color:red;'>fastest route</span> to improving their productivity&nbsp;... </div>";
		echo "<img src='/processes/individual/diagrams/fastest_path_forward.svg'  style='max-height:65vh;'>";	
	
	
	

	echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."... and enable continuous improvement with <span style='color:red;'>consistent feedback, insight, advice & encouragement</span></div>";	
	ECHO "<BR>";	
	
	ECHO "<div class='prompt-font' style='".$container_div_class."'><span style='color:red;'>STEP #1:</span><br><a href='/knowledgebase/product/reporting/' target='_blank' style='color:red;'>Confidentially</a> identify, address and remove the critical issues impacting productivity with each user.</div>";
		echo "<img src='/processes/individual/diagrams/process_1.svg'  style='max-height:65vh;'>";
		
	echo "<div class='prompt-font' style='".$container_div_class."'><span style='color:red;'>STEP #2:</span><br>
		Optimise activities based on time spent and value created.
		</div>
		";	
		echo "<img src='/processes/individual/diagrams/process_2.svg'  style='max-height:65vh;'>";
		
	echo "<div class='prompt-font' style='".$container_div_class."'><span style='color:red;'>STEP #3:</span><br>Assess and address opportunities for improved productivity across all <a target='_blank' href='/knowledgebase/productivity/factors/' style='color:red;'>factors</a>.</div>";	
		echo "<img src='/processes/individual/diagrams/process_3.svg'  style='max-height:65vh;'>";	
		
	echo "<div class='prompt-font' style='".$container_div_class."'><span style='color:red;'>STEP #4:</span><br>Bring forward the most critical improvements for the coming fortnight.</div>";	
		echo "<img src='/processes/individual/diagrams/process_4.svg'  style='max-height:65vh;'>";		

	echo "<div class='prompt-font' style='".$container_div_class."'><span style='color:red;'>STEP #5:</span><br>Document all information for future optimisation for this user and all users</div>";	




		echo "<img src='/processes/individual/diagrams/Individual.svg'  style='max-height:65vh;'>";



		
	echo "<div class='prompt-font' style='".$container_div_class."'>".$arrow."All in one simple <a href='/knowledgebase/initial_product/' target='_blank' style='color:red;'>solution</a>.</div>";
	
	echo "<div class='prompt-font' style='".$container_div_class.";text-align:center;'><a href='/processes/businesses/' style='color:red;'>What impact will occur on businesses? >></a></div>";		

echo "<br><br><br><br>";

echo "</div>";	
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";