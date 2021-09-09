<?php
if(!isset($_SESSION)){session_start();}

//storing all function usage for future development and improvement
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/register_function_usage.php";

//version_control
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/version_control/get_correct_version.php";

//security functions
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/loggedin_crew.php";

//time functions
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/time_since_string.php";

//page & url functions
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/check_url.php";
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/check_exact_url.php";
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/url_and_folder_functions.php";
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/repeating_page_functions.php";
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/sql_input_preparation.php";

//file_and_directory functions
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/list_folder_and_files.php";

//key functions
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/keys/required.php";

//text/copy alteration and preparation
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/strip_underscores.php";
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/safely_replacing_apostrophies_function.php";
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/print_copy_for_pilots_only.php";
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/copy_functions.php";

//form functions
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/hidden_form_inputs_for_folders_and_items.php";

//functions to include/require other files
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/require_functions.php";

//functions to operate google charts
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/google_charts/required.php";

//admin --- accessible by dreamboat crew only
if(isset($_SESSION['dreamboat_crew'])){
	if($_SESSION['dreamboat_crew'] == 'yes'){
		require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/echo_advice_to_pilots.php";
	}
}

//google_charts
$_SERVER['DOCUMENT_ROOT']."/components/functions/google_charts/required.php";

//javascript

