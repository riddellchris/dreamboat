<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/register_function_usage.php";

function number_to_words($number){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
	
	$exp = explode('.', $number);
	$f = new NumberFormatter("en_US", NumberFormatter::SPELLOUT);
	return ucfirst($f->format($exp[0]));
	//outputs Twenty-nine and Twenty-nine
}

function time_since_string($time_to_check_against){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__);

	   $CurrentTime = date($_SERVER['REQUEST_TIME']);

	   //https://stackoverflow.com/questions/40905174/calculate-the-difference-between-2-timestamps-in-php
	   $datetime1 = gmdate("Y-m-d\ H:i:s\ ", $CurrentTime);//start time
	   $datetime2 = $time_to_check_against;//end time
	   
	   $SecondsDifference = strtotime($datetime1) - strtotime($datetime2);
	   
	   //this could be improved
	   $SecondsDifference = $SecondsDifference + 11*60*60;

	   //calculate the years difference
	   $YearsDifference = round(($SecondsDifference)/31536000);
       	   if($YearsDifference == 1){$TimeSinceString = 'One year ago';}
	   else{$TimeSinceString = number_to_words($YearsDifference).' years ago';}		   

	   //calculate the months difference
	   //again a bit crude for the minute
	   $MonthsDifference = round(($SecondsDifference)/2592000);
	   if($SecondsDifference < 31536000){
	   	if($MonthsDifference == 1){$TimeSinceString = 'One month ago';}
	   	else{$TimeSinceString = number_to_words($MonthsDifference).' months ago';}		   
	   }
	   
	   //calculate the weeks ago element
	   $WeeksDifference = round(($SecondsDifference)/604800);
	   if($SecondsDifference < 2592000){
	   	if($WeeksDifference == 1){$TimeSinceString = 'One week ago';}
	   	else{$TimeSinceString = number_to_words($WeeksDifference).' weeks ago';}	
	   }

	   //calculate days ago element of all this
	   $DaysDifference = round(($SecondsDifference)/86400);
	   if($SecondsDifference < 604800){
	   	if($DaysDifference == 1){$TimeSinceString = 'One day ago';}
	   	else{$TimeSinceString = number_to_words($DaysDifference).' days ago';}	
	   }
	   
	   //calculate the hours ago element
	   $HoursDifference = round(($SecondsDifference)/3600);
	   if($SecondsDifference < 86400){
	   	if($HoursDifference == 1){$TimeSinceString = 'One hour ago';}
	   	else{$TimeSinceString = number_to_words($HoursDifference).' hours ago';}
	   }	   

	   //calculate the minutes difference part
	   $MinutesDifference = round(($SecondsDifference)/60);
	   if($SecondsDifference < 3600){
	   	if($MinutesDifference == 1){$TimeSinceString = 'One minute ago';}	   
		else{$TimeSinceString = number_to_words($MinutesDifference).' minutes ago';}
	   }

	   //calculate the seconds difference part
	   if($SecondsDifference < 60){
	   	if($SecondsDifference==1){$TimeSinceString = 'One second ago';}
	   	else{$TimeSinceString = number_to_words($SecondsDifference).' seconds ago';}
	   }			
				
	echo $TimeSinceString;
}


//not finished
function time_between_two_date_times(){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
   $SecondsDifference = strtotime($datetime1) - strtotime($datetime2);

}