<?php
if(!isset($_SESSION)){session_start();}

unset($_SESSION['masked_domain']);

require $_SERVER['DOCUMENT_ROOT']."/components/whitelabeling/style_changes.php";

if($_SESSION['dreamboat_crew'] == 'yes'){
    header("Location: /users/regular_users/");
    exit();
}
else {
    header("Location: /");
    exit();
}