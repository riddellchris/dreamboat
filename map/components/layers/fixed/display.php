<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/map/components/full_screen/controls.php";
//needs javascript i think to really make it work
//require $_SERVER['DOCUMENT_ROOT']."/components/layers/view_controls/positioning/controls.php";
require $_SERVER['DOCUMENT_ROOT']."/map/components/menu/display.php";
require $_SERVER['DOCUMENT_ROOT']."/map/components/warnings/display.php";

//this should really only be displayed if there are unpositioned nodes - probably based on even a diagnostics count to be honest
require $_SERVER['DOCUMENT_ROOT']."/map/components/unpositioned_nodes/display.php";