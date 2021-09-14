<?php
if(!isset($_SESSION)){session_start();}

//get out the submission process for the next prompt id.
$sql = "SELECT * FROM flow_prompts WHERE prompt_id = '".$_SESSION['next_prompt_id']."'";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$flow_row = mysqli_fetch_array($result, MYSQLI_ASSOC);

echo "<form name='flow_form' method ='post' action='/components/inputs/submit.php' style='margin-top:10px;'>";
echo "<div class ='prompt-font' style='width:100%;text-align:center;'>";
if(	$flow_row['prompt'] == 'how are you going right now?' &&
	is_numeric(strpos($_SERVER['REQUEST_URI'],'/focus/')) == 1){echo "BEFORE WE GET TO YOUR FEED..<br>";}
$prompt = $flow_row['prompt'];
if(stripos($prompt,'[category]')){$prompt = str_replace('[category]'	, $_SESSION['progress_plus_how_why_category'], 	$prompt);}
if(stripos($prompt,'[rating]')	){$prompt = str_replace('[rating]'	, $_SESSION['progress_plus_how_why_rating'], 	$prompt);}
echo $prompt."</div>";

$_SESSION['last_prompt'] = $prompt;

if($flow_row['standard_input'] 		== 'on'){require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";}
if($flow_row['textarea'] 		== 'on'){require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/textarea.php";}
if($flow_row['progress_plus_why_how'] 	== 'on'){require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/progress_plus_why_how_2_textareas.php";}
/*
if($flow_row['privacy_section'] 	== 'on'){
	require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/privacy/initiation.php";
	require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/privacy/scripts.php";
	require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/privacy/styling.php";
	echo "<div id='inputs_box_privacy_div'>";
		if(!isset($_SESSION['flow_privacy'])){
		 	$sql 	= "SELECT * FROM user_privacy_settings WHERE user_id ='".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'";
			$result = mysqli_query($conn, $sql);
			$flow_row 	= mysqli_fetch_array($result, MYSQLI_ASSOC); 
			if($flow_row['default_flow_public'] == 'yes'){$_SESSION['flow_privacy'] = 'public';}
			if($flow_row['default_flow_public'] == 'no' ){$_SESSION['flow_privacy'] = 'private';}			
						
		}
		if($_SESSION['flow_privacy'] == 'private'){require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/privacy/marked_private.php";}
		if($_SESSION['flow_privacy'] == 'public' ){require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/privacy/marked_public.php";}		
	echo "</div>";
}	
*/
//var_dump($flow_row);
//echo $flow_row['blue_7_point_scale_original_scoring_on'];


if($flow_row['blue_7_point_scale_on'] 				== 'on'){require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/all_blue_5_point_scale/index.php";}
if($flow_row['blue_7_point_scale_reverse_on'] 			== 'on'){require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/all_blue_5_point_scale/reverse.php";}
if($flow_row['blue_7_point_scale_orginal_scoring_on'] 		== 'on'){require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/all_blue_5_point_scale/original.php";}
if($flow_row['11_point_scale_on'] 				== 'on'){require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/11_point_scale/index.php";}
if($flow_row['zero_to_ten'] 					== 'on'){require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/zero_to_ten/index.php";}
if($flow_row['binary_selection'] 				== 'on'){require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/5_by_5/index.php";}
if($flow_row['wheelhouse_category'] 				== 'on'){require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/wheelhouse_category.php";}
if($flow_row['mark_those_in_current_active_list_resolved'] 	== 'on'){require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/lists/mark_active_resolved/index.php";}

if($flow_row['wheelhouse_group_dream'] 		== 'on'){require $_SERVER['DOCUMENT_ROOT']."/components/inputs/wheelhouse/group/dream.php";}
if($flow_row['wheelhouse_group_goal'] 		== 'on'){require $_SERVER['DOCUMENT_ROOT']."/components/inputs/wheelhouse/group/goal.php";}
if($flow_row['wheelhouse_group_milestone'] 	== 'on'){require $_SERVER['DOCUMENT_ROOT']."/components/inputs/wheelhouse/group/milestone.php";}
if($flow_row['wheelhouse_group_issue'] 		== 'on'){require $_SERVER['DOCUMENT_ROOT']."/components/inputs/wheelhouse/group/issue.php";}
if($flow_row['wheelhouse_group_task'] 		== 'on'){require $_SERVER['DOCUMENT_ROOT']."/components/inputs/wheelhouse/group/task.php";}
if($flow_row['binary_selection_off']		!= '' AND
   $flow_row['binary_selection_on']		!= ''  ){
	echo "<div id='inputs_box_binary_div'>";
   		require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/binary/marked_on.php";
 	echo "</div>";}

if($_SESSION['show_submit_on_entry']   == 'yes'){
	if(is_numeric(strpos($_SERVER['REQUEST_URI'],'/focus/')) == 1){
		require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/submits/find_focus.php";
		}
	$_SESSION['show_submit_on_entry'] = 'no';}

if(	$flow_row['blue_7_point_scale_on'] 			!= 'on' &&
	$flow_row['blue_7_point_scale_reverse_on'] 		!= 'on'  &&
	$flow_row['blue_7_point_scale_original_scoring_on'] 	!= 'on' ){
//echo 'a'.$flow_row['standard_submit'].$flow_row['find_focus_submit']/'a';
if($flow_row['find_focus_submit'] 		== 'on'){require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/submits/find_focus.php";}
if($flow_row['standard_submit'] 		== 'on'){require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/submits/standard.php";}
if($flow_row['standard_submit_but_add_more'] 	== 'on'){require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/submits/standard_submit_but_add_more.php";}
if($flow_row['standard_submit_but_move_on'] 	== 'on'){require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/submits/standard_submit_but_move_on.php";}
if($flow_row['skip'] 				== 'on'){require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/submits/skip.php";}
}


echo "</form>";
?>