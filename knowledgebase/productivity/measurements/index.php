<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";


paragraph_start('no', 8, 8, 9, "Perfect measurement of productivity is an inherently difficult task due to two main reasons:");
	list_start();
		point_detailed_start('no',8,8,8,"The externalities of any activity are challenging to measure accurately. For example training of others while completing a process.");
		point_detailed_start('no',8,8,8,"The closer we get to perfect measurement of any task the more risk there is of impacting productivity itself.");		
	list_end();

paragraph_start('no', 8, 8, 9, "As Dreamboat continues to grow it's ability to measure & assess the value of each individual's productivity network continues to grow as more instantaneous and historical data becomes available.");
paragraph_start('no', 8, 8, 9, "As this form of measurement itself is a reasonably new field the ways in which we measure and assess our own performance are always changing. As a result for clients we suggest they measure their performance improvement based on:");
	list_start();
		point_detailed_start('no',8,8,8,"KPI improvements");
		point_detailed_start('no',8,8,8,"General satisfaction that Dreamboat is helping them to improve their productivity network, thereby accounting for the improvement of all other externalities.");		
	list_end();

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";