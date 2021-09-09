<style>
table{
       table-layout: fixed;
        background-color:#ffffff;
        width:100%;
    }
    .Title{
        display: table-caption;
        text-align: center;
        font-weight: bold;
        font-size: larger;
    }
.heading{     //width:12.5%;
      
        font-weight: bold;
        text-align: center;
    }
    .Row{       
        display: table-row;
    }
    .comment_row{
           width:100%;
        display: none;
        font-family:helvetica;
        font-size:18px;
        padding-top:7px;
        min-height:50px;

    }  
    
    .comment_cell{
    background-color: grey; color: white;
    }
    .standard_cell{
        //display: table-cell;
     //  width:12.5%;
        height:40px;
        font-family:helvetica;
        font-size:18px;
    
        text-align:center;
      -moz-box-shadow:    inset 0 0 3px #000000;
      -webkit-box-shadow: inset 0 0 3px #000000;
     box-shadow:         inset 0 0 3px #000000;
    }
    


    
    
.plus_five	{background-color: #017c0d; 	color: #ffffff;}    
.plus_four	{background-color: #21b72f; 	color: #ffffff;}   
.plus_three	{background-color: #58ef66; 	color: #ffffff;}   
.plus_two	{background-color: #93ff9b; 	color: #034c0a;}       
.plus_one	{background-color: #d6ffd9; 	color: #034c0a;} 
.zero		{background-color: transparent; color: grey;} 
.minus_one	{background-color: #ffdbdb; 	color: #910e0e;} 
.minus_two	{background-color: #ffaaaa; 	color: #910e0e;} 
.minus_three	{background-color: #ff6363; 	color: #ffffff;} 
.minus_four	{background-color: #d83131; 	color: #ffffff;} 
.minus_five	{background-color: #910e0e; 	color: #ffffff;}    
    
.plus_five:hover	{background-color: grey; color: white;}    
.plus_four:hover	{background-color: grey; color: white;}   
.plus_three:hover	{background-color: grey; color: white;}   
.plus_two:hover		{background-color: grey; color: white;}       
.plus_one:hover		{background-color: grey; color: white;} 
.zero:hover		{background-color: grey; color: white;} 
.minus_one:hover	{background-color: grey; color: white;} 
.minus_two:hover	{background-color: grey; color: white;} 
.minus_three:hover	{background-color: grey; color: white;} 
.minus_four:hover	{background-color: grey; color: white;} 
.minus_five:hover	{background-color: grey; color: white;} 

.plus_five.pressed	{background-color: grey; color: white;-moz-box-shadow:    inset 0 0 0px #000000; -webkit-box-shadow: inset 0 0 0px #000000;    box-shadow:      inset 0 0 0px #000000;}    
.plus_four.pressed	{background-color: grey; color: white;-moz-box-shadow:    inset 0 0 0px #000000; -webkit-box-shadow: inset 0 0 0px #000000;    box-shadow:      inset 0 0 0px #000000;}   
.plus_three.pressed	{background-color: grey; color: white;-moz-box-shadow:    inset 0 0 0px #000000; -webkit-box-shadow: inset 0 0 0px #000000;    box-shadow:      inset 0 0 0px #000000;}   
.plus_two.pressed	{background-color: grey; color: white;-moz-box-shadow:    inset 0 0 0px #000000; -webkit-box-shadow: inset 0 0 0px #000000;    box-shadow:      inset 0 0 0px #000000;}       
.plus_one.pressed	{background-color: grey; color: white;-moz-box-shadow:    inset 0 0 0px #000000; -webkit-box-shadow: inset 0 0 0px #000000;    box-shadow:      inset 0 0 0px #000000;} 
.zero.pressed		{background-color: grey; color: white;-moz-box-shadow:    inset 0 0 0px #000000; -webkit-box-shadow: inset 0 0 0px #000000;    box-shadow:      inset 0 0 0px #000000;} 
.minus_one.pressed	{background-color: grey; color: white;-moz-box-shadow:    inset 0 0 0px #000000; -webkit-box-shadow: inset 0 0 0px #000000;    box-shadow:      inset 0 0 0px #000000;} 
.minus_two.pressed	{background-color: grey; color: white;-moz-box-shadow:    inset 0 0 0px #000000; -webkit-box-shadow: inset 0 0 0px #000000;    box-shadow:      inset 0 0 0px #000000;} 
.minus_three.pressed	{background-color: grey; color: white;-moz-box-shadow:    inset 0 0 0px #000000; -webkit-box-shadow: inset 0 0 0px #000000;    box-shadow:      inset 0 0 0px #000000;} 
.minus_four.pressed	{background-color: grey; color: white;-moz-box-shadow:    inset 0 0 0px #000000; -webkit-box-shadow: inset 0 0 0px #000000;    box-shadow:      inset 0 0 0px #000000;} 
.minus_five.pressed	{background-color: grey; color: white;-moz-box-shadow:    inset 0 0 0px #000000; -webkit-box-shadow: inset 0 0 0px #000000;    box-shadow:      inset 0 0 0px #000000;} 




</style>


<script>
function show_mood(input_number){
	turn_off_all_comments();
	//set display table-cell for the single relevant one	
	var y = document.getElementById("mood_why_"+input_number);
	y.style.display = "contents";
	
	remove_pressed_from_all();
	//set display table-cell for the single relevant one	
	var z = document.getElementById("mood_score_"+input_number);
	z.className += " pressed";
}

function turn_off_all_comments(){
	//set display none for all off all comments
    	var divsToHide = document.getElementsByClassName("comment_row"); //divsToHide is an array
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
	y.style.display = "contents";
	remove_pressed_from_all();
	//set display table-cell for the single relevant one	
	var z = document.getElementById("productivity_score_"+input_number);
	z.className += " pressed";
}
function show_health(input_number){
	turn_off_all_comments();
	//set display table-cell for the single relevant one	
	var y = document.getElementById("health_why_"+input_number);
	y.style.display = "contents";
	remove_pressed_from_all();
	//set display table-cell for the single relevant one	
	var z = document.getElementById("health_score_"+input_number);
	z.className += " pressed";
}
function show_happiness(input_number){
	turn_off_all_comments();
	//set display table-cell for the single relevant one	
	var y = document.getElementById("happiness_why_"+input_number);
	y.style.display = "contents";
	remove_pressed_from_all();
	//set display table-cell for the single relevant one	
	var z = document.getElementById("happiness_score_"+input_number);
	z.className += " pressed";
}
function show_focus(input_number){
	turn_off_all_comments();
	//set display table-cell for the single relevant one	
	var y = document.getElementById("focus_why_"+input_number);
	y.style.display = "contents";
	remove_pressed_from_all();
	//set display table-cell for the single relevant one	
	var z = document.getElementById("focus_score_"+input_number);
	z.className += " pressed";
}
function show_stress(input_number){
	turn_off_all_comments();
	//set display table-cell for the single relevant one	
	var y = document.getElementById("stress_why_"+input_number);
	y.style.display = "contents";
	remove_pressed_from_all();
	//set display table-cell for the single relevant one	
	var z = document.getElementById("stress_score_"+input_number);
	z.className += " pressed";
}
function show_confidence(input_number){
	turn_off_all_comments();
	//set display table-cell for the single relevant one	
	var y = document.getElementById("confidence_why_"+input_number);
	y.style.display = "contents";
	remove_pressed_from_all();
	//set display table-cell for the single relevant one	
	var z = document.getElementById("confidence_score_"+input_number);
	z.className += " pressed";
}
function show_control(input_number){
	turn_off_all_comments();
	//set display table-cell for the single relevant one	
	var y = document.getElementById("control_why_"+input_number);
	y.style.display = "contents";
	remove_pressed_from_all();
	//set display table-cell for the single relevant one	
	var z = document.getElementById("control_score_"+input_number);
	z.className += " pressed";
}

</script>


<?php
if(!isset($_SESSION)){session_start();}

$sql = "SELECT * FROM progress_plus_end_of_day WHERE user_id = '".$_SESSION['user_id']."' ORDER BY input_id DESC";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);

echo "<table style='border-spacing:0px;'>";
	echo "<tr>";
		//echo "<div class='Cell'></td>";
		echo "<td class='heading'>Mood</td>";
		echo "<td class='heading'>Productivity</td>";
		echo "<td class='heading'>Health</td>";
		echo "<td class='heading'>Happiness</td>";
		echo "<td class='heading'>Focus</td>";
		echo "<td class='heading'>Stress</td>";
		echo "<td class='heading'>Confidence</td>";
		echo "<td class='heading'>Control</td>";
	echo "</tr>";
	
	
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

echo "<tr>";
	/*
	echo "<td>";	
		echo $row['timestamp'];

	echo "</div>";
	*/
	
	echo "<td
		 id='mood_score_".$row['input_id']."' 
		 class='standard_cell ";

		if($row['mood'] == 5){echo "plus_five 	";}
		if($row['mood'] == 4){echo "plus_four 	";}
		if($row['mood'] == 3){echo "plus_three 	";}
		if($row['mood'] == 2){echo "plus_two 	";}
		if($row['mood'] == 1){echo "plus_one 	";}	
		if($row['mood'] == 0){echo "zero 	";}	
		if($row['mood'] == -1){echo "minus_one 	";}	
		if($row['mood'] == -2){echo "minus_two 	";}
		if($row['mood'] == -3){echo "minus_three ";}		
		if($row['mood'] == -4){echo "minus_four ";}
		if($row['mood'] == -5){echo "minus_five ";}
		echo "' onclick='show_mood(".$row['input_id'].")'>";			
		echo $row['mood'];
	echo "</td>";
	echo "<td
		 id='productivity_score_".$row['input_id']."' 
		 class='standard_cell ";
	
	if($row['productivity'] == 5){echo "plus_five 	";}
	if($row['productivity'] == 4){echo "plus_four 	";}
	if($row['productivity'] == 3){echo "plus_three 	";}
	if($row['productivity'] == 2){echo "plus_two 	";}
	if($row['productivity'] == 1){echo "plus_one 	";}	
	if($row['productivity'] == 0){echo "zero 	";}	
	if($row['productivity'] == -1){echo "minus_one 	";}	
	if($row['productivity'] == -2){echo "minus_two 	";}
	if($row['productivity'] == -3){echo "minus_three	";}		
	if($row['productivity'] == -4){echo "minus_four	";}
	if($row['productivity'] == -5){echo "minus_five	";}	
		echo "' onclick='show_productivity(".$row['input_id'].")'>";	
		echo $row['productivity'];

	echo "</td>";
	echo "<td
		 id='health_score_".$row['input_id']."' 
		 class='standard_cell ";
	if($row['health'] == 5){echo "plus_five 	";}
	if($row['health'] == 4){echo "plus_four 	";}
	if($row['health'] == 3){echo "plus_three 	";}
	if($row['health'] == 2){echo "plus_two 	";}
	if($row['health'] == 1){echo "plus_one 	";}	
	if($row['health'] == 0){echo "zero 	";}	
	if($row['health'] == -1){echo "minus_one 	";}	
	if($row['health'] == -2){echo "minus_two 	";}
	if($row['health'] == -3){echo "minus_three	";}		
	if($row['health'] == -4){echo "minus_four	";}
	if($row['health'] == -5){echo "minus_five	";}
		echo "' onclick='show_health(".$row['input_id'].")'>";		
		echo $row['health'];

	echo "</td>";
	echo "<td
		 id='happiness_score_".$row['input_id']."' 
		 class='standard_cell ";
	if($row['happiness'] == 5){echo "plus_five 	";}
	if($row['happiness'] == 4){echo "plus_four 	";}
	if($row['happiness'] == 3){echo "plus_three 	";}
	if($row['happiness'] == 2){echo "plus_two 	";}
	if($row['happiness'] == 1){echo "plus_one 	";}	
	if($row['happiness'] == 0){echo "zero 	";}	
	if($row['happiness'] == -1){echo "minus_one 	";}	
	if($row['happiness'] == -2){echo "minus_two 	";}
	if($row['happiness'] == -3){echo "minus_three	";}		
	if($row['happiness'] == -4){echo "minus_four	";}
	if($row['happiness'] == -5){echo "minus_five	";}
		echo "' onclick='show_happiness(".$row['input_id'].")'>";		
		echo $row['happiness'];

	echo "</td>";
	echo "<td
		 id='focus_score_".$row['input_id']."' 
		 class='standard_cell ";
	if($row['focus'] == 5){echo "plus_five 	";}
	if($row['focus'] == 4){echo "plus_four 	";}
	if($row['focus'] == 3){echo "plus_three 	";}
	if($row['focus'] == 2){echo "plus_two 	";}
	if($row['focus'] == 1){echo "plus_one 	";}	
	if($row['focus'] == 0){echo "zero 	";}	
	if($row['focus'] == -1){echo "minus_one 	";}	
	if($row['focus'] == -2){echo "minus_two 	";}
	if($row['focus'] == -3){echo "minus_three	";}		
	if($row['focus'] == -4){echo "minus_four	";}
	if($row['focus'] == -5){echo "minus_five	";}
		echo "' onclick='show_focus(".$row['input_id'].")'>";	
		echo $row['focus'];

	echo "</td>";
	echo "<td
		 id='stress_score_".$row['input_id']."' 
		 class='standard_cell ";
	if($row['stress'] == 5){echo "plus_five 	";}
	if($row['stress'] == 4){echo "plus_four 	";}
	if($row['stress'] == 3){echo "plus_three 	";}
	if($row['stress'] == 2){echo "plus_two 	";}
	if($row['stress'] == 1){echo "plus_one 	";}	
	if($row['stress'] == 0){echo "zero 	";}	
	if($row['stress'] == -1){echo "minus_one 	";}	
	if($row['stress'] == -2){echo "minus_two 	";}
	if($row['stress'] == -3){echo "minus_three	";}		
	if($row['stress'] == -4){echo "minus_four	";}
	if($row['stress'] == -5){echo "minus_five	";}
		echo "' onclick='show_stress(".$row['input_id'].")'>";	
		echo $row['stress'];

	echo "</td>";
	echo "<td
		 id='confidence_score_".$row['input_id']."' 
		 class='standard_cell ";
	if($row['confidence'] == 5){echo "plus_five 	";}
	if($row['confidence'] == 4){echo "plus_four 	";}
	if($row['confidence'] == 3){echo "plus_three 	";}
	if($row['confidence'] == 2){echo "plus_two 	";}
	if($row['confidence'] == 1){echo "plus_one 	";}	
	if($row['confidence'] == 0){echo "zero 	";}	
	if($row['confidence'] == -1){echo "minus_one 	";}	
	if($row['confidence'] == -2){echo "minus_two 	";}
	if($row['confidence'] == -3){echo "minus_three	";}		
	if($row['confidence'] == -4){echo "minus_four	";}
	if($row['confidence'] == -5){echo "minus_five	";} 
		echo "' onclick='show_confidence(".$row['input_id'].")'>";	
		echo $row['confidence'];

	echo "</td>";
	echo "<td
		 id='control_score_".$row['input_id']."' 
		 class='standard_cell ";
	if($row['control'] == 5){echo "plus_five 	";}
	if($row['control'] == 4){echo "plus_four 	";}
	if($row['control'] == 3){echo "plus_three 	";}
	if($row['control'] == 2){echo "plus_two 	";}
	if($row['control'] == 1){echo "plus_one 	";}	
	if($row['control'] == 0){echo "zero 	";}	
	if($row['control'] == -1){echo "minus_one 	";}	
	if($row['control'] == -2){echo "minus_two 	";}
	if($row['control'] == -3){echo "minus_three	";}		
	if($row['control'] == -4){echo "minus_four	";}
	if($row['control'] == -5){echo "minus_five	";}
		echo "' onclick='show_control(".$row['input_id'].")'>";	
		echo $row['control'];

	echo "</td>";	
	
echo "</tr>";

echo "<tr class='comment_row' id='mood_why_".$row['input_id']."'	><td  class='comment_cell'  colspan='8'>Mood time since<br>".$row['mood_why']."	<br>related thing</td></tr>";
echo "<tr class='comment_row' id='productivity_why_".$row['input_id']."'><td  class='comment_cell'  colspan='8'>time since<br>".$row['productivity_why']."	<br>related thing</td></tr>";
echo "<tr class='comment_row' id='health_why_".$row['input_id']."'	><td  class='comment_cell'  colspan='8'>time since<br>".$row['health_why']."		<br>related thing</td></tr>";
echo "<tr class='comment_row' id='happiness_why_".$row['input_id']."'	><td  class='comment_cell'  colspan='8'>time since<br>".$row['happiness_why']."	<br>related thing</td></tr>";
echo "<tr class='comment_row' id='focus_why_".$row['input_id']."'	><td 	class='comment_cell'  colspan='8'>time since<br>".$row['focus_why']."		<br>related thing</td></tr>";
echo "<tr class='comment_row' id='stress_why_".$row['input_id']."'	><td 	class='comment_cell'  colspan='8'>time since<br>".$row['stress_why']."		<br>related thing</td></tr>";
echo "<tr class='comment_row' id='confidence_why_".$row['input_id']."'	><td 	class='comment_cell'  colspan='8'>time since<br>".$row['confidence_why']."	<br>related thing</td></tr>";
echo "<tr class='comment_row' id='control_why_".$row['input_id']."'	><td 	class='comment_cell'  colspan='8'>time since<br>".$row['control_why']."		<br>related thing</td></tr>";

//echo "</div>";

}

echo "</table>"; //close the Table div


?>