<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

//honestly i don't think this is really required for now either until the features list is really high enough -- we can leave it for now and just show some simple charts on the overview page


require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";