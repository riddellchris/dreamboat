<?php
if(!isset($_SESSION)){session_start();}




require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";


//on off switch for all of these thing frankly
/*
$options_to_extract = [
    'data',
    'map',
    'insights',
    'overview',
    'profile',
    'business',
    'network',
    'biz_dev',
    'management',
    'sales',
    'marketing',
    'wheelhouse',
    'activities',
    'issues',
    'upgrades',
    'results',
    'finances',
    'messages',
    'notifications'];
*/

if(isset($_GET['adjusting'])){$adjusting = $_GET['adjusting'];}else{$adjusting = '';}

    require $_SERVER['DOCUMENT_ROOT']."/components/navigation/pieces/what_to_display_query.php";
    require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

    $result = mysqli_query($conn, $sql);

    echo"<style>
        td{padding:2px 0px;}
        .wide-button{
                padding: 5px 2px;
                margin-bottom: 0px;
            }
        </style>";

    echo "<div style='width:100%;text-align:center;'>";
    echo "<table style='display:inline-block;margin-top:25px;'>";

    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

    echo "<tr>";
        echo "<td>";
            $var = "data";

            echo "<a class='";
            if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
            echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
            //if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
            echo "</a>";
        echo "</td>";
        echo "<td>";
            $var = "map";
            echo "<a class='";
            if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
            echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
            if($row[$var] == 'yes'){echo "<td>
                                                <a href=''>adjust</a>";}
            echo "</a>";
        echo "</td>";
        echo "<td>";
            $var = "insights";

            echo "<a class='";
            if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
            echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
            //if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
            echo "</a>";
        echo "</td>";

        echo "<td>";
            $var = "overview";

            echo "<a class='";
            if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
            echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
            //if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
            echo "</a>";
        echo "</td>";

        echo "<td>";
            $var = "profile";

            echo "<a class='";
            if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
            echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
            //if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
            echo "</a>";
            echo "</td>";
            echo "<td>";
            $var = "business";

            echo "<a class='";
            if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
            echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
            //if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
            echo "</a>";
            echo "</td>";
            echo "<td>";
            $var = "network";

            echo "<a class='";
            if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
            echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
            //if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
            echo "</a>";
            echo "</td>";
            echo "<td>";
            $var = "biz_dev";

            echo "<a class='";
            if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
            echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
            //if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
            echo "</a>";
            echo "</td>";
            echo "<td>";
            $var = "sales";

            echo "<a class='";
            if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
            echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
            //if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
            echo "</a>";
            echo "</td>";
            echo "<td>";
            $var = "marketing";

            echo "<a class='";
            if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
            echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
            //if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
            echo "</a>";
            echo "</td>";
            echo "<td>";
            $var = "management";

            echo "<a class='";
            if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
            echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
//            if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
            echo "</a>";
            echo "</td>";
            echo "<td>";
            $var = "wheelhouse";

            echo "<a class='";
            if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
            echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
//            if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
            echo "</a>";
            echo "</td>";
            echo "<td>";
            $var = "activities";

            echo "<a class='";
            if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
            echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
//            if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
            echo "</a>";
            echo "</td>";
            echo "<td>";
            $var = "time";

            echo "<a class='";
            if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
            echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
//            if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
            echo "</a>";
            echo "</td>";
            echo "<td>";
            $var = "issues";

            echo "<a class='";
            if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
            echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
//            if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
            echo "</a>";
            echo "</td>";
            echo "<td>";
            $var = "upgrades";

            echo "<a class='";
            if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
            echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
//            if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
            echo "</a>";
            echo "</td>";
            echo "<td>";
            $var = "results";

            echo "<a class='";
            if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
            echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
            //if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
            echo "</a>";
            echo "</td>";
            echo "<td>";
            $var = "finances";

            echo "<a class='";
            if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
            echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
            //if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
            echo "</a>";
            echo "</td>";
            echo "<td>";
            $var = "messages";

            echo "<a class='";
            if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
            echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
            //if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
            echo "</a>";
            echo "</td>";
            echo "<td>";
            $var = "notifications";

            echo "<a class='";
            if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
            echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
            //if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
            echo "</a>";
        echo "</td>";
    echo "</tr>";


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<style>
        .adjust_cell{
            text-align:center;
            font-family: Barlow Semi Condensed;
        }
        .close_cell{color: red; font-weight: 700; font-size: 20px;}
        .adjust_cell{color:blue; }
     </style>";


    echo "<tr>";
        $var = "data";
        echo "<td class='adjust_cell'>";
            if($adjusting != $var){
                echo "<a class='adjust_cell' href='adjust.php?type=".$var."'>Adjust</a>";
            }
            else{
                echo "<a class='close_cell' href='close.php?type=".$var."'>Close</a>";
            }

        echo "</td>";

        $var = "map";
        echo "<td class='adjust_cell'>";
            if($adjusting != $var){
                echo "<a class='adjust_cell' href='adjust.php?type=".$var."'>Adjust</a>";
            }
            else{
                echo "<a class='close_cell' href='close.php?type=".$var."'>Close</a>";
            }
        echo "</td>";

        $var = "insights";
        echo "<td class='adjust_cell'>";
            if($adjusting != $var){
                echo "<a class='adjust_cell' href='adjust.php?type=".$var."'>Adjust</a>";
            }
            else{
                echo "<a class='close_cell' href='close.php?type=".$var."'>Close</a>";
            }
        echo "</td>";

        $var = "overview";
        echo "<td class='adjust_cell'>";
            if($adjusting != $var){
                echo "<a class='adjust_cell' href='adjust.php?type=".$var."'>Adjust</a>";
            }
            else{
                echo "<a class='close_cell' href='close.php?type=".$var."'>Close</a>";
            }
        echo "</td>";       

        $var = "profile";
        echo "<td class='adjust_cell'>";
            if($adjusting != $var){
                echo "<a class='adjust_cell' href='adjust.php?type=".$var."'>Adjust</a>";
            }
            else{
                echo "<a class='close_cell' href='close.php?type=".$var."'>Close</a>";
            }
        echo "</td>";       

        $var = "business";
        echo "<td class='adjust_cell'>";
            if($adjusting != $var){
                echo "<a class='adjust_cell' href='adjust.php?type=".$var."'>Adjust</a>";
            }
            else{
                echo "<a class='close_cell' href='close.php?type=".$var."'>Close</a>";
            }
        echo "</td>";    

        $var = "network";
        echo "<td class='adjust_cell'>";
            if($adjusting != $var){
                echo "<a class='adjust_cell' href='adjust.php?type=".$var."'>Adjust</a>";
            }
            else{
                echo "<a class='close_cell' href='close.php?type=".$var."'>Close</a>";
            }
        echo "</td>";  

        $var = "biz_dev";
        echo "<td class='adjust_cell'>";
            if($adjusting != $var){
                echo "<a class='adjust_cell' href='adjust.php?type=".$var."'>Adjust</a>";
            }
            else{
                echo "<a class='close_cell' href='close.php?type=".$var."'>Close</a>";
            }
        echo "</td>"; 

        $var = "sales";
        echo "<td class='adjust_cell'>";
            if($adjusting != $var){
                echo "<a class='adjust_cell' href='adjust.php?type=".$var."'>Adjust</a>";
            }
            else{
                echo "<a class='close_cell' href='close.php?type=".$var."'>Close</a>";
            }
        echo "</td>"; 

        $var = "marketing";
        echo "<td class='adjust_cell'>";
            if($adjusting != $var){
                echo "<a class='adjust_cell' href='adjust.php?type=".$var."'>Adjust</a>";
            }
            else{
                echo "<a class='close_cell' href='close.php?type=".$var."'>Close</a>";
            }
        echo "</td>"; 

        $var = "management";
        echo "<td class='adjust_cell'>";
            if($adjusting != $var){
                echo "<a class='adjust_cell' href='adjust.php?type=".$var."'>Adjust</a>";
            }
            else{
                echo "<a class='close_cell' href='close.php?type=".$var."'>Close</a>";
            }
        echo "</td>"; 

        $var = "wheelhouse";
        echo "<td class='adjust_cell'>";
            if($adjusting != $var){
                echo "<a class='adjust_cell' href='adjust.php?type=".$var."'>Adjust</a>";
            }
            else{
                echo "<a class='close_cell' href='close.php?type=".$var."'>Close</a>";
            }
        echo "</td>";        

        $var = "activities";
        echo "<td class='adjust_cell'>";
            if($adjusting != $var){
                echo "<a class='adjust_cell' href='adjust.php?type=".$var."'>Adjust</a>";
            }
            else{
                echo "<a class='close_cell' href='close.php?type=".$var."'>Close</a>";
            }
        echo "</td>";  

        $var = "time";
        echo "<td class='adjust_cell'>";
            if($adjusting != $var){
                echo "<a class='adjust_cell' href='adjust.php?type=".$var."'>Adjust</a>";
            }
            else{
                echo "<a class='close_cell' href='close.php?type=".$var."'>Close</a>";
            }
        echo "</td>";  

        $var = "issues";
        echo "<td class='adjust_cell'>";
            if($adjusting != $var){
                echo "<a class='adjust_cell' href='adjust.php?type=".$var."'>Adjust</a>";
            }
            else{
                echo "<a class='close_cell' href='close.php?type=".$var."'>Close</a>";
            }
        echo "</td>"; 

        $var = "upgrades";
        echo "<td class='adjust_cell'>";
            if($adjusting != $var){
                echo "<a class='adjust_cell' href='adjust.php?type=".$var."'>Adjust</a>";
            }
            else{
                echo "<a class='close_cell' href='close.php?type=".$var."'>Close</a>";
            }
        echo "</td>"; 

        $var = "results";
        echo "<td class='adjust_cell'>";
            if($adjusting != $var){
                echo "<a class='adjust_cell' href='adjust.php?type=".$var."'>Adjust</a>";
            }
            else{
                echo "<a class='close_cell' href='close.php?type=".$var."'>Close</a>";
            }
        echo "</td>"; 

        $var = "finances";
        echo "<td class='adjust_cell'>";
            if($adjusting != $var){
                echo "<a class='adjust_cell' href='adjust.php?type=".$var."'>Adjust</a>";
            }
            else{
                echo "<a class='close_cell' href='close.php?type=".$var."'>Close</a>";
            }
        echo "</td>"; 

        $var = "messages";
        echo "<td class='adjust_cell'>";
            if($adjusting != $var){
                echo "<a class='adjust_cell' href='adjust.php?type=".$var."'>Adjust</a>";
            }
            else{
                echo "<a class='close_cell' href='close.php?type=".$var."'>Close</a>";
            }
        echo "</td>"; 

        $var = "notifications";
        echo "<td class='adjust_cell'>";
            if($adjusting != $var){
                echo "<a class='adjust_cell' href='adjust.php?type=".$var."'>Adjust</a>";
            }
            else{
                echo "<a class='close_cell' href='close.php?type=".$var."'>Close</a>";
            }
        echo "</td>"; 
    echo "</tr>";
    }

echo "</table>";

if(isset($_GET['adjusting'])){

    echo "<div style='width: 100%; text-align:left;'>";
    echo "<table style='display:inline-block;margin-top:125px;margin-left: calc((100% - 1600px) / 2);font-family: Barlow Semi Condensed;'>";
            echo "<tr>";
                echo "<th></th>";
                echo "<th></th>";
                echo "<th></th>";

            echo "</tr>";




            require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
            $sql = "SELECT * FROM admin_all_menu_options
                    WHERE primary_folder = '".mysqli_real_escape_string($conn, $_GET['adjusting'])."'";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                echo "<tr>";
                    echo "<td >".ucfirst($row['secondary_folder'])."</td>";
                    echo "<td>radio on</td>";
                    echo "<td>radio off</td>";
                    echo "</tr>";
            }

        echo "</table>";
    echo "</div>";






}




echo "</div>";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
