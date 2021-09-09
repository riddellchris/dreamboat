<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='dulled_nav about_us nav-links hide_for_mobile";
	if($_SESSION['user_alerts_efficiency'] == 'on'){echo " alert ";}		
	echo "' style='float:right;";
	//this one has the AND because of /admin/interrogation/ causing a duplicaiton
	//you can't just go with AND $_GET['primary_folder'] because of what happens when adding via /components/items/ etc
	if($_GET['primary_folder'] == 'efficiency'
		AND check_url('/admin/') != 1	){echo "color:#00ff00;";}
echo "' title='efficiency planning' href='/efficiency/'>efficiency</a>";	