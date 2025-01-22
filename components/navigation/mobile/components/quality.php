<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='dulled_nav about_us nav-links wide-nav";
	if($_SESSION['user_alerts_quality'] == 'on'){echo " alert ";}
	echo "' style='";	
	if(check_url('/quality/') == 1){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
	echo "' title=''  href='/quality/'";
echo ">quality</a>";