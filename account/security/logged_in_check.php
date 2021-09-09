<?php
if(!isset($_SESSION)){session_start();}

if($_SESSION['logged_in'] != 'yes'){
$_SESSION['page_post_login'] = $_SERVER['REQUEST_URI'];
header("Location: /account/security/");
exit();
}
if(!isset($_SESSION['viewing_client_id'])){header("Location: /"); exit();}