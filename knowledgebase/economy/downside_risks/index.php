<?php
if(!isset($_SESSION)){session_start();}

//header("Location: /knowledgebase/economy/disaster/downside_risks/");
//exit();

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

	paragraph_detailed('no',8,8,8,"Further to the simplified <a href='/knowledgebase/economy/problem/' target='_blank'>economic disaster</a> a more complete list of risks to the nation and economy are as follows:");
	
	list_start();	
		point_detailed_start('yes',10,8,8,"Asset price falls");point_end_only();	
			list_start();			
		
				point_detailed_start('no',8,8,8,"&nbsp;&nbsp;If the <a href='https://en.wikipedia.org/wiki/Wealth_effect' target='_blank' style='color:red;'>wealth effect</a> of seemingly ever increasing house & asset values starts to fail and takes <a href='https://tradingeconomics.com/australia/consumer-confidence' target='_blank' style='color:red;'>consumer confidence</a> with it, a destructive 'decreasing wealth effect' cycle may take hold.");
					list_start();		
						point_detailed_start('no',6,8,8,"This would be increasingly troubling with retirees who decrease spending as their nest eggs devalue.");point_end_only();	
					list_end();
			list_end();



		echo "<br><br>";
		point_detailed_start('yes',10,8,8,"Political uncertainty");point_end_only();	
			list_start();	
				point_detailed_start('no',8,8,8,"Our politicians don't even seem to know how to get out of this situation, at the very least they are not painting a clear picture to anyone of what the future holds for the country.");point_end_only();
					list_start();
					point_detailed_start('no',6,8,8,"They seem ideologically stuck. And perhaps we are at a point in time where the tools they have available for any number of reasons aren't the right ones to solve the problem.");point_end_only();		
					list_end();
			list_end();


			
		echo "<br><br>";
		point_detailed_start('yes',10,8,8,"Confidence");point_end_only();	
			list_start();							
				point_detailed_start('no',8,8,8,"Instability and lack of direction creates stress and confidence across the economy which if not corrected will only compound negative growth.");point_end_only();	
			list_end();		
		
		
						
		echo "<br><br>";			
		point_detailed_start('yes',10,8,8,"Demographic imbalances");point_end_only();	
			list_start();							
				point_detailed_start('no',8,8,8,"As both the workforce ages and the population ages, increasing retirement populations don't help the burden rectify government spending as voters are increasingly out of the workforce. Further to that as the future looks more uncertain birth and immigration rates decline only compounding the future imbalances.");point_end_only();	
			list_end();			
			
			
	
		echo "<br><br>";
		point_detailed_start('yes',10,8,8,"Identity");point_end_only();	
			list_start();		
				point_detailed_start('no',10,8,8,"After almost 30 years of debt and construction, our national direction, identity and economic system is in dire straights.");point_end_only();
					list_start();
					point_detailed_start('no',7,8,8,"No longer can we expect endless population growth and economic growth on the back of household debt to keep driving us forward.");point_end_only();	
						list_start();			
							point_detailed_start('no',7,8,8,"Especially post COVID, birth rates are expected to be down as are immigration and household debt has clearly reached a ceiling.");point_end_only();	
						list_end();	
					list_end();
			list_end();
			
	

		echo "<br><br>";
		point_detailed_start('yes',10,8,8,"<a href='https://www.investopedia.com/terms/h/hyperinflation.asp' target='_blank'>Hyperinflation</a>");point_end_only();	
			list_start();		
				point_detailed_start('no',10,8,8,"If we cannot lift monetary policy back into a 'reasonable realm' that is well above zero then we run the risk of one shock enabling hyperinflation.<br> Unfortunately hyperinflation comes out of nowhere after years of money printing and it's not a controllable phenomenon.");point_end_only();
	
			list_end();	

	list_end();


echo "<br><br><br>";
		
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";