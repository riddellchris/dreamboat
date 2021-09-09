<?php
if(!isset($_SESSION)){session_start();}

if($_SESSION['dreamboat_crew'] == 'yes' && $_SESSION['show_as_dreamboat_crew'] == 'yes'){
	echo "<style>
			@media screen and (max-width: 1320px) {.pilot_sides {display:none;} 	.anti_pilot_sides{width:100%;}}
			@media screen and (min-width: 1320px) and (max-height: 1150px){.pilot_sides {display:none;} 	.anti_pilot_sides{width:100%;}}
			@media screen and (min-width: 1320px) and (min-height: 1150px){.pilot_sides {display:block;} 	.anti_pilot_sides{width:60%;float:left;}}
	</style>";

//this is when technology comes back in becaue the colours are correct
//	echo "<div class='pilot_sides' style='width:20%;float: left;background-image: linear-gradient(to bottom, #34e349 0% ,#bb8aff 60%,#9a8aff 100%);height:120vh;font-family:Monda;color:white;box-shadow: -10px 0px 10px -5px #5e5e5e;'>";
	echo "<div class='pilot_sides' style='width:20%;float: left;background-image: linear-gradient(to bottom, #34e349 0% ,#00a113 100%);height:120vh;font-family:Monda;color:white;box-shadow: -10px 0px 10px -5px #5e5e5e;'>";
		require $_SERVER['DOCUMENT_ROOT']."/components/performance/display.php";
	echo"</div>";
	
	
	

	echo "<div class='pilot_sides'  style='width:20%;float: right;background-color: #f75b52;height:120vh;font-family:Monda;color:white;box-shadow: -10px 0px 10px -5px #5e5e5e;'>";
		if(	$_SESSION['primary_folder_knowledgebase_set_for'] 	!= $_GET['primary_folder']		OR
			$_SESSION['secondary_folder_knowledgebase_set_for'] 	!= $_GET['secondary_folder']	OR
			$_SESSION['tertiary_folder_knowledgebase_set_for'] 	!= $_GET['tertiary_folder']
			){			
				unset($_SESSION['primary_folder_knowledgebase_set_for']);
				unset($_SESSION['secondary_folder_knowledgebase_set_for']);			
				unset($_SESSION['tertiary_folder_knowledgebase_set_for']);			
				unset($_SESSION['displaying_knowledgebase_category']);			
				unset($_SESSION['displaying_knowledgebase_title']);					
			}


		require $_SERVER['DOCUMENT_ROOT']."/components/knowledgebase/display.php";
		if($_SESSION['viewing_client_id'] != $_SESSION['user_id']){
			require $_SERVER['DOCUMENT_ROOT']."/components/notes/display.php";
			}

	echo"</div>";	
}