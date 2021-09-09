<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='about_us nav-links hide_for_mobile";
	if($_SESSION['user_alerts_biz_dev'] == 'on'){echo " alert ";}		
	echo "' style='float:right;";
	if(check_url('/biz_dev/') == 1 OR $_GET['primary_folder'] == 'biz_dev'){echo "color:#00ff00;";}
echo "' title='All your BD fun!' href='/biz_dev/'>biz dev</a>";	