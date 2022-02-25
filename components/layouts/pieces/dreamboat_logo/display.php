<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/pieces/dreamboat_logo/styling.php";
echo "<a class='dreamboat-logo";
if($_GET['primary_folder'] == 'slideshows' OR $_GET['secondary_folder'] == 'letter'){echo " slideshow ";}
echo "' href='/'";
//if($_SESSION['logged_in'] != 'yes'){echo " style='float:none; padding-left: 0px;' ";}		
if(check_primary_folder('home')){echo " style='float:none; padding-left: 0px; margin-top:4vh; ' ";}	
    echo ">".$_SESSION['masked_domain_logo_name']."</a>";