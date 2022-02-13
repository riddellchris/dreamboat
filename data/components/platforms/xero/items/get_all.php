<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/tenants/get_tenant_user_ids_from_db.php";

//for each in that array
for($j = 0; $j < count($tenant_user_id); $j++){

    //set the $_SESSION user_id with the corresponding user_id for this tenant
    $_SESSION['user_id']    = $tenant_user_id[$j];
    $tenant_id              = $tenant_xero_id[$j];

    require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/oauth/get_access_token.php";

    require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/items/get_one.php";
    
}


