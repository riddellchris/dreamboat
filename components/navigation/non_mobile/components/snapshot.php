<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='dulled_nav about_us nav-links hide_for_mobile";
	if($_SESSION['user_alerts_snapshot'] == 'on'){echo " alert ";}		
	echo "' style='float:right;";
	if(check_url('/snapshot/') == 1 OR $_GET['primary_folder'] == 'snapshot'){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
echo "' title='What we are doing' href='/snapshot/'>snapshot</a>";