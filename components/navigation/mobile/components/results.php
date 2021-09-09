<?php
if(!isset($_SESSION)){session_start();}

	echo "<a class='dulled_nav about_us nav-links wide-nav";
		if($_SESSION['user_alerts_results'] == 'on'){echo " alert ";}
		echo "' style='";	
		if(check_url('/results/') == 1 OR $_SESSION['primary_folder'] == 'results'){echo "color:#00ff00;";}
	echo "' title='How your productivity is going.'  href='/results/'>results</a>";	