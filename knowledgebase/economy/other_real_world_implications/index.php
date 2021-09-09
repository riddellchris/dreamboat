<?php
if(!isset($_SESSION)){session_start();}


require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

	paragraph_detailed('no',8,8,8,"Further to the <a href='/knowledgebase/economy/problem/' target='_blank'>economic problem</a> and the list of significant <a href='/knowledgebase/economy/downside_risks/'>downside risks</a> - other real world implications are:");
	
	list_start();	

	
			
		echo "<br><br>";
		point_detailed_start('yes',10,8,8,"<a href='https://www.investopedia.com/terms/a/austerity.asp' target='_blank'>Austerity</a>");point_end_only();	
			list_start();		
			//	point_detailed_start('no',10,8,8,"In attempts to get thIf we cannot lift monetary policy back into a 'reasonable realm' that is well above zero then we run the risk of one shock enabling hyperinflation.");point_end_only();
	
			list_end();	



		echo "<br><br>";
		point_detailed_start('yes',10,8,8,"<a href='https://www.investopedia.com/terms/s/stagnation.asp' target='_blank'>Stagnation</a>");point_end_only();	
			list_start();		
		//		point_detailed_start('no',10,8,8,"If we cannot lift monetary policy back into a 'reasonable realm' that is well above zero then we run the risk of one shock enabling hyperinflation.");point_end_only();
	
			list_end();		



	list_end();


echo "<br><br><br>";
		
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";