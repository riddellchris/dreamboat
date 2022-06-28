<?php
if(!isset($_SESSION)){session_start();}

paragraph_detailed('yes',10,10,10,"Even prior to the COVID-19 pandemic economic growth within Australia has been decaying for decades despite:");
list_start();
    point_detailed_start('no',8,10,10,"The best efforts of both sides of Government");
    point_detailed_start('no',8,10,10,"The best efforts of the RBA");
    point_detailed_start('no',8,10,10,"Significant increases in household debt &");		
    point_detailed_start('no',8,10,10,"Consistent population growth");	
list_end();

paragraph_detailed('no',10,10,10,"Since 1988, trend growth has fallen from <span class='blink_me'>2.5%</span> to now almost only <span class='blink_me'>0.7%</span> in 2022 despite the best efforts and all the power of the RBA & all layers of Government.");
//paragraph_detailed('no',7,6,5,"Prior to COVID this trend was still from <span class='blink_me'>3.428%</span> to <span class='blink_me'>2.6%</span> in 2020.");

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/charts/gdp_percentage_change/div.php";