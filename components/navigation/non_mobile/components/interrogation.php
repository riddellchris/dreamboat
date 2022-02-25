<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='dulled_nav about_us nav-links hide_for_mobile";
	if($_SESSION['user_alerts_interrogation'] == 'on'){echo " alert ";}		
	echo "' style='float:right;";
	//this one has the AND because of /admin/interrogation/ causing a duplicaiton
	//you can't just go with AND $_GET['primary_folder'] because of what happens when adding via /components/items/ etc
	if((check_url('/interrogation/') == 1 OR $_GET['primary_folder'] == 'interrogation')
		AND check_url('/admin/') != 1	){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
echo "' title='General interrogation issues' href='/interrogation/'>interrogation</a>";	