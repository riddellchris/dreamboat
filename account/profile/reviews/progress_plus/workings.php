<?php
require $_SERVER['DOCUMENT_ROOT']."/profile/reviews/progress_plus/styling.php";
?>

<script>
function show_energy(input_number){
	turn_off_all_comments();
	//set display table-cell for the single relevant one	
	var y = document.getElementById("energy_why_"+input_number);
	y.style.display = "block";
	
	remove_pressed_from_all();
	//set display table-cell for the single relevant one	
	var z = document.getElementById("energy_score_"+input_number);
	z.className += " pressed";
}

function turn_off_all_comments(){
	//set display none for all off all comments
    	var divsToHide = document.getElementsByClassName("comment_cell"); //divsToHide is an array
    	for(var i = 0; i < divsToHide.length; i++){
        	divsToHide[i].style.display = "none"; 
    	} 
   

}
function remove_pressed_from_all(){
    	var divsToHide = document.getElementsByClassName("standard_cell"); //divsToHide is an array
    	for(var i = 0; i < divsToHide.length; i++){
        	divsToHide[i].classList.remove('pressed') // depending on what you're doing
    	} 
}
function show_productivity(input_number){
	turn_off_all_comments();
	//set display table-cell for the single relevant one	
	var y = document.getElementById("productivity_why_"+input_number);
	y.style.display = "block";
	remove_pressed_from_all();
	//set display table-cell for the single relevant one	
	var z = document.getElementById("productivity_score_"+input_number);
	z.className += " pressed";
}
function show_health(input_number){
	turn_off_all_comments();
	//set display table-cell for the single relevant one	
	var y = document.getElementById("health_why_"+input_number);
	y.style.display = "block";
	remove_pressed_from_all();
	//set display table-cell for the single relevant one	
	var z = document.getElementById("health_score_"+input_number);
	z.className += " pressed";
}
function show_happiness(input_number){
	turn_off_all_comments();
	//set display table-cell for the single relevant one	
	var y = document.getElementById("happiness_why_"+input_number);
	y.style.display = "block";
	remove_pressed_from_all();
	//set display table-cell for the single relevant one	
	var z = document.getElementById("happiness_score_"+input_number);
	z.className += " pressed";
}
function show_focus(input_number){
	turn_off_all_comments();
	//set display table-cell for the single relevant one	
	var y = document.getElementById("focus_why_"+input_number);
	y.style.display = "block";
	remove_pressed_from_all();
	//set display table-cell for the single relevant one	
	var z = document.getElementById("focus_score_"+input_number);
	z.className += " pressed";
}
function show_stress(input_number){
	turn_off_all_comments();
	//set display table-cell for the single relevant one	
	var y = document.getElementById("stress_why_"+input_number);
	y.style.display = "block";
	remove_pressed_from_all();
	//set display table-cell for the single relevant one	
	var z = document.getElementById("stress_score_"+input_number);
	z.className += " pressed";
}
function show_confidence(input_number){
	turn_off_all_comments();
	//set display table-cell for the single relevant one	
	var y = document.getElementById("confidence_why_"+input_number);
	y.style.display = "block";
	remove_pressed_from_all();
	//set display table-cell for the single relevant one	
	var z = document.getElementById("confidence_score_"+input_number);
	z.className += " pressed";
}
function show_control(input_number){
	turn_off_all_comments();
	//set display table-cell for the single relevant one	
	var y = document.getElementById("control_why_"+input_number);
	y.style.display = "block";
	remove_pressed_from_all();
	//set display table-cell for the single relevant one	
	var z = document.getElementById("control_score_"+input_number);
	z.className += " pressed";
}

</script>


<?php
if(!isset($_SESSION)){session_start();}

echo "<style>
/* Container holding the image and the text */
.container {
  position: relative;
  text-align: center;
  color: white;
}

/* Bottom left text */
.bottom-left {
  position: absolute;
  bottom: 6px;
  left: 10px;
  text-transform:uppercase;
  font-family: Helvetica;
    font-size: 18px;
    color: #ffffff;
}

/* Top left text */
.top-left {
  position: absolute;
  top: 6px;
  left: 10px;
  text-transform:uppercase;
  font-family: Helvetica;
  font-size: 18px;
    color: #ffffff;
}

/* Top right text */
.top-right {
  position: absolute;
  top: 6px;

  text-transform:uppercase;
  font-family: Helvetica;
    font-size: 18px;
    color: #ffffff;
}

/* Bottom right text */
.bottom-right {
  position: absolute;
  bottom: 6px;
  right: 50px;
  text-transform:uppercase;
  font-family: Helvetica;
  font-size: 18px;
  color: #ffffff;
}

/* Centered text */
.centered {
width:85%;
text-align:center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding-bottom:100px;
    padding-top:50px;
}


@media screen and (min-width: 900px){
	.top-right {  right: 10px;}
	.bottom-right {  right: 10px;}	
	}    

@media screen and (max-width: 900px) and (min-width: 600px){
.top-right {  right: 50px;}
.bottom-right {  right: 50px;}
	} 
@media screen and (max-width: 600px){
.top-right {  right: 30px;}
.bottom-right {  right: 30px;}
	} 




</style>";


function display_result_in_words($stored_number){
	if($stored_number == 999){echo "<span class='full-description'>NO ENTRY</span>	<span class='brief-description'>-</span>";}
	if($stored_number == 5){echo "<span class='full-description'>Amazing</span>	<span class='brief-description'>A</span>";}
	if($stored_number == 4){echo "<span class='full-description'>Wonderful</span>	<span class='brief-description'>W</span>";}
	if($stored_number == 3){echo "<span class='full-description'>Great</span>	<span class='brief-description'>G</span>";}
	if($stored_number == 2){echo "<span class='full-description'>Good</span>	<span class='brief-description'>G</span>";}
	if($stored_number == 1){echo "<span class='full-description'>OK</span>		<span class='brief-description'>O</span>";}
	if($stored_number == 0){echo "<span class='full-description'>Average</span>	<span class='brief-description'>A</span>";}
	if($stored_number == -1){echo "<span class='full-description'>A little off</span><span class='brief-description'>A</span>";}
	if($stored_number == -2){echo "<span class='full-description'>Bad</span>	<span class='brief-description'>B</span>";}
	if($stored_number == -3){echo "<span class='full-description'>Very Bad</span>	<span class='brief-description'>VB</span>";}
	if($stored_number == -4){echo "<span class='full-description'>Terrible</span>	<span class='brief-description'>T</span>";}
	if($stored_number == -5){echo "<span class='full-description'>Diabolical</span>	<span class='brief-description'>D</span>";}
}

if($_SESSION['productivity_pilot'] == 'yes'){$user_to_display = $_SESSION['viewing_client_id'];}
else{$user_to_display = $_SESSION['user_id'];}


if(is_numeric(strpos($_SERVER['REQUEST_URI'],'/profile/reviews/progress_plus/display/point_in_time_only.php')) == 1){
	$sql = "SELECT * FROM reviews_progress_plus_core WHERE user_id = '".$user_to_display."' AND related_to = 'point_in_time_only' ORDER BY input_id DESC";
	}
else{	$sql = "SELECT * FROM reviews_progress_plus_core WHERE user_id = '".$user_to_display."' ORDER BY input_id DESC";}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) == 0){
	require $_SERVER['DOCUMENT_ROOT']."/account/registration/database_initialisation_processes.php";
	if(is_numeric(strpos($_SERVER['REQUEST_URI'],'/progress_plus/display/point_in_time_only.php')) == 1){
	$sql = "SELECT * FROM reviews_progress_plus_core WHERE user_id = '".$user_to_display."' AND related_to = 'point_in_time_only' ORDER BY input_id DESC";
	}
else{	$sql = "SELECT * FROM reviews_progress_plus_core WHERE user_id = '".$user_to_display."' ORDER BY input_id DESC";}
	
	}
$result = mysqli_query($conn, $sql);



echo "<table style='border-spacing:0px;margin-top:20px;'>";
	echo "<tr>";
		//echo "<div class='Cell'></td>";
		echo "<td class='full-word-heading'>Productivity</td>";
		echo "<td class='full-word-heading'>Focus</td>";
		echo "<td class='full-word-heading'>Stress</td>";
		echo "<td class='full-word-heading'>Confidence</td>";
		echo "<td class='full-word-heading'>Control</td>";
		echo "<td class='full-word-heading'>Health</td>";
		echo "<td class='full-word-heading'>Happiness</td>";
		echo "<td class='full-word-heading'>Energy</td>";



	echo "</tr>";
	echo "<tr>";
		//echo "<div class='Cell'></td>";
		echo "<td class='broken-word-heading'>Prod<BR>ucti<BR>vity</td>";		
		echo "<td class='broken-word-heading'>Focus</td>";
		echo "<td class='broken-word-heading'>Stress</td>";
		echo "<td class='broken-word-heading'>Conf<BR>iden<BR>ce</td>";
		echo "<td class='broken-word-heading'>Cont<BR>rol</td>";		
		echo "<td class='broken-word-heading'>Heal<BR>th</td>";
		echo "<td class='broken-word-heading'>Happ<BR>iness</td>";		
		echo "<td class='broken-word-heading'>Energy</td>";



	echo "</tr>";	
	
	
$one_opened = 'no';	
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

echo "<tr>";
	/*
	echo "<td>";	
		echo $row['timestamp'];

	echo "</div>";
	*/
	if($one_opened == 'no'){	
		if($row['productivity'] != 999 && $row['productivity_why'] 	!= ''){$productivity_open 	= 'ok';}	
		if($row['focus'] 	!= 999 && $row['focus_why'] 		!= ''){$focus_open 		= 'ok';}
		if($row['stress'] 	!= 999 && $row['stress_why'] 		!= ''){$stress_open 		= 'ok';}		
		if($row['confidence'] 	!= 999 && $row['confidence_why'] 	!= ''){$confidence_open 	= 'ok';}	
		if($row['control'] 	!= 999 && $row['control_why'] 		!= ''){$control_open 		= 'ok';}
		if($row['health'] 	!= 999 && $row['health_why'] 		!= ''){$health_open 		= 'ok';}		
		if($row['happiness'] 	!= 999 && $row['happiness_why'] 	!= ''){$happiness_open 		= 'ok';}		
		if($row['energy'] 	!= 999 && $row['energy_why'] 		!= ''){$energy_open 	  	= 'ok';}		

				
	}
		
		
		
		
			
	
	echo "<td
		 id='productivity_score_".$row['input_id']."' 
		 class='standard_cell ";
		if($one_opened == 'no' && $productivity_open == 'ok'){$one_opened = 'yes'; echo " pressed "; $open='productivity';} 
	if($row['productivity'] == 999){echo "no_entry 	'";}	
	if($row['productivity'] == 5){echo "plus_five 	'";}
	if($row['productivity'] == 4){echo "plus_four 	'";}
	if($row['productivity'] == 3){echo "plus_three 	'";}
	if($row['productivity'] == 2){echo "plus_two 	'";}
	if($row['productivity'] == 1){echo "plus_one 	'";}	
	if($row['productivity'] == 0){echo "zero 	'";}	
	if($row['productivity'] == -1){echo "minus_one 	'";}	
	if($row['productivity'] == -2){echo "minus_two 	'";}
	if($row['productivity'] == -3){echo "minus_three	'";}		
	if($row['productivity'] == -4){echo "minus_four	'";}
	if($row['productivity'] == -5){echo "minus_five	'";}	
		if($row['productivity'] != 999){echo " onclick='show_productivity(".$row['input_id'].")'";}	
			echo ">";
		echo display_result_in_words($row['productivity']);

	echo "</td>";
	echo "<td
		 id='focus_score_".$row['input_id']."' 
		 class='standard_cell ";
		 if($one_opened == 'no' && $focus_open == 'ok'){$one_opened = 'yes'; echo " pressed "; $open='focus';} 
	if($row['focus'] == 999){echo "no_entry 	'";}
	if($row['focus'] == 5){echo "plus_five 	'";}
	if($row['focus'] == 4){echo "plus_four 	'";}
	if($row['focus'] == 3){echo "plus_three 	'";}
	if($row['focus'] == 2){echo "plus_two 	'";}
	if($row['focus'] == 1){echo "plus_one 	'";}	
	if($row['focus'] == 0){echo "zero 	'";}	
	if($row['focus'] == -1){echo "minus_one 	'";}	
	if($row['focus'] == -2){echo "minus_two 	'";}
	if($row['focus'] == -3){echo "minus_three	'";}		
	if($row['focus'] == -4){echo "minus_four	'";}
	if($row['focus'] == -5){echo "minus_five	'";}
		if($row['focus'] != 999){echo " onclick='show_focus(".$row['input_id'].")'";	}
			echo ">";
		echo display_result_in_words($row['focus']);

	echo "</td>";		
		
	echo "<td
		 id='stress_score_".$row['input_id']."' 
		 class='standard_cell ";
		 if($one_opened == 'no' && $stress_open == 'ok'){$one_opened = 'yes'; echo " pressed "; $open='stress';} 
	if($row['stress'] == 999){echo "no_entry 	'";}
	if($row['stress'] == 5){echo "plus_five 	'";}
	if($row['stress'] == 4){echo "plus_four 	'";}
	if($row['stress'] == 3){echo "plus_three 	'";}
	if($row['stress'] == 2){echo "plus_two 	'";}
	if($row['stress'] == 1){echo "plus_one 	'";}	
	if($row['stress'] == 0){echo "zero 	'";}	
	if($row['stress'] == -1){echo "minus_one 	'";}	
	if($row['stress'] == -2){echo "minus_two 	'";}
	if($row['stress'] == -3){echo "minus_three	'";}		
	if($row['stress'] == -4){echo "minus_four	'";}
	if($row['stress'] == -5){echo "minus_five	'";}
		if($row['stress'] != 999){echo " onclick='show_stress(".$row['input_id'].")'";	}
			echo ">";
		echo display_result_in_words($row['stress']);

	echo "</td>";
	echo "<td
		 id='confidence_score_".$row['input_id']."' 
		 class='standard_cell ";
		 if($one_opened == 'no' && $confidence_open == 'ok'){$one_opened = 'yes'; echo " pressed "; $open='confidence';} 
	if($row['confidence'] == 999){echo "no_entry 	'";}
	if($row['confidence'] == 5){echo "plus_five 	'";}
	if($row['confidence'] == 4){echo "plus_four 	'";}
	if($row['confidence'] == 3){echo "plus_three 	'";}
	if($row['confidence'] == 2){echo "plus_two 	'";}
	if($row['confidence'] == 1){echo "plus_one 	'";}	
	if($row['confidence'] == 0){echo "zero 	'";}	
	if($row['confidence'] == -1){echo "minus_one 	'";}	
	if($row['confidence'] == -2){echo "minus_two 	'";}
	if($row['confidence'] == -3){echo "minus_three	'";}		
	if($row['confidence'] == -4){echo "minus_four	'";}
	if($row['confidence'] == -5){echo "minus_five	'";} 
		if($row['confidence'] != 999){echo " onclick='show_confidence(".$row['input_id'].")'";	}
			echo ">";
		echo display_result_in_words($row['confidence']);

	echo "</td>";
	echo "<td
		 id='control_score_".$row['input_id']."' 
		 class='standard_cell ";
		 if($one_opened == 'no' && $control_open == 'ok'){$one_opened = 'yes'; echo " pressed "; $open='control';} 
	if($row['control'] == 999){echo "no_entry 	'";}
	if($row['control'] == 5){echo "plus_five 	'";}
	if($row['control'] == 4){echo "plus_four 	'";}
	if($row['control'] == 3){echo "plus_three 	'";}
	if($row['control'] == 2){echo "plus_two 	'";}
	if($row['control'] == 1){echo "plus_one 	'";}	
	if($row['control'] == 0){echo "zero 	'";}	
	if($row['control'] == -1){echo "minus_one 	'";}	
	if($row['control'] == -2){echo "minus_two 	'";}
	if($row['control'] == -3){echo "minus_three	'";}		
	if($row['control'] == -4){echo "minus_four	'";}
	if($row['control'] == -5){echo "minus_five	'";}
		if($row['control'] != 999){echo " onclick='show_control(".$row['input_id'].")'";	}
			echo ">";
		echo display_result_in_words($row['control']);

	echo "</td>";			
		
		
		
		
		
		
		


	echo "<td
		 id='health_score_".$row['input_id']."' 
		 class='standard_cell ";
		if($one_opened == 'no' && $health_open == 'ok'){$one_opened = 'yes'; echo " pressed "; $open='health';} 
	if($row['health'] == 999){echo "no_entry 	'";}
	if($row['health'] == 5){echo "plus_five 	'";}
	if($row['health'] == 4){echo "plus_four 	'";}
	if($row['health'] == 3){echo "plus_three 	'";}
	if($row['health'] == 2){echo "plus_two 	'";}
	if($row['health'] == 1){echo "plus_one 	'";}	
	if($row['health'] == 0){echo "zero 	'";}	
	if($row['health'] == -1){echo "minus_one 	'";}	
	if($row['health'] == -2){echo "minus_two 	'";}
	if($row['health'] == -3){echo "minus_three	'";}		
	if($row['health'] == -4){echo "minus_four	'";}
	if($row['health'] == -5){echo "minus_five	'";}
		if($row['health'] != 999){echo " onclick='show_health(".$row['input_id'].")'";	}
		echo ">";	
		echo display_result_in_words($row['health']);

	echo "</td>";
	echo "<td
		 id='happiness_score_".$row['input_id']."' 
		 class='standard_cell ";
		 if($one_opened == 'no' && $happiness_open == 'ok'){$one_opened = 'yes'; echo " pressed "; $open='happiness';} 
	if($row['happiness'] == 999){echo "no_entry 	'";}
	if($row['happiness'] == 5){echo "plus_five 	'";}
	if($row['happiness'] == 4){echo "plus_four 	'";}
	if($row['happiness'] == 3){echo "plus_three 	'";}
	if($row['happiness'] == 2){echo "plus_two 	'";}
	if($row['happiness'] == 1){echo "plus_one 	'";}	
	if($row['happiness'] == 0){echo "zero 	'";}	
	if($row['happiness'] == -1){echo "minus_one 	'";}	
	if($row['happiness'] == -2){echo "minus_two 	'";}
	if($row['happiness'] == -3){echo "minus_three	'";}		
	if($row['happiness'] == -4){echo "minus_four	'";}
	if($row['happiness'] == -5){echo "minus_five	'";}
		if($row['happiness'] != 999){echo " onclick='show_happiness(".$row['input_id'].")'";}	
			echo ">";	
		echo display_result_in_words($row['happiness']);

	echo "</td>";

	echo "<td
		 id='energy_score_".$row['input_id']."' 
		 class='standard_cell ";
		 
		if($one_opened == 'no' && $energy_open == 'ok'){$one_opened = 'yes'; echo " pressed "; $open='energy';} 
		if($row['energy'] == 999){echo "no_entry 	'";}
		if($row['energy'] == 5){echo "plus_five 	'";}
		if($row['energy'] == 4){echo "plus_four 	'";}
		if($row['energy'] == 3){echo "plus_three 	'";}
		if($row['energy'] == 2){echo "plus_two 	'";}
		if($row['energy'] == 1){echo "plus_one 	'";}	
		if($row['energy'] == 0){echo "zero 	'";}	
		if($row['energy'] == -1){echo "minus_one 	'";}	
		if($row['energy'] == -2){echo "minus_two 	'";}
		if($row['energy'] == -3){echo "minus_three '";}		
		if($row['energy'] == -4){echo "minus_four '";}
		if($row['energy'] == -5){echo "minus_five '";}
		if($row['energy'] != 999){echo " onclick='show_energy(".$row['input_id'].")'";}	
			echo ">";	
		echo display_result_in_words($row['energy']);
	echo "</td>";
	
echo "</tr>";

echo "<tr><td  colspan='8' style='background-color:transparent;background-image: linear-gradient(to bottom,#bfe3ff,#e3feff);'>";


   $CurrentTime = date($_SERVER['REQUEST_TIME']);
	   //https://stackovercleanse.com/prompts/40905174/calculate-the-difference-between-2-timestamps-in-php
	   $datetime1 = gmdate("Y-m-d\ H:i:s\ ", $CurrentTime);//start time
	   $datetime2 = $row['timestamp'];//end time
	   
	   $SecondsDifference = strtotime($datetime1) - strtotime($datetime2);
	   
	   //quick timezone hack
	   $SecondsDifference = $SecondsDifference + 28800;

	   //calculate the years difference
	   $YearsDifference = round(($SecondsDifference)/31536000);
       	   if($YearsDifference == 1){$TimeSinceString = $YearsDifference.' year ago';}
	   else{$TimeSinceString = $YearsDifference.' years ago';}		   

	   //calculate the months difference
	   //again a bit crude for the minute
	   $MonthsDifference = round(($SecondsDifference)/2592000);
	   if($SecondsDifference < 31536000){
	   	if($MonthsDifference == 1){$TimeSinceString = $MonthsDifference.' month ago';}
	   	else{$TimeSinceString = $MonthsDifference.' months ago';}		   
	   }
	   
	   //calculate the weeks ago element
	   $WeeksDifference = round(($SecondsDifference)/604800);
	   if($SecondsDifference < 2592000){
	   	if($WeeksDifference == 1){$TimeSinceString = $WeeksDifference.' week ago';}
	   	else{$TimeSinceString = $WeeksDifference.' weeks ago';}	
	   }

	   //calculate days ago element of all this
	   $DaysDifference = round(($SecondsDifference)/86400);
	   if($SecondsDifference < 604800){
	   	if($DaysDifference == 1){$TimeSinceString = $DaysDifference.' day ago';}
	   	else{$TimeSinceString = $DaysDifference.' days ago';}	
	   }
	   
	   //calculate the hours ago element
	   $HoursDifference = round(($SecondsDifference)/3600);
	   if($SecondsDifference < 86400){
	   	if($HoursDifference == 1){$TimeSinceString = $HoursDifference.' hour ago';}
	   	else{$TimeSinceString = $HoursDifference.' hours ago';}
	   }	   

	   //calculate the minutes difference part
	   $MinutesDifference = round(($SecondsDifference)/60);
	   if($SecondsDifference < 3600){
	   	if($MinutesDifference == 1){$TimeSinceString = $MinutesDifference.' minute ago';}	   
		else{$TimeSinceString = $MinutesDifference.' minutes ago';}
	   }

	   //calculate the seconds difference part
	   if($SecondsDifference < 60){
	   	if($SecondsDifference==1){$TimeSinceString = $SecondsDifference.' second ago';}
	   	else{$TimeSinceString = $SecondsDifference.' seconds ago';}
	   }


	for($type_to_echo_count = 1; $type_to_echo_count <= 8; $type_to_echo_count++){
		if($type_to_echo_count == 1){$name = 'energy';		$score = $row['energy'];	$why = $row['energy_why']; 		$improvement = $row['energy_improvement'];}
		if($type_to_echo_count == 2){$name = 'productivity';	$score = $row['productivity'];	$why = $row['productivity_why']; 	$improvement = $row['productivity_improvement'];}
		if($type_to_echo_count == 3){$name = 'health';		$score = $row['health'];	$why = $row['health_why']; 		$improvement = $row['health_improvement'];}
		if($type_to_echo_count == 4){$name = 'happiness';	$score = $row['happiness'];	$why = $row['happiness_why']; 		$improvement = $row['happiness_improvement'];}
		if($type_to_echo_count == 5){$name = 'focus';		$score = $row['focus'];		$why = $row['focus_why']; 		$improvement = $row['focus_improvement'];}
		if($type_to_echo_count == 6){$name = 'stress';		$score = $row['stress'];	$why = $row['stress_why']; 		$improvement = $row['stress_improvement'];}
		if($type_to_echo_count == 7){$name = 'confidence';	$score = $row['confidence'];	$why = $row['confidence_why']; 		$improvement = $row['confidence_improvement'];}
		if($type_to_echo_count == 8){$name = 'control';		$score = $row['control'];	$why = $row['control_why']; 		$improvement = $row['control_why'];}
	

	echo "<div class='comment_cell' id='".$name."_why_".$row['input_id']."' style='";
	if($name == $open){echo "display:block;"; $open='completed';}
	
	
		echo "min-height:400px;position: relative;width:100%;color:#281e96;font-family: Helvetica;font-size:24px;'>";
	//	echo "<div class='top-left'>".$name."</div>";
	//	echo "<div class='top-right'>".$TimeSinceString."</div>";
		echo "<div class='centered'>";
			if($score == 5){echo "Amazing";}
			if($score == 4){echo "Wonderful";}
			if($score == 3){echo "Great";}
			if($score == 2){echo "Good";}
			if($score == 1){echo "OK";}
			if($score == 0){echo "Average";}
			if($score == -1){echo "A little off";}
			if($score == -2){echo "Bad";}
			if($score == -3){echo "Very bad";}
			if($score == -4){echo "Terrible";}
			if($score == -5){echo "Diabolical";}		
		echo " ".$name;
		
		
		if($why == ''){$why = "<span style='color:#281e96;'>It wasn't an issue today</span>";}
		if($improvement == ''){$improvement = "<span style='color:#281e96;'>So you weren't asked this</span>";}
		echo"
			<br><br><span style='text-transform:uppercase;font-family: Helvetica;font-size: 18px;color: #281e96;'>
				Because:
			</span>"; 
		echo "<br>".$why;
		echo "	<br><br><span  style='text-transform:uppercase;font-family: Helvetica;font-size: 18px;color: #281e96;'>Which can be improved by:</span><br>".$improvement."</div>";
			
			
		echo "<div class='top-left'>";			
			echo "<a href='delete_entry_confirm.php?entry_id=".$row['input_id']."' style='color:#00c3ff;'>Delete this row</a>";
		echo "</div>";			
		echo "<div class='bottom-left' style='text-align:right;'>".$TimeSinceString."</div>";			
		//point in time
		//link to end of day in new tab
		//link to end of week in new tab
		//link to end of month in new tab
		echo "<div class='bottom-right'>";
		//if($row['related_to']== 'point_in_time_only'){echo "<span class='full-description' style='color:black;'>No related diary entry</span><span class='brief-description'>Point<br>in<br>time<br>submission</span>";}
		//if($row['related_to']== 'end_of_day'){echo "<a href ='/work_diary/index.php?open=".$row['input_id']."'>End of day diary</a>";}		
		//if($row['related_to']== 'end_of_week'){echo "<a href ='/work_diary/index.php?open=".$row['input_id']."'>End of week diary</a>";}
		//if($row['related_to']== 'end_of_month'){echo "<a href ='/work_diary/index.php?open=".$row['input_id']."'>End of month diary</a>";}		
		echo "</div>";
		//echo "<div class='bottom-right' style='text-align:right;'><span class='full-description'>".$row['local_timestamp_on_entry']."</span><span class='brief-description'>".substr($row['local_timestamp_on_entry'],-8)."<br>".substr($row['local_timestamp_on_entry'],0,10)."</span></div>";

	echo "</div>";
	}	
echo "</td></tr>";


//echo "</div>";

}

echo "</table>"; //close the Table div
echo "<div style='height:47px'></div>";

?>