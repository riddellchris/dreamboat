<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_detailed('yes',8,8,8,"This is the scariest chart in the Australian economy.");
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/charts/gdp_per_capita/div.php";

echo "<br><br><br><br>";

paragraph_detailed('yes',8,8,8,"Given:");
list_start();
	 point_detailed_start('no',7,8,8,"The debt we have - 2nd highest in the world");
	 point_detailed_start('no',7,8,8,"Our aging population & decreasing workforce relative to this population");
	 point_detailed_start('no',7,8,8,"Heavily indebted government sector & impending austerity as a result");	 
list_end();

paragraph_detailed('yes',8,8,8,"If, as a country, we cannot turn this chart around over the coming decade...");
//require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/charts/gdp_per_capita/div.php";


paragraph_detailed('no',8,8,8,"...then given the already incredibly loose <a href='https://www.investopedia.com/video/play/monetary-policy/' target='_blank'>monetary policy</a> and government efforts that aren't turning the problem chart around we will struggle to repay our debts as a country leaving us in a state of stagnation, national weakness a sticky debt trap.");

paragraph_detailed('yes',8,8,8,"As a result we are bringing together the entire nations data to find and implement optimisations using:");
list_start();
	 point_detailed_start('no',7,8,8,"Data sets available through every organisations APIs and SaaS Applications");
	 point_detailed_start('no',7,8,8,"Mapping and optimisations of everyones productivity networks as well as the organisations they work for.");
	 point_detailed_start('no',7,8,8,"And ultimately engagement with the relevant government bodies to remove obstacles that are showing up in the data.");	 
list_end();



require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";