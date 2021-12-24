<?php
if(!isset($_SESSION)){session_start();}

unset($_SESSION['selected_prompt_text']);
unset($_SESSION['selected_prompt_id']);
unset($_SESSION['selected_prompt_primary_folder']);
unset($_SESSION['selected_prompt_secondary_folder']);
unset($_SESSION['selected_prompt_tertiary_folder']);
	
header("Location: ".$_SESSION['this_page']);
exit();