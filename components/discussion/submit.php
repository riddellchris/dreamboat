<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/functions/safely_replacing_apostrophies_function.php";	

//if 'adding a new prompt' has been done this will occur
require $_SERVER['DOCUMENT_ROOT']."/components/discussion/prompts/add_new.php";


if(
	(isset($_POST['textarea_input']) && !empty($_POST['textarea_input'])) OR    //standard discussion is used
	(isset($_POST['advice_textarea']) && !empty($_POST['advice_textarea']))		//pilots have used this area of the advice to set it appropriately
	){
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
		
	
	//this shouldn't really be displayed on here as a thing itself... this should really be stored as an array of some form in a database
	//therefore only on number / code is required to match against the prompts i do think that I planned this pre
	if(isset($_SESSION['prompt_1_string'])){$prompt_1 = safely_replace_apostrophies($_SESSION['prompt_1_string']);}
	if(isset($_SESSION['prompt_2_string'])){$prompt_2 = safely_replace_apostrophies($_SESSION['prompt_2_string']);}
	if(isset($_SESSION['prompt_3_string'])){$prompt_3 = safely_replace_apostrophies($_SESSION['prompt_3_string']);}
	if(isset($_SESSION['prompt_4_string'])){$prompt_4 = safely_replace_apostrophies($_SESSION['prompt_4_string']);}
	if(isset($_SESSION['prompt_5_string'])){$prompt_5 = safely_replace_apostrophies($_SESSION['prompt_5_string']);}
	if(isset($_SESSION['prompt_6_string'])){$prompt_6 = safely_replace_apostrophies($_SESSION['prompt_6_string']);}

	
	if($_SESSION['dreamboat_crew'] == 'yes'){$other_parties_id = $_SESSION['viewing_client_id'];}
	else{$other_parties_id = $_SESSION['pilots_id'];}
	
	//echo $_POST['textarea_input'];
	//echo "<br>";


	//CR 30.6.20//not sure why using this session variable but sure...
	if(isset($_POST['advice_textarea']) && !empty($_POST['advice_textarea'])){
		$_SESSION['users_latest_discussion_input'] = mysqli_real_escape_string($conn, $_POST['advice_textarea']);
	}
	if(isset($_POST['textarea_input']) && !empty($_POST['textarea_input'])){
		$_SESSION['users_latest_discussion_input'] = mysqli_real_escape_string($conn, $_POST['textarea_input']);
	}	
	
	//echo "<br>";
	
	//echo nl2br(stripslashes($_SESSION['users_latest_discussion_input'] ));
	//();


	if($_POST['quarternary_folder'] == 'item'){$quarternary_folder = 'item';}
	else{$quarternary_folder = '';}

//var_dump($_POST);

	
	$sql = "INSERT INTO discussion (
											primary_folder, 		     
											secondary_folder ";
	if(isset($_GET['tertiary_folder'])){		$sql .= ",tertiary_folder, 		";}	
	if(isset($_GET['quarternary_folder'])){		$sql .= ",quarternary_folder, 	";}							

	$sql .= "
					,related_id						   
					,to_user_id 			 
					,user_id 			     
					,comment ";
		if(isset($_SESSION['selected_prompt_text'])){
				$sql .= "responding_to_prepared_prompt  
					 ,prompt_answered
					 ,prompt_answered_id";
		}
		if(isset($_POST['advice_textarea'])){
				$sql .= "	,private_pilot_advice
					 		,private_pilot_advice_category
				";
		}
		if(isset($_POST['pilot_reasoning'])){		$sql .=  "	,reason_for_asking";}
		if(isset($_SESSION['prompt_1_string'])){	$sql .= "	,prompt_1	";} 
		if(isset($_SESSION['prompt_2_string'])){	$sql .= "	,prompt_2	";} 
		if(isset($_SESSION['prompt_3_string'])){	$sql .= "	,prompt_3	";} 
		if(isset($_SESSION['prompt_4_string'])){	$sql .= "	,prompt_4	";} 
		if(isset($_SESSION['prompt_5_string'])){	$sql .= "	,prompt_5	";} 
		if(isset($_SESSION['prompt_6_string'])){	$sql .= "	,prompt_6	";} 

		$sql .= "
					) 
		VALUES(			
					'".mysqli_real_escape_string($conn, $_POST['primary_folder'])."',
					'".mysqli_real_escape_string($conn, $_POST['secondary_folder'])."'";


		if(isset($_GET['tertiary_folder'])){		$sql .= ",'".mysqli_real_escape_string($conn, $_POST['tertiary_folder'])."'	";}
		if(isset($_GET['quarternary_folder'])){		$sql .= ",'".mysqli_real_escape_string($conn, $quarternary_folder)."'		";}
					
		$sql .= "
					,'".mysqli_real_escape_string($conn, $_POST['item_id'])."'							
					,'".mysqli_real_escape_string($conn, $other_parties_id)."'
					,'".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'
					,'".mysqli_real_escape_string($conn, $_SESSION['users_latest_discussion_input'])."'";
		if(isset($_SESSION['selected_prompt_text'])){
								$sql .= "'yes', 
									 ,'".$_SESSION['selected_prompt_text']."'
									, '".$_SESSION['selected_prompt_id']."'";
								}
		if(isset($_POST['advice_textarea'])){
								$sql .= " ,'yes' 
									  ,'".mysqli_real_escape_string($conn, $_GET['advice_category'])."'
								";
								}								
								
		if(isset($_POST['pilot_reasoning'])){		$sql .= ",'".mysqli_real_escape_string($conn, $_POST['pilot_reasoning'])."'	";}
		if(isset($_SESSION['prompt_1_string'])){	$sql .= ",'".mysqli_real_escape_string($conn, $prompt_1)."'";} 
		if(isset($_SESSION['prompt_2_string'])){	$sql .= ",'".mysqli_real_escape_string($conn, $prompt_2)."'";} 
		if(isset($_SESSION['prompt_3_string'])){	$sql .= ",'".mysqli_real_escape_string($conn, $prompt_3)."'";} 
		if(isset($_SESSION['prompt_4_string'])){	$sql .= ",'".mysqli_real_escape_string($conn, $prompt_4)."'";} 
		if(isset($_SESSION['prompt_5_string'])){	$sql .= ",'".mysqli_real_escape_string($conn, $prompt_5)."'";} 
		if(isset($_SESSION['prompt_6_string'])){	$sql .= ",'".mysqli_real_escape_string($conn, $prompt_6)."'";} 
					
		$sql .= ")";
//echo $sql;exit();

				
	$result = mysqli_query($conn, $sql);
	
	
	
	//create alert notification and send email iff required
	$notification_type = 'standard_discussion';
	require $_SERVER['DOCUMENT_ROOT']."/components/notifications_and_alerts/create_new_notification_and_alert.php";
}




require $_SERVER['DOCUMENT_ROOT']."/components/discussion/prompts/unselect.php";

/*
echo $_SESSION['users_latest_discussion_input'];
echo is_int(strpos($_SESSION['users_latest_discussion_input'], '@'));
exit();
*/

//if this goes through then it should now search for potential mentions from: $_SESSION['users_latest_discussion_input']
//this can get better and better in time - that's not a problem
if(is_int(strpos($_SESSION['users_latest_discussion_input'], '@')) == 1){

//	echo 'mention within';
	header("Location: /components/mentions/create_new/display.php");
	exit();

}
else{
	header("Location: ".$_SESSION['this_page']);
	exit();

}



