<?php
if(!isset($_SESSION)){session_start();}

if(	check_url('/legal/prospectus/') != 1 ){
	echo "<a class='nav-links";
	if($_GET['primary_folder'] == 'slideshows' OR $_GET['secondary_folder'] == 'letter' ){echo " long ";}
	echo "' href='/support/contact_us/'";
	if(check_url('/support/contact_us/') == 1){echo "style='color:".$_SESSION['masked_domain_highlight_colour'].";margin-top: 18px;'";}
	echo ">CONTACT</a>";
	}