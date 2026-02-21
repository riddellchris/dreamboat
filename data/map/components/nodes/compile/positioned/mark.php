<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";


if(!isset($_SESSION['current_map_view'])){		        $_SESSION['current_map_view'] 	 	    = 'all';}
if(!isset($_SESSION['current_issues_setting'])){	    $_SESSION['current_issues_setting'] 	= 'issues_on';}


for($i = 0; $i < count($positioned_ids); $i ++){
    //get out the x and y pos for this view and this issues setting for this user
    $page = 'mark';
    require $_SERVER['DOCUMENT_ROOT']."/map/components/nodes/compile/positioned/sql_search_query.php";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    //get key of that 
    $key_to_update = array_search($positioned_ids[$i], $nodes['items_all_id']);

    $nodes['x_pos'][$key_to_update] = $row['x'];
    $nodes['y_pos'][$key_to_update] = $row['y'];

    //then update the appropriate nodes position

}

$diagnostics['positioned_nodes'] = $nodes;