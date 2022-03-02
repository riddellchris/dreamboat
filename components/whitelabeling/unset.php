<?php
if(!isset($_SESSION)){session_start();}

unset($_SESSION['masked_domain']);

$no_echos = 'yes';
require $_SERVER['DOCUMENT_ROOT']."/components/whitelabeling/style_changes.php";
unset($no_echos);

if($_SESSION['dreamboat_crew'] == 'yes'){
    header("Location: /users/regular_users/");
    exit();
}
else {
    header("Location: /");
    exit();
}