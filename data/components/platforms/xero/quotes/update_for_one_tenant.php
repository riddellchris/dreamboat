<?php


//simply for construction
//ONLY COMMENT OUT SO THAT WE CAN SAVE FOR MORE CONSTRCUTION
//$user_id_for_request = 1;
require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/tenants/check_tenant_for_this_user.php";
//$period_name = 'months';

/*
//first we need to get todays date.
echo date('m');
echo "<br><br>";

//Therefore one month ago was:
echo date('Y-m-d', strtotime(date('Y-m')." -1 month"));
echo "<br><br>";

//so now we can find the last complete date required for this chart which will be:
echo date('Y-m-d', strtotime(date('Y-m')." -6 ".$period_name));
echo "<br><br>";

//and further yet we can do this
echo date('Y-m-d', strtotime(date('Y-m')."last day of -6 ".$period_name));
*/

//so that makes querying any report really simple then as all we need to do is focus on building these little bits and pieces out
//as the from date becomes:

//STRING CREATION
$from_date          = date('Y-m-d', strtotime(date('Y-m')."first day of -36 ".$period_name));
$from_date_string   = date('M j',   strtotime(date('Y-m')."first day of -36 ".$period_name));

//and the to_date becomes:
$to_date            = date('Y-m-d', strtotime(date('Y-m')."last day of -1 ".$period_name));
$to_date_string     = date('M j',   strtotime(date('Y-m')."last day of -1 ".$period_name));

$updated_last_string = date('Y-m-d', strtotime(date('Y-m')));

$accurate_as_at_string = " complete to ".$to_date_string;

$sql_string = "UPDATE ".$table_name."
SET latest_version_for_this_user = 'no'
WHERE user_id = ".$user_id_for_request;
//  echo $sql_string;exit();
mysqli_query($conn, $sql_string);

unset($sql_for_insert_of_12_month_data);

        //echo "hi";
        for($date_index = -1; $date_index > -36; $date_index --){
        //echo "hi";
            //ACTUAL REQUEST DATE CREATION
            $from_date          = date('Y-m-d', strtotime(date('Y-m')."first day of ".$date_index." ".$period_name));
            $date_index_start   = $from_date;

            //and the to_date becomes:
            $to_date            = date('Y-m-d', strtotime(date('Y-m')."last day of ".$date_index." ".$period_name));
            $date_index_end     = $to_date;

            $period_for_chart_display   = date('M y', strtotime(date('Y-m')."last day of ".$date_index." ".$period_name));
                
            $url_for_api_request =   "https://api.xero.com/api.xro/2.0/Quotes?DateFrom=".$from_date."&DateTo=".$to_date;
             //   echo $url_for_api_request."<br>";
           // $url_for_api_request =   "https://api.xero.com/api.xro/2.0/Quotes";


               // echo "h4llo";exit();
            require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/quotes/api_request.php";
                        
                        $debug = 'off';
                        if($debug == 'on'){
                            echo '<pre>' , json_encode($response) , '</pre>';
                            exit();
                        }

            require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/quotes/json_breakdown_and_storage.php";

        }

