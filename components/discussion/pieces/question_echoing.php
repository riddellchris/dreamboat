<?php
if(!isset($_SESSION)){session_start();}

/*
$sql = "SELECT * FROM auto_coach_string_response_and_folder_suggestions 
	WHERE 	found_in_primary_folder 	= '".$_SESSION['primary_folder']."'
	AND	found_in_secondary_folder 	= '".$_SESSION['secondary_folder']."'
	AND	found_in_tertiary_folder 	= '".$_SESSION['tertiary_folder']."'
	ORDER BY string_length DESC";*/


/*	
$sql = "SELECT * FROM auto_coach_string_response_and_folder_suggestions 
	ORDER BY string_length DESC";	
	
	
require_once $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);


$number_of_db_matches_with_this_input = 0;
unset($array_of_prompt_ids_that_match);
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

	//if($row['string'] == "I'm tired"){echo $_SESSION['users_latest_discussion_input'];echo $row['string']; }

	//now we need to run two tests
	//one is the string within the response from the user
	
	//this second one isn't built just yet though
	//the other is have we already got that string and if so we must skip ahead
	if (stripos(stripslashes($_SESSION['users_latest_discussion_input']), stripslashes($row['string'])) !== false) {
	    $array_of_prompt_ids_that_match[$number_of_db_matches_with_this_input] = $row['prompt_id'];	
	    $number_of_db_matches_with_this_input = $number_of_db_matches_with_this_input + 1;





	}
}

unset($_SESSION['users_latest_discussion_input']);
///*
//echo 'number'.$number_of_db_matches_with_this_input;
//exit();
//


//$number_of_results = mysqli_num_rows($result);

//really shit code to be honest here but it is what it is now....
if($number_of_db_matches_with_this_input == 1){
	//echo '11';
	$_SESSION['prompt_6_string'] = $_SESSION['prompt_5_string'];
	$_SESSION['prompt_5_string'] = $_SESSION['prompt_4_string'];
	$_SESSION['prompt_4_string'] = $_SESSION['prompt_3_string'];
	$_SESSION['prompt_3_string'] = $_SESSION['prompt_2_string'];
	$_SESSION['prompt_2_string'] = $_SESSION['prompt_1_string'];
	//$_SESSION['prompt_1_string'] = $_SESSION['prompt_5_string'];
	
	$_SESSION['prompt_6_id'] = $_SESSION['prompt_5_id'];
	$_SESSION['prompt_5_id'] = $_SESSION['prompt_4_id'];
	$_SESSION['prompt_4_id'] = $_SESSION['prompt_3_id'];
	$_SESSION['prompt_3_id'] = $_SESSION['prompt_2_id'];
	$_SESSION['prompt_2_id'] = $_SESSION['prompt_1_id'];
	//$_SESSION['prompt_1_id'] = $_SESSION['prompt_5_id'];
}
if($number_of_db_matches_with_this_input == 2){
	$_SESSION['prompt_6_string'] = $_SESSION['prompt_4_string'];
	$_SESSION['prompt_5_string'] = $_SESSION['prompt_3_string'];
	$_SESSION['prompt_4_string'] = $_SESSION['prompt_2_string'];
	$_SESSION['prompt_3_string'] = $_SESSION['prompt_1_string'];
	//$_SESSION['prompt_2_string'] = $_SESSION['prompt_1_string'];
	//$_SESSION['prompt_1_string'] = $_SESSION['prompt_5_string'];
	
	$_SESSION['prompt_6_id'] = $_SESSION['prompt_4_id'];
	$_SESSION['prompt_5_id'] = $_SESSION['prompt_3_id'];
	$_SESSION['prompt_4_id'] = $_SESSION['prompt_2_id'];
	$_SESSION['prompt_3_id'] = $_SESSION['prompt_1_id'];
	//$_SESSION['prompt_2_id'] = $_SESSION['prompt_1_id'];
	//$_SESSION['prompt_1_id'] = $_SESSION['prompt_5_id'];
}
if($number_of_db_matches_with_this_input == 3){
	$_SESSION['prompt_6_string'] = $_SESSION['prompt_3_string'];
	$_SESSION['prompt_5_string'] = $_SESSION['prompt_2_string'];
	$_SESSION['prompt_4_string'] = $_SESSION['prompt_1_string'];
	//$_SESSION['prompt_3_string'] = $_SESSION['prompt_2_string'];
	//$_SESSION['prompt_2_string'] = $_SESSION['prompt_1_string'];
	//$_SESSION['prompt_1_string'] = $_SESSION['prompt_5_string'];
	
	$_SESSION['prompt_6_id'] = $_SESSION['prompt_3_id'];
	$_SESSION['prompt_5_id'] = $_SESSION['prompt_2_id'];
	$_SESSION['prompt_4_id'] = $_SESSION['prompt_1_id'];
	//$_SESSION['prompt_3_id'] = $_SESSION['prompt_2_id'];
	//$_SESSION['prompt_2_id'] = $_SESSION['prompt_1_id'];
	//$_SESSION['prompt_1_id'] = $_SESSION['prompt_5_id'];
}
if($number_of_db_matches_with_this_input == 4){
	$_SESSION['prompt_6_string'] = $_SESSION['prompt_2_string'];
	$_SESSION['prompt_5_string'] = $_SESSION['prompt_1_string'];
	//$_SESSION['prompt_4_string'] = $_SESSION['prompt_3_string'];
	//$_SESSION['prompt_3_string'] = $_SESSION['prompt_2_string'];
	//$_SESSION['prompt_2_string'] = $_SESSION['prompt_1_string'];
	//$_SESSION['prompt_1_string'] = $_SESSION['prompt_5_string'];
	
	$_SESSION['prompt_6_id'] = $_SESSION['prompt_2_id'];
	$_SESSION['prompt_5_id'] = $_SESSION['prompt_1_id'];
	//$_SESSION['prompt_4_id'] = $_SESSION['prompt_3_id'];
	//$_SESSION['prompt_3_id'] = $_SESSION['prompt_2_id'];
	//$_SESSION['prompt_2_id'] = $_SESSION['prompt_1_id'];
	//$_SESSION['prompt_1_id'] = $_SESSION['prompt_5_id'];
}
if($number_of_db_matches_with_this_input == 5){
	$_SESSION['prompt_6_string'] = $_SESSION['prompt_1_string'];
	//$_SESSION['prompt_5_string'] = $_SESSION['prompt_4_string'];
	//$_SESSION['prompt_4_string'] = $_SESSION['prompt_3_string'];
	//$_SESSION['prompt_3_string'] = $_SESSION['prompt_2_string'];
	//$_SESSION['prompt_2_string'] = $_SESSION['prompt_1_string'];
	//$_SESSION['prompt_1_string'] = $_SESSION['prompt_5_string'];
	
	$_SESSION['prompt_6_id'] = $_SESSION['prompt_1_id'];
	//$_SESSION['prompt_5_id'] = $_SESSION['prompt_4_id'];
	//$_SESSION['prompt_4_id'] = $_SESSION['prompt_3_id'];
	//$_SESSION['prompt_3_id'] = $_SESSION['prompt_2_id'];
	//$_SESSION['prompt_2_id'] = $_SESSION['prompt_1_id'];
	//$_SESSION['prompt_1_id'] = $_SESSION['prompt_5_id'];
}
if($number_of_db_matches_with_this_input == 6){
	//$_SESSION['prompt_6_string'] = $_SESSION['prompt_5_string'];
	//$_SESSION['prompt_5_string'] = $_SESSION['prompt_4_string'];
	//$_SESSION['prompt_4_string'] = $_SESSION['prompt_3_string'];
	//$_SESSION['prompt_3_string'] = $_SESSION['prompt_2_string'];
	//$_SESSION['prompt_2_string'] = $_SESSION['prompt_1_string'];
	//$_SESSION['prompt_1_string'] = $_SESSION['prompt_5_string'];
	
	//$_SESSION['prompt_6_id'] = $_SESSION['prompt_5_id'];
	//$_SESSION['prompt_5_id'] = $_SESSION['prompt_4_id'];
	//$_SESSION['prompt_4_id'] = $_SESSION['prompt_3_id'];
	//$_SESSION['prompt_3_id'] = $_SESSION['prompt_2_id'];
	//$_SESSION['prompt_2_id'] = $_SESSION['prompt_1_id'];
	//$_SESSION['prompt_1_id'] = $_SESSION['prompt_5_id'];
}
*/
$result = mysqli_query($conn, $sql);
$prompt_number = 1;
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

	//if prompt_id is found in the array of matching prompts.... then...
	if(in_array($row['prompt_id'], $array_of_prompt_ids_that_match)){
		$_SESSION['prompt_'.$prompt_number] = $row['next_best_prompt'];
		$prompt_number = $prompt_number + 1;
	}
}


	require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/safely_replacing_apostrophies_function.php";	
	//echo "'>";
		
	//echo $_SESSION['prompt_1'];
	
	$_SESSION['prompt_1_string'] = safely_remove_apostrophies($_SESSION['prompt_1_string']);
	//echo $_SESSION['prompt_1'];
	//exit();
	$_SESSION['prompt_2_string'] = safely_remove_apostrophies($_SESSION['prompt_2_string']);
	$_SESSION['prompt_3_string'] = safely_remove_apostrophies($_SESSION['prompt_3_string']);
	$_SESSION['prompt_4_string'] = safely_remove_apostrophies($_SESSION['prompt_4_string']);
	$_SESSION['prompt_5_string'] = safely_remove_apostrophies($_SESSION['prompt_5_string']);
	$_SESSION['prompt_6_string'] = safely_remove_apostrophies($_SESSION['prompt_6_string']);
	$_SESSION['prompt_7_string'] = safely_remove_apostrophies($_SESSION['prompt_7_string']);
	$_SESSION['prompt_8_string'] = safely_remove_apostrophies($_SESSION['prompt_8_string']);
	$_SESSION['prompt_9_string'] = safely_remove_apostrophies($_SESSION['prompt_9_string']);
	$_SESSION['prompt_10_string'] = safely_remove_apostrophies($_SESSION['prompt_10_string']);

echo "
<div style='width:100%;text-align: left; padding:8px 2px;max-width: 1100px;margin-left:auto;margin-right:auto;margin-top: 15px;'>
	<div style='display:inline-block;'>";

for($i = 1; $i <= 6; $i++){

	$sql = "
		UPDATE all_prompts 
		SET views = views + 1
		WHERE prompt_id = '".$_SESSION['prompt_'.$i.'_id']."'";
	
	mysqli_query($conn, $sql);

}





//ultimately the colors of these and even sizes should represent their certainty // rank/ predicted importance//
//"tag cloud like" etc
//like the rest of all this --- more visual languages need to be built here

$title = " title = 'Select a prompt to directly answer a question&#10;&#10;Improve your performance today&#10And improve your data quality for tomorrow too'";


echo "
<style>
.standard_prompt_links{		color:#4332ff;}         /* Unvisited link  */
.standard_prompt_links:visited {	color:#4332ff;} /* Visited link    */
.standard_prompt_links:hover {	color:#4332ff;}   /* Mouse over link */
.standard_prompt_links:active {	color:#4332ff;}  /* Selected link   */

.ask_client_for_response{color:#cecece;}
.ask_client_for_response:hover{color:red;}

</style>";
$classes = " class = 'standard_prompt_links' ";


function ask_client_for_response($prompt_id){
echo "</a>&nbsp;&nbsp;&nbsp; <a href='/components/discussion/ask_for_response.php?prompt_id=".$prompt_id."' class='ask_client_for_response'>>>>Ask your client to respond to this question</a>";

}

	if($_SESSION['prompt_1_string'] != ''){
	
		//this line here is a big different 
		//echo "<span style='color:#281e96;font-family:helvetica;text-transform:uppercase;'>SELECT A QUESTION TO PROGRESS ASAP</span><br>";
		echo "<a ".$classes." href='/components/discussion/prompts/select.php?prompt_id=".$_SESSION['prompt_1_id']."&".url_folder_get_string_creation()."' ".$title.">";
		echo $_SESSION['prompt_1_string'];
		//if($_SESSION['dreamboat_crew'] == 'yes'){ask_client_for_response($_SESSION['prompt_1_id']);}
		echo "</a><br>";
		}
	if($_SESSION['prompt_2_string'] != ''){	
		echo "<a ".$classes." href='/components/discussion/prompts/select.php?prompt_id=".$_SESSION['prompt_2_id']."&".url_folder_get_string_creation()."' ".$title.">";
		echo $_SESSION['prompt_2_string'];
		//if($_SESSION['dreamboat_crew'] == 'yes'){ask_client_for_response($_SESSION['prompt_1_id']);}
		echo "</a><br>";
		}
	if($_SESSION['prompt_3_string'] != ''){	
		echo "<a ".$classes." href='/components/discussion/prompts/select.php?prompt_id=".$_SESSION['prompt_3_id']."&".url_folder_get_string_creation()."' ".$title.">";
		echo $_SESSION['prompt_3_string'];
		//if($_SESSION['dreamboat_crew'] == 'yes'){ask_client_for_response($_SESSION['prompt_1_id']);}
		echo "</a><br>";
		}
	if($_SESSION['prompt_4_string'] != ''){	
		echo "<a ".$classes." href='/components/discussion/prompts/select.php?prompt_id=".$_SESSION['prompt_4_id']."&".url_folder_get_string_creation()."' ".$title.">";
		echo $_SESSION['prompt_4_string'];
		//if($_SESSION['dreamboat_crew'] == 'yes'){ask_client_for_response($_SESSION['prompt_1_id']);}
		echo "</a><br>";
		}

if(	$_GET['tertiary_folder'] 	== 'item' 	OR
	$_GET['quarternary_folder'] == 'item'){
	
	
	//find the first prompt
	$sql = "SELECT * FROM all_prompts 
		WHERE estimates_questions = 'yes'
		AND primary_folder 	= '".$_GET['primary_folder']."'
		AND secondary_folder 	= '".$_GET['secondary_folder']."'";
	$result = mysqli_query($conn, $sql);
	
	$results = mysqli_num_rows($result);

	//if there is one then echo the whole lot otherwise print nothing	
	if($results > 0){
	
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);	

		
		
		
		
		
		
		
		
		
		$requirement_style = " style='color:red;' ";
		
		echo "<div style='color:red;'>";
			echo "<br>";
			echo "<a ".$classes." ".$requirement_style." href='/components/discussion/prompts/select.php?prompt_id=".$row['prompt_id']."&".url_folder_get_string_creation()."' ".$title.">";
			echo $row['prompt'];
			////if($_SESSION['dreamboat_crew'] == 'yes'){ask_client_for_response($row['prompt_id']);}
			echo "</a><br>";
			
			echo "<a ".$classes." ".$requirement_style." href='/components/discussion/prompts/select.php?prompt_id=45847&".url_folder_get_string_creation()."' ".$title.">";
			echo "And how often is that time required?";
			//if($_SESSION['dreamboat_crew'] == 'yes'){ask_client_for_response(45847);}
			echo "</a><br>";
			
if(	$_GET['primary_folder'] != 'management' &&
	$_GET['primary_folder'] != 'marketing'){			
	if($_SESSION['viewing_client_work_solo_yes_no'] == 'yes'){			
			echo "<a ".$classes." ".$requirement_style." href='/components/discussion/prompts/select.php?prompt_id=45848&".url_folder_get_string_creation()."' ".$title.">";
			echo "How much can you earn from completing and/or achieving this?";
			//if($_SESSION['dreamboat_crew'] == 'yes'){ask_client_for_response(45848);}
			echo "</a><br>";
			}
	else{
			echo "<a ".$classes." ".$requirement_style." href='/components/discussion/prompts/select.php?prompt_id= 45884&".url_folder_get_string_creation()."' ".$title.">";
			echo "How much can you bring in from completing and/or achieving this?";
			//if($_SESSION['dreamboat_crew'] == 'yes'){ask_client_for_response(45884);}
			echo "</a><br>";
			}
			echo "<a ".$classes." ".$requirement_style." href='/components/discussion/prompts/select.php?prompt_id=45849&".url_folder_get_string_creation()."' ".$title.">";
			echo "What would it cost to delegate?";
			//if($_SESSION['dreamboat_crew'] == 'yes'){ask_client_for_response(45849);}
			echo "</a><br>";			
			
			
			
}



			
			echo "<a ".$classes." ".$requirement_style." href='/components/discussion/prompts/select.php?prompt_id=45883&".url_folder_get_string_creation()."' ".$title.">";
			echo "How critical is it?";
			//if($_SESSION['dreamboat_crew'] == 'yes'){ask_client_for_response(45883);}
			echo "</a><br>";			
				
		echo "</div>";
	
	}
}
















//I would like 4 to actually show - right now that's not exactly happening
//CR 17.06.20

if($_SESSION['dreamboat_crew'] == 'yes'){	

echo "
<style>
.smart_prompt_links{		color:#8097ff;}         /* Unvisited link  */
.smart_prompt_links:visited {	color:#8097ff;} /* Visited link    */
.smart_prompt_links:hover {	color:#8097ff;}   /* Mouse over link */
.smart_prompt_links:active {	color:#8097ff;}  /* Selected link   */

</style>";








$classes = " class = 'smart_prompt_links' ";




	if($_SESSION['prompt_5_string'] != ''){	
	
	echo "<span class='pilots_eyes_only_font'>
	AI prompts - only seen and added by Pilots
	</span><br>";

	
	
		echo "<a ".$classes." href='/components/discussion/prompts/select.php?prompt_id=".$_SESSION['prompt_5_id']."&".url_folder_get_string_creation()."' ".$title.">";
		echo $_SESSION['prompt_5_string'];
		//if($_SESSION['dreamboat_crew'] == 'yes'){ask_client_for_response($_SESSION['prompt_5_id']);}
		echo "</a><br>";
		}
	
	
//CR 15.6.20
//there is more work to be done here not sure that I can do it just yet
//in short pilots should have a longer list and probably some basic questions 2-3 that are used every time with some situationally appropriate questions...
//again more work and thinking can be put in here.
	
$title = "title = 'These prompts are not visible by the clients only Pilots and other Dreamboat Crew'";
	

if($_SESSION['prompt_6_string'] != ''){	
	echo "<a ".$classes." href='/components/discussion/prompts/select.php?prompt_id=".$_SESSION['prompt_6_id']."&".url_folder_get_string_creation()."' ".$title.">";
	echo $_SESSION['prompt_6_string'];
	//if($_SESSION['dreamboat_crew'] == 'yes'){ask_client_for_response($_SESSION['prompt_6_id']);}
	echo "</a><br>";
	}
if($_SESSION['prompt_7_string'] != ''){	
	echo "<a ".$classes." href='/components/discussion/prompts/select.php?prompt_id=".$_SESSION['prompt_7_id']."&".url_folder_get_string_creation()."' ".$title.">";
	echo $_SESSION['prompt_7_string'];
	//if($_SESSION['dreamboat_crew'] == 'yes'){ask_client_for_response($_SESSION['prompt_7_id']);}
	echo "</a><br>";
	}
if($_SESSION['prompt_8_string'] != ''){	
	echo "<a ".$classes." href='/components/discussion/prompts/select.php?prompt_id=".$_SESSION['prompt_8_id']."&".url_folder_get_string_creation()."' ".$title.">";
	echo $_SESSION['prompt_8_string'];
	//if($_SESSION['dreamboat_crew'] == 'yes'){ask_client_for_response($_SESSION['prompt_8_id']);}
	echo "</a><br>";
	}
if($_SESSION['prompt_9_string'] != ''){	
	echo "<a ".$classes." href='/components/discussion/prompts/select.php?prompt_id=".$_SESSION['prompt_9_id']."&".url_folder_get_string_creation()."' ".$title.">";
	echo $_SESSION['prompt_9_string'];
	//if($_SESSION['dreamboat_crew'] == 'yes'){ask_client_for_response($_SESSION['prompt_9_id']);}
	echo "</a><br>";
	}
if($_SESSION['prompt_10_string'] != ''){	
	echo "<a ".$classes." href='/components/discussion/prompts/select.php?prompt_id=".$_SESSION['prompt_10_id']."&".url_folder_get_string_creation()."' ".$title.">";
	echo $_SESSION['prompt_10_string'];
	//if($_SESSION['dreamboat_crew'] == 'yes'){ask_client_for_response($_SESSION['prompt_10_id']);}
	echo "</a><br>";
	}
}


echo "
	</div>
</div>";


?>