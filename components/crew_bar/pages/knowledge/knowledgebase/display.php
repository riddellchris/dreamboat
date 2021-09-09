<?php
if(!isset($_SESSION)){session_start();}

echo"
<style>
.textarea_input{font-family:Comfortaa;color:#281e96;text-align:left;}
.textarea_input::placeholder{color:#281e96;}
select{font-family:Comfortaa;background-color:white;color:#281e96;}
input{font-family:Comfortaa;}
</style>
";

echo "<div style='";
	//this just makes it full page if looking at yourself essentially
		if($_SESSION['viewing_client_id'] == $_SESSION['user_id']){echo "height:120vh;";}
		else{echo "height:50vh;";}

	echo "padding:0px;background-image: linear-gradient( to top ,#f75b52 , yellow)'>";
	echo"	<div class='details-font' style='font-family:Monda;color: blue;text-transform:uppercase;padding-top:0px;font-size:2em;'>knowledgebase</div>";

	

		require $_SERVER['DOCUMENT_ROOT']."/components/knowledgebase/sub_menu/display.php";
	
	
		if($_SESSION['knowledgebase_sub_menu'] == 'view existing'){		
			$sql = "SELECT DISTINCT category FROM knowledgebase 
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
				echo "<form method='post' action='/components/knowledgebase/change_category.php'>";
					echo "<select class='secure_input' name = 'category' rows='22' style='width: 100%;'  onchange='this.form.submit()' autocomplete='off'>";	
						echo "<option>.... select a category</option>";					
						while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
							echo "<option";
								if($_SESSION['displaying_knowledgebase_category'] == $row['category']){echo " selected ";}
								echo ">";
								echo $row['category'];
			
						
							echo "</option>";			
						}
					echo "</select>";
				echo "</form>";
				
				
				echo "<form method='post' action='/components/knowledgebase/change_title.php'>";					
					if(isset($_SESSION['displaying_knowledgebase_category'])){			
						echo "<select class='secure_input' name = 'title' rows='22' style='width: 100%;'  onchange='this.form.submit()' autocomplete='off'>";
						echo "<option>.... select a title to view</option>";	
							$sql = "SELECT * FROM knowledgebase 
								WHERE 	primary_folder = '".$_SESSION['primary_folder']."'
								AND	secondary_folder = '".$_SESSION['secondary_folder']."'
								AND	tertiary_folder = '".$_SESSION['tertiary_folder']."'";
								if($_SESSION['final_file_name']  == 'view_history'){$sql .= " AND item_id = '".$_SESSION['item_id_from_url']."'";}					
							$sql .= "
								AND	category = '".$_SESSION['displaying_knowledgebase_category']."'								
								ORDER BY views DESC";
							require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
							$result = mysqli_query($conn, $sql);						
							while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
								echo "<option";
								if($_SESSION['displaying_knowledgebase_title'] == $row['title']){echo " selected ";}
								echo ">";
									echo $row['title'];
				
							
								echo "</option>";			
							}						
						echo "</select>";				
				echo "</form>";		
						
					if(isset($_SESSION['displaying_knowledgebase_title'])){
							$sql = "SELECT * FROM knowledgebase 
								WHERE 	primary_folder = '".$_SESSION['primary_folder']."'
								AND	secondary_folder = '".$_SESSION['secondary_folder']."'
								AND	tertiary_folder = '".$_SESSION['tertiary_folder']."'";
								if($_SESSION['final_file_name']  == 'view_history'){$sql .= " AND item_id = '".$_SESSION['item_id_from_url']."'";}					
							$sql .= "
								AND	category = '".$_SESSION['displaying_knowledgebase_category']."'								
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
				echo "<div style='margin-top:15vh;text-align:center;' class ='prompt-font'>sorry there&#39;s no<br> wisdom here yet<br><a href='/components/knowledgebase/sub_menu/change.php?to=add' style='color:red;'>Add something here>></a></div>";
			}

		
			
		}
		if($_SESSION['knowledgebase_sub_menu'] == 'add to'){		
			echo "<form method='post' action='/components/knowledgebase/add.php'>";
			
			$sql = "SELECT DISTINCT category FROM knowledgebase 
				WHERE 	primary_folder = '".$_SESSION['primary_folder']."'
				AND	secondary_folder = '".$_SESSION['secondary_folder']."'
				AND	tertiary_folder = '".$_SESSION['tertiary_folder']."'";
			if($_SESSION['final_file_name']  == 'view_history'){$sql .= " AND item_id = '".$_SESSION['item_id_from_url']."'";}		
			$sql .= "	
				ORDER BY category DESC";
			require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
			$result = mysqli_query($conn, $sql);			
			
			if(mysqli_num_rows($result) > 0){
			
				echo "<select class='textarea_input' name = 'category' rows='22' style='width: 100%;'>
						<option value='untouched'>Select an existing category</option>";
					
						while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
							echo "<option value='".$row['category']."'>";
								echo $row['category'];
			
						
							echo "</option>";			
						}
	
				echo "</select>";
				echo "<br>OR<br>";	
			
			}
			echo "<input autocomplete='off' class='secure_input' name = 'new_category' style='width: 100%;' placeholder='enter new category name'></input>";	
			echo "<br>AND<br>";	
			echo "<input class='secure_input' name = 'title' style='width: 100%;' placeholder='add a title' autocomplete='off'></input>";				
			echo "<textarea  autocomplete='off' class='textarea_input' name = 'wisdom' rows='15' style='width:calc(25%-60px);' placeholder='&#10;&#10;&#10;&#10;&#10;&#10;&#10;now add some wisdom :)'></textarea>";
			echo "<input class='login-submit' type='submit' style='width:100%;' value='add'></input>";	
		}	
	

		echo "</form>";
	
	
		

echo "</div>";
?>