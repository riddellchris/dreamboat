<?php
if(!isset($_SESSION)){session_start();}

if(isset($map_triggers)){unset($map_triggers);}
$map_triggers = array();

$map_triggers['number_of_principle_nodes_to_display']   = '';
$map_triggers['issues_exist_to_merge']                  = 'unsure';

$diagnostics['basic_triggers_array_setup'] = $map_triggers;