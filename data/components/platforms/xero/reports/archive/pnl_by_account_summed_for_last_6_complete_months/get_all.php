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

  echo "<br>";
  echo "Main counter: ".$main_counter."<br>";
  echo "<br>USER ID FOR REQUEST:";
  echo  $user_id_for_request    = $tenant_user_id[$main_counter];
  echo "<br>TENANT ID";  
  echo  $tenant_id              = $tenant_xero_id[$main_counter];
  echo "<br>";

  require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/reports/pnl_by_account_summed_for_last_6_complete_months/update_for_one_tenant.php";
 
}