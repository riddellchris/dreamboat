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
    //this is fine for now
    $debug['xero_data_upate'] = "xero NOT updated";
    require $_SERVER['DOCUMENT_ROOT']."/data/apis/connections/testing/all_platforms.php";

    while($row_connections = mysqli_fetch_array($result_connections , MYSQLI_ASSOC)){
        if($row_connections['platform_name'] == 'xero'){

            $debug['xero_data_upate'] = "xero updated";

            require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/invoices/get_one.php";
            require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/contacts/get_one.php";
            require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/items/get_one.php";
        }
    }