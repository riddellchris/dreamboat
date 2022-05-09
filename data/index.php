<?php
if(!isset($_SESSION)){session_start();}
//echo 'hi';exit();

//echo '<pre>' , var_dump($_SESSION) , '</pre>';
require $_SERVER['DOCUMENT_ROOT']."/components/functions/primary_folder_redirections.php";

/*
if(isset($_SESSION['logged_in'])){
    if($_SESSION['logged_in'] == 'yes'){ 
        
    }
    else{
        header("/account/security/"); exit();
    }
}
else{
        header("/slideshows/"); exit();
}
*/
