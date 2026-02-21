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
    }  
    .standard_cell{
        display: table-cell;
     //  width:12.5%;
        height:40px;
        font-family:helvetica;
        font-size:18px;
        padding-top:7px;
 //     -moz-box-shadow:    inset 0 0 3px #000000;
 //     -webkit-box-shadow: inset 0 0 3px #000000;
  //    box-shadow:         inset 0 0 3px #000000;
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

.plus_five.pressed	{background-color: grey; color: white;}    
.plus_four.pressed	{background-color: grey; color: white;}   
.plus_three.pressed	{background-color: grey; color: white;}   
.plus_two.pressed	{background-color: grey; color: white;}       
.plus_one.pressed	{background-color: grey; color: white;} 
.zero.pressed		{background-color: grey; color: white;} 
.minus_one.pressed	{background-color: grey; color: white;} 
.minus_two.pressed	{background-color: grey; color: white;} 
.minus_three.pressed	{background-color: grey; color: white;} 
.minus_four.pressed	{background-color: grey; color: white;} 
.minus_five.pressed	{background-color: grey; color: white;} 




</style>


<script>
function show_mood(input_number){
	//set display none for all off all comments
    	var divsToHide = document.getElementsByClassName("comment_row"); //divsToHide is an array
    	for(var i = 0; i < divsToHide.length; i++){
        	divsToHide[i].style.display = "none"; 
    	} 
    	
	//set display table-cell for the single relevant one	
	var y = document.getElementById("mood_why_"+input_number);
	y.style.display = "contents";

    	var divsToHide = document.getElementsByClassName("standard_cell"); //divsToHide is an array
    	for(var i = 0; i < divsToHide.length; i++){
        	divsToHide[i].classList.remove('pressed') // depending on what you're doing
    	} 
	
	//set display table-cell for the single relevant one	
	var z = document.getElementById("mood_score_"+input_number);
	z.className += " pressed";
}







function show_producitivity(input_number){
	//set display none for all off all comments
    	var divsToHide = document.getElementsByClassName("comment_row"); //divsToHide is an array
    	for(var i = 0; i < divsToHide.length; i++){
     	//   	divsToHide[i].style.visibility = "hidden"; // or
        	divsToHide[i].style.display = "none"; // depending on what you're doing
    	} 
    	
	//set display table-cell for the single relevant one	
	var y = document.getElementById("producitivity_why_"+input_number);
	y.style.display = "contents";
}
function show_health(input_number){
	//set display none for all off all comments
    	var divsToHide = document.getElementsByClassName("comment_row"); //divsToHide is an array
    	for(var i = 0; i < divsToHide.length; i++){
     	//   	divsToHide[i].style.visibility = "hidden"; // or
        	divsToHide[i].style.display = "none"; // depending on what you're doing
    	} 
    	
	//set display table-cell for the single relevant one	
	var y = document.getElementById("health_why_"+input_number);
	y.style.display = "contents";
}
function show_happiness(input_number){
	//set display none for all off all comments
    	var divsToHide = document.getElementsByClassName("comment_row"); //divsToHide is an array
    	for(var i = 0; i < divsToHide.length; i++){
     	//   	divsToHide[i].style.visibility = "hidden"; // or
        	divsToHide[i].style.display = "none"; // depending on what you're doing
    	} 
    	
	//set display table-cell for the single relevant one	
	var y = document.getElementById("happiness_why_"+input_number);
	y.style.display = "contents";
}
function show_focus(input_number){
	//set display none for all off all comments
    	var divsToHide = document.getElementsByClassName("comment_row"); //divsToHide is an array
    	for(var i = 0; i < divsToHide.length; i++){
     	//   	divsToHide[i].style.visibility = "hidden"; // or
        	divsToHide[i].style.display = "none"; // depending on what you're doing
    	} 
    	
	//set display table-cell for the single relevant one	
	var y = document.getElementById("focus_why_"+input_number);
	y.style.display = "contents";
}
function show_stress(input_number){
	//set display none for all off all comments
    	var divsToHide = document.getElementsByClassName("comment_row"); //divsToHide is an array
    	for(var i = 0; i < divsToHide.length; i++){
     	//   	divsToHide[i].style.visibility = "hidden"; // or
        	divsToHide[i].style.display = "none"; // depending on what you're doing
    	} 
    	
	//set display table-cell for the single relevant one	
	var y = document.getElementById("stress_why_"+input_number);
	y.style.display = "contents";
}
function show_confidence(input_number){
	//set display none for all off all comments
    	var divsToHide = document.getElementsByClassName("comment_row"); //divsToHide is an array
    	for(var i = 0; i < divsToHide.length; i++){
     	//   	divsToHide[i].style.visibility = "hidden"; // or
        	divsToHide[i].style.display = "none"; // depending on what you're doing
    	} 
    	
	//set display table-cell for the single relevant one	
	var y = document.getElementById("confidence_why_"+input_number);
	y.style.display = "contents";
}
function show_control(input_number){
	//set display none for all off all comments
    	var divsToHide = document.getElementsByClassName("comment_row"); //divsToHide is an array
    	for(var i = 0; i < divsToHide.length; i++){
     	//   	divsToHide[i].style.visibility = "hidden"; // or
        	divsToHide[i].style.display = "none"; // depending on what you're doing
    	} 
    	
	//set display table-cell for the single relevant one	
	var y = document.getElementById("control_why_"+input_number);
	y.style.display = "contents";
}

</script>


<?php
if(!isset($_SESSION)){session_start();}

$sql = "SELECT * FROM progress_plus_end_of_day WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."' ORDER BY input_id DESC";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);

echo "<table>";
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
	if($row['productivity'] == 5){$background_color = '#017c0d';	$color= '#ffffff';	}
	if($row['productivity'] == 4){$background_color = '#21b72f';	$color= '#ffffff';	}
	if($row['productivity'] == 3){$background_color = '#58ef66';	$color= '#ffffff';	}
	if($row['productivity'] == 2){$background_color = '#93ff9b';	$color= '#034c0a';	}
	if($row['productivity'] == 1){$background_color = '#d6ffd9';	$color= '#034c0a';	}	
	if($row['productivity'] == 0){$background_color = 'transparent';$color= 'grey';		}	
	if($row['productivity'] == -1){$background_color = '#ff7a7a';	$color= '#034c0a';	}	
	if($row['productivity'] == -2){$background_color = '#ff5454';	$color= '#034c0a';	}
	if($row['productivity'] == -3){$background_color = '#d62c2c';	$color= '#034c0a';	}		
	if($row['productivity'] == -4){$background_color = '#d83131';	$color= '#ffffff';	}
	if($row['productivity'] == -5){$background_color = '#910e0e';	$color= '#ffffff';	}	
	echo "<td style='background-color:".$background_color.";color:".$color."' title='".$row['productivity_why']."'>";	
		echo $row['productivity'];

	echo "</td>";
	if($row['health'] == 5){$background_color = '#017c0d';	$color= '#ffffff';	}
	if($row['health'] == 4){$background_color = '#21b72f';	$color= '#ffffff';	}
	if($row['health'] == 3){$background_color = '#58ef66';	$color= '#ffffff';	}
	if($row['health'] == 2){$background_color = '#93ff9b';	$color= '#034c0a';	}
	if($row['health'] == 1){$background_color = '#d6ffd9';	$color= '#034c0a';	}	
	if($row['health'] == 0){$background_color = 'transparent';$color= 'grey';	}	
	if($row['health'] == -1){$background_color = '#ff7a7a';	$color= '#034c0a';	}	
	if($row['health'] == -2){$background_color = '#ff5454';	$color= '#034c0a';	}
	if($row['health'] == -3){$background_color = '#d62c2c';	$color= '#034c0a';	}		
	if($row['health'] == -4){$background_color = '#d83131';	$color= '#ffffff';	}
	if($row['health'] == -5){$background_color = '#910e0e';	$color= '#ffffff';	}
	echo "<td style='background-color:".$background_color.";color:".$color."' title='".$row['health_why']."'>";	
		echo $row['health'];

	echo "</td>";
	if($row['happiness'] == 5){$background_color = '#017c0d';	$color= '#ffffff';	}
	if($row['happiness'] == 4){$background_color = '#21b72f';	$color= '#ffffff';	}
	if($row['happiness'] == 3){$background_color = '#58ef66';	$color= '#ffffff';	}
	if($row['happiness'] == 2){$background_color = '#93ff9b';	$color= '#034c0a';	}
	if($row['happiness'] == 1){$background_color = '#d6ffd9';	$color= '#034c0a';	}	
	if($row['happiness'] == 0){$background_color = 'transparent';$color= 'grey';		}	
	if($row['happiness'] == -1){$background_color = '#ff7a7a';	$color= '#034c0a';	}	
	if($row['happiness'] == -2){$background_color = '#ff5454';	$color= '#034c0a';	}
	if($row['happiness'] == -3){$background_color = '#d62c2c';	$color= '#034c0a';	}		
	if($row['happiness'] == -4){$background_color = '#d83131';	$color= '#ffffff';	}
	if($row['happiness'] == -5){$background_color = '#910e0e';	$color= '#ffffff';	}
	echo "<td style='background-color:".$background_color.";color:".$color."' title='".$row['happiness_why']."'>";	
		echo $row['happiness'];

	echo "</td>";
	if($row['focus'] == 5){$background_color = '#017c0d';	$color= '#ffffff';	}
	if($row['focus'] == 4){$background_color = '#21b72f';	$color= '#ffffff';	}
	if($row['focus'] == 3){$background_color = '#58ef66';	$color= '#ffffff';	}
	if($row['focus'] == 2){$background_color = '#93ff9b';	$color= '#034c0a';	}
	if($row['focus'] == 1){$background_color = '#d6ffd9';	$color= '#034c0a';	}	
	if($row['focus'] == 0){$background_color = 'transparent';$color= 'grey';	}	
	if($row['focus'] == -1){$background_color = '#ff7a7a';	$color= '#034c0a';	}	
	if($row['focus'] == -2){$background_color = '#ff5454';	$color= '#034c0a';	}
	if($row['focus'] == -3){$background_color = '#d62c2c';	$color= '#034c0a';	}		
	if($row['focus'] == -4){$background_color = '#d83131';	$color= '#ffffff';	}
	if($row['focus'] == -5){$background_color = '#910e0e';	$color= '#ffffff';	}
	echo "<td style='background-color:".$background_color.";color:".$color."' title='".$row['focus_why']."'>";	
		echo $row['focus'];

	echo "</td>";
	if($row['stress'] == 5){$background_color = '#017c0d';	$color= '#ffffff';	}
	if($row['stress'] == 4){$background_color = '#21b72f';	$color= '#ffffff';	}
	if($row['stress'] == 3){$background_color = '#58ef66';	$color= '#ffffff';	}
	if($row['stress'] == 2){$background_color = '#93ff9b';	$color= '#034c0a';	}
	if($row['stress'] == 1){$background_color = '#d6ffd9';	$color= '#034c0a';	}	
	if($row['stress'] == 0){$background_color = 'transparent';$color= 'grey';	}	
	if($row['stress'] == -1){$background_color = '#ff7a7a';	$color= '#034c0a';	}	
	if($row['stress'] == -2){$background_color = '#ff5454';	$color= '#034c0a';	}
	if($row['stress'] == -3){$background_color = '#d62c2c';	$color= '#034c0a';	}		
	if($row['stress'] == -4){$background_color = '#d83131';	$color= '#ffffff';	}
	if($row['stress'] == -5){$background_color = '#910e0e';	$color= '#ffffff';	}
	echo "<td style='background-color:".$background_color.";color:".$color."' title='".$row['stress_why']."'>";	
		echo $row['stress'];

	echo "</td>";
	if($row['confidence'] == 5){$background_color = '#017c0d';	$color= '#ffffff';	}
	if($row['confidence'] == 4){$background_color = '#21b72f';	$color= '#ffffff';	}
	if($row['confidence'] == 3){$background_color = '#58ef66';	$color= '#ffffff';	}
	if($row['confidence'] == 2){$background_color = '#93ff9b';	$color= '#034c0a';	}
	if($row['confidence'] == 1){$background_color = '#d6ffd9';	$color= '#034c0a';	}	
	if($row['confidence'] == 0){$background_color = 'transparent';	$color= 'grey';		}	
	if($row['confidence'] == -1){$background_color = '#ff7a7a';	$color= '#034c0a';	}	
	if($row['confidence'] == -2){$background_color = '#ff5454';	$color= '#034c0a';	}
	if($row['confidence'] == -3){$background_color = '#d62c2c';	$color= '#034c0a';	}		
	if($row['confidence'] == -4){$background_color = '#d83131';	$color= '#ffffff';	}
	if($row['confidence'] == -5){$background_color = '#910e0e';	$color= '#ffffff';	} 
	echo "<td class='Cell' title='".$row['confidence_why']."'>";	
		echo $row['confidence'];

	echo "</td>";
	if($row['control'] == 5){$background_color = '#017c0d';	$color= '#ffffff';	}
	if($row['control'] == 4){$background_color = '#21b72f';	$color= '#ffffff';	}
	if($row['control'] == 3){$background_color = '#58ef66';	$color= '#ffffff';	}
	if($row['control'] == 2){$background_color = '#93ff9b';	$color= '#034c0a';	}
	if($row['control'] == 1){$background_color = '#d6ffd9';	$color= '#034c0a';	}	
	if($row['control'] == 0){$background_color = 'transparent';	$color= 'grey';		}	
	if($row['control'] == -1){$background_color = '#ff7a7a';	$color= '#034c0a';	}	
	if($row['control'] == -2){$background_color = '#ff5454';	$color= '#034c0a';	}
	if($row['control'] == -3){$background_color = '#d62c2c';	$color= '#034c0a';	}		
	if($row['control'] == -4){$background_color = '#d83131';	$color= '#ffffff';	}
	if($row['control'] == -5){$background_color = '#910e0e';	$color= '#ffffff';	}
	echo "<td style='background-color:".$background_color.";color:".$color."' title='".$row['control_why']."'>";	
		echo $row['control'];

	echo "</td>";	
	
echo "</tr>";

echo "<tr class='comment_row' id='mood_why_".$row['input_id']."'	><td colspan='8'>".$row['mood_why']."</td></tr>";
echo "<tr class='comment_row' id='productivity_why_".$row['input_id']."'><td colspan='8'>".$row['productivity_why']."</td></tr>";
echo "<tr class='comment_row' id='health_why_".$row['input_id']."'	><td colspan='8'>".$row['health_why']."</td></tr>";
echo "<tr class='comment_row' id='happiness_why_".$row['input_id']."'	><td colspan='8'>".$row['happiness_why']."</td></tr>";
echo "<tr class='comment_row' id='focus_why_".$row['input_id']."'	><td colspan='8'>".$row['focus_why']."</td></tr>";
echo "<tr class='comment_row' id='stress_why_".$row['input_id']."'	><td colspan='8'>".$row['stress_why']."</td></tr>";
echo "<tr class='comment_row' id='confidence_why_".$row['input_id']."'	><td colspan='8'>".$row['confidence_why']."</td></tr>";
echo "<tr class='comment_row' id='control_why_".$row['input_id']."'	><td colspan='8'>".$row['control_why']."</td></tr>";

//echo "</div>";

}

echo "</table>"; //close the Table div


?>