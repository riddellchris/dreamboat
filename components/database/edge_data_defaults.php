<?php
//session_start NOT NEEDED as we aren't going to use any of that here

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

$column_name = 'time';                      $sql = "ALTER TABLE edge_data ALTER COLUMN ".$column_name ." SET DEFAULT '0.0'";    mysqli_query($conn, $sql);
$column_name = 'financial_flow';            $sql = "ALTER TABLE edge_data ALTER COLUMN ".$column_name ." SET DEFAULT '0.0'";    mysqli_query($conn, $sql);
$column_name = 'productivity';              $sql = "ALTER TABLE edge_data ALTER COLUMN ".$column_name ." SET DEFAULT '0.0'";    mysqli_query($conn, $sql);
$column_name = 'productivity_improvement_potential';  $sql = "ALTER TABLE edge_data ALTER COLUMN ".$column_name ." SET DEFAULT '0.0'";    mysqli_query($conn, $sql);
$column_name = 'communication';             $sql = "ALTER TABLE edge_data ALTER COLUMN ".$column_name ." SET DEFAULT '0.0'";    mysqli_query($conn, $sql);
$column_name = 'trust';                     $sql = "ALTER TABLE edge_data ALTER COLUMN ".$column_name ." SET DEFAULT '0.0'";    mysqli_query($conn, $sql);
$column_name = 'quality';                   $sql = "ALTER TABLE edge_data ALTER COLUMN ".$column_name ." SET DEFAULT '0.0'";    mysqli_query($conn, $sql);
$column_name = 'introductions';             $sql = "ALTER TABLE edge_data ALTER COLUMN ".$column_name ." SET DEFAULT '0.0'";    mysqli_query($conn, $sql);
$column_name = 'kpi_1';                     $sql = "ALTER TABLE edge_data ALTER COLUMN ".$column_name ." SET DEFAULT '0.0'";    mysqli_query($conn, $sql);
$column_name = 'kpi_2';                     $sql = "ALTER TABLE edge_data ALTER COLUMN ".$column_name ." SET DEFAULT '0.0'";    mysqli_query($conn, $sql);
$column_name = 'kpi_3';                     $sql = "ALTER TABLE edge_data ALTER COLUMN ".$column_name ." SET DEFAULT '0.0'";    mysqli_query($conn, $sql);
$column_name = 'kpi_4';                     $sql = "ALTER TABLE edge_data ALTER COLUMN ".$column_name ." SET DEFAULT '0.0'";    mysqli_query($conn, $sql);
