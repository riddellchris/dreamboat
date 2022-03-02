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

    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

        $var = "data";
        echo "<br>";
        echo "<a class='";
        if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
        echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
        if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
        echo "</a>";

        $var = "map";
        echo "<br>";
        echo "<a class='";
        if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
        echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
        if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
        echo "</a>";

        $var = "insights";
        echo "<br>";
        echo "<a class='";
        if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
        echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
        if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
        echo "</a>";

        $var = "profile";
        echo "<br>";
        echo "<a class='";
        if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
        echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
        if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
        echo "</a>";

        $var = "business";
        echo "<br>";
        echo "<a class='";
        if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
        echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
        if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
        echo "</a>";

        $var = "network";
        echo "<br>";
        echo "<a class='";
        if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
        echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
        if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
        echo "</a>";

        $var = "biz_dev";
        echo "<br>";
        echo "<a class='";
        if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
        echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
        if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
        echo "</a>";

        $var = "sales";
        echo "<br>";
        echo "<a class='";
        if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
        echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
        if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
        echo "</a>";

        $var = "marketing";
        echo "<br>";
        echo "<a class='";
        if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
        echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
        if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
        echo "</a>";

        $var = "management";
        echo "<br>";
        echo "<a class='";
        if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
        echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
        if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
        echo "</a>";

        $var = "wheelhouse";
        echo "<br>";
        echo "<a class='";
        if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
        echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
        if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
        echo "</a>";

        $var = "activities";
        echo "<br>";
        echo "<a class='";
        if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
        echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
        if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
        echo "</a>";

        $var = "time";
        echo "<br>";
        echo "<a class='";
        if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
        echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
        if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
        echo "</a>";

        $var = "issues";
        echo "<br>";
        echo "<a class='";
        if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
        echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
        if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
        echo "</a>";

        $var = "upgrades";
        echo "<br>";
        echo "<a class='";
        if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
        echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
        if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
        echo "</a>";

        $var = "results";
        echo "<br>";
        echo "<a class='";
        if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
        echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
        if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
        echo "</a>";

        $var = "finances";
        echo "<br>";
        echo "<a class='";
        if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
        echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
        if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
        echo "</a>";

        $var = "messages";
        echo "<br>";
        echo "<a class='";
        if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
        echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
        if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
        echo "</a>";

        $var = "notifications";
        echo "<br>";
        echo "<a class='";
        if($row[$var] == 'yes'){echo 'green-button';}else{echo 'red-button';}
        echo " wide-button' href='change_settings.php?type=".$var."'>".$var."";
        if($row[$var] == 'yes'){echo ' - on';}else{echo ' - off';}
        echo "</a>";


    }

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
