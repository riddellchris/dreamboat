<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='about_us nav-links wide-nav";
	if($_SESSION['user_alerts_diagnostics'] == 'on'){echo " alert ";}
	echo "' style='";	
	if(check_url('/diagnostics/') == 1 OR $_GET['primary_folder'] == 'diagnostics'){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
	echo "' title='Diagnostics in all its forms!'  href='/diagnostics/'";
echo ">diagnostics</a>";