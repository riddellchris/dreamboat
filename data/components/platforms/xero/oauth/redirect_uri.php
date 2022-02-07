<?php
if(!isset($_SESSION)){session_start();}

if($_SERVER['SERVER_PORT'] != 8888){
    $redirect_uri   = "https://dreamboat.com.au/data/components/platforms/xero/oauth/connect.php";
}
else{
    $redirect_uri   = "http://localhost:8888/data/components/platforms/xero/oauth/connect.php";
}