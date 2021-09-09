<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='dulled_nav about_us nav-links hide_for_mobile";
	if($_SESSION['user_alerts_back'] == 'on'){echo " alert ";}		
	echo "' style='float:right;padding-right:18px;";
	if(check_url('/back/') == 1 OR $_GET['primary_folder'] == 'back'){echo "color:#00ff00;";}
echo "' title='' href='/'>back</a>";