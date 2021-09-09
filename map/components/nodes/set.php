<?php
if(!isset($_SESSION)){session_start();}

$nodes                        = array();
$nodes['items_all_id']        = array();
$nodes['database']            = array();
$nodes['id']                  = array();
$nodes['primary_folder']      = array();
$nodes['secondary_folder']    = array();
$nodes['title']               = array();
$nodes['x_pos']               = array();
$nodes['y_pos']               = array();
$nodes['link']                = array();

$diagnostics['basic_nodes_array_setup'] = $nodes;

//this is not used until we get the points to a finalised list for display
//this occurs after the issues have been included (or not)
//$nodes['number_of_relationships_to_display'] = array();