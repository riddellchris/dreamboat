<?php
if(!isset($_SESSION)){session_start();}

//echo $_GET['secondary_folder'];
if($_GET['secondary_folder'] == 'events'){	echo "BD Events Plans";}
if($_GET['secondary_folder'] == 'one_to_ones'){ echo "One on ones strategies";}	
if($_GET['secondary_folder'] == 'referrers'){ 	echo "Referrers Strategy";}	