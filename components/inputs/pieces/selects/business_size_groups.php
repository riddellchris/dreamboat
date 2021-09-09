<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/pieces/open_select_and_include_functions.php";
		
produce_option("One", 		$selected);
produce_option("2-3", 		$selected);
produce_option("4-5",		$selected);
produce_option("6-10", 		$selected);
produce_option("11-15", 	$selected);
produce_option("16-20", 	$selected);
produce_option("21-30", 	$selected);
produce_option("31-50", 	$selected);
produce_option("51-100", 	$selected);
produce_option("100-250", 	$selected);
produce_option("250-1000", 	$selected);
produce_option("1000-5000", 	$selected);
produce_option("5000-10000", 	$selected);
produce_option("10000-50000", 	$selected);
produce_option("50000-100000", 	$selected);
produce_option("100000+", 	$selected);

require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/pieces/close_select_unset_arguments.php";