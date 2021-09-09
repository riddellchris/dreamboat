<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";


echo"
<style>
.textarea_input{font-family:Comfortaa;color:#ffffff;text-align:left;margin:0px;}
.textarea_input::placeholder{color:#ffffff;text-align: center;}
.secure_input{min-width:100%;padding-top:10px;margin-top:10px;margin-bottom:10px;}
select{font-family:Comfortaa;background-color:white;color:#ffffff;}
input{font-family:Comfortaa;}
</style>
";


echo "<div style='height:25vh;'></div>";



//echo "<div style='height:50vh;padding:15px;background-image: linear-gradient( to top ,#9a8aff ,#bb8aff)'>";
//	echo"	<div class='details-font' style='font-family:Monda;color: white;text-transform:uppercase;padding-top:30px;font-size:2em;'>technology</div>";

	

//		require $_SERVER['DOCUMENT_ROOT']."/admin/technology/sub_menu/display.php";

//echo "this entire sub section will allow us to plan prioritise and improve our development when more smart, creative engineers join us.<br>
//The way we file updates and improve the system will need some work in the first place until we can hire someone to really work on Dev Ops... perhaps Jesse Jesseeppi";	
		if($_SESSION['technology_sub_menu'] == 'discuss'){		
			$sql = "SELECT DISTINCT category FROM technology 
				WHERE 	primary_folder = '".$_SESSION['primary_folder']."'
				AND	secondary_folder = '".$_SESSION['secondary_folder']."'
				AND	tertiary_folder = '".$_SESSION['tertiary_folder']."'";
			if($_SESSION['final_file_name']  == 'view_history'){$sql .= " AND item_id = '".$_SESSION['item_id_from_url']."'";}					
			$sql .= "ORDER BY category DESC";
			
			//echo $sql;exit();
			
			require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
			$result = mysqli_query($conn, $sql);
			$number_of_results = mysqli_num_rows($result);
			if($number_of_results > 0){
				echo "<form method='post' action='/admin/technology/change_category.php'>";
					echo "<select class='secure_input' name = 'category' rows='22' style='width: 100%;'  onchange='this.form.submit()' autocomplete='off'>";	
						echo "<option>.... select a category</option>";					
						while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
							echo "<option";
								if($_SESSION['displaying_technology_category'] == $row['category']){echo " selected ";}
								echo ">";
								echo $row['category'];
			
						
							echo "</option>";			
						}
					echo "</select>";
					
				echo "<select class='secure_input'  name = 'layer_to_apply_to'>
						<option>Across</option>";
							echo "<option value='entire_platform'>		The entire platform</option>";			
							echo "<option value='primary_folder'>		The /".$_SESSION['primary_folder']."/ section</option>";
						if(isset($_SESSION['secondary_folder']) && $_SESSION['secondary_folder'] != ''){
							echo "<option value='secondary_folder'>		The /".$_SESSION['primary_folder']."/".$_SESSION['secondary_folder']."/ section</option>";
							if(isset($_SESSION['tertiary_folder']) && $_SESSION['tertiary_folder'] != ''){
								echo "<option value='tertiary_folder'>		The /".$_SESSION['primary_folder']."/".$_SESSION['secondary_folder']."/".$_SESSION['tertiary_folder']."/ section</option>";
									echo "<option value='this_specific_item'>	Only this specific item&#39;s page</option>";	
								}	
							}
				echo "</select>";
				echo "</form>";
				
				
				echo "<form method='post' action='/admin/technology/change_title.php'>";					
					if(isset($_SESSION['displaying_technology_category'])){			
						echo "<select class='secure_input' name = 'title' rows='22' style='width: 100%;'  onchange='this.form.submit()' autocomplete='off'>";
						echo "<option>.... select a title to view</option>";	
							$sql = "SELECT * FROM technology 
								WHERE 	primary_folder = '".$_SESSION['primary_folder']."'
								AND	secondary_folder = '".$_SESSION['secondary_folder']."'
								AND	tertiary_folder = '".$_SESSION['tertiary_folder']."'";
								if($_SESSION['final_file_name']  == 'view_history'){$sql .= " AND item_id = '".$_SESSION['item_id_from_url']."'";}					
							$sql .= "
								AND	category = '".$_SESSION['displaying_technology_category']."'								
								ORDER BY views DESC";
							require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
							$result = mysqli_query($conn, $sql);						
							while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
								echo "<option";
								if($_SESSION['displaying_technology_title'] == $row['title']){echo " selected ";}
								echo ">";
									echo $row['title'];
				
							
								echo "</option>";			
							}						
						echo "</select>";				
				echo "</form>";		
						
					if(isset($_SESSION['displaying_technology_title'])){
							$sql = "SELECT * FROM technology 
								WHERE 	primary_folder = '".$_SESSION['primary_folder']."'
								AND	secondary_folder = '".$_SESSION['secondary_folder']."'
								AND	tertiary_folder = '".$_SESSION['tertiary_folder']."'";
								if($_SESSION['final_file_name']  == 'view_history'){$sql .= " AND item_id = '".$_SESSION['item_id_from_url']."'";}					
							$sql .= "
								AND	category = '".$_SESSION['displaying_technology_category']."'								
								ORDER BY views DESC";
							require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
							$result = mysqli_query($conn, $sql);													
							$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
							
							echo "<span style='font-family: Quicksand;font-size:28px;'>";
							echo $row['note_details'];
							echo "</span>";	
					}
				}	
					
						
				//echo "<input class='login-submit' type='submit' style='width:100%;' value='view it'></input>";								
				
			}
			else{		
				echo "<div style='margin-top:15vh;text-align:center;' class ='prompt-font'>sorry there&#39;s no<br> wisdom here yet<br><a href='/admin/technology/sub_menu/change.php?to=add' style='color:red;'>Add something here>></a></div>";
			}

		echo "just normal disucssion with anyone who wants to contribute";
			
		}

	
//echo "this entire sub section will allow us to plan prioritise and improve our development when more smart, creative engineers join us.<br>
//The way we file updates and improve the system will need some work in the first place until we can hire someone to really work on Dev Ops... perhaps Jesse Jesseeppi";	
		if($_SESSION['technology_sub_menu'] == 'prioritise'){		
			$sql = "SELECT DISTINCT category FROM technology 
				WHERE 	primary_folder = '".$_SESSION['primary_folder']."'
				AND	secondary_folder = '".$_SESSION['secondary_folder']."'
				AND	tertiary_folder = '".$_SESSION['tertiary_folder']."'";
			if($_SESSION['final_file_name']  == 'view_history'){$sql .= " AND item_id = '".$_SESSION['item_id_from_url']."'";}					
			$sql .= "ORDER BY category DESC";
			
			//echo $sql;exit();
			
			require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
			$result = mysqli_query($conn, $sql);
			$number_of_results = mysqli_num_rows($result);
			if($number_of_results > 0){
				echo "<form method='post' action='/admin/technology/change_category.php'>";
					echo "<select class='secure_input' name = 'category' rows='22' style='width: 100%;'  onchange='this.form.submit()' autocomplete='off'>";	
						echo "<option>.... select a category</option>";	
						echo "<option>all</option>";							
										
						while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
							echo "<option";
								if($_SESSION['displaying_technology_category'] == $row['category']){echo " selected ";}
								echo ">";
								echo $row['category'];
			
						
							echo "</option>";			
						}
					echo "</select>";
				echo "<select class='secure_input'  name = 'layer_to_apply_to'>
						<option>Across</option>";
							echo "<option value='entire_platform'>		The entire platform</option>";			
							echo "<option value='primary_folder'>		The /".$_SESSION['primary_folder']."/ section</option>";
						if(isset($_SESSION['secondary_folder']) && $_SESSION['secondary_folder'] != ''){
							echo "<option value='secondary_folder'>		The /".$_SESSION['primary_folder']."/".$_SESSION['secondary_folder']."/ section</option>";
							if(isset($_SESSION['tertiary_folder']) && $_SESSION['tertiary_folder'] != ''){
								echo "<option value='tertiary_folder'>		The /".$_SESSION['primary_folder']."/".$_SESSION['secondary_folder']."/".$_SESSION['tertiary_folder']."/ section</option>";
									echo "<option value='this_specific_item'>	Only this specific item&#39;s page</option>";	
								}	
							}
				echo "</select>";					
					
					
				echo "</form>";
				
				echo "voting them up / one per user / show if voted";
				
			}
		}
		if($_SESSION['technology_sub_menu'] == 'add new'){		
			echo "<form method='post' action='/admin/technology/add.php'>";

				echo "<select class='secure_input'  name = 'layer_to_apply_to'>
						<option>Where should this apply?</option>";
							echo "<option value='entire_platform'>		The entire platform</option>";			
							echo "<option value='primary_folder'>		The /".$_SESSION['primary_folder']."/ section</option>";
						if(isset($_SESSION['secondary_folder']) && $_SESSION['secondary_folder'] != ''){
							echo "<option value='secondary_folder'>		The /".$_SESSION['primary_folder']."/".$_SESSION['secondary_folder']."/ section</option>";
							if(isset($_SESSION['tertiary_folder']) && $_SESSION['tertiary_folder'] != ''){
								echo "<option value='tertiary_folder'>		The /".$_SESSION['primary_folder']."/".$_SESSION['secondary_folder']."/".$_SESSION['tertiary_folder']."/ section</option>";
									echo "<option value='this_specific_item'>	Only this specific item&#39;s page</option>";	
								}	
							}
				echo "</select>";			
				echo "<select class='secure_input'  name = 'category'>
						<option value='untouched'>Select an improvement category</option>";
							echo "<option value='Security'>Security</option>";						
							echo "<option value='Bug fixes'>Bug fixes</option>";
							echo "<option value='Additional functionality'>Additional functionality</option>";														
							echo "<option value='Layout improvements'>Layout improvements</option>";			
							echo "<option value='Design tweaks'>Design tweaks</option>";
							echo "<option value='Interface & interaction improvements'>Interface improvements</option>";	
							echo "<option value='Dreams for this page'>Dreams for this page</option>";
							echo "<option value='Other'>Other</option>";											
				echo "</select>";
			echo "<input class='secure_input' name = 'title' style='width: 100%;' placeholder='add a title' autocomplete='off'></input>";				
			echo "<textarea  autocomplete='off' class='textarea_input' name = 'wisdom' rows='15' style='width:calc(25%-60px);' placeholder='&#10;&#10;&#10;&#10;&#10;&#10;&#10;now what are your initial comments :)'></textarea>";
			echo "<input class='login-submit' type='submit' style='width:100%;' value='add'></input>";	
		}	
	

		echo "</form>";
	
	

//echo "</div>";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";


?>