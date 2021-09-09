<?php
if(!isset($_SESSION)){session_start();}


$changed = 'no';
if($_SESSION['menu_to_display'] == 'client'	&& $changed =='no'	){$_SESSION['menu_to_display'] = 'internal';	$changed = 'yes';header("Location: /");}
if($_SESSION['menu_to_display'] == 'internal'	&& $changed =='no'	){$_SESSION['menu_to_display'] = 'client';	$changed = 'yes';header("Location: /users/");}



exit();

?>