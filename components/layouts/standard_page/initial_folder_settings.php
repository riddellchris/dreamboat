<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/functions/required.php";


//if two question marks found in the URL then chop out one and the text between them.
if(substr_count($_SERVER['REQUEST_URI'], '?') > 1){

		$pos1 = strpos($_SERVER['REQUEST_URI'], '?', 1);
		$pos2 = strpos($_SERVER['REQUEST_URI'], '?', $pos1+1);
	
		$part_to_chop_out = substr($_SERVER['REQUEST_URI'], $pos1+1, $pos2-$pos1);
		
		$first_part_of_cleaned_url = substr($_SERVER['REQUEST_URI'], 1, $pos1);
		$second_part_of_cleaned_url = substr($_SERVER['REQUEST_URI'], $pos2+1, strlen($_SERVER['REQUEST_URI'])-($pos2-$pos1));
		$cleaned_url	= $first_part_of_cleaned_url.$second_part_of_cleaned_url;

	header("Location: /".$cleaned_url);
	exit();
}


echo url_folder_get_string_creation();
if($_SERVER['HTTP_HOST']!= "dreamboat.com.au"){echo "url to redirect to:".$url_to_redirect_to; exit();}

if(array_key_exists("primary_folder",$_GET) && array_key_exists("secondary_folder",$_GET)){
	if(	$_GET['primary_folder'] == '' 		OR 
		($_GET['primary_folder'] != 'messages' AND $_GET['secondary_folder'] == '') 
		){
	
		//CR 20.07.20
		//This is to keep in any other "non-folder data"
		$url_to_redirect_to = 	$_SERVER['REQUEST_URI'];
		if(substr_count($_SERVER['REQUEST_URI'], '?') != 1){
			$url_to_redirect_to .= "?";
		}
		else{$url_to_redirect_to .= "&";}
		
		$url_to_redirect_to .= url_folder_get_string_creation();


		header("Location: ".$url_to_redirect_to);
		exit();
		}
}


if(isset($_SESSION['this_page'])){
	if($_SESSION['this_page'] != $_SERVER['REQUEST_URI']){
		//the order here is really important
		$_SESSION['last_page_used'] = $_SESSION['this_page'];
		$_SESSION['this_page'] = $_SERVER['REQUEST_URI'];
		}
}
else{
	$_SESSION['this_page'] = $_SERVER['REQUEST_URI'];

}
	


