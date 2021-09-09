<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";


	paragraph_detailed('no',8,8,8,"Productivity observation and measurement can be achieved by and combination of:");
	list_start();
		point_detailed_start('no',8,8,8,"Financial metrics.");point_end_only();	
		point_detailed_start('no',8,8,8,"Task completion metrics.");point_end_only();
		point_detailed_start('no',8,8,8,"KPIs.");	point_end_only();
		point_detailed_start('no',8,8,8,"Subjective owner/manager/director observations.");	point_end_only();		
		point_detailed_start('no',8,8,8,"Personal observation.");	point_end_only();
		point_detailed_start('no',8,8,8,"Other staff observations.");	point_end_only();
		point_detailed_start('no',8,8,8,"3rd party observations.");	point_end_only();								
	list_end();
	paragraph_detailed('no',8,8,8,"As observation occurs, achieved productivity, productivity issues and limitations are typically observed by every type of observer and vary depending on their perspective.");
		
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";