<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='dulled_nav about_us nav-links hide_for_mobile' style='float:right;padding-top:18px;";
	if($_SESSION['dreamboat_crew'] == 'yes'){echo "padding-right:18px;";} //because this is the last menu item
	if(check_url('/account/') == 1 OR $_GET['primary_folder'] == 'account'){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}
	else{echo "style='color:white;";}
	echo "'";
echo " title='All your account based fun.' href='/account/'>account</a>";