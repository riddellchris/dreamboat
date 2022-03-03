<?php

$sql = "ALTER TABLE `user_main_nav_control` ADD `highlights` VARCHAR(3) NOT NULL DEFAULT 'no' AFTER `map`;";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
mysqli_query($conn, $sql);