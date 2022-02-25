<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='dulled_nav about_us nav-links hide_for_mobile";
	if($_SESSION['user_alerts_network'] == 'on'){echo " alert ";}		
	echo "' style='float:right;";
	if(check_url('/network/') == 1 OR $_GET['primary_folder'] == 'network'){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
	echo "' title='Your commercial network.' ";
 	if(isset($_SESSION['user_alerts_network_messages'])){ if($_SESSION['user_alerts_network_messages'] == 'on'){echo "href='/network/messages/'";}}
 	else{echo "href='/network/'";}
echo ">network</a>";