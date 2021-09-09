<?php
if(!isset($_SESSION)){session_start();}

//echo $_SESSION['next_prompt_id'];

//get out the submission process for the next prompt id.
$sql = "SELECT * FROM flow_prompts WHERE prompt_id = '".$_SESSION['next_prompt_id']."'";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

echo "<form name='flow_form' method ='post' action='/flow/submit.php'>";
echo "<div class ='prompt-font' style='width:100%;text-align:center;'>";
if(	$row['prompt'] == 'How are you going right now?' &&
	is_numeric(strpos($_SERVER['REQUEST_URI'],'/focus/')) == 1){echo "Before we look at your feed....<br>Let's find a little focus:<br>";}
echo $row['prompt']."</div>";

if($row['standard_input'] 		== 'on'){require $_SERVER['DOCUMENT_ROOT']."/flow/pieces/inputs/standard_input.php";}
if($row['textarea'] 			== 'on'){require $_SERVER['DOCUMENT_ROOT']."/flow/pieces/inputs/textarea.php";}
if($row['progress_plus_why_how'] 	== 'on'){require $_SERVER['DOCUMENT_ROOT']."/flow/pieces/inputs/progress_plus_why_how_2_textareas.php";}
if($row['privacy_set_to_private'] 	== 'on' OR
   $row['privacy_set_to_public'] 	== 'on' OR
   $row['privacy_always_private'] 	== 'on'){
	echo "<div id='flow_box_privacy_div'>";
		if($row['privacy_set_to_private'] 	== 'on'){require $_SERVER['DOCUMENT_ROOT']."/flow/pieces/privacy/marked_private.php";}
		if($row['privacy_set_to_public'] 	== 'on'){require $_SERVER['DOCUMENT_ROOT']."/flow/pieces/privacy/marked_public.php";}
		if($row['privacy_always_private'] 	== 'on'){require $_SERVER['DOCUMENT_ROOT']."/flow/pieces/privacy/marked_private_always.php";}
	echo "</div>";
}
/*if(	$row['7_point_scale_plus_3'] 	!= '' AND 
	$row['7_point_scale_plus_2'] 	!= '' AND
	$row['7_point_scale_plus_1'] 	!= '' AND
	$row['7_point_scale_midpoint'] 	!= '' AND
	$row['7_point_scale_minus_1'] 	!= '' AND
	$row['7_point_scale_minus_2'] 	!= '' AND
	$row['7_point_scale_minus_3'] 	!= ''){require $_SERVER['DOCUMENT_ROOT']."/flow/pieces/7_point_scale/index.php";} */
if($row['11_point_scale_on'] 		== 'on'){require $_SERVER['DOCUMENT_ROOT']."/flow/pieces/11_point_scale/index.php";}
if($row['zero_to_ten'] 			== 'on'){require $_SERVER['DOCUMENT_ROOT']."/flow/pieces/zero_to_ten/index.php";}
if($row['binary_selection'] 		== 'on'){require $_SERVER['DOCUMENT_ROOT']."/flow/pieces/5_by_5/index.php";}
if($row['dream_category'] 		== 'on'){require $_SERVER['DOCUMENT_ROOT']."/flow/pieces/selects/dream_types.php";}
if($row['binary_selection_off']		!= '' AND
   $row['binary_selection_on']		!= ''  ){
	echo "<div id='flow_box_binary_div'>";
   		require $_SERVER['DOCUMENT_ROOT']."/flow/pieces/binary/marked_on.php";
 	echo "</div>";}
if($row['standard_submit'] 		== 'on'){require $_SERVER['DOCUMENT_ROOT']."/flow/pieces/submits/standard.php";}
if($row['find_focus_submit'] 		== 'on'){require $_SERVER['DOCUMENT_ROOT']."/flow/pieces/submits/find_focus.php";}


echo "</form>";
?>