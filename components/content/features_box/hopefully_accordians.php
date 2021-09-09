<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

echo $sql = "SELECT * FROM work_diary WHERE user_id = '1'  ORDER BY input_id DESC";
$result = mysqli_query($conn, $sql);

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
echo "<div style='height:20px;'></div>";

$sql = "SELECT * FROM work_diary WHERE user_id = '1' ORDER BY input_id DESC";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

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
		if($row['rate_out_of_10'] == 0){echo "style='background-color:#FFFFFF;color:#017c0d;";}
		if($row['rate_out_of_10'] == 1){echo "style='background-color:#EBFFEC;color:#017c0d;";}	
		if($row['rate_out_of_10'] == 2){echo "style='background-color:#d6ffd9;color:#017c0d;";}	
		if($row['rate_out_of_10'] == 3){echo "style='background-color:#B5FFBA;color:#017c0d;";}	
		if($row['rate_out_of_10'] == 4){echo "style='background-color:#93ff9b;color:#017c0d;";}	
		if($row['rate_out_of_10'] == 5){echo "style='background-color:#76F781;color:#017c0d;";}	
		if($row['rate_out_of_10'] == 6){echo "style='background-color:#58ef66;color:#017c0d;";}	
		if($row['rate_out_of_10'] == 7){echo "style='background-color:#3DD34B;color:#d6ffd9;";}	
		if($row['rate_out_of_10'] == 8){echo "style='background-color:#21b72f;color:#d6ffd9;";}	
		if($row['rate_out_of_10'] == 9){echo "style='background-color:#119A1E;color:#d6ffd9;";}	
		if($row['rate_out_of_10'] == 10){echo "style='background-color:#017c0d;color:#d6ffd9;";}
		
		if($_GET['open'] == $row['input_id']){echo "display:inline-block;";}
		
		echo "'";			
		
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


echo "<div style='height:20px;'></div>";
//require $_SERVER['DOCUMENT_ROOT']."/design/layouts/end_of_page_not_centered_vertically.php";
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