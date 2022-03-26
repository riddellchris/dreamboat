<?php
if(!isset($_SESSION)){session_start();}

$current_month  = date('m');
$current_year	= date('y');

//start 24 months prior to today
//end up 24 months ahead of this month.
//such that if this month is march we end up with march and march as a result.

$start_back = 24;


if(($current_month - $start_back) > 0 ){	$month_combo[0] =  $current_year."_".(	$current_month-$start_back);}
else{				$month_combo[0] = ($current_year-1)."_".($current_month-$start_back+12);}


///therefore find 
if(($current_month - 6) > 0 ){	$month_combo[0] =  $current_year."_".(	$current_month-6);}
else{				$month_combo[0] = ($current_year-1)."_".($current_month-6+12);}

if(($current_month - 5) > 0 ){	$month_combo[1] =  $current_year."_".(	$current_month-5);}
else{				$month_combo[1] = ($current_year-1)."_".($current_month-5+12);}

if(($current_month - 4) > 0 ){	$month_combo[2] =  $current_year."_".(	$current_month-4);}
else{				$month_combo[2] = ($current_year-1)."_".($current_month-4+12);}

if(($current_month - 3) > 0 ){	$month_combo[3] =  $current_year."_".(	$current_month-3);}
else{				$month_combo[3] = ($current_year-1)."_".($current_month-3+12);}

if(($current_month - 2) > 0 ){	$month_combo[4] =  $current_year."_".(	$current_month-2);}
else{				$month_combo[4] = ($current_year-1)."_".($current_month-2+12);}

if(($current_month - 1) > 0 ){	$month_combo[5] =  $current_year."_".(	$current_month-1);}
else{				$month_combo[5] = ($current_year-1)."_".($current_month-1+12);}


//the actual month
if(($current_month - 0) > 0 ){	$month_combo[6] =  $current_year."_".(	$current_month-0);}
else{				$month_combo[6] = ($current_year-1)."_".($current_month-0+12);}



if(($current_month + 1) < 13 ){	$month_combo[7] =  $current_year."_".(	$current_month+1);}
else{				$month_combo[7] = ($current_year+1)."_".($current_month+1-12);}

if(($current_month + 2) < 13 ){	$month_combo[8] =  $current_year."_".(	$current_month+2);}
else{				$month_combo[8] = ($current_year+1)."_".($current_month+2-12);}

if(($current_month + 3) < 13 ){	$month_combo[9] =  $current_year."_".(	$current_month+3);}
else{				$month_combo[9] = ($current_year+1)."_".($current_month+3-12);}

if(($current_month + 4) < 13 ){	$month_combo[10] =  $current_year."_".(	$current_month+4);}
else{				$month_combo[10] = ($current_year+1)."_".($current_month+4-12);}

if(($current_month + 5) < 13 ){	$month_combo[11] =  $current_year."_".(	$current_month+5);}
else{				$month_combo[11] = ($current_year+1)."_".($current_month+5-12);}

if(($current_month + 6) < 13 ){	$month_combo[12] =  $current_year."_".(	$current_month+6);}
else{				$month_combo[12] = ($current_year+1)."_".($current_month+6-12);}



//make any single digits - double digits with a leading 0
for($i = 0; $i <13; $i++){
	if(substr($month_combo[$i], -2, 1) == '_'){$month_combo[$i] = substr($month_combo[$i], -4, 3).'0'.substr($month_combo[$i], -1, 1);}

}


/*
echo "<br>";
echo $month_1_combo."<br>";
echo $month_2_combo."<br>";
echo $month_3_combo."<br>";
echo $month_4_combo."<br>";
echo $month_5_combo."<br>";
echo $month_6_combo."<br>";
echo $month_7_combo."<br>";
echo $month_8_combo."<br>";
echo $month_9_combo."<br>";
echo $month_10_combo."<br>";
echo $month_11_combo."<br>";
echo $month_12_combo."<br>";
*/


for($i = 0; $i <13; $i++){	$month_name[$i] = jdmonthname(gregoriantojd(substr($month_combo[$i], strrpos($month_combo[$i], '_') + 1),13,1998),1);}





?>