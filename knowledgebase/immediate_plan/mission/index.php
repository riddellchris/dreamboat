<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";


paragraph_detailed('yes',10,10,8,"Our most immediate mission is to set Australia's economy on a sustainable path for the coming century to maintain Australia's way of life and avoid an <a href='/knowledgebase/economy/problem/' target='_blank'>economic disaster</a> neither the RBA nor politicians seem to know how to fix.");

paragraph_detailed('no',8,8,8,"As a result we are:");

list_start();
point_detailed_start('no',10,10,10,"Implementing a simple and effective means of workforce productivity improvement to stimulate productivity and profitability, enabling growth and employment.");point_end_only();
 	list_start();
		point_detailed_start('yes',10,10,10,"Starting where we know we help most already, being staff and directors of small businesses where opportunity is everywhere, processes are lacking and simplicity always pays dividends.");point_end_only();
		point_detailed_start('no',10,10,10,"Expanding into other areas as our technology and systems allow.");point_end_only();
	list_end();
point_detailed_start('no',10,10,10,"Ensuring, enabling and facilitating consistent productivity improvement of each and every member of the workforce with only 20-30 minutes every other week.");point_end_only();
point_detailed_start('no',10,10,10,"Treating each and every employee as a micro-business within a business to improve their 'profitability' and therefore the profitability of the business as a result.");point_end_only();
point_detailed_start('no',10,10,10,"Systematically removing productivity sapping issues that impede each worker, and therefore each business and therefore the economy as a whole.");point_end_only();



		//fact.php
		$copy = "We fully comprehend the people, technology and additional resources to achieve this mission.";		
		require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/notifiers/fact.php";
list_end();








require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";