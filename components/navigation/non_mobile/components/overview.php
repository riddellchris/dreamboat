<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='about_us nav-links hide_for_mobile";
	if($_SESSION['user_alerts_overview'] == 'on'){echo " alert ";}		
	echo "' style='float:right;";
	if($_GET['primary_folder'] == 'overview'){echo "color: ".$_SESSION['masked_domain_highlight_colour'].";";}
echo "' title='' href='/overview/'>overview</a>";	