<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/sub_menus/sub_sub_menu/styles.php";

$sub_sub_number_of_menu_options = count($top_sub_sub_menu_options);

echo "	
<style>
	.sub_sub_div_width{width:calc(100% / ".$sub_sub_number_of_menu_options.");}
</style>
";

echo "<div id='sub_sub_menu_div_container' style='position: inherit;z-index: 1;'>";

if($_GET['primary_folder'] == 'content'){
						$_GET['secondary_folder'] = $_GET['tertiary_folder'];
						$session_key = $_GET['primary_folder'].'_'.$_GET['secondary_folder'].'_'.$_GET['tertiary_folder'].'_page';									
						}
else{
	$_GET['secondary_folder'] = $_GET['secondary_folder'];
	$session_key = $_GET['primary_folder'].'_'.$_GET['secondary_folder'].'_page';	
}

if($sub_sub_number_of_menu_options > 0){
	for($i = 0; $i < $sub_sub_number_of_menu_options; $i++){
		$sub_sub_display_option[$i] = strip_underscores($top_sub_sub_menu_options[$i]);
		
		$pilot_settings_class = '';
		if($_SESSION['dreamboat_crew'] == 'yes'){
			if(	$_GET['primary_folder'] 	== 'profile' 	&& $_GET['secondary_folder']	== 'reviews' 	&&	$sub_sub_display_option[$i]	== 'settings'			){	$pilot_settings_class = " pilot_settings_in_sub_menus ";}	
			if(	$_GET['primary_folder'] 	== 'account' 	&& $_GET['secondary_folder']	== 'settings' 	&&	$sub_sub_display_option[$i] == 'main_nav_control'	){	$pilot_settings_class = " pilot_settings_in_sub_menus ";}	
		}
		
		echo "<a ";		
			echo "href ='/components/sub_menus/sub_sub_menu/change.php?page=".$_GET['secondary_folder']."&to=".$top_sub_sub_menu_options[$i]."&primary_folder=".$_GET['primary_folder']."&secondary_folder=".$_GET['secondary_folder']."'";
			echo "class='sub_sub_menu_div sub_sub_div_width ".$pilot_settings_class;
			if($pilot_settings_class == '' && $_GET['tertiary_folder'] == $top_sub_sub_menu_options[$i]){echo " highlighted ";}
			if($_SESSION["user_alerts_".$_GET['secondary_folder'].'_'.$top_sub_sub_menu_options[$i]] == 'on'){echo " alert ";}	
			echo "'>";
			echo $sub_sub_display_option[$i];
		echo "</a>";		
		
	}
}
echo "</div>";

?>