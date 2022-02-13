<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/invoices/get_one.php";
require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/contacts/get_one.php";
require $_SERVER['DOCUMENT_ROOT']."/data/components/platforms/xero/items/get_one.php";