<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_detailed('yes',10,8,8,"While there are some issues with productivity measurements (mostly around the direct & perfect comparison of apples with apples):");
	list_start();
		point_detailed_start('no',8,8,8,"Individual productivity seems to be improving when measured by pre/post Dreamboat implementations by 5% within 6 months, based on very simple awareness improvement, waste reduction and value improvement calculations.<br>
		<span style='color:grey;'>That said it isn't uncommon to see up to a 10% improvement within the first 6 months due to rapid cleanup/improvement processes.</span>");point_end_only();
			list_start();	
				point_detailed_start('yes',6,8,8,"This is most commonly achieved by removing waste and lowest efficiency use of: time, tasks, resources & communication that surround almost all individuals.");point_end_only();
				//point_detailed_start('yes',6,8,8,"For more information on the issues that are removed, <a href='/knowledgebase/productivity/issues/'>click here</a>");point_end_only();	
				point_detailed_start('no',6,8,8,"This rate of improvement is not guaranteeable for all clients all the time.");point_end_only();									
			list_end();	
			
			
		point_detailed_start('no',6,8,8,"This improvement seems sufficient to satisfy the <a target='_blank' href='/knowledgebase/economy/potential_solution/'>economic objectives</a> if uptake rates are sufficient and don't diminish the results of others as uptake increases.");point_end_only();	
		point_detailed_start('no',6,8,8,"This obviously neglects blind or double blind studies so far.");point_end_only();	
		point_detailed_start('no',6,8,8,"It does however include comparative staff performances where some staff continue with use of Dreamboat and others not.");point_end_only();		
				

		$copy = "As we get better data in a state of reliability and functionality for public release we will always release those updates here.";
		require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/notifiers/fact.php";

		$copy = "While we hope these results continue we don't expect to be able to carry them all the way through to the entire economy at such high rates.";
		require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/notifiers/fact.php";		
		
		//in terms of sufficient quantity tests///
		
	
	list_end();


require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";
