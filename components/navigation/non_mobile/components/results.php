<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='dulled_nav about_us nav-links hide_for_mobile";
	if($_SESSION['user_alerts_results'] == 'on'){echo " alert ";}		
	echo "' style='float:right;";
	if(check_url('/results/') == 1 OR $_GET['primary_folder'] == 'results'){echo "color:#00ff00;";}
echo "' title='How your results are improving.' href='/results/'>results</a>";	