<?php
if(!isset($_SESSION)){session_start();}

require_once $_SERVER['DOCUMENT_ROOT']."/components/discussion/styling/index.php";

//when we are going for a more complex scenario this should be used but right now it's just not necessary

if(	$_GET['primary_folder'] == 'wellbeing'	OR
	$_GET['primary_folder'] == 'flow'){
	
	if(isset($_SESSION['change_auto_coach_folder_suggestion'])){
		echo "
		<div style='text-align:center;width:100%;font-family:Comfortaa;color:#4332ff;'>
			<a href =''>
				Click to move your thinking to <span style='color:red;'>".$_SESSION['change_auto_coach_folder_suggestion'].">></span>
			</a>
		</div>
		";
	}
	else{
		if($_GET['primary_folder'] == 'flow'){
			echo "
			<div style='text-align:center;width:100%;font-family:Comfortaa;color:#4332ff;'>
			Type to the AUTOPilot & press enter to move forward with speed
			</div>
			";
		}
	}	
}





echo "<form style='margin-top:20px;margin-bottom:0px;' action='/components/discussion/submit.php' method='post'>";

echo hidden_form_inputs_for_folders_and_items();

if($_SESSION['dreamboat_crew'] == 'yes' && 
  $_SESSION['viewing_client_id'] != $_SESSION['user_id'] &&
!isset($_SESSION['selected_prompt_text']) && $_GET['primary_folder'] != 'messages'){
echo "
<style>
	.new_prompt_from_pilot{
		width:100%;
		max-width:1100px;
		margin: auto; 
		font-family: Kalam; 
		color:#4332ff;
		margin-top: 15px;
		margin-bottom: -5px;
	}
	.new_prompt_from_pilot:focus{
		background-color:red;
		color: #cecece;

	}
	.new_prompt_from_pilot::-webkit-input-placeholder { /* Edge */
	  color: #cecece;
	  font-weight:800;
	}
	.new_prompt_from_pilot:-ms-input-placeholder { /* Internet Explorer 10-11 */
	  color: #cecece;
	}
	.new_prompt_from_pilot::placeholder {
	  color: #cecece;
	}



	.new_prompt_reasoning{
		width:100%;
		max-width:1100px;
		margin: auto; 
		font-family:Corradine Handwriting; 
		color:#4332ff;
		margin-top: 15px;
		margin-bottom: 15px;
		text-align: left;
	}
	
	.new_prompt_from_pilot::-webkit-input-placeholder { /* Edge */
	  color: #cecece;
	  font-weight:800;
	  font-family:	Kalam;
	}
	.new_prompt_from_pilot:-ms-input-placeholder { /* Internet Explorer 10-11 */
	  color: #cecece;
	 font-family:	Kalam;
	}
	.new_prompt_from_pilot::placeholder {
	  color: #cecece;
	  font-family:	Kalam;
	}








	
	.new_prompt_reasoning::-webkit-input-placeholder { /* Edge */


	  font-family:	Kalam;
	}
	.new_prompt_reasoning:-ms-input-placeholder { /* Internet Explorer 10-11 */

	 font-family:	Kalam;
	}
	.new_prompt_reasoning::placeholder {

	  font-family:	Kalam;
	}
</style>


";




	echo "<div style = 'text-align:center;'>";
	echo "<input name='new_prompt' class='new_prompt_from_pilot' placeholder='SEEN BY PILOTS ONLY - If asking a new question - write it here'";  
		if($_GET['primary_folder'] != 'results'){echo " autofocus ";} ///this is so we don't bump down too far on the page
	echo "autocomplete='off'></input>";
	echo "</div>";
	

}


if($_SESSION['dreamboat_crew'] == 'yes' && $_SESSION['viewing_client_id'] != $_SESSION['user_id'] && $_GET['primary_folder'] != 'messages'){

	echo "<div style = 'text-align:center;'>";

	//this second part should really only be triggered IFF someone has started typing into the initial prompt
	echo "<textarea name='pilot_reasoning' class='new_prompt_reasoning' placeholder='IFF using a prompt&#10;Why are you asking this question right now?' autocomplete='off' rows ='3' ></textarea>";
	
		echo "</div>";
}


echo "
<style>
#textarea_input:focus{text-align:	left;}
#textarea_input{text-align:		left;}";

if(isset($_SESSION['selected_prompt_text'])){

echo"
	#textarea_input::-webkit-input-placeholder { /* Edge */
	  color: red;
	  font-weight:800;
	}
	
	#textarea_input:-ms-input-placeholder { /* Internet Explorer 10-11 */
	  color: red;
	}
	
	#textarea_input::placeholder {
	  color: red;
	}
";
}


echo "
</style>";


echo "<textarea id='textarea_input'  name='textarea_input' ";
if($_SESSION['dreamboat_crew'] == 'yes' && $_SESSION['viewing_client_id'] != $_SESSION['user_id']){echo " rows='4' ";}
else{echo " rows='6' ";
	if($_GET['primary_folder'] != 'results'){
		echo " autofocus ";
	}

}
/*if(	$_GET['secondary_folder'] == 'flow' OR
	$_GET['secondary_folder'] == 'wellbeing'){
	echo "onkeydown = 'if(event.keyCode == 13){this.form.submit();event.preventDefault();return false;}'";
}*/

$usage_case = "standard_discussion";
echo "placeholder='";


?>