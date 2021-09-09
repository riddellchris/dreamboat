<?php

function standard_input($exiting_value, $name, $placeholder,$table_cell,$max_width){
	$item_name 	= $name;

	$margin_left 	= "unset";
	$margin_left 	= "unset";
	$display	= "inline-block";
	$value 		= $exiting_value;
	
	if($table_cell == 'yes'){echo "<div style='display:table-cell;'>";}	
		require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
	if($table_cell == 'yes'){echo "</div>";}
}