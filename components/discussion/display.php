<?php
if(!isset($_SESSION)){session_start();}

if($_GET['primary_folder'] != 'messages'){
	echo "<div style='font-family:Comfortaa;'>";
	
		if(!isset($_SESSION['selected_prompt_text'])){
			require_once $_SERVER['DOCUMENT_ROOT']."/components/discussion/pieces/initial_questions.php";
			require_once $_SERVER['DOCUMENT_ROOT']."/components/discussion/pieces/question_echoing.php";
		}
		else{
		
		//make these left and right
		echo "<div style='width:100%;text-align:center;color:#cecece;'>";
			echo "respond or ";
		
			echo "<a style='color:orange;' href='/components/discussion/prompts/unselect.php'>reset</a>";
		echo "</div>";
		}
		
	echo "</div>";	
}

require_once $_SERVER['DOCUMENT_ROOT']."/components/discussion/pieces/top_of_form.php";
require_once $_SERVER['DOCUMENT_ROOT']."/components/discussion/pieces/placeholder_creation.php";
require_once $_SERVER['DOCUMENT_ROOT']."/components/discussion/pieces/end_of_form.php";
require_once $_SERVER['DOCUMENT_ROOT']."/components/discussion/pieces/view_past_discussion.php";
?>