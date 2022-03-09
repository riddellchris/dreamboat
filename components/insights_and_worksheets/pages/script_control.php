<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/insights/menu/defaults.php";

//this sits up in the head of the page so should really have the menu defaults above it


if($_SESSION['viewing_client_id'] == 4231 OR $_SESSION['viewing_client_id'] == 1){
    //we want to run the calculations for all pages because that is required to keep up with the preparation side of things
    require $_SERVER['DOCUMENT_ROOT']."/insights/pages/time_per_activity/defaults.php";
    require $_SERVER['DOCUMENT_ROOT']."/insights/pages/time_per_activity/calculations.php";
    //however we don't always need to produce the chart
    if($_GET['secondary_folder'] == 'display'){
        require $_SERVER['DOCUMENT_ROOT']."/insights/pages/time_per_activity/script.php";
    }
}

if($_SESSION['insights_menu']['headline_chart'] == 'revenue_stacked'){  require $_SERVER['DOCUMENT_ROOT']."/insights/pages/revenue/stacked/script.php";}
if($_SESSION['insights_menu']['headline_chart'] == 'revenue_stacked'){  require $_SERVER['DOCUMENT_ROOT']."/insights/pages/revenue/stacked/script.php";}
?>


