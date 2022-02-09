<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

//if there are
echo "<div style='width:100vw;'>";
    echo "<div style='float: left;width: 50vw;  min-height: 50px;  '>";
        require $_SERVER['DOCUMENT_ROOT']."/data/matching/dreamboat_side/index.php";
    echo "</div>";
    echo "<div style='margin-left: 50vw; width: 50vw;   min-height: 50px; '>";
        require $_SERVER['DOCUMENT_ROOT']."/data/matching/external_side/index.php";
    echo "</div>";

    echo "<div style='width: 100%;'>";
        //then for each for each of the points we simply 
        /*
        $sql = "SELECT * FROM 

        and on the right hand side a select (or maybe even a search for the options to match with.
        
        then probably just set and restore from there
        */





    echo "</div>";


echo "</div>";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";