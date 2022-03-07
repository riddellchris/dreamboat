<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

$i = 0;
$items_to_initialise[$i] = 'income';                $i ++;
$items_to_initialise[$i] = 'income_target';         $i ++;
$items_to_initialise[$i] = 'hours_worked';                 $i ++;
$items_to_initialise[$i] = 'hours_worked_target';          $i ++;

$items_to_initialise[$i] = 'hours';                 $i ++;
$items_to_initialise[$i] = 'hours_target';          $i ++;
$items_to_initialise[$i] = 'productivity';          $i ++;
$items_to_initialise[$i] = 'productivity_target';   $i ++;
$items_to_initialise[$i] = 'sales';                 $i ++;
$items_to_initialise[$i] = 'sales_target';          $i ++;
$items_to_initialise[$i] = 'revenue';               $i ++;
$items_to_initialise[$i] = 'revenue_target';        $i ++;
$items_to_initialise[$i] = 'expenses';              $i ++;
$items_to_initialise[$i] = 'expenses_target';       $i ++;
$items_to_initialise[$i] = 'profit';                $i ++;
$items_to_initialise[$i] = 'profit_target';         $i ++;
$items_to_initialise[$i] = 'kpi_1';                $i ++;
$items_to_initialise[$i] = 'kpi_1_target';         $i ++;
$items_to_initialise[$i] = 'kpi_2';                $i ++;
$items_to_initialise[$i] = 'kpi_2_target';         $i ++;
$items_to_initialise[$i] = 'kpi_3';                $i ++;
$items_to_initialise[$i] = 'kpi_3_target';         $i ++;
$items_to_initialise[$i] = 'kpi_4';                $i ++;
$items_to_initialise[$i] = 'kpi_4_target';         $i ++;


for($i = 0; $i < count($items_to_initialise); $i ++){
    $sql    = "SELECT * FROM tracking_inputs WHERE user_id = '".$_SESSION['viewing_client_id']."' AND latest_version_of_this_data_type = 'yes' AND data_type='".$items_to_initialise[$i]."'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) == 0){
        $sql = "INSERT INTO tracking_inputs ( user_id, data_type, latest_version_of_this_data_type) 
                VALUES( '".$_SESSION['viewing_client_id']."', '".$items_to_initialise[$i]."', 'yes')";
        mysqli_query($conn, $sql);

    }
}

