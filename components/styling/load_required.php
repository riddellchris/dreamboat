<?php
if(!isset($_SESSION)){session_start();}

if(check_primary_folder('slideshow') or check_secondary_folder('letter') 

){
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/styling/main_css.php";
require $_SERVER['DOCUMENT_ROOT']."/slideshow/components/styling/index.php";
}


