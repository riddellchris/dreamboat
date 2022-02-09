<?php
if(!isset($_SESSION)){session_start();}



if($_SESSION['viewing_client_id'] == 4231 OR $_SESSION['viewing_client_id'] == 1){
    //we want to run the calculations for all pages because that is required to keep up with the preparation side of things
    require $_SERVER['DOCUMENT_ROOT']."/insights/charts/time_per_activity/calculations.php";
    //however we don't always need to produce the chart
    if($_GET['secondary_folder'] == 'display'){
        require $_SERVER['DOCUMENT_ROOT']."/insights/charts/time_per_activity/script.php";
    }
}

?>


