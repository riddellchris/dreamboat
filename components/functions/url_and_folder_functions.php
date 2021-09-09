<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/register_function_usage.php";
//just for the first entry to any folder after sign in...
require_once $_SERVER['DOCUMENT_ROOT']."/components/sub_menus/defaults.php";


function url_folder_get_string_creation(){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
	
	if(primary_folders_name() 	!= ''){$string = "primary_folder=".primary_folders_name();}
	if(secondary_folders_name() 	!= ''){$string .= "&secondary_folder=".secondary_folders_name();}
	if(tertiary_folders_name() 	!= ''){$string .= "&tertiary_folder=".tertiary_folders_name();}
	if(quarternary_folders_name() 	!= ''){$string .= "&quarternary_folder=".quarternary_folders_name();}	
	if(item_id_from_url() 		!= ''){$string .= "&item_id=".item_id_from_url();}
	return $string;
}



function check_primary_folder($folder_name){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__); //just checking and storing the use of the fucntion for future development tracking
	//both tests are required because some may come straight from the URL (first test) OR just a $_GET pass (second test obviously)
	
	if(primary_folders_name() == $folder_name OR $_GET['primary_folder'] == $folder_name){return '1';}
	else{return '0';}

}

function check_secondary_folder($folder_name){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__); //just checking and storing the use of the fucntion for future development tracking
	//both tests are required because some may come straight from the URL (first test) OR just a $_GET pass (second test obviously)	
	
	if(secondary_folders_name() == $folder_name OR $_GET['secondary_folder'] == $folder_name){return '1';}
	else{return '0';}
}

function check_tertiary_folder($folder_name){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__); //just checking and storing the use of the fucntion for future development tracking
	//both tests are required because some may come straight from the URL (first test) OR just a $_GET pass (second test obviously)	
	
	if(tertiary_folders_name() == $folder_name OR $_GET['tertiary_folder'] == $folder_name){return '1';}
	else{return '0';}
}


//CR 20.09.04
//Introduced for the purpose of legal/prospectus/ detail management
function check_tertiary_folder_not($folder_name){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__); //just checking and storing the use of the fucntion for future development tracking
	//both tests are required because some may come straight from the URL (first test) OR just a $_GET pass (second test obviously)	
	
	if(tertiary_folders_name() == $folder_name OR $_GET['tertiary_folder'] == $folder_name){return '0';}
	else{return '1';}
}


function check_folders_two_deep($primary_folder, $secondary_folder){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__); //just checking and storing the use of the fucntion for future development tracking
	if(	check_primary_folder($primary_folder) == 1 &&
		check_secondary_folder($secondary_folder) == 1){return '1';}
	else{return '0';}

}

function check_folders_three_deep($primary_folder, $secondary_folder, $tertiary_folder){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__); //just checking and storing the use of the fucntion for future development tracking
	if(	check_primary_folder($primary_folder) 		== 1 &&
		check_secondary_folder($secondary_folder) 	== 1 &&
		check_tertiary_folder($tertiary_folder) 	== 1
		){return '1';}
	else{return '0';}
}

function primary_folders_name(){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__); //just checking and storing the use of the fucntion for future development tracking
	
	if(substr_count($_SERVER['REQUEST_URI'], "/") > 1){
		//pos1 one is known to be 1 therefore it's redundant but informative in this function
		//$pos1 = strpos($haystack, $needle);
		$pos2 = strpos($_SERVER['REQUEST_URI'], '/', 1);
		
		$folders_name_no_slashes = substr($_SERVER['REQUEST_URI'], 1, $pos2 - 1);
		
		return $folders_name_no_slashes;
	}
}

function secondary_folders_name(){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__); //just checking and storing the use of the fucntion for future development tracking
	
	if(substr_count($_SERVER['REQUEST_URI'], "/") > 2){
		//pos1 one is known to be 1 therefore it's redundant but informative in this function
		//$pos1 = strpos($haystack, $needle);
		$pos2 = strpos($_SERVER['REQUEST_URI'], '/', 1);
		$pos3 = strpos($_SERVER['REQUEST_URI'], '/', $pos2+1);
		
		//$pos3-$pos2-1 is the string length without the forward slash's
		$folders_url = substr($_SERVER['REQUEST_URI'], $pos2+1, $pos3-$pos2-1);
		
		return $folders_url;
	}
}

function tertiary_folders_name(){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__); //just checking and storing the use of the fucntion for future development tracking
	
	if(substr_count($_SERVER['REQUEST_URI'], "/") > 3){
		//pos1 one is known to be 1 therefore it's redundant but informative in this function
		//$pos1 = strpos($haystack, $needle);
		$pos2 = strpos($_SERVER['REQUEST_URI'], '/', 1);
		$pos3 = strpos($_SERVER['REQUEST_URI'], '/', $pos2+1);
		$pos4 = strpos($_SERVER['REQUEST_URI'], '/', $pos3+1);	
		$pos5 = strpos($_SERVER['REQUEST_URI'], '/', $pos4+1);
			
		//$pos3-$pos2-1 is the string length without the forward slash's
		//i.e. the gap between the fourth position less the position of the third minus the actual / (hence the 1 at the end removed)
		$folders_url = substr($_SERVER['REQUEST_URI'], $pos3+1, $pos4-$pos3-1);
		
	//	echo $folders_url;
	//	exit();
		
		return $folders_url;
	}
}

function quarternary_folders_name(){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__); //just checking and storing the use of the fucntion for future development tracking
	
	//build on the other ones prior 
	if(substr_count($_SERVER['REQUEST_URI'], "/") > 4){
		//pos1 one is known to be 1 therefore it's redundant but informative in this function
		//$pos1 = strpos($haystack, $needle);
		$pos2 = strpos($_SERVER['REQUEST_URI'], '/', 1);
		$pos3 = strpos($_SERVER['REQUEST_URI'], '/', $pos2+1);
		$pos4 = strpos($_SERVER['REQUEST_URI'], '/', $pos3+1);	
		$pos5 = strpos($_SERVER['REQUEST_URI'], '/', $pos4+1);
		$pos6 = strpos($_SERVER['REQUEST_URI'], '/', $pos5+1);
			
		//$pos3-$pos2-1 is the string length without the forward slash's
		//i.e. the gap between the fourth position less the position of the third minus the actual / (hence the 1 at the end removed)
		$folders_url = substr($_SERVER['REQUEST_URI'], $pos4+1, $pos5-$pos4-1);
		
//		echo $folders_url;
//		exit();

	//	if(!isset($folders_url)){$folders_url = '';}
		
		return $folders_url;
	}	
	
	
	
	
	
	
	
	
	return 'unknown'; //for now
}

function final_file_name(){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
	
	//start at the end and work in reverse to find the last backslash 
	//then cut from there to the '.php' to find the final file name
	$pos_php 	= strpos($_SERVER['REQUEST_URI'], '.php', 1);
	
	if($pos_php !== false){
		$length_of_url	= strlen($_SERVER['REQUEST_URI']);
		
		$offset = $pos_php - $length_of_url;
		//therefore going backwards we get
		$pos_last_slash 	= strrpos($_SERVER['REQUEST_URI'], '/', $offset) +1; ///////////////////////////not the extra R in the function here!!!!
		$string_length_to_extract = $pos_php - $pos_last_slash;
		
		$file_name = substr($_SERVER['REQUEST_URI'], $pos_last_slash , $string_length_to_extract);
		
		return $file_name; //for now
	}
}



function item_id_from_url(){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
	
	if(	tertiary_folders_name() == 'item' OR 
		quarternary_folders_name() == 'item' 
	){

		//$pos2 = strpos($_SERVER['REQUEST_URI'], '=', 1);
		
		//should include something about OR ? if multiple post values
		
		//return	$folders_url = substr($_SERVER['REQUEST_URI'], $pos2+1, strlen($_SERVER['REQUEST_URI'])-1);
		return $_GET['item_id'];
		
		}
	else{
		return '';
	}



}


function primary_folders_url(){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
	
//pos1 one is known to be 1 therefore it's redundant but informative in this function
//$pos1 = strpos($haystack, $needle);
$pos2 = strpos($_SERVER['REQUEST_URI'], '/', 1);

$folders_url = substr($_SERVER['REQUEST_URI'], 0, $pos2+1);

return $folders_url;
}


function secondary_folders_url(){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
	
//pos1 one is known to be 1 therefore it's redundant but informative in this function
//$pos1 = strpos($haystack, $needle);
$pos2 = strpos($_SERVER['REQUEST_URI'], '/', 1);
$pos3 = strpos($_SERVER['REQUEST_URI'], '/', $pos2);

$folders_url = substr($_SERVER['REQUEST_URI'], $pos2, $pos3);

return $folders_url;
}


