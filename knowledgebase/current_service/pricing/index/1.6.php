<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/url_and_folder_functions.php";

if(check_primary_folder('legal') != 1){
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";
}

$show_any_pricing = 'no';


if(isset($_SESSION['logged_in'])){
    if($_SESSION['logged_in'] == 'yes'){
        if(!isset($_SESSION['masked_domain'])){
            require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/current_service/pricing/versions/dreamboat/1.0.php";
        }
        else{

            paragraph_detailed('no', 8,8,8,"Your pricing model is not currently available through this channel.");


        }
    }
    else{
        paragraph_detailed('no', 8,8,8,"Pricing is now only available post successful <a href='/account/security/' style='color:red;'>login</a>.");

    }
}


	

if(check_primary_folder('legal') != 1){		
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";
}