<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='dulled_nav about_us nav-links hide_for_mobile";
	if($_SESSION['user_alerts_financials'] == 'on'){echo " alert ";}		
	echo "' style='float:right;";
	if($_GET['primary_folder'] == 'financials'){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
echo "' title='' href='/financials/'>financials</a>";	