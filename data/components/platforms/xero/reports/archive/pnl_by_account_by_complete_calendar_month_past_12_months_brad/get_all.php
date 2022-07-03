<?php

require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/tenants/get_tenant_user_ids_from_db.php";

//for each in that array
for($main_counter = 0; $main_counter < count($tenant_user_id); $main_counter++){

  
  echo "<br>";
  echo "User id array<br>";
  echo '<pre>' , var_dump($tenant_user_id) , '</pre>'; 
  echo "<br>"; 
  echo "tenant id array<br>";  
  echo '<pre>' , var_dump($tenant_xero_id) , '</pre>';

    //set the $_SESSION user_id with the corresponding user_id for this tenant


    echo "<br>";
  echo "Main counter: ".$main_counter."<br>";
  echo "<br>USER ID FOR REQUEST:";
  echo  $user_id_for_request    = $tenant_user_id[$main_counter];
  echo "<br>TENANT ID<br>";  
  echo  $tenant_id              = $tenant_xero_id[$main_counter];
  echo "<br>";

  //  echo "hi";
   // require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/oauth/access_token/get.php";
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
    require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/reports/pnl_by_account_by_complete_calendar_month_past_12_months/update_for_one_tenant.php";
   // unset($getting_all);
 
}