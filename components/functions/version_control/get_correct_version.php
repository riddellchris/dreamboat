<?php
if(!isset($_SESSION)){session_start();}

function get_correct_version($file_super_string, $current_version){
    require dirname($file_super_string)."/".basename($file_super_string, ".php")."/".$current_version.".php";
}