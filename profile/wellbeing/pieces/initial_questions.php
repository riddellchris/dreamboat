<?php
if(!isset($_SESSION)){session_start();}

if($_SESSION['secondary_folder'] == 'mood'){
	$_SESSION['prompt_1']= "How are you right now?";
	$_SESSION['prompt_2']= "What&#39;s making you happy?";
	$_SESSION['prompt_3']= "What&#39;s making you upset?";
	$_SESSION['prompt_4']= "Are you feeling pretty consistent?";
	$_SESSION['prompt_5']= "Are you in a good place?";
	$_SESSION['prompt_6']= "Respond to better optimise your mood...";
//	$_SESSION['instructional_prompt'] = "(HIT ENTER TO SUBMIT)";
	}
	
if($_SESSION['secondary_folder'] == 'stress'){
	$_SESSION['prompt_1']= "How are your stress levels right now?";
	$_SESSION['prompt_2']= "Is it always clear what needs to be done?";
	$_SESSION['prompt_3']= "Are you sleeping well?";
	$_SESSION['prompt_4']= "Do you feel scattered or calm and in control?";
	$_SESSION['prompt_5']= "Are you able to actively look after yourself?";
	$_SESSION['prompt_6']= "Respond to start better managing your stress...";
//	$_SESSION['instructional_prompt'] = "(HIT ENTER TO SUBMIT)";
	}

if($_SESSION['secondary_folder'] == 'energy'){
	$_SESSION['prompt_1']= "How are your energy levels right now?";
	$_SESSION['prompt_2']= "What&#39;s helping them or hindering them?";
	$_SESSION['prompt_3']= "Do you have decent balance?";
	$_SESSION['prompt_4']= "Are you able to look after yourself well?";
	$_SESSION['prompt_5']= "How can you get more healthy, sustainable energy?";
	$_SESSION['prompt_6']= "Answer these questions to improve your energy levels...";
//	$_SESSION['instructional_prompt'] = "(HIT ENTER TO SUBMIT)";
	}

if($_SESSION['secondary_folder'] == 'health'){
	$_SESSION['prompt_1']= "How is your health in general right now?";
	$_SESSION['prompt_2']= "What&#39;s going well, what&#39;s not going so well?";
	$_SESSION['prompt_3']= "Are there any issues really impacting your performance?";
	$_SESSION['prompt_4']= "How can you start to improve your general health?";
	$_SESSION['prompt_5']= "Where is best to start?";
	$_SESSION['prompt_6']= "Type these through to improve your health...";
//	$_SESSION['instructional_prompt'] = "(HIT ENTER TO SUBMIT)";
	}

	
?>