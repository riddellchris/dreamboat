<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='dulled_nav about_us nav-links hide_for_mobile";
	if($_SESSION['user_alerts_business'] == 'on'){echo " alert ";}		
	echo "' style='float:right;";
	if($_GET['primary_folder'] == 'business'){echo "color:#00ff00;";}
echo "' title='The business you work for' href='/business/'>business</a>";