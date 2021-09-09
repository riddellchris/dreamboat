<?php
if(!isset($_SESSION)){session_start();}


echo "<a class='dulled_nav about_us nav-links wide-nav";
	if($_SESSION['user_alerts_messages'] == 'on'){echo " alert ";}
	echo "' style='";	
	if(check_url('/messages/') == 1 OR $_SESSION['primary_folder'] == 'messages'){echo "color:#00ff00;";}
	echo "' href='/messages/'";
echo ">messages</a>";	