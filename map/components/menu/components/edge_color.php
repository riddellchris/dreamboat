<?php
if(!isset($_SESSION)){session_start();}

//this pulls out what has been defined as productivity for this person
require $_SERVER['DOCUMENT_ROOT']."/components/tracking/productivity_title_creation.php";


/* 
Clearly some of these shouldn't be possible
For example TRUST between two assets should really be communication,
therefore trust should probably be impossible to log but for now that isn't the case

Further to this there should be elements about location on clients, even assets etc etc that really should be included
but that's not where we are now.
Some limitiations are required to start and build models out from there
ESPECIALLY when it comes to machine learning




*/



echo "	<select name='map_edge_color' onchange='this.form.submit()'>";
	echo "	<option value='non_descript'";	                        if($_SESSION['map_edge_color'] == 'non_descript'){	    echo " selected ";}		echo ">COLOR: Nondescript</option>";
	echo "	<option value='users_time'";	                        if($_SESSION['map_edge_color'] == 'users_time'){		echo " selected ";}		echo ">COLOR: User's time</option>";
	echo "	<option value='financial'";		                        if($_SESSION['map_edge_color'] == 'financial'){			echo " selected ";}		echo ">COLOR: User's perspective financial</option>";
	echo "	<option value='productivity'";	                        if($_SESSION['map_edge_color'] == 'productivity'){	    echo " selected ";}		echo ">COLOR: Productivity</option>";
	echo "	<option value='productivity_improvement_potential'";	if($_SESSION['map_edge_color'] == 'productivity_improvement_potential'){		echo " selected ";}	echo ">COLOR: Productivity improvement potential</option>";	
	echo "	<option value='communication'";	                        if($_SESSION['map_edge_color'] == 'communication'){		echo " selected ";}		echo ">COLOR: Total communication quality</option>";
	echo "	<option value='trust'";			                        if($_SESSION['map_edge_color'] == 'trust'){				echo " selected ";}		echo ">COLOR: Trust</option>";	
	echo "	<option value='quality'";			                    if($_SESSION['map_edge_color'] == 'quality'){			echo " selected ";}		echo ">COLOR: Quality</option>";		
	echo "	<option value='kpi_1'";			                        if($_SESSION['map_edge_color'] == 'kpi_1'){				echo " selected ";}		echo ">COLOR: ".$kpi_1_title."</option>";	
	echo "	<option value='kpi_2'";			                        if($_SESSION['map_edge_color'] == 'kpi_2'){				echo " selected ";}		echo ">COLOR: ".$kpi_2_title."</option>";	
	echo "	<option value='kpi_3'";			                        if($_SESSION['map_edge_color'] == 'kpi_3'){				echo " selected ";}		echo ">COLOR: ".$kpi_3_title."</option>";	
	echo "	<option value='kpi_4'";			                        if($_SESSION['map_edge_color'] == 'kpi_4'){				echo " selected ";}		echo ">COLOR: ".$kpi_4_title."</option>";
echo "	</select>";