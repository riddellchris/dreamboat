<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/insights/menu/display.php";

//for everyone just display what's actually working and released
//get this out of insight released and insight details
//it's that simple really.
//ok so what now then?



//where we want to get to is the charts


//a simple bar chart of the days spent doing that and then cut it across all the dates
//let's just start with the other stuff.

//so to start with i can just cut this by the results from leigh's thing easy.

$insights_are_available = 'no';
if($_SESSION['insights_menu']['headline_chart'] == 'time_per_activity'){  require $_SERVER['DOCUMENT_ROOT']."/insights/pages/time_per_activity/div.php";     $insights_are_available = 'yes';}
if($_SESSION['insights_menu']['headline_chart'] == 'revenue_stacked'){    require $_SERVER['DOCUMENT_ROOT']."/insights/pages/revenue/stacked/div.php";       $insights_are_available = 'yes';}



if($insights_are_available == 'no'){
    echo "<div class='prompt-font' style='text-align:center;padding-top:35vh;'>no insights are available yet</div>";
}



require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";