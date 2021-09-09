<?php
if(!isset($_SESSION)){session_start();}

$sql = "SELECT * FROM business_management 
        WHERE deleted           = 'no' 
        AND currently_active    = 'yes'
        ORDER BY criticality_major";

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);


//produce table of all the items in here && ultimately product both the timelines and connections
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo $row['title']."<br>";
}

//now this really should turn into a nice little interactive segment using google chart timelines and project amangement tools
//https://developers.google.com/chart/interactive/docs/gallery/ganttchart
//https://developers.google.com/chart/interactive/docs/gallery/timeline