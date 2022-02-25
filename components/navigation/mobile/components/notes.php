<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='about_us nav-links wide-nav";
	if($_SESSION['user_alerts_notes'] == 'on'){echo " alert ";}
	echo "' style='";	
	if(check_url('/notes/') == 1 OR $_GET['primary_folder'] == 'notes'){echo "color: ".$_SESSION['masked_domain_highlight_colour'] .";";}

	//this is because it should really be in the bottom not up here
	echo "text-decoration: line-through; text-decoration-color: red; text-decoration-thickness:4px;";

	echo "' title=''  href='/notes/'";
echo ">notes</a>";