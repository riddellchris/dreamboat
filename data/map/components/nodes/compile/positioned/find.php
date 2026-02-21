<?php
if(!isset($_SESSION)){session_start();}

//to allow for unset variables
if(!isset($_SESSION['critical_node_include_1'])){$_SESSION['critical_node_include_1'] = 'all';
                                                 $query1 = $_SESSION['critical_node_include_1'];
                                                }                                                                    
                                                                                                else{$query1 = $_SESSION['critical_node_include_1'];}
if(!isset($_SESSION['critical_node_include_2'])){$query2 = '';}                                 else{$query2 = $_SESSION['critical_node_include_2'];}
if(!isset($_SESSION['critical_node_include_3'])){$query3 = '';}                                 else{$query3 = $_SESSION['critical_node_include_3'];}
if(!isset($_SESSION['critical_node_include_4'])){$query4 = '';}                                 else{$query4 = $_SESSION['critical_node_include_4'];}

require $_SERVER['DOCUMENT_ROOT']."/map/components/nodes/compile/positioned/sql_search_query.php";

$result = mysqli_query($conn, $sql);

$diagnostics['positioned_node_sql']    = $sql;
$map_triggers['positioned_node_count'] = mysqli_num_rows($result);

$positioned_ids = array(); /// if not this will spit out loads of errors here
$i = 0;
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    $positioned_ids[$i] = $row['item_id'];
    $i ++;
    //OPTIMIALLY
    //at this point we really should just be adding the x and y pos to the nodes array too
    //this should be done where the matching index_all_id matches
}

$diagnostics['positioned_ids'] = $positioned_ids;
//echo '<pre>' , var_dump($positioned_ids) , '</pre>';exit();
//now we just get out the details from all items_id and them put them in a simple array.
//it can be done very crudely.

$positioned_nodes = array();
for($i = 0; $i < count($positioned_ids); $i ++){
    $sql = "SELECT * FROM items_all 
            WHERE items_central_id = '".$positioned_ids[$i]."'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $positioned_nodes['database'][$i]     = $row['found_in_database'];
    $positioned_nodes['id'][$i]           = $row['item_id'];
    $positioned_nodes['all_items_id'][$i] = $row['items_central_id'];   
}

$diagnostics['positioned_node_details'] = $positioned_nodes;