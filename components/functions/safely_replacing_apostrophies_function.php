<?php
if(!isset($_SESSION)){session_start();}


//switching them back in?
function safely_replace_apostrophies($string){
	//str_replace any &#39; with an actual '
	$safe_string_step_1 = str_replace("&#39;","'",$string);
	$safe_string_step_2 = str_replace("&#39","'",$safe_string_step_1);	// just incase there is a typo missing the ;
	return $safe_string_step_2;
}

function safely_remove_apostrophies($string){
	//str_replace any &#39; with an actual '
	$safe_string_step_1 = str_replace("'","&#39;",$string);
//	$safe_string_step_2 = str_replace("'","&#39",$safe_string_step_1);	// just incase there is a typo missing the ;
	return $safe_string_step_1;
//	return $safe_string_step_2;
}


	
?>