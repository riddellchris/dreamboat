<?php
if(!isset($_SESSION)){session_start();}

$primary_nav_link = 'business';	
echo "<a class='dulled_nav about_us nav-links wide-nav";
	if($_SESSION['user_alerts_business'] == 'on'){echo " alert ";}
	echo "' style='";	
	if($_GET['primary_folder'] == 'business'){echo "color:#00ff00;";}
	echo "' title=''  href='/business/'";
echo ">business</a>";	