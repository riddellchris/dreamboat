<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='about_us nav-links hide_for_mobile";
	if($_SESSION['user_alerts_activities'] == 'on'){echo " alert ";}		
	echo "' style='float:right;";
	if(check_url('/activities/') == 1 OR check_primary_folder('activities')){echo "color:#00ff00;";}
echo "' title='The things you do on a regular basis in your work role.' href='/activities/'>activities</a>";