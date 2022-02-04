<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";



//before we insert it we really want to know if it works
//so first for timeular we just want to test it 
//then insert with tested or not



$sql = "INSERT INTO"



//