<?php
if(!isset($_SESSION)){session_start();}

$edges = array();
$edges['item_a_database']           = array();
$edges['item_a_id'] 	            = array();
$edges['item_b_database']           = array();
$edges['item_b_id'] 	            = array();
$edges['relationship_id']           = array();
$edges['item_a_x_pos'] 	            = array();
$edges['item_a_y_pos'] 	            = array();

$edges['item_b_x_pos'] 	            = array();
$edges['item_b_y_pos'] 	            = array();
$edges['a_to_b_thickness_score']	= array();
$edges['a_to_b_color_score']	    = array();
$edges['a_to_b_thickness_in_pts']	= array();
$edges['a_to_b_color_hex']	        = array(); //assuming not gradient for now

$diagnostics['basic_edges_array_setup'] = $edges;