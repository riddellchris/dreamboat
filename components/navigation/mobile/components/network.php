<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='dulled_nav about_us nav-links wide-nav";
	if($_SESSION['user_alerts_network'] == 'on'){echo " alert ";}
	echo "' style='";	
	if(check_url('/network/') == 1 OR $_GET['primary_folder'] == 'network'){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
	echo "' title=''  href='/network/'";
echo ">network</a>";