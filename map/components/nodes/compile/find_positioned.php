<?php
if(!isset($_SESSION)){session_start();}

$sql = "SELECT * FROM map_positions_per_view
        WHERE   critical_nodes_1                = '".$_SESSION['critical_node_include_1']."'  AND
                critical_nodes_2                = '".$_SESSION['critical_node_include_2']."'  AND
                critical_nodes_3                = '".$_SESSION['critical_node_include_3']."'  AND
                critical_nodes_4                = '".$_SESSION['critical_node_include_4']."'  AND
                issues_on_or_off                = '".$_SESSION['current_issues_setting']."'   AND
                user_id                         = '".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."'        AND
                latest_data_point_for_this_view = 'yes'
        ";
//echo $sql;
//exit();
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";




$result = mysqli_query($conn, $sql);


$positioned_ids = array(); /// if not this will spit out loads of errors here
$i = 0;
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

    $positioned_ids[$i] = $row['item_id'];

        //at this point we really should just be adding the x and y pos to the nodes array too
        //this should be done where the matching index_all_id matches

    $i ++;

}

$diagnostics['positioned_ids'] = $positioned_ids;
//echo '<pre>' , var_dump($positioned_ids) , '</pre>';exit();


//now we just get out the details from all items_id and them put them in a simple array.
//it can be done very crudely.

$positioned_nodes = array();
for($i = 0; $i < count($positioned_ids); $i ++){

    $sql = "SELECT * FROM items_all WHERE items_central_id = '".$positioned_ids[$i]."'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $positioned_nodes['database'][$i]     = $row['found_in_database'];
    $positioned_nodes['id'][$i]           = $row['item_id'];
    $positioned_nodes['all_items_id'][$i] = $row['items_central_id'];   
}

//echo '<pre>' , var_dump($positioned_nodes) , '</pre>';


$diagnostics['positioned_node_details'] = $positioned_nodes;