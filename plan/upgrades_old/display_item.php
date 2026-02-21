<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/design/box.php";


$primary_folders_name = primary_folders_name();
$primary_folders_url = primary_folders_url();
$_SESSION['improvements_last_on'] = 'item';


echo "	<div class='big-div' style ='display: table; width:100%;     box-sizing: border-box; text-align:center;overflow: hidden;'>
		<div style ='display: table-cell;'>"; //vertical-align: middle; has been removed from the normal centering divs
		echo "<div style='margin-top:20px;'>&nbsp;</div>";		
		echo "<a href='".$primary_folders_url."' class='login-submit' style='margin-top:40px;'>back to all ".$primary_folders_name."</a>";



$_GET['item_type'];
$cleaned_item_id = mysqli_real_escape_string($conn, $_GET['item_id']);
 $sql = "SELECT * FROM ".$primary_folders_name." WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' AND item_id = '".$cleaned_item_id."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


		echo "<div style='height:25px;'></div>";

		echo "<div style='position: relative;max-width:1100px;padding: 100px 0px;width:100%;color:#fff;display: inline-block;font-family:Monda;font-size:24px;    background-image: linear-gradient(".$row['degrees']."deg, ".$row['background_color'].", ".$row['contrast_color'].");'>";
echo "<style>
.corner-link{color:#281e96;background-color:rgba(238, 238, 238, 0.6);padding:6px;text-decoration:none;}
.corner-link:hover{color:#4332ff;background-color:rgba(238, 238, 238, 1);}
</style>";		

				echo "<div class='bottom-left'>";
					if($row['item_status'] != 'deleted'){echo "
						<a class='corner-link' href='/improvements/alter/delete.php?item_id=".$row['item_id']."'>DELETE ".$row['item_type']."</a>";
					}
					else{
						echo "<a class='corner-link' href='/improvements/alter/undelete.php?item_id=".$row['item_id']."'>DELETE ".$row['item_type']."</a>";
					}
				echo "</div>";
			
			
			echo "<div class='top-left'>";
				if($row['mode'] != 'completed'){echo "<a class='corner-link' href='/improvements/alter/resolved.php?item_id=".$row['item_id']."'>MARK completed</a>";}
				//else{echo "<a class='corner-link'  href='/improvements/alter/not_resolved.php?item_id=".$row['item_id']."'>MARK NOT removed</a>";}
			echo "</div>";
			
			
			echo "<div class='top-right'>";
			echo "</div>";
			echo "<div class='bottom-right'>";
			echo "</div>";
			echo "<div class='centered' style='color:".$text[$color_combo]."'>".ucfirst($row['title'])."</div>";
	
			echo $row['prompt'];

		echo "</div>";
	echo "<div id='wheelhouse_item_core' style='margin:auto;max-width:1100px;padding-top:10px;'>";
		if($row['item_why'] != ''){
		

		echo "<div style='width:100%; text-align:left;background-color:white;font-size:1.3em;padding:10px;max-width:1100px;'>";
		echo "<span style='text-transform:uppercase;color:#281e96;font-family: Helvetica;'>Description</span><br>";
		echo $row['item_why'];
		echo "<br></div>";
		
		}
	
		echo "<div id='wheelhouse_item_core_left_hand_side' style='display: none;width:15%;float:left;'>";	 // make display:block to make it work now
		echo "&nbsp;";	
		echo "</div>";	
		echo "<div id='wheelhouse_item_core_center' style='display:block;width:100%;float:left;max-width:1100px;'>";	//make width: 70% when brining others in 			
?>

<div style='text-align: center;'>
	<div style='width:100%;max-width:1100px;display: inline-block;padding: 0px 0px;'>
		<div style='width:100%;padding: 3px 0px;color:#fff;display:block;float: left;min-height: 40px;'>
		

		
<style>
.make-discussion-input::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #878787;
  opacity: 1; /* Firefox */
}

.make-discussion-input:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #878787;
}

.make-discussion-input::-ms-input-placeholder { /* Microsoft Edge */
  color: #878787;
}

#discussion_submit{background-color:#281e96;}
#discussion_submit:hover{background-color:#4332ff;}

</style>		
<?php		
require $_SERVER['DOCUMENT_ROOT']."/components/discussion/display.php";
?>








<?php

echo "</div>";
echo "</div>";
		echo "</div>";				
		echo "<div id='wheelhouse_item_core_right_hand_side' style='display: none;width:15%;float:left;'>"; //make display:block to show
		echo "&nbsp;";						
/*			echo "shared with";
			echo "<br>checkin dates";
			echo "<br>attachments";*/
		echo "</div>";	
	echo "</div>";	



	
	echo "</div>";	

$_SESSION['last_wheelhouse_item_url'] = $_SERVER['REQUEST_URI'];

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
