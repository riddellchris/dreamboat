<?php
$current_month  = date('m');
$current_year	= date('y');
$month_combo = array();
$month_to_loop = 6; // default is 6 months, while this could be changed if cutomised date rage is set 

	// iterate the 6 months backward from today's ,and use str_pad() to make any single digits - double digits with a leading 0
function get_date_range(){
	
};
for($i = 0; $i<=$month_to_loop; $i++){
	// change the year to the previous one when needed
	if($current_month-$i < 1){
		$new_combo = str_pad(($current_month - $i + 12),'2','0',STR_PAD_LEFT)."_".($current_year-1);
		array_unshift($month_combo,$new_combo);
	}else{
		$new_combo = str_pad(($current_month-$i),'2','0',STR_PAD_LEFT). "_" .$current_year;
		array_unshift($month_combo,$new_combo);
	}
};


for($i = 0; $i <13; $i++){	$month_name[$i] = jdmonthname(gregoriantojd(substr($month_combo[$i], strrpos($month_combo[$i], '_') + 1),13,1998),1);}


?>