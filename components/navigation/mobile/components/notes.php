<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='about_us nav-links wide-nav";
	if($_SESSION['user_alerts_notes'] == 'on'){echo " alert ";}
	echo "' style='";	
	if(check_url('/notes/') == 1 OR $_GET['primary_folder'] == 'notes'){echo "color:#00ff00;";}
	echo "' title=''  href='/notes/'";
echo ">notes</a>";