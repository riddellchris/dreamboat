<?php
if(!isset($_SESSION)){session_start();}


/*
FOR 
add_to_column_list & 
add_to_value_list
You can actually just use the array_push_function
*/

function add_to_column_list($current_array, $new_value){
//currently just using this algorithm below to build column arrays
//found most recently in /admin/pages/comparison/tests/time_allocation_to_income_improvement/submit.php
//$columns[count($columns)] = $name_starter.$name_ender[$name_key];

}

function add_to_value_list($current_array, $new_value){
//currently just using this algorithm below to build value arrays
//found most recently in /admin/pages/comparison/tests/time_allocation_to_income_improvement/submit.php
//$values[count($values)] = mysqli_real_escape_string($conn, $_POST[$name_starter.$name_ender[$name_key]]);
//or put more simply
}

function print_column_list($column_array){
//	echo columns with commas for all but the last one
	$string_for_return = '';
	for($i = 0; $i < count($column_array); $i++){
		$string_for_return .= $column_array[$i];
		if($i != (count($column_array) - 1 )){$string_for_return .= ", ";}
	}
	return $string_for_return;
}

function print_value_list($value_array){
//	echo columns with commas for all but the last one
	$string_for_return = '';
	for($i = 0; $i < count($value_array); $i++){
		$string_for_return .= "'".$value_array[$i]."'";
		if($i != (count($value_array) - 1 )){$string_for_return .= ", ";}
	}
//	return "heelo";
	return $string_for_return;
}

function produce_insert_query($database, $columns, $values){
	$string_for_return = '';
	$string_for_return = "INSERT INTO ".$database." (".$columns.") VALUES (".$values.")";
	return $string_for_return;
}