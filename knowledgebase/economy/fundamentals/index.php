<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

	paragraph_detailed('yes',10,10,10,"The economic fundamentals in Australia are not healthy with interest rates near 0, household debt sky high and real wage growth expected to stay negative for the next few years at least.");
	//paragraph_detailed('no',8,10,10,"With interest rates at 0.85% and RBA Governor Phillip Lowe saying negative rates are highly unlikely, this economic lever is no longer available to us, or at the very least no longer working.");
					    
	require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/charts/interest_rate_chart/div.php";
	
	echo "<br><br><br><br>";
	
	//	echo "<img src='/knowledgebase/economy/charts/svg_charts/_ RBA Cash Rate.svg' style='width: 100%; margin-left: -5%;  margin-right: -5%;'>";

/*	list_start();
		list_start();
	paragraph_detailed('no',8,10,10,"Sadly it seems the inverse may be true as interest dependent With interest rates 0.25% and RBA Governor Phillip Lowe saying negative rates are highly unlikely, this economy lever is no longer available to us, or at the very least no longer working.");		
		
		list_end();
	list_end();	*/
	
	
	
	paragraph_detailed('no',6,10,10,"With the now second highest level of household debt in the world we have so much debt that it has rendered monetary policy useless under the crushing weight of these repayments.<br>
		   <span style='color:#8378ff;'>(Depending on source and calculation method Switzerland is first with a ratio of 128% of GDP to household debt.)</span>");
	require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/charts/household_debt_to_gdp/div.php";	
	//	echo "<img src='/knowledgebase/economy/charts/svg_charts/Australian Household Debt to GDP Ratio.svg' style='width: 100%; margin-left: -2%;  margin-right: -5%;'>";
	echo "<br><br><br><br>";		
			
	paragraph_detailed('no',6,10,10,"While taking on this debt has helped ensure a huge period of extended GDP growth. Taking on more debt to ensure economic growth is now almost impossible so again that economy lever is no longer available to us.");
	//require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/charts/gdp/div.php";
	
	paragraph_detailed('no',10,8,9,"Sadly that period of growth now looks to be coming to an end, with steady but low growth over much of the past 10 years, a decreasing trend over the past 30 years and very little growth potential in any of our major exports, iron ore, other minerals, education and tourism.");	
	
	//echo "<img src='/knowledgebase/problems_and_solutions/diagrams/google_charts_test_svg.svg' style='width:80%; margin-left: 10%;'>";
	
	require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/charts/gdp_percentage_change/div.php";
	echo "<br>";	
	paragraph_detailed('yes',10,8,9,"Overall the trend is of a declining average growth over the past 30 years with the trendline being at 3.584% in 1988 and now only 2.3% annual growth. If this continues with even a modicum of population growth per capita GDP will almost certainly start to decline in 10-20 years.");		
	
	echo "<br><br><br><br>";
	
	
	
	
	
		
	paragraph_detailed('no',10,10,9,"Further to that <a href='/knowledgebase/productivity/' target='_blank'>productivity</a> improvement has all but stalled since 2016, apart from the recent COVID 'blip' as lower paying jobs and businesses caused a statistical anomaly.");
	require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/charts/productivity/div.php";
	echo "<br><br><br><br>";
	
	
	
		
	paragraph_detailed('no',10,9,9,"Wages have stalled and in real terms are on the verge of going backwards.");
	require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/charts/wages/div.php";	
//	https://tradingeconomys.com/australia/inflation-cpi
	echo "<br><br><br><br>";

	
	//GDP change is already in real terms to start
	//chart might go well in here
	paragraph_detailed('no',10,10,9,"If wages stop growing as a result of <a href='/knowledgebase/productivity/' target='_blank'>productivity</a> stopping, then there is a serious risk that the house of cards starts to crumble, mostly under the weight of the debt we can't get out of and need higher wages to start paying for. Unfortunately with interest rates at near zero no further payment reductions can occur.");
		//as rates decrease payments to those living off interest also decrease dangerously
	
	paragraph_detailed('no',10,10,9,"So to keep the economy growing, and our way of life at least the same, something different has to happen.");
		list_start();
			point_detailed_start('no',8,8,8,"A Chinese resources boom will not drive exports and mining infrastructure boom as it did around GFC");point_end_only();
			point_detailed_start('no',8,8,8,"A huge population influx may save us but would have to be huge (multiples of what it was pre COVID) and remain there in order to drive construction further than we have ever known.");point_end_only();
			point_detailed_start('no',8,8,8,"Government has tried but can't seem to spend us out of it on an ongoing basis.");point_end_only();		
		list_end();
		
	paragraph_detailed('yes',8,8,8,"So a new direction is needed.");point_end_only();
	paragraph_detailed('yes',8,8,8,"A clear vision for the future of the economy doesn't exist.");point_end_only();			

	

	
	
	//tax changes won't do it for us, but their intent on lowering the barrier to productivity improvement are broadly correct but not the answer for today
	////AND SCENE
	//paragraph("N.B. This is all without & prior to the impact or COVID-19 on the Australian economy.");

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";