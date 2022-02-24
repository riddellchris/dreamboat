<?php
if(!isset($_SESSION)){session_start();}

//defaults are found prior to /charts/script control.php for obvious reasons such that it loads the right scripts



echo "<div style='width: 100%;'>";
    require $_SERVER['DOCUMENT_ROOT']."/insights/menu/styling.php";

    require $_SERVER['DOCUMENT_ROOT']."/insights/menu/headline_chart/display.php";

//    require $_SERVER['DOCUMENT_ROOT']."/insights/menu/periods/timeline.php";   
 //   require $_SERVER['DOCUMENT_ROOT']."/insights/menu/periods/averages.php";   


 //   require $_SERVER['DOCUMENT_ROOT']."/insights/menu/dates/display.php";


 //   if($_SESSION['insights_menu']['headline_chart'] == 'time_per_activity'){
 //       echo "<span class='prompt-font' style='font-size: 20px; padding-left: 25px;'>Showing all tags - To adjust visit <a style='color:red;' href='/insights/preparation/'>preparation</a></span>";
//    }



echo "</div>";