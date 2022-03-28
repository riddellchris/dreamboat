<?php

$sql = "ALTER TABLE `api_connections` CHANGE `platform_category` `platform_category` VARCHAR(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
mysqli_query($conn, $sql);