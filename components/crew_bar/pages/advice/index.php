<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

echo"
this should display all advice such that we can then compile it/ organise it and ultimately create a knowledgebase

";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";