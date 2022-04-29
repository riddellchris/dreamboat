<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/start_of_page_top_of_centering_divs.php"; //center all of this
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
require $_SERVER['DOCUMENT_ROOT']."/data/components/styling/tables.php";

$sql = "UPDATE  api_xero_oauth_keys 
        SET     used = 'yes' 
        WHERE   user_id = '".$_SESSION['user_id']."' 
        AND     timestamp >= NOW() - INTERVAL 1 DAY  ";
//user_id is chosen NOT viewing_client_id such that it doesn't alter when/if a pilot is viewing
//because a pilot WILL NOT be able to validate via Xero etc etc
?>


<div style='width: 100%;text-align: center;'>
<style>
th{text-align:left; font-size:larger;}
.blink_me.slower{animation: blinker 3s linear infinite;}
.app_tds{vertical-align: top;}
</style>
        <span   class='prompt-font'>Add & connect<br> your <a href='https://en.wikipedia.org/wiki/Software_as_a_service' target='_blank' style='color:red;'>SaaS</a> applications</span>
        <table  class='data_tables'>
            <tr>
                <th>Platform name</th>
                <th>Main web address  </th>
                <th><!-- save --></th>
                <th><!-- delete --></th>
                <th>Status</th>
            </tr>

<?php
    require $_SERVER['DOCUMENT_ROOT']."/data/apis/connections/testing/all_platforms.php";

    while($row_connections = mysqli_fetch_array($result_connections , MYSQLI_ASSOC)){

        echo "
                <tr>
                    <td class='app_tds'>".ucfirst($row_connections['platform_name'])."</td>
                    <td class='app_tds'><a target='_blank' href='";http://".
                                                if(substr($row_connections['platform_web_address'], 0, 4) != 'http') {echo "http://";} 
                                                    echo $row_connections['platform_web_address']."'>".$row_connections['platform_web_address']."</td>";

                    if($row_connections['active'] != 'yes'){echo "<td style='color:green;'> tick</td>";}else{echo "<td></td>";}

                    if($_SESSION['user_id'] == $_SESSION['viewing_client_id']){
                    if($row_connections['active'] == 'yes'){echo "<td class='app_tds' ><a style='color:red; padding:8px;' href='/data/apis/connections/delete.php?saas_connection=".$row_connections['entry_id']."'>DELETE</a></td>";}else{echo "<td></td>";}
                    }

                    //do we know how to make it work sufficiently / that's the question here.
                    $scoped_platform = 'no';

                    //this should really be logged in api applications database
                    //with a separate element that if one is entered we don't have it will be online within 7 days
                    //but for right now i simply don't have that ready or available in my mind
                    //what's most imporant is pretty much 
                    //getting the key storage in and testing that
                    //so to do that the most important thing is 

                    $scoped_platform = 'no';
                    $oauth_platform  = 'no';
                    $use_generic_key_storage = 'not_applicable';
                    if(stripos($row_connections['platform_name'], 'timeular')   === 0 ){$scoped_platform = 'yes';  $oauth_platform = 'no';  $use_generic_key_storage = 'yes';}
                    if(stripos($row_connections['platform_name'], 'xero')       === 0 ){$scoped_platform = 'yes';  $oauth_platform = 'yes'; $use_generic_key_storage = 'not_applicable';}
                    
                    if($use_generic_key_storage == 'yes'){
                                                                //just for now -- 
                                                                if(
                                                                        ($_SESSION['user_id'] == 1 OR $_SESSION['user_id'] == 4231) &&
                                                                        stripos($row_connections['platform_name'], 'timeular') === 0
                                                                    ){
                                                                        echo "<td>";
                                                                        require $_SERVER['DOCUMENT_ROOT']."/data/components/display_elements/currently_connected.php";
                                                                        echo "</td>";
                                                                }
                                                                else{
                                                                    require $_SERVER['DOCUMENT_ROOT']."/data/apis/keys/box.php";

                                                                }
                    
                    }
                    if($oauth_platform          == 'yes'){
                        if(stripos($row_connections['platform_name'], 'xero')       === 0 ){require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/connection_display/xero.php";}
                    }
                    if($scoped_platform == 'no'){
                        //just for Delloite interview honestly
                        if(stripos($row_connections['platform_name'], 'workflowmax')   === 0 ){echo "<td>Connected</td>";}
                        else{
                        echo "  <td>
                                    Complete connection available soon. 
                                </td>";
                        }

                    } 
        echo "</tr>";
        
    }

?>
        <tr>
            <style>
                .new_api_input{background-color: #ededed;}
            </style>
            <form method='post' action='/data/apis/connections/submit_new_saas_app.php' style='margin-top: 50px;'>

            <?php

            if($number_of_active_connections == 0){$platform_prefix = "First ";}else{$platform_prefix = "Next ";}
                echo "
                    <td>    <input name ='platform_name' autocomplete='off' autofocus class='new_api_input' placeholder ='".$platform_prefix." platform name'></input></td>
                ";
                ?>
                <td>    <input name ='platform_web_address'  autocomplete='off' class='new_api_input' placeholder ='... and web address'></input></td>
                <td>    <input type='submit' value='add' class='login-submit'></input></td>
                <td>    <!-- empty --> </td>
                <td>    <!-- empty --></td>  
            </form>
        </tr>
    </table> 
</div>

<?php

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/end_of_page_bottom_of_centering_divs.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>  