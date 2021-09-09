<?php
if(!isset($_SESSION)){session_start();}

$points = array();
$points['database'] = array();
$points['id'] = array();
$points['primary_folder'] = array();
$points['secondary_folder'] = array();
$points['title'] = array();

//this is not used until we get the points to a finalised list for display
//this occurs after the issues have been included (or not)
$points[number_of_relationships_to_display] = array();