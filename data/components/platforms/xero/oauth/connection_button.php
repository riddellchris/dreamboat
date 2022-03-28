<?php
if(!isset($_SESSION)){session_start();}

echo "
<a ";
    $response_type  = "code";
        //see the information on these scopes right here
        $scope  = "offline_access ";
        //request offline access to be able to refesh without further user login information
        //https://developer.xero.com/documentation/guides/oauth2/auth-flow#2-users-are-redirected-back-to-you-with-a-code


        //see the full list of scopes here honestly
        //https://developer.xero.com/documentation/guides/oauth2/scopes#workflowmax-scopes

        // $scope_string .= "accounting.budgets.read "; // this is on the system but it's probably just not part of my scope
        $scope          = "openid profile email ".$scope; //just based off something really simple// this will need to expand ove time
       // $client_id      = "01F3F4E33B49429EBEAC5BE52CE4C8A6";        
        require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/apis/xero/application_details/client_id.php";
        
        $scope .= "accounting.transactions.read "; //this ultimately includes products
        $scope .= "accounting.reports.read ";
        $scope .= "accounting.settings.read ";
        $scope .= "accounting.contacts.read ";
        $scope .= "accounting.budgets.read ";
        $scope .= "assets.read ";     
        //projects would be great to add but they require additional certificaiton
       // $scope .= "finance.accountingactivity.read ";            
       // $scope .= "finance.cashvalidation.read ";             
        //$scope .= "finance.statements.read";     

        // workflow max is a separate system honestly so that should be separated out honestly

        require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/oauth/redirect_uri.php";                                   


//echo "user_id = ".$_SESSION['user_id'];exit();

    $unique_code = md5(rand(999, 99999));
    $state  = "success_".$_SESSION['user_id']."_".$row_connections['entry_id']."_".$unique_code; //this is an optional string

        if($_SESSION['user_id'] == $_SESSION['viewing_client_id']){ // otherwise not actual end user
            //TERRIBLE //HACK:: Really this should be a link that connects to another page:
            //Let's call that page pre_connection for now
            //Then we can simply insert this information as we are on the way to connecting rather than creating an insert EVERY time we load this page /data/apis/ which is clearly ridiculous
            //not sure this is for me today though
            //#IS_URGENT #SECURITY #UPGRADES
            $sql = "INSERT INTO api_xero_oauth_keys (user_id, string, application_entry_id)
                    VALUES ('".$_SESSION['user_id']."','".$unique_code."', '".$row_connections['entry_id']."')";    
            mysqli_query($conn, $sql);

            //probably could update the "used / yes" column here but not essentials
            echo "href='https://login.xero.com/identity/connect/authorize?response_type=code&client_id=".$client_id."&redirect_uri=".$redirect_uri."&scope=".$scope."&state=".$state."'";

        }
    echo "
    >Connect to Xero";

    //echo $sql; exit();
    if($_SESSION['user_id'] != $_SESSION['viewing_client_id']){echo " -- not clickable for pilot";}
    echo "
                                </a>";