<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/functions/url_and_folder_functions.php";
header("Location: /content/home/");