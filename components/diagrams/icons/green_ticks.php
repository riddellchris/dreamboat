<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

echo "
<style>
.fa-check{color: green;}
</style>";


echo "<i class='fa fa-check'></i>";

