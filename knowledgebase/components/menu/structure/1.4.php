<?php
if(!isset($_SESSION)){session_start();}

primary_knowledgebase_menu_item('welcome','no');
primary_knowledgebase_menu_item('executive_summary','no');

if($_SERVER['HTTP_HOST'] == "dreamboat.com.au"){
    require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/menu/economy.php";
}
if($_SERVER['HTTP_HOST'] == "irrth.com.au"){
    require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/menu/the_planet.php";
}

//not shown unless directed to
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/menu/critical_groups.php";

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/menu/our_model.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/menu/immediate_plan.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/menu/current_service.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/menu/system.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/menu/expected_future.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/menu/more.php";
//require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/menu/slideshows.php";

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/menu/support.php";

if(isset($_SESSION['dreamboat_crew'])){
    if($_SESSION['dreamboat_crew'] == 'yes'){
        require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/menu/dot_dot_dot_divider.php";
    }
}

//conditions for the rest of these segments
//therefore show the dot_dot_dot_divider
//otherwise show nothing
if($_GET['secondary_folder'] == 'productivity'){
    require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/menu/productivity.php";
}
    //not shown unless directed to
    //currently just a basic note taking function
    //require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/menu/brain_function.php";
    //require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/menu/physical_health.php";
if(isset($_SESSION['dreamboat_crew'])){
    if($_SESSION['dreamboat_crew'] == 'yes'){    
        require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/menu/news.php";
    }
}

if(isset($_SESSION['dreamboat_management'])){
    if($_SESSION['dreamboat_management'] == 'yes'){
        require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/menu/dot_dot_dot_divider.php";
        require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/menu/implementation_plan.php";
    }
}
