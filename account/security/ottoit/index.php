<?php
if(!isset($_SESSION)){session_start();}

echo "pushed all the way through now";

if(!isset($_SESSION['masked_domain'])){$_SESSION['masked_domain'] == 'ottoit';}

require $_SERVER['DOCUMENT_ROOT']."/account/security/index.php";