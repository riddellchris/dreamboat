<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='dulled_nav about_us nav-links hide_for_mobile";
	if($_SESSION['user_alerts_upgrades'] == 'on'){echo " alert ";}		
	echo "' style='float:right;";
	if(check_url('/upgrades/') == 1 OR $_GET['primary_folder'] == 'upgrades'){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
echo "' title='Ways to improve your productivity' href='/upgrades/'>upgrades</a>";