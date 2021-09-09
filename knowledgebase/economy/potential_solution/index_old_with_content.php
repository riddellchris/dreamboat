<?php
if(!isset($_SESSION)){session_start();}



require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_detailed('no',10,10,10,"An economic solution would:");
list_start();
	point_detailed_start('yes',10,10,10,"Achieve economy wide, real productivity improvement, greater than inflation itself.");
		paragraph_middling('no',8,7,6,"<br>Therefore enabling some real wage growth independent of population or debt growth.");
	point_end_only();
	
	point_detailed_start('yes',10,10,10,"Be independent of government policy change risk, implementation and reliability issues.
						<br> 
						<span style='color:grey;'>This does not mean we are against government in general.</span>");
	point_end_only();
	point_detailed_start('yes',10,10,10,"Require the smallest possible change for the greatest possible benefit.</span>");
	point_end_only();

list_end();

echo "<br>";
paragraph_detailed('no',9,10,10,"And most likely would:");
list_start();
	point_detailed_start('yes',9,10,10,"Be driven by the people themselves.");	
	point_end_only();			
	point_detailed_start('no',9,10,10,"Start at the point closest to stagnated wages being the wage earner themselves.");
	point_end_only();			
	point_detailed_start('no',9,9,7,"Achieve productivity improvements of somewhere close to 10% p.a. to enable wage real wage growth of 1-2%.");       
	point_end_only();		       
list_end();
echo "<br>";			

paragraph_detailed('no',7,10,10,"And to be effective would need to:");		
list_start();
	point_detailed_start('no',7,10,10,"Need to be financially sustainable without government assistance.");
	point_end_only();	
	point_detailed_start('no',7,10,10,"Would have low barriers to entry and operation for the vast majority of the Australian economy.");
	point_end_only();	
	point_detailed_start('no',7,10,8,"Produce real cash benefits above an beyond cash outlays in a consistent and reliable fashion.");
	point_end_only();	

list_end();	
echo "<br>";

paragraph_detailed('no',5,10,10,"Therefore, most likely would also:");	
list_start();
	point_detailed_start('yes',5,10,10,"Use significant technology, to serve effective numbers of the economy in a reliable fashion.");
	point_end_only();
	point_detailed_start('no',5,10,10,"Not cost much 'more than a phone plan' per employee to limit intial implementation costs and cash flow issues.");
	point_end_only();			
	point_detailed_start('no',5,10,10,"Remove issues limiting and surrounding individual employee productivity.");
	point_end_only();			
	point_detailed_start('no',5,10,8,"Not require more management time in almost any way shape or form.");
	point_end_only();			
	point_detailed_start('yes',5,10,10,"Would turn every employee into an effective agent for productivity improvement.");		
	point_end_only();
list_end();	
		

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";