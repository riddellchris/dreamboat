<?php
if(!isset($_SESSION)){session_start();}

//require the function to append the folders to the end of the submit string
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/url_and_folder_functions.php";


//change the user if required
$changing_subscription_value = 'yes';
require  $_SERVER['DOCUMENT_ROOT']."/users/alterations/select_client.php";

//layout page to be vertically centered
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/start_of_page_top_of_centering_divs.php";