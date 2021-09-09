 <?php
if(!isset($_SESSION)){session_start();}
$current_version = "1.5";
require dirname(__FILE__)."/".basename(__FILE__, ".php")."/".$current_version.".php";

/*
1.5
With arrows along lines

1.4
With high and low water marks

1.3
not for "live display neccesarily" but includes the FULL series of GDP per capita based on the estimated population data series as the limiting factor

1.2
This has a "star" (Or something like that) at the projected -ve per capita point


1.1
This version has an especially long x-axis to find and allow viewing of the x intercept where per-capita-gdp goes to 0 and doesn't return

1.0
this is just the straight up chart
*/