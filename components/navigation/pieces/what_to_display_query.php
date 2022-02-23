<?php
if(!isset($_SESSION)){session_start();}

$sql = "SELECT * FROM user_main_nav_control 
        WHERE   user_id = '".$_SESSION['viewing_client_id']."'
        AND     latest_version_for_this_user = 'yes'
        ORDER BY id DESC LIMIT 1
        ";