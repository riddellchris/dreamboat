<?php
if(!isset($_SESSION)){session_start();}

require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/register_file_usage.php";
admin_file_usage(__FILE__,$conn);

