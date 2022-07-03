<?php


//simply for construction
//ONLY COMMENT OUT SO THAT WE CAN SAVE FOR MORE CONSTRCUTION
//$user_id_for_request = 1;
require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/tenants/check_tenant_for_this_user.php";


/*
//first we need to get todays date.
echo date('m');
echo "<br><br>";

//Therefore one month ago was:
echo date('Y-m-d', strtotime(date('Y-m')." -1 month"));
echo "<br><br>";

//so now we can find the last complete date required for this chart which will be:
echo date('Y-m-d', strtotime(date('Y-m')." -6 months"));
echo "<br><br>";

//and further yet we can do this
echo date('Y-m-d', strtotime(date('Y-m')."last day of -6 months"));
*/

//so that makes querying any report really simple then as all we need to do is focus on building these little bits and pieces out
//as the from date becomes:

if($period_length  == 'month'){
    //STRING CREATION
    $from_date          = date('Y-m-d', strtotime(date('Y-m')."first day of -36 months"));
    $from_date_string   = date('M j',   strtotime(date('Y-m')."first day of -36 months"));

    //and the to_date becomes:
    $to_date            = date('Y-m-d', strtotime(date('Y-m')."last day of -1 months"));
    $to_date_string     = date('M j',   strtotime(date('Y-m')."last day of -1 months"));
}
if($period_length  == 'week'){
    //STRING CREATION
    $from_date          = date('Y-m-d', strtotime(date('Y-m')."-36 weeks monday"));
    $from_date_string   = date('M j',   strtotime(date('Y-m')."-36 weeks monday"));

    //and the to_date becomes:
    $to_date            = date('Y-m-d', strtotime(date('Y-m')."-1 weeks sunday"));
    $to_date_string     = date('M j',   strtotime(date('Y-m')."-1 weeks sunday"));
}



$updated_last_string = date('Y-m-d', strtotime(date('Y-m')));

$accurate_as_at_string = " complete to ".$to_date_string;



unset($sql_for_insert_of_12_month_data);

        //echo "hi";
        for($date_index = -1; $date_index > -36; $date_index --){
        //echo "hi";

        if($period_length  == 'month'){
            //echo "HIHIHI";
            //exit();
            //ACTUAL REQUEST DATE CREATION
            $from_date          = date('Y-m-d', strtotime(date('Y-m')."first day of ".$date_index." months"));
            $date_index_start   = $from_date;
            //and the to_date becomes:
            $to_date            = date('Y-m-d', strtotime(date('Y-m')."last day of ".$date_index." months"));
            $date_index_end     = $to_date;
        }
        if($period_length  == 'week'){
            //ACTUAL REQUEST DATE CREATION
            $date_index_for_mondays = $date_index - 1;
            $from_date          = date('Y-m-d', strtotime(date('Y-m')." ".$date_index_for_mondays." weeks monday"));
            $date_index_start   = $from_date;
            //and the to_date becomes:
            $to_date            = date('Y-m-d', strtotime(date('Y-m')." ".$date_index." weeks sunday"));
            $date_index_end     = $to_date;
        }



            $period_for_chart_display   = date('M y', strtotime(date('Y-m')."last day of ".$date_index." months"));
                
            $url_for_api_request        = "https://api.xero.com/api.xro/2.0/Reports/BankSummary?fromDate=".$from_date."&toDate=".$to_date;
               // echo $url_for_api_request."<br>";

            require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/components/api_request.php";
                        
                        $debug = 'off';
                        if($debug == 'on'){
                            echo '<pre>' , json_encode($response['Reports'][0]['Rows']) , '</pre>';
                            exit();
                        }

                   require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/reports/bank_summary/json_breakdown_and_storage.php";

        }

