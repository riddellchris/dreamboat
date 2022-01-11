<?php
if(!isset($_SESSION)){session_start();}
echo "<div style='height:50vh;padding:15px;'>";
	echo"	<div class='details-font' style='font-family:Monda;color:white;text-transform:uppercase;padding-top:30px;font-size:2em;'>user specific notes</div>";
	
	if(isset($_SESSION['viewing_client_id'])){
	
	$sql= "	SELECT note_details 
		FROM notes 
		WHERE 	primary_folder 		= '".$_GET['primary_folder']."'
		AND 	secondary_folder 	= '".$_GET['secondary_folder']."'
		AND 	tertiary_folder 	= '".$_GET['tertiary_folder']."'		
		AND 	item_id 		= '".$_GET['item_id']."'		
		AND 	about_user_id 		= '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'		
		AND 	last_edited_by 		= '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'		
		ORDER BY note_id DESC LIMIT 1
		";
	
	
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
	$existing_notes = $row['note_details'];
	
	echo "<form method='post' action='/components/notes/submit.php'>";
	
	echo "<style>
		.textarea_input::-webkit-input-placeholder {
		   text-align: center;
		}
		
		.textarea_input:-moz-placeholder { /* Firefox 18- */
		   text-align: center;  
		}
		
		.textarea_input::-moz-placeholder {  /* Firefox 19+ */
		   text-align: center;  
		}
		
		.textarea_input:-ms-input-placeholder {  
		   text-align: center; 
		}
	</style>";
	
	
	
	
	
	
	
	echo "<textarea class='textarea_input' name = 'notes' rows='22' style='width:calc(25%-60px);' placeholder='&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;&#10;Add notes about this person for this page.&#10;These remain private.' title='Add notes about this person for this page.&#10;These remain private.' >".$existing_notes."</textarea>";
	echo "<input class='login-submit' type='submit' style='width:100%;'></input>";
	echo "</form>";
	}
	else{
		echo "<div class='prompt-font' style='color:white;width:100%;height:100%; text-align:center;margin-top:15vh;' >Select a user</div>";
	}
	
echo "</div>";
?>