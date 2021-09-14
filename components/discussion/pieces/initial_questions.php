<?php
if(!isset($_SESSION)){session_start();}

unset($_SESSION['prompt_top_string']);
unset($_SESSION['prompt_1_string']);
unset($_SESSION['prompt_2_string']);
unset($_SESSION['prompt_3_string']);
unset($_SESSION['prompt_4_string']);
unset($_SESSION['prompt_5_string']);
unset($_SESSION['prompt_6_string']);
unset($_SESSION['prompt_7_string']);
unset($_SESSION['prompt_8_string']);
unset($_SESSION['prompt_9_string']);
unset($_SESSION['prompt_10_string']);

unset($_SESSION['prompt_bottom_string']);

unset($_SESSION['prompt_top_id']);
unset($_SESSION['prompt_1_id']);
unset($_SESSION['prompt_2_id']);
unset($_SESSION['prompt_3_id']);
unset($_SESSION['prompt_4_id']);
unset($_SESSION['prompt_5_id']);
unset($_SESSION['prompt_6_id']);
unset($_SESSION['prompt_7_id']);
unset($_SESSION['prompt_8_id']);
unset($_SESSION['prompt_9_id']);
unset($_SESSION['prompt_10_id']);
unset($_SESSION['prompt_bottom_id']);

$sql  = "	SELECT * FROM all_prompts ";
$sql .= "	WHERE primary_folder = '".mysqli_real_escape_string($conn, $_GET['primary_folder'])."'	";
	
//What is below is what this was... but it ended up actually missing out on calculating the difference between tertiary_folder = 'item' and not...
//therefore it's just here as a little warning/reminder for the future now.
//CR 3.7.20	
//	if($_GET['secondary_folder'] != ''){$sql 	.= "AND	secondary_folder = 	'".mysqli_real_escape_string($conn, $_GET['secondary_folder'])."'";}
//	if($_GET['tertiary_folder']  != ''){$sql 	.= "AND	tertiary_folder = 	'".mysqli_real_escape_string($conn, $_GET['tertiary_folder'])."'";}
	
		
$sql .= "	AND	secondary_folder = '".mysqli_real_escape_string($conn, $_GET['secondary_folder'])."'";



//CR 5.8.20 some crude hacking here to make activieswork as three layers deep and messy for some reason i can't quite tell right now	
if($_GET['secondary_folder'] == 'activities'){
	$sql 	.= "AND	tertiary_folder = 	'".mysqli_real_escape_string($conn, tertiary_folders_name())."'";

	if($_GET['tertiary_folder'] == 'item'){	$sql 	.= "AND	quaternary_folder = 	'".mysqli_real_escape_string($conn, quarternary_folders_name())."'";}
	else{									$sql 	.= "AND	quaternary_folder <> 	'item'";}
}
else{
	if(isset($_GET['tertiary_folder'])){
		$sql 	.= "AND	tertiary_folder = 	'".mysqli_real_escape_string($conn, $_GET['tertiary_folder'])."'";
	}
}	
	
	
	
	
	$sql 	.= "AND	estimates_questions <> 'yes'";	
	
	
	
		
	
	//minor error here in technology 
	//related directly to what happens when nothing is found in the function to find the quaternary folder within the file
	///components/functions/url_and_folder_functions.php
//	if($_SESSION['quaternary_folder'] != ''){ $sql .= " AND	quaternary_folder = 	'".$_SESSION['quaternary_folder']."' ";}	
//	$sql .= " AND quaternary_folder = '".$_SESSION['quaternary_folder']."' ";
$sql .=	" ORDER BY selection_from_views_ratio DESC";
	
	
//echo $sql;	
//exit();
	
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

$result = mysqli_query($conn, $sql);

$i = 0;
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	if($i <= 3){
		$prompt_ids_to_randomise[$i] = $row['prompt_id'];
	}

	if($i > 3){
		$not_top_three[$i] = $row['prompt_id'];
	}	
$i++;
}




//will randomise keys starting at 0 hence why the for loop below moves the way it does
shuffle($not_top_three);

for($j = 0; $j <= 4; $j++){
	$prompt_ids_to_randomise[$j + 4] = $not_top_three[$j];
}



//then randomise pull out the actual prompts and align
//now we have all the prompt_ids... we just need to go through the process of pulling out the right ones and storing appropriately
//shuffle($prompt_ids_to_randomise);

$sql = "SELECT * FROM all_prompts 
		WHERE ";


for($count = 0; $count <= 9; $count ++){	
	if(		isset($prompt_ids_to_randomise[$count])		){ $sql .= " prompt_id = '".mysqli_real_escape_string($conn, $prompt_ids_to_randomise[0])."'";
		if(	isset($prompt_ids_to_randomise[$count + 1])	&& $count != 9){ $sql .= " OR ";}
		}	
}

/* 	What's left of the old one
		prompt_id = '".mysqli_real_escape_string($conn, $prompt_ids_to_randomise[0])."' OR 
				prompt_id = '".mysqli_real_escape_string($conn, $prompt_ids_to_randomise[1])."' OR 
				prompt_id = '".mysqli_real_escape_string($conn, $prompt_ids_to_randomise[2])."' OR 
				prompt_id = '".mysqli_real_escape_string($conn, $prompt_ids_to_randomise[3])."' OR 
				prompt_id = '".mysqli_real_escape_string($conn, $prompt_ids_to_randomise[4])."' OR 
				prompt_id = '".mysqli_real_escape_string($conn, $prompt_ids_to_randomise[5])."' OR 
				prompt_id = '".mysqli_real_escape_string($conn, $prompt_ids_to_randomise[6])."' OR 
				prompt_id = '".mysqli_real_escape_string($conn, $prompt_ids_to_randomise[7])."' OR 
				prompt_id = '".mysqli_real_escape_string($conn, $prompt_ids_to_randomise[8])."' OR 
				prompt_id = '".mysqli_real_escape_string($conn, $prompt_ids_to_randomise[9])."'";
*/

$result = mysqli_query($conn, $sql);
$count = 0;
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

	if($row['prompt_id'] == $prompt_ids_to_randomise[$count]){
		$z = $count + 1;
		$_SESSION['prompt_'.$z.'_string'] 	= $row['prompt'];
		$_SESSION['prompt_'.$z.'_id'] 		= $row['prompt_id'];
	}

	$count ++;
/*	AGAIN WHAT'S LEFT OF THE OLD ONE
	if($row['prompt_id'] == $prompt_ids_to_randomise[1]){
		$z = 2;
		$_SESSION['prompt_'.$z.'_string'] 	= $row['prompt'];
		$_SESSION['prompt_'.$z.'_id'] 		= $row['prompt_id'];
	}
	if($row['prompt_id'] == $prompt_ids_to_randomise[2]){
		$z = 3;
		$_SESSION['prompt_'.$z.'_string'] 	= $row['prompt'];
		$_SESSION['prompt_'.$z.'_id'] 		= $row['prompt_id'];
	}
	if($row['prompt_id'] == $prompt_ids_to_randomise[3]){
		$z = 4;
		$_SESSION['prompt_'.$z.'_string'] 	= $row['prompt'];
		$_SESSION['prompt_'.$z.'_id'] 		= $row['prompt_id'];
	}
	if($row['prompt_id'] == $prompt_ids_to_randomise[4]){
		$z = 5;
		$_SESSION['prompt_'.$z.'_string'] 	= $row['prompt'];
		$_SESSION['prompt_'.$z.'_id'] 		= $row['prompt_id'];
	}
	if($row['prompt_id'] == $prompt_ids_to_randomise[5]){
		$z = 6;
		$_SESSION['prompt_'.$z.'_string'] 	= $row['prompt'];
		$_SESSION['prompt_'.$z.'_id'] 		= $row['prompt_id'];
	}
	if($row['prompt_id'] == $prompt_ids_to_randomise[6]){
		$z = 7;
		$_SESSION['prompt_'.$z.'_string'] 	= $row['prompt'];
		$_SESSION['prompt_'.$z.'_id'] 		= $row['prompt_id'];
	}
	if($row['prompt_id'] == $prompt_ids_to_randomise[7]){
		$z = 8;
		$_SESSION['prompt_'.$z.'_string'] 	= $row['prompt'];
		$_SESSION['prompt_'.$z.'_id'] 		= $row['prompt_id'];
	}
	if($row['prompt_id'] == $prompt_ids_to_randomise[8]){
		$z = 9;
		$_SESSION['prompt_'.$z.'_string'] 	= $row['prompt'];
		$_SESSION['prompt_'.$z.'_id'] 		= $row['prompt_id'];
	}
	if($row['prompt_id'] == $prompt_ids_to_randomise[9]){
		$z = 10;
		$_SESSION['prompt_'.$z.'_string'] 	= $row['prompt'];
		$_SESSION['prompt_'.$z.'_id'] 		= $row['prompt_id'];
	}
*/


}







	














?>