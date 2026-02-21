<?php
if(!isset($_SESSION)){session_start();}

echo "	<select name='map_display' onchange='this.form.submit()'>";
	echo "	<option value='relationship_centric'";		if($_SESSION['current_map_display'] == 'relationship_centric'){	echo " selected ";}	echo ">Relationship centric layout</option>";
	//in time this really should be AI based
		//just pull out the issues and display them first to make this one happen
		//this cannot work if issues are off of course
		//so we should probably adjust the warnings here as a result
//	echo "	<option value='central_issues'";	if($_SESSION['current_map_display'] == 'central_issues'){		echo " selected ";}	echo ">Central issues layout</option>";
		//puts the issues in the inner rings and sorts outwards from there
	//echo "	<option value='distributed_network'";		if($_SESSION['current_map_display'] == 'distributed_network'){	echo " selected ";}		echo ">Distributed network display</option>";
		//lays out based on left to right //throughput/breakdown
	//echo "	<option value='fractal_network_display'";	if($_SESSION['current_map_display'] == 'fractal_network_display'){	echo " selected ";}	echo ">Fractal network display</option>";
		//lays out in a radial arrangement
	//echo "	<option value='critical_edges_display'";	if($_SESSION['current_map_display'] == 'critical_edges_display'){	echo " selected ";}	echo ">Critical edges display</option>";	
		//Essentially organises it all based on the most important/highest weighted edges being in the center now
		
		//issues are hidden for this one
//	echo "	<option value='critical_edges_display'";	if($_SESSION['current_map_display'] == 'business_layout'){	echo " selected ";}	echo ">Business Layout</option>";	
		//Essentially organises it all based on the most important/highest weighted edges being in the center now		
//		problem trees is also really valid here as a subset of the view etc etc	
		
echo "
	</select>";