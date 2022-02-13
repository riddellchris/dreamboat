<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/tenants/get_tenant_user_ids_from_db.php";

//for each in that array
for($j = 0; $j < $tenant_user_id_count; $j++){

    //set the $_SESSION user_id with the corresponding user_id for this tenant
    $_SESSION['user_id']    = $tenant_user_id[$j];
    $tenant_id              = $tenant_xero_id[$j];

    require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/contacts/get_one.php";

}



        //then break out any arrays that may exist and work from there 



        //then from there we should be able to start working some things out
        //even just in terms of invoice sizing

        //perhaps we also need to pull out more information about / from other user data
        //i don't exactly know
        



  


