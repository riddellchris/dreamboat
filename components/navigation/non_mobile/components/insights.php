<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='about_us nav-links hide_for_mobile";
	if($_SESSION['user_alerts_insights'] == 'on'){echo " alert ";}		
	echo "' style='float:right;";
	if(check_url('/insights/') == 1 OR $_GET['primary_folder'] == 'insights'){echo "color: ".$_SESSION['masked_domain_highlight_colour'].";";}
echo "' title='insights impacting your productivity' href='/insights/'>insights</a>";	