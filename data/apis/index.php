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

        <table  style='margin-left:auto; margin-right:auto; font-family: Barlow Semi Condensed;'>
           
                <tr>
                    <th>Platform name</th>
                    <th>Main web address  </th>
                    <th><!-- save --></th>
                    <th><!-- delete --></th>
                    <th>Connect</th>
                </tr>


<?php
    $sql = "SELECT * FROM   api_connections 
            WHERE           user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'
            AND             deleted <> 'yes'
            ORDER BY        entry_id DESC";

   $result_connections  = mysqli_query($conn, $sql);//  or die( mysqli_error($conn));;


 //   echo '<pre>' , var_dump($result) , '</pre>';exit();


    //This sets up the defaults to ensure that there aren't any duplications at all here which is most important.
    $platforms_shown['xero']        = 'no';
    $platforms_shown['timeular']    = 'no';   



    while($row_connections = mysqli_fetch_array($result_connections , MYSQLI_ASSOC)){

        //check for duplication
        //if none // then show this
        //
        $duplicate = 'yes';
        if(stripos($row_connections['platform_name'], 'xero')       === 0 && $platforms_shown['xero']        == 'no'){$duplicate = 'no';}
        if(stripos($row_connections['platform_name'], 'timeular')   === 0 && $platforms_shown['timeular']    == 'no'){$duplicate = 'no';}        


        if($duplicate == 'no'){
            echo "
                    <tr>
                        <td>".ucfirst($row_connections['platform_name'])."</td>
                        <td><a target='_blank' href='";http://".
                                                    if(substr($row_connections['platform_web_address'], 0, 4) != 'http') {echo "http://";} 
                                                        echo $row_connections['platform_web_address']."'>".$row_connections['platform_web_address']."</td>";

                        if($row_connections['active'] != 'yes'){echo "<td style='color:green;'> tick</td>";}else{echo "<td></td>";}

                        if($_SESSION['user_id'] == $_SESSION['viewing_client_id']){
                        if($row_connections['active'] == 'yes'){echo "<td ><a style='color:red; padding:8px;' href='/map/apis/delete.php?saas_connection=".$row_connections['entry_id']."'>DELETE</a></td>";}else{echo "<td></td>";}
                        }


                        //                                  echo "<td>".stripos($row['platform_name'], 'xero')."</td>";

                        $connected_platform = 'no';
                        if(stripos($row_connections['platform_name'], 'xero')       === 0 ){require $_SERVER['DOCUMENT_ROOT']."/map/apis/connection_cells/xero.php";                $connected_platform = 'yes';}
                        if(stripos($row_connections['platform_name'], 'timeular')   === 0 ){require $_SERVER['DOCUMENT_ROOT']."/map/apis/connection_cells/timeular/central.php";    $connected_platform = 'yes';}


                        if($connected_platform == 'no'){
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
<form method='post' action='/map/apis/submit_new_saas_app.php' style='margin-top: 50px;'>
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