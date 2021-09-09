<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

//point_detailed_start('no',10,10,10,"Overarching strategy");point_end_only();
//require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/implementation_plan/market_penetration/overarching_strategy.php";

list_start();
	point_detailed_start('yes',10,10,10,"Zoom presentations - from cold calling");point_end_only();
	point_detailed_start('yes',10,10,10,"Start in other states - not NSW and VIC");point_end_only();
list_end();

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";
