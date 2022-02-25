<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='dulled_nav about_us nav-links hide_for_mobile";
	if($_SESSION['user_alerts_contact_us'] == 'on'){echo " alert ";}		
	echo "' style='float:right;padding-right:18px;";
	if(check_url('/contact_us/') == 1 OR $_GET['secondary_folder'] == 'contact_us'){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
echo "' title='' href='/support/contact_us/'>contact us</a>";