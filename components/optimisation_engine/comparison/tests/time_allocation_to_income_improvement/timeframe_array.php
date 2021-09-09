<?php
if(!isset($_SESSION)){session_start();}
$timeframe = array();

//to work properly with associative arrays you cannot start these with a number
$timeframe[0] = "in_recent_weeks";			
$timeframe[1] = "six_months_ago";	
$timeframe[2] = "one_year_ago";	
$timeframe[3] = "two_years_ago";	
$timeframe[4] = "three_years_ago";	
$timeframe[5] = "five_years_ago";