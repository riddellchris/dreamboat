<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";






//so interestingly here there is probably a list of insights that just need to be produced and released for each client.



//to start though this should be kept pretty simple.
//to start with we just need to control this 


if($_SESSION['dreamboat_crew'] == 'yes'){
    //then display and allow these people to make new views
    echo "<form>";

    echo "</form>";

}


//for everyone just display what's actually working and released
//get this out of insight released and insight details
//it's that simple really.
//ok so what now then?



//where we want to get to is the charts


//a simple bar chart of the days spent doing that and then cut it across all the dates
//let's just start with the other stuff.

//so to start with i can just cut this by the results from leigh's thing easy.

if($_SESSION['viewing_client_id'] == 4231 OR $_SESSION['viewing_client_id'] == 1){

    require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/timeular/all_data_as_json.php";

    //now we just want to sort the response
        //to be honest a simple for loop should sort this out
            //holy fuck i'm about to produce that first chart pretty much aren't I
            //holy shit!





}
else{

    echo "<div class='prompt-font' style='text-align:center;padding-top:35vh;'>no insights are available yet</div>";
}





require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";