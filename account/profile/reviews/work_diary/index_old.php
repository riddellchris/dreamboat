<style>
table{
       table-layout: fixed;
        background-color:transparent;       
        width:100%;
    }
td{padding: 0px;}    
.Title{
	display: table-caption;
	text-align: center;
	font-weight: bold;
	font-size: larger;
}  
.full-word-heading{
        font-weight: bold;
        text-align: center;
        background-color:transparent;
        color:white;
        text-transform:uppercase;
        font-family: Helvetica;
	    font-weight: 700;
	    color:#281e96;
    }
.broken-word-heading{
	font-weight: bold;
	text-align: center;
	background-color:transparent;
	color:white;
	text-transform:uppercase;
	font-family: Helvetica;
	    font-weight: 700;
	    color:#281e96;
}
.description_span{


} 
    

@media screen and (min-width: 900px){
	.full-description{display: inline-block;}
	.brief-description{display: none;}
	.full-word-heading{font-size:medium;}
	.broken-word-heading{display:none;}
	
	}    
@media screen and (max-width: 900px){
	.full-description{ display: none;}
	.brief-description{display: inline-block;}
	.comment_cell{padding: 75px 30px;}
}
@media screen and (max-width: 900px) and (min-width: 600px){
	.broken-word-heading{font-size:small;}
	.full-word-heading{display:none;}
	.comment_cell{padding: 75px 20px;}
	} 
@media screen and (max-width: 600px){
	.broken-word-heading{ font-size:xx-small;}
	.full-word-heading{display:none;}
	.comment_cell{padding: 75px 10px;}
	} 



.Row{       
        display: table-row;
    }

.comment_row{
	width:100%;
	font-family:helvetica;
	font-size:18px;
	padding-top:7px;
	min-height:50px;
}  
    
.comment_cell{
//background-image: linear-gradient(to bottom,#00faff,#0090ff);
//background-color:#00faff;
    display: none;
    color: white;
}

.standard_cell{
   height:40px;
   font-family:helvetica;
   font-size:18px;
   text-align:center;
   -moz-box-shadow:    inset 0 0 3px #281e96;
   -webkit-box-shadow: inset 0 0 3px #281e96;
   box-shadow:         inset 0 0 3px #281e96;
}
    


    
.no_entry	{background-color: #ffffff; 	color: #cecece;}    
.plus_five	{background-color: #017c0d; 	color: #ffffff;}    
.plus_four	{background-color: #21b72f; 	color: #ffffff;}   
.plus_three	{background-color: #27ce36; 	color: #ffffff;}   
.plus_two	{background-color: #93ff9b; 	color: #034c0a;}       
.plus_one	{background-color: #d6ffd9; 	color: #034c0a;} 
.zero		{background-color: #ffffff;     color: #281e96;} 
.minus_one	{background-color: #ffdbdb; 	color: #910e0e;} 
.minus_two	{background-color: #ffaaaa; 	color: #910e0e;} 
.minus_three	{background-color: #ff6363; 	color: #ffffff;} 
.minus_four	{background-color: #d83131; 	color: #ffffff;} 
.minus_five	{background-color: #910e0e; 	color: #ffffff;}    
    
.plus_five:hover	{background-color: #00faff; color: white;}    
.plus_four:hover	{background-color: #00faff; color: white;}   
.plus_three:hover	{background-color: #00faff; color: white;}   
.plus_two:hover		{background-color: #00faff; color: white;}       
.plus_one:hover		{background-color: #00faff; color: white;} 
.zero:hover		{background-color: #00faff; color: white;} 
.minus_one:hover	{background-color: #00faff; color: white;} 
.minus_two:hover	{background-color: #00faff; color: white;} 
.minus_three:hover	{background-color: #00faff; color: white;} 
.minus_four:hover	{background-color: #00faff; color: white;} 
.minus_five:hover	{background-color: #00faff; color: white;} 

.plus_five.pressed	{background-color: #00faff; color: white;-moz-box-shadow:    inset 0 0 0px #281e96; -webkit-box-shadow: inset 0 0 0px #281e96;    box-shadow:      inset 0 0 0px #281e96;}    
.plus_four.pressed	{background-color: #00faff; color: white;-moz-box-shadow:    inset 0 0 0px #281e96; -webkit-box-shadow: inset 0 0 0px #281e96;    box-shadow:      inset 0 0 0px #281e96;}   
.plus_three.pressed	{background-color: #00faff; color: white;-moz-box-shadow:    inset 0 0 0px #281e96; -webkit-box-shadow: inset 0 0 0px #281e96;    box-shadow:      inset 0 0 0px #281e96;}   
.plus_two.pressed	{background-color: #00faff; color: white;-moz-box-shadow:    inset 0 0 0px #281e96; -webkit-box-shadow: inset 0 0 0px #281e96;    box-shadow:      inset 0 0 0px #281e96;}       
.plus_one.pressed	{background-color: #00faff; color: white;-moz-box-shadow:    inset 0 0 0px #281e96; -webkit-box-shadow: inset 0 0 0px #281e96;    box-shadow:      inset 0 0 0px #281e96;} 
.zero.pressed		{background-color: #00faff; color: white;-moz-box-shadow:    inset 0 0 0px #281e96; -webkit-box-shadow: inset 0 0 0px #281e96;    box-shadow:      inset 0 0 0px #281e96;} 
.minus_one.pressed	{background-color: #00faff; color: white;-moz-box-shadow:    inset 0 0 0px #281e96; -webkit-box-shadow: inset 0 0 0px #281e96;    box-shadow:      inset 0 0 0px #281e96;} 
.minus_two.pressed	{background-color: #00faff; color: white;-moz-box-shadow:    inset 0 0 0px #281e96; -webkit-box-shadow: inset 0 0 0px #281e96;    box-shadow:      inset 0 0 0px #281e96;} 
.minus_three.pressed	{background-color: #00faff; color: white;-moz-box-shadow:    inset 0 0 0px #281e96; -webkit-box-shadow: inset 0 0 0px #281e96;    box-shadow:      inset 0 0 0px #281e96;} 
.minus_four.pressed	{background-color: #00faff; color: white;-moz-box-shadow:    inset 0 0 0px #281e96; -webkit-box-shadow: inset 0 0 0px #281e96;    box-shadow:      inset 0 0 0px #281e96;} 
.minus_five.pressed	{background-color: #00faff; color: white;-moz-box-shadow:    inset 0 0 0px #281e96; -webkit-box-shadow: inset 0 0 0px #281e96;    box-shadow:      inset 0 0 0px #281e96;} 




</style>


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

if(is_numeric(strpos($_SERVER['REQUEST_URI'],'/progress_plus/display/point_in_time_only.php')) == 1){
	$sql = "SELECT * FROM progress_plus_core WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."' AND related_to = 'point_in_time_only' ORDER BY input_id DESC";
	}
else{	$sql = "SELECT * FROM progress_plus_core WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."' ORDER BY input_id DESC";}

require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);




?>


<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/design/layouts/start_of_page_not_centered_vertically.php";

	echo "<div style='height:20px;'></div>";

	if($_SESSION['menu_set_diary'] == 'daily'	){$period_type = 'day';}
	if($_SESSION['menu_set_diary'] == 'weekly' 	){$period_type = 'week';}	
	if($_SESSION['menu_set_diary'] == 'monthly' 	){$period_type = 'month';}	

	$sql = "SELECT * FROM logs WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."' AND period_type = '".$period_type."' ORDER BY input_id DESC";
	require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

	if(	$row['most_significant'] != '' OR
		$row['enjoy_most'] != '' OR
		$row['wasnt_ideal'] != '' OR
		$row['what_to_do_more_of'] != '' OR
		$row['how_to_do_that'] != '' OR
		$row['prefer_less_of'] != '' OR
		$row['time_best_spent'] != '' OR
		$row['focus_going_forward_now'] != '' OR
		$row['achieve_tomorrow'] != ''){
	
		echo "<button class='day_collapsible'";
		if($row['rate_out_of_10'] == 0){echo "style='color:#017c0d;background-color:white;'";}
		if($row['rate_out_of_10'] == 1){echo "style='color:#017c0d;background-image:linear-gradient(to right, #FFFFFF 0%, #EBFFEC  10%, #FFFFFF  15%,  #FFFFFF 100%);'";}	
		if($row['rate_out_of_10'] == 2){echo "style='color:#017c0d;background-image:linear-gradient(to right, #FFFFFF 0%, #d6ffd9  20%, #FFFFFF  25%,  #FFFFFF 100%);'";}	
		if($row['rate_out_of_10'] == 3){echo "style='color:#017c0d;background-image:linear-gradient(to right, #FFFFFF 0%, #B5FFBA  30%, #FFFFFF  35%,  #FFFFFF 100%);'";}	
		if($row['rate_out_of_10'] == 4){echo "style='color:#017c0d;background-image:linear-gradient(to right, #FFFFFF 0%, #93ff9b  40%, #FFFFFF  45%,  #FFFFFF 100%);'";}	
		if($row['rate_out_of_10'] == 5){echo "style='color:#017c0d;background-image:linear-gradient(to right, #FFFFFF 0%, #76F781  50%, #FFFFFF  55%,  #FFFFFF 100%);'";}	
		if($row['rate_out_of_10'] == 6){echo "style='color:#017c0d;background-image:linear-gradient(to right, #FFFFFF 0%, #58ef66  60%, #FFFFFF  65%,  #FFFFFF 100%);'";}	
		if($row['rate_out_of_10'] == 7){echo "style='color:#017c0d;background-image:linear-gradient(to right, #FFFFFF 0%, #3DD34B  70%, #FFFFFF  75%,  #FFFFFF 100%);'";}	
		if($row['rate_out_of_10'] == 8){echo "style='color:#017c0d;background-image:linear-gradient(to right, #FFFFFF 0%, #21b72f  80%, #FFFFFF  85%,  #FFFFFF 100%);'";}	
		if($row['rate_out_of_10'] == 9){echo "style='color:#017c0d;background-image:linear-gradient(to right, #FFFFFF 0%, #119A1E  90%, #FFFFFF  95%,  #FFFFFF 100%);'";}	
		if($row['rate_out_of_10'] == 10){echo "style='color:#017c0d;background-image:linear-gradient(to right, #FFFFFF 0%, #017c0d 100%);'";}	
	/*	
		if($row['rate_out_of_10'] == 0){echo "style='color:#017c0d;background-color:white;'";}
		if($row['rate_out_of_10'] == 1){echo "style='color:#017c0d;background-color: #EBFFEC;'";}	
		if($row['rate_out_of_10'] == 2){echo "style='color:#017c0d;background-color: #d6ffd9;'";}	
		if($row['rate_out_of_10'] == 3){echo "style='color:#017c0d;background-color: #B5FFBA;'";}	
		if($row['rate_out_of_10'] == 4){echo "style='color:#FFFFFF;background-color: #93ff9b;'";}	
		if($row['rate_out_of_10'] == 5){echo "style='color:#FFFFFF;background-color: #76F781;'";}	
		if($row['rate_out_of_10'] == 6){echo "style='color:#FFFFFF;background-color: #58ef66;'";}	
		if($row['rate_out_of_10'] == 7){echo "style='color:#FFFFFF;background-color: #3DD34B;'";}	
		if($row['rate_out_of_10'] == 8){echo "style='color:#FFFFFF;background-color: #21b72f;'";}	
		if($row['rate_out_of_10'] == 9){echo "style='color:#FFFFFF;background-color: #119A1E;'";}	
		if($row['rate_out_of_10'] == 10){echo "style='color:#FFFFFF;background-color: #017c0d;'";}*/	
		echo ">";
		
		echo date("l", strtotime($row['local_timestamp_on_entry']));
		echo " the ";
		echo date("jS", strtotime($row['local_timestamp_on_entry']));
		echo " of ";
		echo date("F", strtotime($row['local_timestamp_on_entry']));
		echo " ";	
		echo date("Y", strtotime($row['local_timestamp_on_entry']));
	
		echo"</button>
			<div class='day_content'";
			if($row['rate_out_of_10'] == 0){echo "style='background-color:white;color:#017c0d;'";}
			if($row['rate_out_of_10'] == 1){echo "style='background-color:#EBFFEC;color:#017c0d;'";}	
			if($row['rate_out_of_10'] == 2){echo "style='background-color:#d6ffd9;color:#017c0d;'";}	
			if($row['rate_out_of_10'] == 3){echo "style='background-color:#B5FFBA;color:#017c0d;'";}	
			if($row['rate_out_of_10'] == 4){echo "style='background-color:#93ff9b;color:#017c0d;'";}	
			if($row['rate_out_of_10'] == 5){echo "style='background-color:#76F781;color:#017c0d;'";}	
			if($row['rate_out_of_10'] == 6){echo "style='background-color:#58ef66;color:#017c0d;'";}	
			if($row['rate_out_of_10'] == 7){echo "style='background-color:#3DD34B;color:#d6ffd9;'";}	
			if($row['rate_out_of_10'] == 8){echo "style='background-color:#21b72f;color:#d6ffd9;'";}	
			if($row['rate_out_of_10'] == 9){echo "style='background-color:#119A1E;color:#d6ffd9;'";}	
			if($row['rate_out_of_10'] == 10){echo "style='background-color:#017c0d;color:#d6ffd9;'";}			
			
			echo ">";
			
			echo "<div class='question' style='font-size:5em;width:100%;text-align:center;'>".$row['rate_out_of_10']." / 10</div><br><br>";
			if($row['most_significant'] != ''){echo "
				<span class='question'>What was most notable or significant about what went on today?</span>
				<br>".$row['most_significant']."<br><br>";}
			if($row['enjoy_most'] != ''){echo "				
				<span class='question'>What did you enjoy most about today?</span>
				<br>".$row['enjoy_most']."<br><br>";}
			if($row['wasnt_ideal'] != ''){echo "
				<span class='question'>What wasn't ideal about today?</span>
				<br>".$row['wasnt_ideal']."<br><br>";}
			if($row['what_to_do_more_of'] != ''){echo "
				<span class='question'>What work do you want to do more of after today?</span>
				<br>".$row['what_to_do_more_of']."<br><br>";}
			if($row['how_to_do_that'] != ''){echo "
				<span class='question'>How can you start to do more of that work?</span>
				<br>".$row['how_to_do_that']."<br><br>";}
			if($row['prefer_less_of'] != ''){echo "
				<span class='question'>What work would you prefer to do less of and why?</span>
				<br>".$row['prefer_less_of']."<br><br>";}
			if($row['time_best_spent'] != ''){echo "
				<span class='question'>Where do you think your time is best spent for the business?</span>
				<br>".$row['time_best_spent']."<br><br>";}
			if($row['focus_going_forward_now'] != ''){echo "
				<span class='question'>So what's your focus going to be going forward now?</span>
				<br>".$row['focus_going_forward_now']."<br><br>";}
			if($row['achieve_tomorrow'] != ''){echo "
				<span class='question'>And what do you want to achieve tomorrow?</span>
				<br>".$row['achieve_tomorrow']."<br><br>";}



		
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			










			echo "</div>";
		}	
	}
	echo "<div style='height:20px;'></div>";
require $_SERVER['DOCUMENT_ROOT']."/design/layouts/end_of_page_not_centered_vertically.php";
?>




<!-- this has to be at the end of the page now to ensure (I THINK) that it can hear all the buttons in a class. I suspect!!! -->
<script>
var coll = document.getElementsByClassName("day_collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var day_content = this.nextElementSibling;
    if (day_content.style.display === "block") {
      day_content.style.display = "none";
    } else {
      day_content.style.display = "block";
    }
  });
}
</script>

<style>
/* Style the button that is used to open and close the day_collapsible day_content */
.day_collapsible {
    background-color:transparent;
  color: #4332ff;
  cursor: pointer;
  padding: 18px;
  padding-left:10px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
 font-size: 20px;
 max-width:1100px;
 margin:auto;
 display:block;
}


/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
//.active, .day_collapsible:hover {
//  background-color: #ccc;
//}

.question{
color:white;
 font-weight: 400;
}

/* Style the day_collapsible day_content. Note: hidden by default */
.day_content {
  font-family:helvetica;
  padding: 30 18px;
  display: none;
  overflow: hidden;
  color:#06004c;
   max-width:1100px;
   margin:auto;
   font-size: 20px;
   font-weight: 800;
   
}

.day_collapsible:before {
    content: '\002B';
    color: #06470c;;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}
.day_collapsible.active:before {
    content: '\2014';
    color: #06470c;
    font-weight: bold;
    float: right;
    margin-left: 5px;
  
}





	/* Make sure that padding behaves as expected */
	* {box-sizing:border-box}
	
	/* day_container for skill bars */
	.day_container {
	  width: 100%; /* Full width */
	  background-color: #d1f1ff; /* Grey background */
	}
	
	.skills {
	  text-align: right; /* Right-align text */
	  padding: 10px; /* Add some padding */
	  color: white; /* White text color */
	}
	
	.day_too_much_work {width: 90%; background-color: #4CAF50;} /* Green */
	.day_stress {width: 60%; background-color: orange;} /* Blue */
	.day_misaligned {width: 85%; background-color: #ff0000;} /* Red */
	.day_lack_of_direction {width: 75%; background-color: #808080;} /* Dark Grey */
	.day_unclear_desires {width: 55%; background-color: #ff0000;} /* Red */
	.day_home_and_health {width: 40%; background-color: black;} /* Dark Grey */
</style>