<?php
if(!isset($_SESSION)){session_start();}

function gcharts_basic_script_start($chart_identifier){
		admin_functions_in_pages_usage(__FUNCTION__,__FILE__);

//there is some work to do here... when considering a single universal load to deal with multiple charts frankly
//https://developers.google.com/chart/interactive/docs/basic_multiple_charts


//the name is just for id when opening up source
echo "<script name='".$chart_identifier."' type='text/javascript'>
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(".$chart_identifier.");
	
		function ".$chart_identifier."() {";
	       
	}




function gcharts_standard_script_start($chart_identifier){
		admin_functions_in_pages_usage(__FUNCTION__,__FILE__);

//there is some work to do here... when considering a single universal load to deal with multiple charts frankly
//https://developers.google.com/chart/interactive/docs/basic_multiple_charts


//the name is just for id when opening up source
echo "<script name='".$chart_identifier."' type='text/javascript'>
		google.charts.load('current', {'packages':['corechart']});
		google.charts.setOnLoadCallback(".$chart_identifier.");
	
		function ".$chart_identifier."() {
	        	var data = google.visualization.arrayToDataTable([";
	}