<?php
if(!isset($_SESSION)){session_start();}


echo "
<div style='width:100%;padding:0px;display: flow-root;min-height:50vh;margin-top:90px;'>
	<div class='features_left' style='float:left;padding:0px;padding-top: 8%;'>
		<div class='title_text' id='main_text'>
			".$feature_title."	
		</div>	  
	</div>
	<div class='features_right' style='float:left;padding:0px;'>
		<div style='font-family: helvetica;    font-size: 20px;font-weight: 800;";

if($_SESSION['secondary_folder'] == 'phone'){$hex_1 = '#ff1414';}
if($_SESSION['secondary_folder'] == 'text'){$hex_1 = '#00a2ff';}
if($_SESSION['secondary_folder'] == 'platform'){$hex_1 = 'rgb(23, 110, 29)';}
echo "color: ".$hex_1.";";
		
		
		
		echo "   padding:8%;'>
			<div style='margin-left:2%;margin-right:2%;margin-bottom:4vh;'>
				".$introductory_text."
				<br><br>
				<span style='font-weight:400; font-size:16px;'>".$detailed_text."</span>
			</div>
		</div>";
		
		//this should run for each required accordian...
		//not required now
		/*
		echo "
		<button class='day_collapsible' style='border-radius: 0px 25px 0px 0px;color:#017c0d;background-image:linear-gradient(to right, #FFFFFF 0%, #58ef66 100%);'>".$accordian_title."</button>
			<div class='day_content' style='background-color:#58ef66;color:#176e1d;'>
	 			".$accordian_content."
			</div>
		<div style='height:20px;'></div>
		";*/
		
		//images, dummy charts, interactive "bits" and even "full width accordians would be awesome but not critical now
		
		echo "
	</div>
</div>";


//not required until accordians are actually used..
//as you will see within the script these need to be at the bottom of any page
//require_once $_SERVER['DOCUMENT_ROOT']."/components/content/features_box/accordian_scripts.php";
?>

