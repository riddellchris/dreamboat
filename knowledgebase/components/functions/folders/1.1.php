<?php
if(!isset($_SESSION)){session_start();}

function primary_knowledgebase_menu_item($id, $pilot_only_yes_no){

	if(	$pilot_only_yes_no != 'yes' OR $_SESSION['dreamboat_crew'] == 'yes'){

		if($id == 'dot_dot_dot_divider'){echo "<span ";}	
		else{echo "<a ";}
		
		echo " id='".$id."' ";
	//	if($_GET['secondary_folder'] != $id){ echo " href='/knowledgebase/".$id."/' "; }

		if($id != 'dot_dot_dot_divider'){echo " href='/knowledgebase/".$id."/' ";}

		echo " class='legal-big-title collapsible ";

		if($_GET['secondary_folder'] == $id){ 	echo " active ";}	
		if($id != 'dot_dot_dot_divider'){ 		echo " hover ";}	
		echo "'";

		echo " style = '";
		if($_GET['secondary_folder'] == $id){ echo "color: red; font-weight: 700;";}
		if($id == 'start_slideshow'){ echo "background-color:ghostwhite;";}	
		if($id == 'dot_dot_dot_divider'){ echo "text-decoration:none;";}		
		echo "'";

		
        if($id == 'dot_dot_dot_divider'){echo ">...";}
		else{echo ">".strip_underscores($id);}
		
        if($pilot_only_yes_no == 'yes'){echo " - PILOT ONLY";}

		if($id == 'dot_dot_dot_divider'){echo "</span>";}	
		else{echo "</a>";}		
	}
}		


function secondary_knowledgebase_menu_item($id, $pilot_only_yes_no){	
	if($pilot_only_yes_no != 'yes' OR $_SESSION['dreamboat_crew'] == 'yes'){
		echo "<a id='".$id."' ";
		
		
	//	if($_GET['tertiary_folder'] != $id){ echo " href='/knowledgebase/".$_GET['secondary_folder']."/".$id."/' "; }
		echo " href='/knowledgebase/".$_GET['secondary_folder']."/".$id."/' "; 
		echo " class='legal-big-title collapsible active hover";
			
		if($_GET['tertiary_folder'] != $id){echo " can_select ";}
		echo "' style = 'padding-left:3vw;";
		if($_GET['tertiary_folder'] == $id){ echo " color: red; font-weight: 700;"; }
		if($id == 'start_slideshow'){ echo " 	    background-color:ghostwhite;'"; }	
		echo "'>".strip_underscores($id);
		if($pilot_only_yes_no == 'yes'){echo " - PILOT ONLY";}
		echo "</a>"; 
	}
}	

function tertiary_knowledgebase_menu_item($id, $pilot_only_yes_no){
	if($pilot_only_yes_no != 'yes' OR $_SESSION['dreamboat_crew'] == 'yes'){	
			echo "<a id='".$id."' ";
			
			
		//	if($_GET['tertiary_folder'] != $id){ echo " href='/knowledgebase/".$_GET['secondary_folder']."/".$id."/' "; }
			echo " href='/knowledgebase/".$_GET['secondary_folder']."/".$_GET['tertiary_folder']."/".$id."/' "; 
			echo " class='legal-big-title collapsible  active ";
				
			if($_GET['quarternary_folder'] != $id){echo " can_select ";}
			echo "' style = 'padding-left:6vw;";
			if($_GET['quarternary_folder'] == $id){ echo " color: red; font-weight: 700;"; }
			echo "'>".strip_underscores($id);
			if($pilot_only_yes_no == 'yes'){echo " - PILOT ONLY";}
			echo "</a>"; 
	}
}

function quarternary_knowledgebase_menu_item($id, $pilot_only_yes_no){
	if($pilot_only_yes_no != 'yes' OR $_SESSION['dreamboat_crew'] == 'yes'){	
		echo "<a id='".$id."' ";
		
		
	//	if($_GET['tertiary_folder'] != $id){ echo " href='/knowledgebase/".$_GET['secondary_folder']."/".$id."/' "; }
		echo " href='/knowledgebase/".$_GET['secondary_folder']."/".$_GET['tertiary_folder']."/".$_GET['quarternary_folder']."/".$id."/' "; 
		echo " class='legal-big-title collapsible  active ";
			
		if(strpos($_SERVER[REQUEST_URI],$id) != 1){echo " can_select ";}
		echo "' style = 'padding-left:9vw;";
		if(strpos($_SERVER[REQUEST_URI],$id)){ echo " color: red; font-weight: 700;"; }
		echo "'>".strip_underscores($id);
		if($pilot_only_yes_no == 'yes'){echo " - PILOT ONLY";}
		echo "</a>"; 
	}
}