<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

//collect users for any business that then group and display the collective network in the business layout... therefore can optimise the entire game from there


require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";