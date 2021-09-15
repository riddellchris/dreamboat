<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT * FROM map_positions_per_view
        WHERE   ";

        if(isset($page)){    
                if($page == 'mark'){$sql .= " item_id           = '".$positioned_ids[$i]."' AND ";}
                unset($page);
        }
        
$sql .= "       critical_nodes_1                = '".mysqli_real_escape_string($conn, $query1)."'  AND
                critical_nodes_2                = '".mysqli_real_escape_string($conn, $query2)."'  AND
                critical_nodes_3                = '".mysqli_real_escape_string($conn, $query3)."'  AND
                critical_nodes_4                = '".mysqli_real_escape_string($conn, $query4)."'  AND
                issues_on_or_off                = '".mysqli_real_escape_string($conn, $_SESSION['current_issues_setting'])."'   AND
                user_id                         = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'        AND
                latest_data_point_for_this_view = 'yes'
        ";