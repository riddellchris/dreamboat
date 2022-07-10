<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/start_of_page_top_of_centering_divs.php"; //center all of this
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
require $_SERVER['DOCUMENT_ROOT']."/data/components/styling/tables.php";


/*
$sql = "UPDATE  api_xero_oauth_keys 
        SET     used = 'yes' 
        WHERE   user_id = '".$_SESSION['user_id']."' 
        AND     timestamp >= NOW() - INTERVAL 1 DAY  ";
//user_id is chosen NOT viewing_client_id such that it doesn't alter when/if a pilot is viewing
//because a pilot WILL NOT be able to validate via Xero etc etc
*/

?>


<div style='width: 100%;text-align: center;'>
<style>
th{text-align:left; font-size:larger;}
.blink_me.slower{animation: blinker 3s linear infinite;}
.app_tds{vertical-align: top;}
</style>
        <span   class='prompt-font'>Please match the correct<br><span style='color: red;'> xero account </span><br> to this user:<BR>
            <?php
                echo "<span style='color:red;'>".$_SESSION['viewing_client_first_name']." ".$_SESSION['viewing_client_last_name']."</span>";
            ?>
    
    </span>
        <table  class='data_tables'>
            <tr>
                <th>Account name</th>
                <th>Select</th>
            </tr>

<?php
    for($i = 0; $i < count($_SESSION['tenants_for_matching']); $i ++){
        echo "<tr>";
            echo "<td class='app_tds'>".$_SESSION['tenants_for_matching'][$i]['tenantName']."</td>";
            echo "<td class='app_tds'><a style='color: forestgreen;' href='/data/components/platforms/xero/tenants/store_tenants.php?option=".$i."'>SELECT ></a></td>";
        echo "</tr>";
    }

?>

    </table> 
</div>

<?php

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/end_of_page_bottom_of_centering_divs.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>  