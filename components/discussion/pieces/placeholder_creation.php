<?php
if(!isset($_SESSION)){session_start();}

if($_GET['primary_folder'] != 'messages'){
	if($usage_case == "standard_discussion"){
	
		if(!isset($_SESSION['selected_prompt_text'])){	
			//be careful with how you leave the arrangement of this font as it does seem to display exactly as presented
			if($_SESSION['dreamboat_crew'] == 'yes'){
				echo "Select a question above to respond directly to it&#10;Converse with your Client as you please&#10;Or just take notes as you need.";}
			else{	echo "Select a question above to respond directly to it&#10;Converse with your Pilot as you please&#10;Or just take notes as you need.";}
		}
		else{
			//require $_SERVER['DOCUMENT_ROOT']."/components/discussion/safely_replacing_apostrophies_function.php";
			echo safely_remove_apostrophies($_SESSION['selected_prompt_text']);
		}	
	}
}


if($_GET['primary_folder'] == 'messages'){
	if($_SESSION['dreamboat_crew'] == 'yes'){$to = 'client '.$_SESSION['viewing_client_first_name']."?";}
	else{$to = 'Productivity Pilot '.$_SESSION['pilots_first_name']."?";}				
	echo "What do you want to say to your ".$to;
	if($_SESSION['dreamboat_crew'] != 'yes'){			
		echo  "&#10;Don&#39;t forget you can just call them too.";
		echo "&#10;Just click up in the top right corner of your screen.";
	}

}


unset($usage_case);





?>