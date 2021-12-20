<?php
if(!isset($_SESSION)){session_start();}

if($_SERVER['SERVER_PORT'] != 8888){
    $redirect_uri   = "https://dreamboat.com.au/map/apis/xero/connect.php";
}
else{
    $redirect_uri   = "http://localhost:8888/map/apis/xero/connect.php";
}