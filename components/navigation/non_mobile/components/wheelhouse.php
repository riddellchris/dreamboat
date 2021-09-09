<?php
if(!isset($_SESSION)){session_start();}


echo "<a class='about_us nav-links hide_for_mobile";
	if($_SESSION['user_alerts_wheelhouse'] == 'on'){echo " alert ";}		
	echo "' style='float:right;";
	if(check_url('/wheelhouse/') == 1 OR $_GET['primary_folder'] == 'wheelhouse'){echo "color:#00ff00;";}


	echo "' title='Where you get things done' ";
	

	echo " href='/wheelhouse/'>wheelhouse</a> ";	