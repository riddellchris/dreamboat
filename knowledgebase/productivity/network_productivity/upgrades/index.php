<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

	paragraph_detailed('yes',10,10,10,"Like any network, upgrades occur to improve the network for the long term. 
					   Arising from an issue identified, an identified potential improvement or an opportunity to get ahead upgrades typically improve reliablity, consistency and total network value.");
	list_start();
//		point_detailed_start('no',10,8,8,$span_start."Skills".$span_end." - lack of, optimal use of, underutilisation of");point_end_only();
//		point_detailed_start('no',10,8,8,$span_start."Value".$span_end." - creation of, communication of, financial reward from");point_end_only();
//		point_detailed_start('no',10,8,8,$span_start."Efficiency".$span_end." - of actions, of workflows, of processes, of technology");point_end_only();
//		point_detailed_start('no',10,8,8,$span_start."Attention".$span_end." - capacity, application, requirements, duration of application");point_end_only();
	list_end();


require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";