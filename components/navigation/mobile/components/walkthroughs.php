<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='about_us nav-links wide-nav";
	if($_SESSION['user_alerts_walkthroughs'] == 'on'){echo " alert ";}
	echo "' style='";	
	if(check_url('/walkthroughs/') == 1 OR $_GET['primary_folder'] == 'walkthroughs'){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
	echo "' title=''  href='/walkthroughs/'";
echo ">walkthroughs</a>";