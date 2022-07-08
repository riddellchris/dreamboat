<?php
if(!isset($_SESSION)){session_start();}


echo "<td>";
    if($row_connections['originally_connected_successfully'] == 'no'){
        require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/oauth/connection_button.php";
    }
    else{
        //this means that previously this has been connected succesffully.
        //so before we connect a tenant we just do a token refesh
        ///THE MAIN PART NOT JUST THE TOKEN REFESH PART
        //and most importanlty NOT including the 30 minute check so really what i need to do here is clean up how that process works,
        // and finish the matching but rest assured we can really find all these other systems for sure
        //regardless i can easily connect with everyone and say with total confidence that I'm doing this, the right thing

        //WRITING TO MYSELF
        //to clean this up we need to straighten out what goes where such that I can 
        //make sure the xero implementation covers the required inputs from Brian
        //then following that I can obviously finish the mapping and Bob's you're uncle.
        //happy fucking days/
        //so where to begin with this?
        //


                require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/oauth/access_token/refresh.php";


                //if test the refresh token and that works
                //then it should say currently connected

                //if not though then we should say something like:
                    //connected however some mometary problem 
                    //this is fine so long as we disconnect this // mark this as deleted and go from there.
                    //because without that we would also be lying
                    //there is a tiny amount of complexity in this but really it just needs a bit of a cleanup really doesn't it matter too much
                    //then i'm crusing
                    //so let's do that part

                $sql = "SELECT * FROM api_xero_tenant_details
                        WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'
                        ORDER BY entry_id DESC LIMIT 1";
                $sql_for_logging = $sql;
                require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/oauth/logging/sql_queries.php";
                    //    echo $sql; exit();
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                



                echo $row['tenantName']." - ";

                if($connected_successfully['xero'] == 'yes'){    
                    require $_SERVER['DOCUMENT_ROOT']."/data/components/display_elements/currently_connected.php";
                     //this of course could have bucket loads more detail added to it
                    //disconnect not just delete etc etc etc but for now honeslty i'm not worrying about that at alll                      
                }
                else{
                    require $_SERVER['DOCUMENT_ROOT']."/data/components/display_elements/connection_failed.php";

                }


    }
echo "</td>";