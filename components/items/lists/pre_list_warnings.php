<?php
if(!isset($_SESSION)){session_start();}

echo "<div style='width:100%; text-align:center;'>";		
	if(	$_GET['tertiary_folder'] == 'future_questions' OR 
		$_GET['tertiary_folder'] == 'general_notes'){
			echo "<span class='pilots_eyes_only_font'>";
				echo "THIS IS FOR THE CURRENT CLIENT ONLY <BR> AND NOT shared with clients";
			echo "</span>";
	}
	if(	$_GET['secondary_folder'] == 'homework' && 
		$_SESSION['dreamboat_crew'] == 'yes' ){
			echo "<span class='pilots_eyes_only_font'>";
				echo "AS A PILOT <BR>getting this right the is the priority & focus";
			echo "</span>";
	}
	if(	$_GET['primary_folder'] == 'sales' && 
		$_GET['secondary_folder'] == 'recurring_sales'){
		require $_SERVER['DOCUMENT_ROOT']."/components/crm/recurring_sales_total.php";
	}
echo "</div>";