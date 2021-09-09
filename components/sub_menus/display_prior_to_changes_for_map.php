<?php
if(!isset($_SESSION)){session_start();}

function change_clients_to_appropriate_name($original_name){
	if($original_name == 'clients'){return 	$_SESSION['viewing_client_what_clients_are_called'];}
	else{return $original_name;}
}



$number_of_top_sub_menu_options = count($top_sub_menu_options);

echo "
<style>
	.div_width{width:calc(100% / ".$number_of_top_sub_menu_options.");}";
	
	$pilot_only_menu_css = "
		background-color: #cecece;
		font-family:Kalam;
		color:black;
		font-size:unset;
	";
	$pilot_only_menu_css_hover = "
		background-color: #cecece;
		box-shadow: inset 0 -30px 30px -30px #9c9c9c;
	";
	$pilot_only_menu_option_selected = "
		color:red;
		box-shadow: inset 0 -30px 30px -30px #000000;
	";	
	
echo"	
	.sub_menu_div.pilot_settings_in_sub_menus{					".$pilot_only_menu_css."    padding-bottom: 0.5vh;    padding-top: 0.8vh;}
	.sub_menu_div.pilot_settings_in_sub_menus:hover{			".$pilot_only_menu_css_hover."}
	.sub_sub_menu_div.pilot_settings_in_sub_menus{				".$pilot_only_menu_css."}
	.sub_sub_menu_div.pilot_settings_in_sub_menus:hover{		".$pilot_only_menu_css_hover."}
	
	
	.sub_menu_div.pilot_settings_in_sub_menus.highlighted{		".$pilot_only_menu_option_selected."}	
	.sub_sub_menu_div.pilot_settings_in_sub_menus.highlighted{	".$pilot_only_menu_option_selected."}	
	
</style>
";


echo "<div id='sub_menu_div_container' style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);position: inherit;z-index: 1;'>";


if($_GET['primary_folder'] == 'content'){$if_content = 'content_';}
else{$if_content = '';}



//if there are menu options to display... then we want to run a simple test to ensure that the $_SESSION[xxxx."_page"] variable matches that of the folder we find ourselves to be in....
//this is going to require a little more brainpower than I have available at 9:27pm on Friday the 15th of May 2020 though... maybe tomorow maybe who knows... it's not that critical

if($number_of_top_sub_menu_options > 0){
	for($i = 0; $i < $number_of_top_sub_menu_options; $i++){
		$display_option[$i] = strip_underscores($top_sub_menu_options[$i]);

	if($_GET['primary_folder'] == 'management'){
		$display_option[$i] = change_clients_to_appropriate_name($display_option[$i]);	
	}
	if($_GET['primary_folder'] == 'legal'){
		if($display_option[$i] == 'terms and conditions'){$display_option[$i] = "T's & C's";}
	}
	
	//settings to deliniate if access is only for pilots
	$for_pilots_only = 'no';
//	if($_GET['primary_folder'] == 'profile' 				&& $display_option[$i] == 'advice'		){	$for_pilots_only = 'yes';}		//this is for /profile/advice/
//	if($_GET['primary_folder'] == 'time' 					&& $display_option[$i] == 'tracking'	){	$for_pilots_only = 'yes';}		//this is for /time/tracking/
//	if($_GET['primary_folder'] == 'talking_points_chris' 	&& $display_option[$i] == 'settings'	){	$for_pilots_only = 'yes';}		
//	if($_GET['primary_folder'] == 'talking_points' 			&& $display_option[$i] == 'settings'	){	$for_pilots_only = 'yes';}			
//	if($_GET['primary_folder'] == 'time' 					&& $display_option[$i] == 'optimisation'){	$for_pilots_only = 'yes';}		
//	if($_GET['primary_folder'] == 'talking_points' 			&& $display_option[$i] == 'settings'	){	$for_pilots_only = 'yes';}
//	if($_GET['primary_folder'] == 'knowledgebase' 			&& $display_option[$i] == 'flyer'		){	$for_pilots_only = 'yes';}


//	if($_GET['primary_folder'] == 'map' 		&& $display_option[$i] == 'edges'){	$for_pilots_only = 'yes';}
	if($_GET['primary_folder'] == 'map' 		&& $display_option[$i] == 'apis'){			$for_pilots_only = 'yes';}
	if($_GET['primary_folder'] == 'map' 		&& $display_option[$i] == 'grouping'){		$for_pilots_only = 'yes';}
	if($_GET['primary_folder'] == 'map' 		&& $display_option[$i] == 'permissions'){	$for_pilots_only = 'yes';}	
	if($_GET['primary_folder'] == 'map' 		&& $display_option[$i] == 'matching'){		$for_pilots_only = 'yes';}
	if($_GET['primary_folder'] == 'map' 		&& $display_option[$i] == 'interplay'){		$for_pilots_only = 'yes';}
	//	if($_GET['primary_folder'] == 'map' 		&& $display_option[$i] == 'links'){	$for_pilots_only = 'yes';} /// probably the same as 'interplay' above
	if($_GET['primary_folder'] == 'map' 		&& $display_option[$i] == 'valuation'){		$for_pilots_only = 'yes';}
//	if($_GET['primary_folder'] == 'map' 		&& $display_option[$i] == 'nodes'){	$for_pilots_only = 'yes';}




if($top_sub_menu_options[$i] != 'display_no_menu'){	
		echo "<a ";
			echo "href ='/components/sub_menus/change.php?page=".$_GET['primary_folder']."&to=".$top_sub_menu_options[$i]."'";
			echo "class='sub_menu_div div_width ";
			if($for_pilots_only == 'yes'){echo " pilot_settings_in_sub_menus ";}
			
			//original and newer version shown here
			//if($_SESSION[$if_content.$_GET['primary_folder'].'_page'] == $top_sub_menu_options[$i]){echo " highlighted";}
			if($_GET['secondary_folder'] == $top_sub_menu_options[$i]){echo " highlighted";}
			else{

				
				
				//if no homework set the alert and flash it too
				//if($top_sub_menu_options[$i] == 'homework' &&
				//	$number_of_results_to_display == 0 
				//echo " alert blink_me"
				//more difficult than what the code aboe aludes to because other pages will have the wrong count level... would need to run the test and then test again for homework query.
				//UGH not right now
				//CR 20.08.23
				if($_SESSION["user_alerts_".$_GET['primary_folder'].'_'.$top_sub_menu_options[$i]] == 'on'){echo " alert";}
			}	
			echo "'>";
			echo $display_option[$i];
		echo "</a>";
		}
	}
}

echo "</div>";

?>