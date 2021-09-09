<style>
    .Table{
        display: inline-block;
        background-color:#ffffff;
        width:100%;
    }
    .Title{
        display: table-caption;
        text-align: center;
        font-weight: bold;
        font-size: larger;
    }
    .Heading{
        display: table-row;
        font-weight: bold;
        text-align: center;
    }
    .Row{       
        display: table-row;
    }
    .commentCell{
           width:100%;
        display: none;
        font-family:helvetica;
        font-size:18px;
        padding-top:7px;
    }
    
    .Cell{
        display: table-cell;
       width:12.5%;
        height:40px;
        font-family:helvetica;
        font-size:18px;
        padding-top:7px;
 //     -moz-box-shadow:    inset 0 0 3px #000000;
 //     -webkit-box-shadow: inset 0 0 3px #000000;
  //    box-shadow:         inset 0 0 3px #000000;
    }
    

    .pressed{
       background-color: grey;
       color: grey;
    
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

</style>


<script>
function show_mood(input_number){
	  var y = document.getElementById("mood_why_"+input_number);
	  y.style.display = "block";
}
//set display none for all off all comments

//set display table-cell for the single relevant one

</script>


<?php
if(!isset($_SESSION)){session_start();}

$sql = "SELECT * FROM progress_plus_end_of_day WHERE user_id = '".$_SESSION['user_id']."' ORDER BY input_id DESC";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);

echo "<div class='Table'>";
	echo "<div class='Row'>";
		//echo "<div class='Cell'></div>";
		echo "<div class='Cell'>Mood</div>";
		echo "<div class='Cell'>Productivity</div>";
		echo "<div class='Cell'>Health</div>";
		echo "<div class='Cell'>Happiness</div>";
		echo "<div class='Cell'>Focus</div>";
		echo "<div class='Cell'>Stress</div>";
		echo "<div class='Cell'>Confidence</div>";
		echo "<div class='Cell'>Control</div>";
	echo "</div>";
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

echo "<div class='Row'>";
	/*
	echo "<div class='Cell'>";	
		echo $row['timestamp'];
		echo "<br>";
	echo "</div>";
	*/
	
	echo "<div class='Cell ";

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

	echo "</div>";
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
	echo "<div class='Cell' style='background-color:".$background_color.";color:".$color."' title='".$row['productivity_why']."'>";	
		echo $row['productivity'];
		echo "<br>";
	echo "</div>";
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
	echo "<div class='Cell' style='background-color:".$background_color.";color:".$color."' title='".$row['health_why']."'>";	
		echo $row['health'];
		echo "<br>";
	echo "</div>";
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
	echo "<div class='Cell' style='background-color:".$background_color.";color:".$color."' title='".$row['happiness_why']."'>";	
		echo $row['happiness'];
		echo "<br>";
	echo "</div>";
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
	echo "<div class='Cell' style='background-color:".$background_color.";color:".$color."' title='".$row['focus_why']."'>";	
		echo $row['focus'];
		echo "<br>";
	echo "</div>";
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
	echo "<div class='Cell' style='background-color:".$background_color.";color:".$color."' title='".$row['stress_why']."'>";	
		echo $row['stress'];
		echo "<br>";
	echo "</div>";
/*	if($row['confidence'] == 5){$background_color = '#017c0d';	$color= '#ffffff';	}
	if($row['confidence'] == 4){$background_color = '#21b72f';	$color= '#ffffff';	}
	if($row['confidence'] == 3){$background_color = '#58ef66';	$color= '#ffffff';	}
	if($row['confidence'] == 2){$background_color = '#93ff9b';	$color= '#034c0a';	}
	if($row['confidence'] == 1){$background_color = '#d6ffd9';	$color= '#034c0a';	}	
	if($row['confidence'] == 0){$background_color = 'transparent';	$color= 'grey';		}	
	if($row['confidence'] == -1){$background_color = '#ff7a7a';	$color= '#034c0a';	}	
	if($row['confidence'] == -2){$background_color = '#ff5454';	$color= '#034c0a';	}
	if($row['confidence'] == -3){$background_color = '#d62c2c';	$color= '#034c0a';	}		
	if($row['confidence'] == -4){$background_color = '#d83131';	$color= '#ffffff';	}
	if($row['confidence'] == -5){$background_color = '#910e0e';	$color= '#ffffff';	} */
	echo "<div class=' pressed Cell' title='".$row['confidence_why']."'>";	
		echo $row['confidence'];
		echo "<br>";
	echo "</div>";
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
	echo "<div class='Cell' style='background-color:".$background_color.";color:".$color."' title='".$row['control_why']."'>";	
		echo $row['control'];
		echo "<br>";
	echo "</div>";	
	
echo "</div>";

echo "<div class='Row'	><div class='commentCell'  id='mood_why_".$row['input_id']."'>".$row['mood_why']."</div></div>";
echo "<div class='Row' id='productivity_why_".$row['input_id']."'><div class='commentCell'>".$row['productivity_why']."</div></div>";
echo "<div class='Row' id='health_why_".$row['input_id']."'	><div class='commentCell'>".$row['health_why']."</div></div>";
echo "<div class='Row' id='happiness_why_".$row['input_id']."'	><div class='commentCell'>".$row['happiness_why']."</div></div>";
echo "<div class='Row' id='focus_why_".$row['input_id']."'	><div class='commentCell'>".$row['focus_why']."</div></div>";
echo "<div class='Row' id='stress_why_".$row['input_id']."'	><div class='commentCell'>".$row['stress_why']."</div></div>";
echo "<div class='Row' id='confidence_why_".$row['input_id']."'	><div class='commentCell'>".$row['confidence_why']."</div></div>";
echo "<div class='Row' id='control_why_".$row['input_id']."'	><div class='commentCell'>".$row['control_why']."</div></div>";

//echo "</div>";

}

echo "</div>"; //close the Table div


?>