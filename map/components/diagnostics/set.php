<?php
if(!isset($_SESSION)){session_start();}

if(isset($diagnostics)){unset($diagnostics);}
$diagnostics = array();

