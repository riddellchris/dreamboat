<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";

require $_SERVER['DOCUMENT_ROOT']."/financials/holding_page.php";
