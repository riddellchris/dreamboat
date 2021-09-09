<?php
if(!isset($_SESSION)){session_start();}

	if($back_used == 'no'){$contact_margin_left = "margin-left:0px;"; $back_used = 'yes';}else{$contact_margin_left = "";}
	echo "<a class='nav-links";
	if($_GET['primary_folder'] == 'slideshow' OR $_GET['secondary_folder'] == 'letter' ){echo " long ";}
	echo "' href='/legal/'  style='".$contact_margin_left;
	if(check_url('/legal/') == 1){echo "color:#63f263;margin-top: 18px;";}
	echo "'>legal</a>";