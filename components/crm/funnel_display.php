<?php
if(!isset($_SESSION)){session_start();}


if($number_of_funnel_results != 0 AND $weighted_funnel != 0){



	echo "<div id='crm_funnel_chart' style='width: 100%; height: 300px;'></div>";
	
	if(isset($_SESSION['funnel_focus'][$_GET['secondary_folder']])){
	
		echo "<div style='color: #281e96;margin-top:100px;margin-bottom:-100px;font-family:comfortaa;'>To &#39;view all&#39; again click the colored/focussed bar for a second time</div>";
	
	}
	
	
	
	}
	
else{
	echo "<div class='prompt-font' style='width: 100%; height: 300px;	color:#281e96;margin-top:150px;margin-bottom:-150px;'>";
	
	
	if($weighted_funnel == '0'){
		echo "add <span style='color:red;'>prices and probabilities</span> to make";
		echo " TO MAKE THE FUNNEL WORK";	
	
	}
	else{
		echo "ENTER SOME ";
		echo "<a href='/components/items/add_new.php' style='color:red;'>".strip_underscores($_GET['secondary_folder'])."</a>";
		echo " TO MAKE THE FUNNEL WORK";
	}
	
	echo "</div>";



}