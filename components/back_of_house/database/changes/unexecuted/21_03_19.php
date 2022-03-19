<?php
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "ALTER TABLE `reminders` CHANGE `tertiary_folder` `tertiary_folder` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL, CHANGE `item_id` `item_id` INT(11) NULL, CHANGE `due` `due` DATE NULL, CHANGE `reminder_text` `reminder_text` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL";

mysqli_query($conn, $sql);