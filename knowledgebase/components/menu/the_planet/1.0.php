<?php
if(!isset($_SESSION)){session_start();}

primary_knowledgebase_menu_item('the_planet','no');
if($_GET['secondary_folder'] == 'the_planet'){
	secondary_knowledgebase_menu_item('current_state','no');
}
