<?php
if(!isset($_SESSION)){session_start();}

primary_knowledgebase_menu_item('welcome','no');
primary_knowledgebase_menu_item('abstract','no');
primary_knowledgebase_menu_item('executive_summary','no');
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/menu/economy.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/menu/productivity.php";

//not shown unless directed to
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/menu/critical_groups.php";

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/menu/our_model.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/menu/immediate_plan.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/menu/current_service.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/menu/system.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/menu/expected_future.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/menu/more.php";

//not shown unless directed to
//currently just a basic note taking function
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/menu/brain_function.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/menu/physical_health.php";


	
