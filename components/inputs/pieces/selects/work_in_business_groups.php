<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/pieces/open_select_and_include_functions.php";
		
produce_option("Less than six months", 		$selected);
produce_option("six months to a year", 		$selected);
produce_option("1-2 years",			$selected);
produce_option("2-3 years", 			$selected);
produce_option("3-5 years", 			$selected);
produce_option("5-10 years", 			$selected);
produce_option("10-15 years", 			$selected);
produce_option("15-20 years", 			$selected);
produce_option("20-30 years", 			$selected);
produce_option("30+ years", 			$selected);

require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/pieces/close_select_unset_arguments.php";