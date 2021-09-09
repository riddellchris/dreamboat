<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='about_us nav-links wide-nav";
	if($_SESSION['user_alerts_sales'] == 'on'){echo " alert ";}
	echo "' style='";	
	if((check_url('/sales/') == 1 OR $_SESSION['primary_folder'] == 'sales')
	AND check_url('/results/') != 1	
	){echo "color:#00ff00;";}//results/sales/ causes a bug here hence two criteria
	echo "' title='Sell, sell, sell!'  href='/sales/'";
echo ">sales</a>";	