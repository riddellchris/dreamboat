<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='dulled_nav about_us nav-links hide_for_mobile";
	if($_SESSION['user_alerts_notes'] == 'on'){echo " alert ";}		
	echo "' style='float:right;";


	//this is because it should really be in the bottom not up here
	echo "text-decoration: line-through; text-decoration-color: red; text-decoration-thickness:4px;";


	//this one has the AND because of /admin/notes/ causing a duplicaiton
	//you can't just go with AND $_GET['primary_folder'] because of what happens when adding via /components/items/ etc
	if((check_url('/notes/') == 1 OR $_GET['primary_folder'] == 'notes')
		AND check_url('/admin/') != 1	){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
echo "' title='General notes issues' href='/notes/'>notes</a>";	