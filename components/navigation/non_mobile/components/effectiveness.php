<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='dulled_nav about_us nav-links hide_for_mobile";
	if($_SESSION['user_alerts_effectiveness'] == 'on'){echo " alert ";}		
	echo "' style='float:right;";
	//this one has the AND because of /admin/interrogation/ causing a duplicaiton
	//you can't just go with AND $_GET['primary_folder'] because of what happens when adding via /components/items/ etc
	if((check_url('/effectiveness/') == 1 OR $_GET['primary_folder'] == 'effectiveness')
		AND check_url('/admin/') != 1	){echo "color:#00ff00;";}
echo "' title='Effectiveness planning' href='/effectiveness/'>effectiveness</a>";	