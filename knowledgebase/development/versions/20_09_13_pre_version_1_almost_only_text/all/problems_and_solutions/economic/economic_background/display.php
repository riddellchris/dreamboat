<?php
if(!isset($_SESSION)){session_start();}

copy_title_open('The Economic Problem','the_economic_problem','not_open');

	paragraph_detailed('yes',10,10,10,"The economic landscape in Australia has never been so precarious with interest rates in such a place the RBA has no more room to go to use their previously powerful tool of monetary policy.");
	paragraph_detailed('no',8,10,10,"With interest rates 0.25% and Phillip Lowe saying negative rates are highly unlikely, this economic lever is no longer available to us.");
	require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/all/problems_and_solutions/economic/economic_background/interest_rate_chart/div.php";
	
	paragraph_detailed('no',6,10,10,"With the now second highest level of household debt in the world we have so much debt that it has rendered monetary policy useless under the crushing weight of these repayments.<br>
		   <span style='color:#8378ff;'>(Depending on source and calculation method Switzerland is first with a ratio of 128% of GDP to household debt.)</span>");
	require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/all/problems_and_solutions/economic/economic_background/household_debt_to_gdp/div.php";	
	
	paragraph_detailed('no',6,10,10,"While taking on this debt has helped ensure a huge period of extended GDP growth. Taking on more debt to ensure economic growth is now almost impossible so again that economic lever is no longer available to us.");
	//require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/all/problems_and_solutions/economic/economic_background/gdp/div.php";
	
	paragraph_detailed('no',10,8,9,"Sadly that period of growth now looks to be coming to an end, with steady but low growth over much of the past 10 years, a decreasing trend over the past 30 years and very little growth potential in any of our major exports, iron ore, other minerals, education and tourism.");	
	
	echo "<img src='/knowledgebase/all/problems_and_solutions/diagrams/google_charts_test_svg.svg' style='width:80%; margin-left: 10%;'>";
	
	//require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/all/problems_and_solutions/economic/economic_background/gdp_percentage_change/div.php";
	
	paragraph_detailed('no',10,10,9,"Further to that productivity improvement has all but stalled since 2016.");
	require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/all/problems_and_solutions/economic/economic_background/productivity/div.php";
	
	paragraph_detailed('no',10,9,9,"Wages have stalled and in real terms are on the verge of going backwards.");
	require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/all/problems_and_solutions/economic/economic_background/wages/div.php";	
//	https://tradingeconomics.com/australia/inflation-cpi


	
	//GDP change is already in real terms to start
	//chart might go well in here
	paragraph_detailed('no',10,10,9,"So to keep the economy growing, our way of life at least the same (as a function of GDP per capita not declining) and not let the mountain of debt crush us something different has to happen.<br>
		   It seems apparent that the current set of economic tools this country has have run out of effectiveness.");
	paragraph_detailed('no',10,9,8,"Without question, new economic systems and tools need to occur to change the future for the better.");
	////AND SCENE
	//paragraph("N.B. This is all without & prior to the impact or COVID-19 on the Australian economy.");
copy_title_close();