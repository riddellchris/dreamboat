<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='about_us nav-links hide_for_mobile";
	if($_SESSION['user_alerts_marketing'] == 'on'){echo " alert ";}		
	echo "' style='float:right;";
	if(check_url('/marketing/') == 1 OR $_GET['primary_folder'] == 'marketing'){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
echo "' title='Marketing in all its forms!' href='/marketing/'>marketing</a>";