<?php
if(!isset($_SESSION)){session_start();}

function kpi_settings_row($kpi_number, $title, $units, $max, $min){


if($kpi_number == 1){$display_title = "KPI #".$kpi_number;	$name = 'kpi_'.$kpi_number;	$color = 'red';}
if($kpi_number == 2){$display_title = "KPI #".$kpi_number;	$name = 'kpi_'.$kpi_number;	$color = 'blue';}
if($kpi_number == 3){$display_title = "KPI #".$kpi_number;	$name = 'kpi_'.$kpi_number;	$color = 'orange';}
if($kpi_number == 4){$display_title = "KPI #".$kpi_number;	$name = 'kpi_'.$kpi_number;	$color = 'green';}

if($kpi_number == 'related_kpi_a'){$display_title = "Related KPI 'A' Title";	$name = 'related_kpi_a';	$color = 'red';}
if($kpi_number == 'related_kpi_b'){$display_title = "Related KPI 'B' Title";	$name = 'related_kpi_b';	$color = 'blue';}


echo "
<div class='div-table-row' style='color: ".$color.";'>
	<div class = 'kpi_settings' style='display:inline-block;text-align:right;'>".$display_title."</div>
	<div style='display:inline-block;width:100%;max-width:600px;'>
		 <input name='".$name."_title' style='width:100%;";
		 
		 if($_GET['secondary_folder'] == 'links'){echo " margin: 6px 10px 4px; ";}
		 
		 	echo "' value ='".$title."'>
	</div>
</div>		
	";
	//exit();
	
/*	This is old code that I just can't bring myself to delete for some reason.
	Before you delete it, make sure to try it out, and then leave it or have a solid discussion about what if anything should replace it
<!--	<div style='display:inline-block;'>
		units <input class='units'  name='kpi_".$kpi_number."_units' value ='".$units."'>
	</div>
	<div style='display:inline-block;'>
		max <input class='max' name='kpi_".$kpi_number."_max' value ='".$max."'>
	</div>
	<div style='display:inline-block;'>
		min <input class='min'  name='kpi_".$kpi_number."_min' value ='".$min."'>
	</div>-->*/


}
