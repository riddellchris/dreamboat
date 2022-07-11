<?php
if(!isset($_SESSION)){session_start();}


//So to do this we need to compare and contrast:
// api_xero_tenant_details table with what is returned for a specific tenant
    //half of this comes from ../tenants/get_tentant_user_ids_from_db.php
    //the other half has to actively come from the actual xero query
    //and then it has to actually go into a new table
        //api_xero_tenant_checks
        //such that we can actually run this test against xero data and show if the connection is still active 
            //therefore allowing access to far more connections as part of the partner program



//not sure why this is needed!
require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/oauth/access_token/get.php";

$sql = "SELECT * FROM api_xero_tenant_details 
        WHERE user_id = '".$user_id_for_request."'
        AND id IS NOT NULL
        AND actively_disconnected = 'no'";
//echo $sql;exit();
//$sql_for_logging = $sql;
//require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/oauth/logging/sql_queries.php";

$tenants_to_check_for_this_user = mysqli_query($conn, $sql);

$i = 0;
$tenant_user_id_count = 0;
while($row = mysqli_fetch_array($tenants_to_check_for_this_user, MYSQLI_ASSOC)){
    $tenants_for_this_user[$i] = $row['tenantId'];    //this does make the assumption that there is only one tenant - as per "check_tenants.php" this is a TODO item and needs adjustment in time for sure
    $tenant_user_id_count ++;
}

$tenant_id = $tenants_for_this_user[0];
//now we need to get out the 
//require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/tenants/check_tenants.php";
//now what we need to do is get out every active tenant ID and compare with what's above
//then probably compare with what's above somehow

    //SIDENOTE THIS DOES SEEM TO SHOW AND WORK PRETTY MUCH EXACTLY HOW YOU WOULD WANT IT TO 
    //the only thing that seems to be really missing 
    //i'm pretty sure there is a simpler way to acheive this 

    //all this works more than well enough for me
