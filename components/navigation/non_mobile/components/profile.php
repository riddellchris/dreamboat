<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='dulled_nav about_us nav-links hide_for_mobile";
	if($_SESSION['user_alerts_profile'] == 'on'){echo " alert ";}		
	echo "' style='float:right;";
	if(check_url('/profile/') == 1 OR $_GET['primary_folder'] == 'profile'){echo "color:#00ff00;";}
echo "' title='All about you.' href='/profile/'>profile</a>";	