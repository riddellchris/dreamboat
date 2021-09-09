<?php
if(!isset($_SESSION)){session_start();}

//this pulls out what has been defined as productivity for this person
require $_SERVER['DOCUMENT_ROOT']."/components/tracking/productivity_title_creation.php";


echo "	<select name='map_edge_thickness' onchange='this.form.submit()'>";
	echo "	<option value='non_descript'";	                        if($_SESSION['map_edge_thickness'] == 'non_descript'){	echo " selected ";}		echo ">THICKNESS: Nondescript</option>";
	echo "	<option value='users_time'";	                        if($_SESSION['map_edge_thickness'] == 'users_time'){	echo " selected ";}		echo ">THICKNESS: User's time</option>";
	echo "	<option value='financial'";		                        if($_SESSION['map_edge_thickness'] == 'financial'){		echo " selected ";}		echo ">THICKNESS: User's perspective financial</option>";
	echo "	<option value='productivity'";	                        if($_SESSION['map_edge_thickness'] == 'productivity'){	echo " selected ";}		echo ">THICKNESS: Productivity</option>";
	echo "	<option value='productivity_improvement_potential'";	if($_SESSION['map_edge_thickness'] == 'productivity_improvement_potential'){	echo " selected ";}	echo ">THICKNESS: Productivity improvement potential</option>";	
	echo "	<option value='communication'";	                        if($_SESSION['map_edge_thickness'] == 'communication'){	echo " selected ";}		echo ">THICKNESS: Total communication quality</option>";
	echo "	<option value='trust'";			                        if($_SESSION['map_edge_thickness'] == 'trust'){			echo " selected ";}		echo ">THICKNESS: Trust</option>";	
	echo "	<option value='quality'";			                    if($_SESSION['map_edge_thickness'] == 'quality'){		echo " selected ";}		echo ">THICKNESS: Quality</option>";		
	echo "	<option value='kpi_1'";			                        if($_SESSION['map_edge_thickness'] == 'kpi_1'){			echo " selected ";}		echo ">THICKNESS: ".$kpi_1_title."</option>";	
	echo "	<option value='kpi_2'";			                        if($_SESSION['map_edge_thickness'] == 'kpi_2'){			echo " selected ";}		echo ">THICKNESS: ".$kpi_2_title."</option>";	
	echo "	<option value='kpi_3'";			                        if($_SESSION['map_edge_thickness'] == 'kpi_3'){			echo " selected ";}		echo ">THICKNESS: ".$kpi_3_title."</option>";	
	echo "	<option value='kpi_4'";			                        if($_SESSION['map_edge_thickness'] == 'kpi_4'){			echo " selected ";}		echo ">THICKNESS: ".$kpi_4_title."</option>";
echo "	</select>";