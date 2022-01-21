<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/start_of_page_top_of_centering_divs.php";

/*
if($_SESSION['dreamboat_crew'] == 'yes'){
    echo "
    <span class='pilots_eyes_only_font'>
    //table
    //platform - initally just type in but ultimately a select option<br>
    //platform, logo, website address,<br>";//any other contact details we may or may not have for help assistance or experts in the Dreamboat team
    echo "
    //key<br>
    //codes<br>
    //permission notes/controls &<br>
    //Any other instructions required to get set up for each platform
    </span>
    ";
    require $_SERVER['DOCUMENT_ROOT']."/components/discussion/display.php";
}
*/
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";


$sql = "UPDATE  api_xero_oauth_keys 
        SET     used = 'yes' 
        WHERE   user_id = '".$_SESSION['user_id']."' 
        AND     timestamp >= NOW() - INTERVAL 1 DAY  ";
//user_id is chosen NOT viewing_client_id such that it doesn't alter when/if a pilot is viewing
//because a pilot WILL NOT be able to validate via Xero etc etc

?>


<div style='width: 100%;text-align: center;'>
<style>
th{text-align:left;}
.blink_me.slower{animation: blinker 3s linear infinite;}
</style>
        <span class='prompt-font'>Add & connect<br> your <a href='https://en.wikipedia.org/wiki/Software_as_a_service' target='_blank' style='color:red;'>SaaS</a> applications</span>
        <form method='post' action='/map/apis/submit_new_saas_app.php' style='margin-top: 50px;'>
        <table  style='margin-left:auto; margin-right:auto; font-family: Barlow Semi Condensed;'>
            <form>
                <tr>
                    <th>    
                        Platform name                  
                    </th>
                    <th>
                        Main web address    
                    </th>
                    <th>
                        <!-- save -->
                    </th>
                    <th>
                         <!-- delete -->                       
                    </th>
                    <th>
                        Connect
                    </th>
                </tr>


<?php
    $sql = "SELECT * FROM api_connections 
    WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'
    AND deleted <> 'yes'
    ORDER BY entry_id DESC
    ";

    $result = mysqli_query($conn, $sql);

    $platforms_shown['xero'] = 'no';



    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){


        if($platforms_shown['xero'] == 'no'){

            echo "
                    <tr>
                        <td>".ucfirst($row['platform_name'])."</td>
                        <td><a target='_blank' href='";http://".
                                                    if(substr($row['platform_web_address'], 0, 4) != 'http') {echo "http://";} 
                                                        echo $row['platform_web_address']."'>".$row['platform_web_address']."</td>";

                        if($row['active'] != 'yes'){echo "<td style='color:green;'> tick</td>";}else{echo "<td></td>";}

                        if($_SESSION['user_id'] == $_SESSION['viewing_client_id']){
                        if($row['active'] == 'yes'){echo "<td ><a style='color:red;' href='/map/apis/delete.php?saas_connection=".$row['entry_id']."'>DELETE</a></td>";}else{echo "<td></td>";}
                        }


                        //                                  echo "<td>".stripos($row['platform_name'], 'xero')."</td>";
  
                        if(stripos($row['platform_name'], 'xero') === 0 
                            ){
                                $platforms_shown['xero'] = 'yes';
                                echo "<td>";
                                    if($row['originally_connected_successfully'] == 'no'){
                                        require $_SERVER['DOCUMENT_ROOT']."/map/apis/xero/oauth/connection_button.php";
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
                                                $result = mysqli_query($conn, $sql);
                                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                                                



                                                echo $row['tenantName']." - ";
                                                echo "<span style='color: forestgreen;'>Currently connected</span>"; 
                                                    //this of course could have bucket loads more detail added to it
                                                    //disconnect not just delete etc etc etc but for now honeslty i'm not worrying about that at alll





                                    }
                                echo "</td>";
                        }
                        else{
                            echo "  <td class='blink_me slower'>
                                        Available at completion of <a href='/knowledgebase/current_service/phases_of_engagement/' style='color:red;' >secondary mapping</a> 
                                    </td>";
                        } 
            echo "</tr>";
        }
    }

?>
                <tr>
<style>
.new_api_input{background-color: #ededed;}

</style>
                    <td>    <input name ='platform_name' autocomplete='off' autofocus class='new_api_input'></input>
                    </td>
                    <td>    <input name ='platform_web_address'  autocomplete='off' class='new_api_input'></input>
                    </td>
                    <td>    <input type='submit' value='save' class='login-submit'></input>
                    </td>
                    <td>    <!-- empty -->
                    </td>
                    <td>    <!-- empty -->
                    </td>
              
                </tr>
    

            </form>
        </table> 

</div>

<?php

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/end_of_page_bottom_of_centering_divs.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>  