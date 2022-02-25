<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='dulled_nav about_us nav-links hide_for_mobile";
	if($_SESSION['user_alerts_solutions'] == 'on'){echo " alert ";}		
	echo "' style='float:right;";
	if(check_url('/solutions/') == 1 OR $_GET['primary_folder'] == 'solutions'){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
echo "' title='The solutions to the problem' href='/solutions/'>solutions</a>";