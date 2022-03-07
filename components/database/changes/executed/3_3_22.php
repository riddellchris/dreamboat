<?php

$sql = "ALTER TABLE `user_main_nav_control` ADD `highlights` VARCHAR(3) NOT NULL DEFAULT 'no' AFTER `map`;";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
mysqli_query($conn, $sql);


$sql = "ALTER TABLE `user_main_nav_control` ADD `walkthroughs` VARCHAR(3) NOT NULL DEFAULT 'yes' AFTER `entry_time`;";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
mysqli_query($conn, $sql);