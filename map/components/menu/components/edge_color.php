<?php
if(!isset($_SESSION)){session_start();}

//this pulls out what has been defined as productivity for this person
require $_SERVER['DOCUMENT_ROOT']."/components/tracking/productivity_title_creation.php";


echo "	<select name='map_edge_colour' onchange='this.form.submit()'>";
	echo "	<option value='non_descript'";	                        if($_SESSION['map_edge_colour'] == 'non_descript'){	    echo " selected ";}		echo ">COLOUR: Nondescript</option>";
	echo "	<option value='users_time'";	                        if($_SESSION['map_edge_colour'] == 'users_time'){		echo " selected ";}		echo ">COLOUR: User's time</option>";
	echo "	<option value='financial'";		                        if($_SESSION['map_edge_colour'] == 'financial'){		echo " selected ";}		echo ">COLOUR: User's perspective financial</option>";
	echo "	<option value='productivity'";	                        if($_SESSION['map_edge_colour'] == 'productivity'){	    echo " selected ";}		echo ">COLOUR: Productivity</option>";
	echo "	<option value='productivity_improvement_potential'";	if($_SESSION['map_edge_colour'] == 'productivity_improvement_potential'){	echo " selected ";}	echo ">COLOUR: Productivity improvement potential</option>";	
	echo "	<option value='communication'";	                        if($_SESSION['map_edge_colour'] == 'communication'){	echo " selected ";}		echo ">COLOUR: Total communication quality</option>";
	echo "	<option value='trust'";			                        if($_SESSION['map_edge_colour'] == 'trust'){			echo " selected ";}		echo ">COLOUR: Trust</option>";	
	echo "	<option value='quality'";			                    if($_SESSION['map_edge_colour'] == 'quality'){			echo " selected ";}		echo ">COLOUR: Quality</option>";		
	echo "	<option value='kpi_1'";			                        if($_SESSION['map_edge_colour'] == 'kpi_1'){			echo " selected ";}		echo ">COLOUR: ".$kpi_1_title."</option>";	
	echo "	<option value='kpi_2'";			                        if($_SESSION['map_edge_colour'] == 'kpi_2'){			echo " selected ";}		echo ">COLOUR: ".$kpi_2_title."</option>";	
	echo "	<option value='kpi_3'";			                        if($_SESSION['map_edge_colour'] == 'kpi_3'){			echo " selected ";}		echo ">COLOUR: ".$kpi_3_title."</option>";	
	echo "	<option value='kpi_4'";			                        if($_SESSION['map_edge_colour'] == 'kpi_4'){			echo " selected ";}		echo ">COLOUR: ".$kpi_4_title."</option>";
echo "	</select>";