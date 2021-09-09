<?php
if(!isset($_SESSION)){session_start();}

//this pulls out what has been defined as productivity for this person
require $_SERVER['DOCUMENT_ROOT']."/components/tracking/productivity_title_creation.php";


echo "	<select name='map_edge_color' onchange='this.form.submit()'>";
	echo "	<option value='non_descript'";	                        if($_SESSION['map_edge_color'] == 'non_descript'){	    echo " selected ";}		echo ">color: Nondescript</option>";
	echo "	<option value='users_time'";	                        if($_SESSION['map_edge_color'] == 'users_time'){		echo " selected ";}		echo ">color: User's time</option>";
	echo "	<option value='financial'";		                        if($_SESSION['map_edge_color'] == 'financial'){		echo " selected ";}		echo ">color: User's perspective financial</option>";
	echo "	<option value='productivity'";	                        if($_SESSION['map_edge_color'] == 'productivity'){	    echo " selected ";}		echo ">color: Productivity</option>";
	echo "	<option value='productivity_improvement_potential'";	if($_SESSION['map_edge_color'] == 'productivity_improvement_potential'){	echo " selected ";}	echo ">color: Productivity improvement potential</option>";	
	echo "	<option value='communication'";	                        if($_SESSION['map_edge_color'] == 'communication'){	echo " selected ";}		echo ">color: Total communication quality</option>";
	echo "	<option value='trust'";			                        if($_SESSION['map_edge_color'] == 'trust'){			echo " selected ";}		echo ">color: Trust</option>";	
	echo "	<option value='quality'";			                    if($_SESSION['map_edge_color'] == 'quality'){			echo " selected ";}		echo ">color: Quality</option>";		
	echo "	<option value='kpi_1'";			                        if($_SESSION['map_edge_color'] == 'kpi_1'){			echo " selected ";}		echo ">color: ".$kpi_1_title."</option>";	
	echo "	<option value='kpi_2'";			                        if($_SESSION['map_edge_color'] == 'kpi_2'){			echo " selected ";}		echo ">color: ".$kpi_2_title."</option>";	
	echo "	<option value='kpi_3'";			                        if($_SESSION['map_edge_color'] == 'kpi_3'){			echo " selected ";}		echo ">color: ".$kpi_3_title."</option>";	
	echo "	<option value='kpi_4'";			                        if($_SESSION['map_edge_color'] == 'kpi_4'){			echo " selected ";}		echo ">color: ".$kpi_4_title."</option>";
echo "	</select>";