<?php
if(!isset($_SESSION)){session_start();}


	$primary_nav_link = 'profile';
	echo "<a class='dulled_nav about_us nav-links wide-nav";
		if($_SESSION['user_alerts_'.$primary_nav_link] == 'on'){echo " alert ";}
		echo "' style='";	
		if(check_url("/".$primary_nav_link."/") == 1 OR $_GET['primary_folder'] == $primary_nav_link){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
		echo "' title=''  href='/profile/'";
	echo ">".$primary_nav_link."</a>";