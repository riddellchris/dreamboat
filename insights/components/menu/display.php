<?php
if(!isset($_SESSION)){session_start();}

if(!isset($_SESSION['insights_menu'])){
    //if($_SESSION['viewing_client_id'] == 4231 OR $_SESSION['viewing_client_id'] == 1){
        $_SESSION['insights_menu'] = 'time_per_activity';
   // }
//$_SESSION['insights_menu'] = 'stacked_revenue';
}



echo "<div style='width: 100%;'>";
    require $_SERVER['DOCUMENT_ROOT']."/insights/components/menu/styling.php";

    require $_SERVER['DOCUMENT_ROOT']."/insights/components/menu/headline_chart/display.php";
    require $_SERVER['DOCUMENT_ROOT']."/insights/components/menu/dates/display.php";

    if($_SESSION['insights_menu'] == 'time_per_activity'){
        echo "<span class='prompt-font' style='font-size: 20px; padding-left: 25px;'>Showing all tags - To adjust visit <a style='color:red;' href='/insights/preparation/'>preparation</a></span>";
    }

echo "</div>";