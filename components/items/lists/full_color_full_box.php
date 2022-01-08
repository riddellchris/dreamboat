<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";

echo "<div style='height:22px;'>&nbsp;</div>";

require $_SERVER['DOCUMENT_ROOT']."/components/items/lists/pre_list_warnings.php";


echo "<div style='width:100%; text-align:center;font-family:Comfortaa;'>";

	echo "<span style='color:#3DCCCC;'>";
	if(isset($_SESSION['ai_list_warning'])){echo $_SESSION['ai_list_warning'];}
	echo "</span>";

	require $_SERVER['DOCUMENT_ROOT']."/components/items/lists/main_sql_query.php";

	if(	check_primary_folder('activities') 	OR
		check_primary_folder('issues') 		OR	
		check_primary_folder('upgrades')){	
		//warning/instructional tests
		$value_set = 'untouched';
		while($row = mysqli_fetch_array($result_for_display, MYSQLI_ASSOC)){
			if(	$row['numerical_zone'] != '' 	AND
				$row['numerical_zone'] != '...'){
				$value_set = 'useful';
			}
		}
		if($value_set == 'untouched'){
			echo "<div class='prompt-font blink_me' style='color:#281e96;'>";
				if(check_primary_folder('activities')){		$singluar = 'activity';}
				if(check_primary_folder('issues')){		$singluar = 'issue';}		
				if(check_primary_folder('upgrades')){		$singluar = 'upgrades';}						
				echo "add some ".$singular." details to have charting display";
			echo "</div>";
		}
	}


	$_SESSION['ai_number_of_'.$_GET['secondary_folder']] = $number_of_results_to_display;

	require $_SERVER['DOCUMENT_ROOT']."/components/layouts/pieces/box/box.php";	
	if($_GET['primary_folder'] != 'notifications' && $_GET['primary_folder'] != 'content'){ 

		echo "<div style='width:100%;max-width:1100px;padding:20px 0px;text-align:center;margin-left:auto;margin-right:auto;margin-bottom:6vh;'>";

		echo "<style>
			.login-submit{
				min-width:unset;
				padding-right:unset;
				padding-left:unset;
				width:100%;
				display:inline-block;
				max-height:52px;
				margin:unset;
				text-align:center;
			}
		      </style>";
		$clients_called = $_SESSION['viewing_client_what_clients_are_called'];	
		
		
		//how it used to be before we made 'items_central_index'
		/*if(check_folders_two_deep('profile','progress')){$adding_new = 'progress';	$achieved_name = 'very old';	$button_copy = "add your progress";} */


	 	$sql = "SELECT * 
			FROM items_central_index 
			WHERE primary_folder = '".mysqli_real_escape_string($conn, $_GET['primary_folder'])."'
			AND secondary_folder = '".mysqli_real_escape_string($conn, $_GET['secondary_folder'])."'";

	//echo $sql;exit();
	//	exit();
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		
			$adding_new 	= $row['adding_new_code'];
			$achieved_name  = "archived";
		//	$achieved_name 	= $row['achieved_name'];
			$button_copy 	= $row['add_new_copy'];
			if($_GET['secondary_folder'] == 'clients'){$button_copy = str_replace('clients', $_SESSION['viewing_client_what_clients_are_called'], $button_copy);}	


	/* HOMEWORK ONLY FOR /upgrades/all/ */
		//for the list selection here		
		if(	$_SESSION['list_view_'.$_GET['primary_folder'].'_'.$_GET['secondary_folder']] != 'deleted' &&
			$_SESSION['list_view_'.$_GET['primary_folder'].'_'.$_GET['secondary_folder']] != 'inactive'  &&
			$_SESSION['list_view_'.$_GET['primary_folder'].'_'.$_GET['secondary_folder']] != 'homework'){	$active_selected	= " selected ";	$active_ing = 'ing';	$background_color='DodgerBlue';		$color='';}
		if(	$_SESSION['list_view_'.$_GET['primary_folder'].'_'.$_GET['secondary_folder']] == 'deleted'){ 	$deleted_selected 	= " selected ";	$deleted_ing = 'ing';	$background_color='grey';		$color='';}
		if(	$_SESSION['list_view_'.$_GET['primary_folder'].'_'.$_GET['secondary_folder']] == 'inactive'){ 	$inactive_selected 	= " selected ";	$inactive_ing = 'ing';	$background_color='#a5d2ff';		$color='';}
		//if(	$_SESSION['list_view_'.$_GET['primary_folder'].'_'.$_GET['secondary_folder']] == 'homework'){ 	$homework_selected 	= " selected ";	$homework_ing = 'ing';	$background_color='red';		$color='color:white;';}			
		echo "<div style='width:33.3%;float:left;'>";
			echo "<form method='post' action='/components/items/lists/view.php?primary_folder=".$_GET['primary_folder']."&secondary_folder=".$_GET['secondary_folder']."'>";
			echo "<select name='list_to_view' class='login-submit'  style='float:left;width:100%;text-align-last: center;background-color:".$background_color.";".$color."'  onchange='this.form.submit()'>";
			//this is where if(
		//if(check_folders_two_deep('upgrades','all')){		
		//		echo "<option value='homework' 	".$homework_selected."	>view".$homework_ing." active homework</option>";
		//		}
				echo "<option value='active' 	".$active_selected."	>view".$active_ing." active</option>";
				echo "<option value='deleted'	".$deleted_selected."	>view".$deleted_ing."  deleted</option>";					
				echo "<option value='inactive'	".$inactive_selected."	>view".$inactive_ing."  ".$achieved_name."</option>";	
			echo "</select>";
			echo "</form>";				
		echo "</div>";	
		echo "<div style='width:33.3%;float:left;'>";								
			echo "<a class='login-submit' href='/components/items/add_new.php?";
				$get_fields = 0;
				if(isset($_GET['primary_folder'])){echo "primary_folder=".$_GET['primary_folder']; $get_fields ++;}
				if(isset($_GET['secondary_folder'])){
					if($get_fields > 0){ echo "&";}
					echo "secondary_folder=".$_GET['secondary_folder']; $get_fields ++;
				}				
				if(isset($_GET['tertiary_folder'])){
					if($get_fields > 0){ echo "&";}
					echo "tertiary_folder=".$_GET['tertiary_folder']; $get_fields ++;
				}
				if(isset($adding_new)){
					if($get_fields > 0){ echo "&";}
					echo "adding_new=".$adding_new; $get_fields ++;
				}
				echo "'>";				
			echo $button_copy."</a>";
		echo "</div>";	
		echo "<div style='width:33.3%; float:left;background-color: transparent;height:24px;'>";
			echo "&nbsp;";
		echo "</div>";	
	echo "</div>";							
	}


require $_SERVER['DOCUMENT_ROOT']."/components/notifications_and_alerts/find_item_ids_in_this_folder_with_outstanding_alerts.php";

//echo $sql_for_display;exit();

$displaying_active_issue = 0;
$top_of_list = 'yes';

//echo $sql_for_display;
$result_for_display = mysqli_query($conn, $sql_for_display);
while($row = mysqli_fetch_array($result_for_display, MYSQLI_ASSOC)){
	$displaying_active_issue ++;
		echo "<div class='standard_box'";
			//echo $row['item_id'];
			$alert_on = 'no';
			if(isset($item_ids_with_active_alerts)){
				if(in_array($row['item_id'], $item_ids_with_active_alerts)){$color = 'orange'; $contrast_color = 'yellow'; $alert_on = 'yes';}
			}
			if($alert_on == 'no'){

				//$row['deleted'] applies for items BUT critically doesn't apply for notifications
				//therefore what we really need to do here is have some conditions for greyed out or not
				//it will be greyed out which will only occur IFF 
				 	//well no it will be colour unless deteled exists and is 'yes'
				$box_color = 'color';
			 	if(isset($row['deleted'])){
					if($row['deleted'] == 'yes'){$box_color = 'greyed_out';}
				}
				if($box_color == 'greyed_out'){$color = '#858181'; $contrast_color = '#c2c2c2';}
				else{$color = $row['background_color']; $contrast_color = $row['contrast_color'];}
			}
			echo " style='background-image: linear-gradient(".$row['degrees']."deg, ".$color.", ".$contrast_color.");'>";
		
			echo "<div class='bottom-left'>";					
			echo"</div>";
			
			echo "<div class='top-left'>";
			echo "</div>";	
			
			echo "<div class='centered' style='color:white;'>"; //".$text[$color_combo]."'>";
				require $_SERVER['DOCUMENT_ROOT']."/components/layouts/pieces/box/item_title_display.php";						
			echo "</div>";	
					
		if($_GET['primary_folder'] != 'content'){ 		
			echo "<div class='top-right'>";
				if($_GET['primary_folder'] != 'notifications'){ 
					if($top_of_list != 'yes'){
					echo "<a class='corner-link' href='/components/items/lists/slide_item.php?item_id=".$row['item_id']."&direction=up&primary_folder=".$_GET['primary_folder']."&secondary_folder=".$_GET['secondary_folder']."&tertiary_folder=".$_GET['tertiary_folder']."'>More critical";
						echo"</a>";
					}
					else{$top_of_list = 'no';}
				}
			echo "</div>";
			echo "<div class='bottom-right'>";
				if($_GET['primary_folder'] != 'notifications'){ 
					if($number_of_results_to_display  != $displaying_active_issue){
						echo "<a class='corner-link' href='/components/items/lists/slide_item.php?item_id=".$row['item_id']."&direction=down&primary_folder=";
						echo $_GET['primary_folder']."&secondary_folder=".$_GET['secondary_folder']."&tertiary_folder=".$_GET['tertiary_folder'];						
						echo "'>less critical";								
					echo "</a>";}
				}				
			echo "</div>";
		}
		echo "</div>";
	if($_GET['primary_folder'] != 'content'){ 
		echo "<div class='view_full ";
			if(	$_GET['primary_folder'] == 'activities'		OR 	
				$_GET['primary_folder'] == 'issues' 		OR
				$_GET['primary_folder'] == 'upgrades' 
			){
				if($row['numerical_zone'] == '' && $row['numerical_datapoint'] == 0){echo "blink_me";}
			}
		
			if(in_array($row['item_id'], $item_ids_with_active_alerts)){echo ' alert ';}
			if($_GET['primary_folder'] != 'notifications'){ 		
				echo "' onclick= location.href='";
				
				if($_GET['primary_folder'] != 'admin'){
					echo "/".$_GET['primary_folder']."/".$_GET['secondary_folder'];
					if($_GET['tertiary_folder'] != ''){echo "/".$_GET['tertiary_folder'];}
					echo "/item/display.php?item_id=".$row['item_id']."&primary_folder=".$_GET['primary_folder']."&secondary_folder=".$_GET['secondary_folder']."&tertiary_folder=";
					if($_GET['primary_folder'] != 'admin'){echo "item";}
					else{echo $_GET['tertiary_folder']."&quarternary_folder=item";}
				}
				else{
					echo $_SESSION['this_page'];
				}
				
						
				echo "'>";	
				echo "VIEW FULL";
			}
			if($_GET['primary_folder'] == 'notifications'){ 		
				echo "' onclick= location.href='".$row['link_to']."'>";	
				echo "GO TO IT >>>";
			}				
		echo "</div>";
	}
	echo "<div style='height:40px'></div>";
}
echo "</div>";
echo "<div style='height:40px'></div>";
?>