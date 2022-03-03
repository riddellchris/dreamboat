<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='dulled_nav about_us nav-links wide-nav";
	if($_SESSION['user_alerts_overview'] == 'on'){echo " alert ";}
	echo "' style='";	
	if( $_GET['primary_folder'] == 'overview'){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
	echo "' title=''  href='/overview/'";
echo ">overview</a>";