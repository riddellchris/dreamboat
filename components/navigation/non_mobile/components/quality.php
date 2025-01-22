<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='dulled_nav about_us nav-links hide_for_mobile";
	if($_SESSION['user_alerts_quality'] == 'on'){echo " alert ";}		
	echo "' style='float:right;";
	if(check_url('/quality/') == 1 OR $_GET['primary_folder'] == 'quality'){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
echo "' title='' href='/quality/'>quality</a>";	