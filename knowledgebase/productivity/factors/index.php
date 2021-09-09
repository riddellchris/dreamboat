<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

	paragraph_detailed('yes',10,10,10,"At present, the critical factors that seem to drive productivity are categorised as follows:");
	list_start();
		$span_start 	= "<span style='color:red;'>";
		$span_end	= "</span>";
		point_detailed_start('no',10,8,8,$span_start."Skills".$span_end." - lack of, optimal use of, underutilisation of");point_end_only();
		point_detailed_start('no',10,8,8,$span_start."Value".$span_end." - creation of, communication of, financial reward from");point_end_only();
		point_detailed_start('no',10,8,8,$span_start."Efficiency".$span_end." - of actions, of workflows, of processes, of technology");point_end_only();
		point_detailed_start('no',10,8,8,$span_start."Attention".$span_end." - capacity, application, requirements, duration of application");point_end_only();
		point_detailed_start('no',10,8,8,$span_start."Allocation".$span_end." - of tasks, of time, of resources");point_end_only();
		point_detailed_start('no',10,8,8,$span_start."Direction".$span_end." - of people, businesses and alignment of both");point_end_only();	
		point_detailed_start('no',10,8,8,$span_start."Motivation".$span_end." - of people, businesses and alignment of both");point_end_only();					
		point_detailed_start('no',10,8,8,$span_start."Trust".$span_end." - between people, with markets, with businesses");point_end_only();
		point_detailed_start('no',10,8,8,$span_start."Risks".$span_end." - legal, financial, HSE, strategic, economic");point_end_only();
		point_detailed_start('no',10,8,8,$span_start."Communication".$span_end." - clarity, certainty, recurrence");point_end_only();
		point_detailed_start('no',10,8,8,$span_start."Waste".$span_end." - of assets, of finances, of people, of resources");point_end_only();
	list_end();
	echo "<br><br>";



require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";