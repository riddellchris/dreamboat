<?php
if(!isset($_SESSION)){session_start();}



//really / ideally this isan't a massive problem / a massive update
//that sql code could definetely / absolutely be optimised a million percent.
    //capture only the good ones
    //the ones we absolutely need to collect etc etc etc.
    //anyway all in good time





//see what is connected for that user and run all processes
//therefore updating everywhere.
//nice
    //just a simple warning for use later to see if the data has been updated.
    $debug['xero_data_upate'] = "xero NOT updated";
    
    //see which connections are active for this user
    require $_SERVER['DOCUMENT_ROOT']."/data/apis/connections/testing/all_platforms.php";

    //for each of the connections complete an update process based on pulling all relevant data from each endpoint 
    //.... so that we can really make it all sharp as fuck
    while($row_connections = mysqli_fetch_array($result_connections , MYSQLI_ASSOC)){
        if($row_connections['platform_name'] == 'xero'){

            $debug['xero_data_upate'] = "xero updated";
            require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/update_processes/all.php";

        }
    }