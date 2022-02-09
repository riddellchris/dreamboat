<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/insights/components/menu/display.php";


//for everyone just display what's actually working and released
//get this out of insight released and insight details
//it's that simple really.
//ok so what now then?



//where we want to get to is the charts


//a simple bar chart of the days spent doing that and then cut it across all the dates
//let's just start with the other stuff.

//so to start with i can just cut this by the results from leigh's thing easy.

if($_SESSION['viewing_client_id'] == 4231 OR $_SESSION['viewing_client_id'] == 1){



    require $_SERVER['DOCUMENT_ROOT']."/insights/charts/time_per_activity/div.php";

    echo "<div style='width:100%; text-align: center; padding-top: 20px;'>";
        echo "<span class='prompt-font'>Showing all tags - To adjust visit <a style='color:red;' href='/insights/preparation/'>preparation</a></span>";
    echo "</div>";

}
else{

    echo "<div class='prompt-font' style='text-align:center;padding-top:35vh;'>no insights are available yet</div>";
}





require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";