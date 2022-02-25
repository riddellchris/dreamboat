<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='about_us nav-links hide_for_mobile";
	if($_SESSION['user_alerts_issues'] == 'on'){echo " alert ";}		
	echo "' style='float:right;";
	if(check_url('/issues/') == 1 OR $_GET['primary_folder'] == 'issues'){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
echo "' title='Issues impacting your productivity' href='/issues/'>issues</a>";	