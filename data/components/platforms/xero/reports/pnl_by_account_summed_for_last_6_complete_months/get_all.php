<?php
//if(!isset($_SESSION)){session_start();}

//this is going to need to be run against 
//all accounts which need to be stored and updated first
//this update can be run via /data/components/xero/accounts/get_one.php
//at the same time we probably need to update 
//then all I need to do here is to 



/*
//This is a all wrong
//The endgame here is to seek the right solution
// Call function with value to search as second argument
//use this ----- https://www.php.net/manual/en/function.array-walk-recursive.php
function p_and_l_scan($item, $key){

    $middle_key = 'total_income';               if(!isset($_SESSION['report'][$middle_key]['collect_next'])){$_SESSION['report'][$middle_key]['collect_next'] = 'no';}
    $middle_key = 'gross_profit';               if(!isset($_SESSION['report'][$middle_key]['collect_next'])){$_SESSION['report'][$middle_key]['collect_next'] = 'no';}
    $middle_key = 'total_operating_expenses';   if(!isset($_SESSION['report'][$middle_key]['collect_next'])){$_SESSION['report'][$middle_key]['collect_next'] = 'no';}
    $middle_key = 'net_profit';                 if(!isset($_SESSION['report'][$middle_key]['collect_next'])){$_SESSION['report'][$middle_key]['collect_next'] = 'no';}

    if($key == 'Value'){ 
        $middle_key = 'total_income';               if($_SESSION['report'][$middle_key]['collect_next'] == 'yes'){   $_SESSION['report'][$middle_key]['value'] = $item;  $_SESSION['report'][$middle_key]['collect_next'] = 'no'; }
        $middle_key = 'gross_profit';               if($_SESSION['report'][$middle_key]['collect_next'] == 'yes'){   $_SESSION['report'][$middle_key]['value'] = $item;  $_SESSION['report'][$middle_key]['collect_next'] = 'no'; }
        $middle_key = 'total_operating_expenses';   if($_SESSION['report'][$middle_key]['collect_next'] == 'yes'){   $_SESSION['report'][$middle_key]['value'] = $item;  $_SESSION['report'][$middle_key]['collect_next'] = 'no'; }
        $middle_key = 'net_profit';                 if($_SESSION['report'][$middle_key]['collect_next'] == 'yes'){   $_SESSION['report'][$middle_key]['value'] = $item;  $_SESSION['report'][$middle_key]['collect_next'] = 'no'; }
    }

  //  echo $key." holds ".$item."<br>";
    if($item == 'Total Income'){             $_SESSION['report']['total_income']['collect_next']                = 'yes';}
    if($item == 'Gross Profit'){             $_SESSION['report']['gross_profit']['collect_next']                = 'yes';}
    if($item == 'Total Operating Expenses'){ $_SESSION['report']['total_operating_expenses']['collect_next']    = 'yes';}
    if($item == 'Net Profit'){               $_SESSION['report']['net_profit']['collect_next']                  = 'yes';}

}
*/


//if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/tenants/get_tenant_user_ids_from_db.php";

//for each in that array
for($main_counter = 0; $main_counter < count($tenant_user_id); $main_counter++){

  echo "<br>";
  echo "Main counter<br>";
  echo '<pre>' , var_dump($tenant_user_id) , '</pre>'; 
  echo '<pre>' , var_dump($tenant_xero_id) , '</pre>';

    //set the $_SESSION user_id with the corresponding user_id for this tenant
  echo "<br>".$user_id_for_request;
  echo  $user_id_for_request    = $tenant_user_id[$main_counter];
  echo "<br>".$tenant_id;  
  echo  $tenant_id              = $tenant_xero_id[$main_counter];


  //  echo "hi";
   // require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/oauth/get_access_token.php";
   // echo "hi";

    //this cannot go here as it destorys the for loop
    /*
    //first here just check for the hell of it that everyone has the required start date entered in the system
    //so the only complexity here is that 
    //first we actually need to get out the first month that an invoice is registered for each company.
    $sql = "SELECT * FROM   api_xero_invoice_first_invoice_date_for_each_tenant
            WHERE           tenant_id = '".mysqli_real_escape_string($conn, $tenant_xero_id[$j])."'
            LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if(mysqli_num_rows($result) == 0){
            require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/invoices/determine_date_of_first_per_tenant.php";

    }
    */




    //$getting_all = 'yes';
    require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/reports/pnl_by_account_summed_for_last_6_complete_months/update_for_one_tenant.php";
   // unset($getting_all);
 
}