<?php
if(!isset($_SESSION)){session_start();}

$relationships = array();
$relationships['item_a_database'] = array();
$relationships['item_a_id'] 	= array();
$relationships['item_b_database'] = array();
$relationships['item_b_id'] 	= array();
$relationships[thickness_score]	= array();
$relationships[color_score]	= array();