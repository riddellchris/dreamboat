<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='about_us nav-links wide-nav";
	if($_SESSION['user_alerts_wheelhouse'] == 'on'){echo " alert ";}
	echo "' style='";	
	if(check_url('/wheelhouse/') == 1 OR $_GET['primary_folder'] == 'wheelhouse'){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
	echo "' title=''  href='/wheelhouse/'";
echo ">wheelhouse</a>";	