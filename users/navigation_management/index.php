<?php
if(!isset($_SESSION)){session_start();}




require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";


//on off switch for all of these thing frankly
/*
$options_to_extract = [
    'data',
    'map',
    'insights',
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
    'messages',
    'notifications'];
*/


    require $_SERVER['DOCUMENT_ROOT']."/components/navigation/pieces/what_to_display_query.php";
    require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

    $result = mysqli_query($conn, $sql);

    echo"<style>
        td{padding:2px 0px;}
        .wide-button{padding: 5px 2px;}
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
            if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
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
    }

echo "</table>";
echo "</div>";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
