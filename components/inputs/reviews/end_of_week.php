<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/color_creation.php";

//we want this to be here so that nothing is entered if we skip... nothing at all... just go to the next prompt assessment
if($_POST['submit_button'] != 'skip'){

//people -- adding new
	if($_SESSION['next_prompt_id'] == '339'){	$_SESSION['adding_new'] 	= 'people'; 			
							$_SESSION['reviewing'] 		= 'yes';	
							require $_SERVER['DOCUMENT_ROOT']."/components/items/add_submit.php";
							require $_SERVER['DOCUMENT_ROOT']."/components/inputs/reviews/end_of_week_optimal_next_prompt_redirection.php";	
						}	
//events -- marking resolved those that are currently active
	if($_SESSION['next_prompt_id'] == '340'){	
							$_GET['primary_folder'] 	= 'biz_dev';	//required for folder to database relationships
							$_GET['secondary_folder'] 	= 'events';	//required for folder to database relationships
							$_GET['to'] 			= 'resolved';			
							$_GET['item_id'] 	= mysqli_real_escape_string($conn, $_GET['item_id']);					
							$_SESSION['reviewing'] 		= 'yes';	
							require $_SERVER['DOCUMENT_ROOT']."/components/items/standard_adjustments.php";
							require $_SERVER['DOCUMENT_ROOT']."/components/inputs/reviews/end_of_week_optimal_next_prompt_redirection.php";									
							}	
	
//events -- adding those that WERE ALSO COMPLETED within the period





//events -- adding those that were just planned moving forward now	
	if($_SESSION['next_prompt_id'] == '342'){$_SESSION['adding_new'] = 'events';			$_SESSION['reviewing'] = 'yes';	require $_SERVER['DOCUMENT_ROOT']."/components/items/add_submit.php";}
	
	
	
	
	
	if($_SESSION['next_prompt_id'] == '345'){$_SESSION['adding_new'] = 'one_to_ones';		$_SESSION['reviewing'] = 'yes';	require $_SERVER['DOCUMENT_ROOT']."/components/items/add_submit.php";}
	
	
	if($_SESSION['next_prompt_id'] == '350'){$_SESSION['adding_new'] = 'prospects';			$_SESSION['reviewing'] = 'yes';	require $_SERVER['DOCUMENT_ROOT']."/components/items/add_submit.php";}
	
	if($_SESSION['next_prompt_id'] == '353'){$_SESSION['adding_new'] = 'potential_upsells';		$_SESSION['reviewing'] = 'yes';	require $_SERVER['DOCUMENT_ROOT']."/components/items/add_submit.php";}
	
	if($_SESSION['next_prompt_id'] == '355'){$_SESSION['adding_new'] = 'recurring_sales';		$_SESSION['reviewing'] = 'yes';	require $_SERVER['DOCUMENT_ROOT']."/components/items/add_submit.php";}
	




}
else{	
	//if SKIP was chosen then go to choose the next prompt id...
	//BUT this also happens above after each prompt... don't freak out
	require $_SERVER['DOCUMENT_ROOT']."/components/inputs/reviews/end_of_week_optimal_next_prompt_redirection.php";
}
?>