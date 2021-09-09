<?php
if(!isset($_SESSION)){session_start();}
echo "<style>";
echo "
	.edge_input_table_divs{
		width:100%;
		text-align: center;
	}
	";
echo "</style>";
//time required by user
//period over which time required
//dollar flow to user + or -
//period over which time required
//productivity over dollar flow
//KPI1
//KPI2
//KPI3
//KPI4


//Stolen from:
///components/optimisation_engine/tracking/what_is_productivity.php
$sql = "SELECT * FROM tracking_kpi_settings 
	WHERE client_id = '".$_SESSION['viewing_client_id']."' 
	ORDER BY entry_id DESC LIMIT 1"; // select column
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


if($row['kpi_1_title'] != ''){$kpi_1_title = $row['kpi_1_title'];}else{$kpi_1_title = 'KPI #1';}
if($row['kpi_2_title'] != ''){$kpi_2_title = $row['kpi_2_title'];}else{$kpi_2_title = 'KPI #2';}
if($row['kpi_3_title'] != ''){$kpi_3_title = $row['kpi_3_title'];}else{$kpi_3_title = 'KPI #3';}
if($row['kpi_4_title'] != ''){$kpi_4_title = $row['kpi_4_title'];}else{$kpi_4_title = 'KPI #4';}




//pull out the latest data and update all the values along the way

$sql = "SELECT * FROM edge_data 
	WHERE user_id = '".$_SESSION['viewing_client_id']."'
	AND latest_data_for_this_edge = 'yes'
	ORDER BY entry_id DESC LIMIT 1";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$time 		= $row['time'];
	$financial_flow = $row['financial_flow'];
	$productivity 	= $row['productivity'];
	$communication 	= $row['communication'];
	$kpi_1 		= $row['kpi_1'];
	$kpi_2 		= $row['kpi_2'];
	$kpi_3 		= $row['kpi_3'];
	$kpi_4 		= $row['kpi_4'];
}








if($_GET['secondary_folder'] == 'edges'){				
echo "<div class='prompt-font' style='width:100%;text-align:center;font-size:smaller;'>";		
	echo "//KISS: All data is monthly for now. Use estimates as and when required<br>
	      //Add data only where actually useful & practical<br><br>";
echo "</div>";
}


//if selected an edge is selected
require $_SERVER['DOCUMENT_ROOT']."/components/tracking/input_table/styling.php";


	echo "
		<style>
		form{
		font-family: Comfortaa;
		}
		</style>
	";

	echo "<form method='post' action='/components/edges/submit.php'>";
	
		echo "<div class='edge_input_table_divs'>";
			echo "<div class='edge_input_table_left_hand_side'>";
				echo "Time required by user (hours)";
			echo "</div>";
			echo "<div class='edge_input_table_right_hand_side'>";
				$additional_classes 	= "hours";
				$item_name  		= "time";
				$max_width  		= "400px";	
				$value			= $time; 
				$display 		= "inline-block";
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			echo "</div>";
		echo "</div>";
		
		echo "<div class='edge_input_table_divs'>";
			echo "<div class='edge_input_table_left_hand_side'>";
				echo "Financial flow as seen by user ($)";
			echo "</div>";
			echo "<div class='edge_input_table_right_hand_side'>";
				$additional_classes 	= "financial_flow";			
				$item_name  	= "financial_flow";
				$max_width  	= "400px";	
				$value		= $financial_flow; 
				$display = "inline-block";
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			echo "</div>";
		echo "</div>";
		
		echo "<div class='edge_input_table_divs'>";
			echo "<div class='edge_input_table_left_hand_side'>";
				echo "Monthly productivity($/hr)";
			echo "</div>";
			echo "<div class='edge_input_table_right_hand_side'>";
				$item_name  	= "productivity";
				$max_width  	= "400px";	
				$value		= $productivity; 
				$display = "inline-block";
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			echo "</div>";
		echo "</div>";
		echo "<div class='edge_input_table_divs'>";
			echo "<div class='edge_input_table_left_hand_side'>";
				echo "Monthly productivity upgrade potential(%)";
			echo "</div>";
			echo "<div class='edge_input_table_right_hand_side'>";
				$item_name  	= "productivity";
				$max_width  	= "400px";	
				$value		= $productivity; 
				$display = "inline-block";
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			echo "</div>";
		echo "</div>";		
		echo "<div class='edge_input_table_divs'>";
			echo "<div class='edge_input_table_left_hand_side'>";
				echo "Overall communication ( /10)";
			echo "</div>";
			echo "<div class='edge_input_table_right_hand_side'>";
				$item_name  	= "communication";
				$max_width  	= "400px";	
				$value		= $communication; 
				$display = "inline-block";
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			echo "</div>";
		echo "</div>";
		echo "<div class='edge_input_table_divs'>";
			echo "<div class='edge_input_table_left_hand_side'>";
				echo "Trust score ( /10)";
			echo "</div>";
			echo "<div class='edge_input_table_right_hand_side'>";
				$item_name  	= "communication";
				$max_width  	= "400px";	
				$value		= $communication; 
				$display = "inline-block";
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			echo "</div>";
		echo "</div>";		
		echo "<div class='edge_input_table_divs'>";
			echo "<div class='edge_input_table_left_hand_side'>";
				echo $kpi_1_title;
			echo "</div>";
			echo "<div class='edge_input_table_right_hand_side'>";
				$item_name  	= "kpi_1";
				$max_width  	= "400px";	
				$value		= $kpi_1; 
				$display = "inline-block";
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			echo "</div>";
		echo "</div>";
		
		echo "<div class='edge_input_table_divs'>";
			echo "<div class='edge_input_table_left_hand_side'>";
				echo $kpi_2_title;
			echo "</div>";
			echo "<div class='edge_input_table_right_hand_side'>";
				$item_name  	= "kpi_2";
				$max_width  	= "400px";	
				$value		= $kpi_2; 
				$display = "inline-block";
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			echo "</div>";
		echo "</div>";
		
		echo "<div class='edge_input_table_divs'>";
			echo "<div class='edge_input_table_left_hand_side'>";
				echo $kpi_3_title;
			echo "</div>";
			echo "<div class='edge_input_table_right_hand_side'>";
				$item_name  	= "kpi_3";
				$max_width  	= "400px";	
				$value		= $kpi_3; 
				$display = "inline-block";
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			echo "</div>";
		echo "</div>";
		
		echo "<div class='edge_input_table_divs'>";
			echo "<div class='edge_input_table_left_hand_side'>";
				echo $kpi_4_title;
			echo "</div>";
			echo "<div class='edge_input_table_right_hand_side'>";
				$item_name  	= "kpi_4";
				$max_width  	= "400px";	
				$value		= $kpi_4; 
				$display = "inline-block";
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			echo "</div>";
		echo "</div>";
	
	
		echo "
			<input type='hidden' name='edge_id'		value=''>
			<input type='hidden' name='item_a_database'	value=''>
			<input type='hidden' name='item_a_id'		value=''>	
			<input type='hidden' name='item_b_database'	value=''>	
			<input type='hidden' name='item_b_id'		value=''>	
		
		";
	
		
		
		require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/submits/standard.php";
	echo "</form>";


?>