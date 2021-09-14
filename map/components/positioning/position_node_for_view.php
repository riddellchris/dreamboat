<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

if(isset($_GET['method'])){
    if($_GET['method'] == 'reposition'){

        $sql = "UPDATE map_positions_per_view
                SET latest_data_point_for_this_view = 'no'
                WHERE   user_id             = '".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."'
                AND     critical_nodes_1      = '".$_SESSION['critical_node_include_1']."'
                AND     critical_nodes_2      = '".$_SESSION['critical_node_include_2']."'
                AND     critical_nodes_3      = '".$_SESSION['critical_node_include_3']."'
                AND     critical_nodes_4      = '".$_SESSION['critical_node_include_4']."'
                AND     issues_on_or_off    = '".$_SESSION['current_issues_setting']."'
                AND     item_id             = '".mysqli_real_escape_string($conn, $_GET['item_id'])."'
                ";
            //  echo $sql;
            //   exit();
        mysqli_query($conn, $sql); 
    }
}


if($_POST['x'] != '' AND $_POST['y'] != ''){


    $sql = "INSERT INTO map_positions_per_view
            (
                user_id,
                critical_nodes_1,
                critical_nodes_2,
                critical_nodes_3,
                critical_nodes_4,
                issues_on_or_off,
                item_id,
                x,
                y,
                positioned_by    
                )
            VALUES (
                '".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."',
                '".$_SESSION['critical_node_include_1']."',
                '".$_SESSION['critical_node_include_2']."',
                '".$_SESSION['critical_node_include_3']."',
                '".$_SESSION['critical_node_include_4']."',
                '".$_SESSION['current_issues_setting']."',
                '".mysqli_real_escape_string($conn, $_GET['item_id'])."',
                '".$_POST['x']."',
                '".$_POST['y']."',
                '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'
                );
                ";

    mysqli_query($conn, $sql);      
}


//echo $sql;
//exit();

header("Location: /map/personal/");
exit();