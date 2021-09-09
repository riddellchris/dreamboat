<?php
if(!isset($_SESSION)){session_start();}

echo "<select name = '".$select_name."'  style='".$styling."' ";

//this clearly isn't done yet - not sure how critical CR 21.01.15
if(isset($submit_form_onchange) &&  $submit_form_onchange == 'yes'){echo " ";}
echo " >";


if(!isset($selected)){$selected = '';}
require_once $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/functions/initial_set.php";