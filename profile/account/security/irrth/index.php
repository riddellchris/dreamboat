<?php
if(!isset($_SESSION)){session_start();}

//echo "pushed all the way through now";

$_SESSION['masked_domain'] = 'irrth';
require $_SERVER['DOCUMENT_ROOT']."/account/security/index.php";