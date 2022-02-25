<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='dulled_nav about_us nav-links hide_for_mobile";
	if($_SESSION['user_alerts_profile_progress'] == 'on'){echo " alert ";}		
	echo "' style='float:right;";
	if(check_url('/profile/progress/') == 1 OR $_GET['secondary_folder'] == 'progress'){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
echo "' href='/profile/progress/'>progress</a>";