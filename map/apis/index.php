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
$sql = "UPDATE  saas_application_xero_keys 
        SET     used = 'yes' 
        WHERE   user_id = '".$_SESSION['user_id']."' 
        AND     timestamp >= NOW() - INTERVAL 1 DAY  ";
//user_id is chosen NOT viewing_client_id such that it doesn't alter when/if a pilot is viewing


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
    $sql = "SELECT * FROM saas_application_connections 
    WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'
    AND deleted <> 'yes'
    ";

    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

        echo "


                <tr>
                    <td>".$row['platform_name']."</td>
                    <td><a target='_blank' href='";http://".
                                                  if(substr($row['platform_web_address'], 0, 4) != 'http') {echo "http://";} 
                                                    echo $row['platform_web_address']."'>".$row['platform_web_address']."</td>";

                    if($row['active'] != 'yes'){echo "<td style='color:green;'> tick</td>";}else{echo "<td></td>";}
                    if($row['active'] == 'yes'){echo "<td ><a style='color:red;' href='/map/apis/delete.php?saas_connection=".$row['entry_id']."'>DELETE</a></td>";}else{echo "<td></td>";}
                    


                     //                                  echo "<td>".stripos($row['platform_name'], 'xero')."</td>";

                    if(stripos($row['platform_name'], 'xero') === 0){
                        echo "
                            <td>
                                <a ";
                                    $response_type  = "code";
                                        //see the information on these scopes right here
                                        $scope_string  = "offline_access ";
                                        //request offline access to be able to refesh without further user login information
                                        //https://developer.xero.com/documentation/guides/oauth2/auth-flow#2-users-are-redirected-back-to-you-with-a-code

                                        
                                        $scope_string .= "accounting.transactions.read "; //this ultimately includes products
                                        $scope_string .= "accounting.reports.read ";
                                        $scope_string .= "accounting.settings.read ";
                                        $scope_string .= "accounting.contacts.read ";
                                       // $scope_string .= "accounting.budgets.read "; // this is on the system but it's probably just not part of my scope
                                        $scope          = "openid profile email ".$scope_string; //just based off something really simple// this will need to expand ove time
                                        $client_id      = "01F3F4E33B49429EBEAC5BE52CE4C8A6";
                                    if($_SERVER['SERVER_PORT'] != 8888){
                                        $redirect_uri   = "https://dreamboat.com.au/maps/apis/xero/connect.php";
                                    }
                                    else{
                                        $redirect_uri   = "http://localhost:8888/map/apis/xero/connect.php";
                                    }

                                    $unique_code = md5(rand(999, 99999));
                                    $state          = "success_".$_SESSION['user_id']."_".$row['entry_id']."_".$unique_code; //this is an optional string

                                        if($_SESSION['user_id'] == $_SESSION['viewing_client_id']){ // otherwise not actual end user
                                            //TERRIBLE //HACK:: Really this should be a link that connects to another page:
                                            //Let's call that page pre_connection for now
                                            //Then we can simply insert this information as we are on the way to connecting rather than creating an insert EVERY time we load this page /map/apis/ which is clearly ridiculous
                                            //not sure this is for me today though
                                            //#IS_URGENT #SECURITY #UPGRADES
                                            $sql = "INSERT INTO saas_application_xero_keys (user_id, string, application_entry_id)
                                                    VALUES ('".$_SESSION['user_id']."','".$unique_code."', '".$row['entry_id']."')";    
                                            mysqli_query($conn, $sql);

                                            //probably could update the "used / yes" column here but not essentials
                                            echo "href='https://login.xero.com/identity/connect/authorize?response_type=code&client_id=".$client_id."&redirect_uri=".$redirect_uri."&scope=".$scope."&state=".$state."'";

                                        }
                                    echo "
                                    >Login to Xero";

                                    //echo $sql; exit();
                                    if($_SESSION['user_id'] != $_SESSION['viewing_client_id']){echo " -- not clickable for pilot";}
                                    echo "
                                </a>
                            </td>";

                     }
                    else{
                        echo "  <td class='blink_me slower'>
                                    Available at completion of <a href='/knowledgebase/current_service/phases_of_engagement/' style='color:red;' >secondary mapping</a> 
                                </td>";
                    } 
        echo "</tr>";
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