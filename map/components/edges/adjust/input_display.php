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
	AND relationship_id = '".$_GET['item_id']."'
	AND latest_data_for_this_edge = 'yes'
	ORDER BY entry_id DESC LIMIT 1";
//	echo $sql; exit();
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) == 1){
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$time 			= $row['time'];


		$financial_flow 	= $row['financial_flow'];
		$productivity 		= $row['productivity'];
		$productivity_improvement_potential 	= $row['productivity_improvement_potential'];	
		$communication 		= $row['communication'];
		$trust 				= $row['trust'];	
		$quality 			= $row['quality'];		
		$kpi_1 				= $row['kpi_1'];
		$kpi_2 				= $row['kpi_2'];
		$kpi_3 				= $row['kpi_3'];
		$kpi_4 				= $row['kpi_4'];
	}
}
else{
	$time 				= 0;
	$financial_flow 	= 0;
	$productivity 		= 0;
	$productivity_improvement_potential 	= 0;
	$communication 		= 0;
	$trust 				= 0;
	$quality 			= 0;		
	$kpi_1 				= 0;
	$kpi_2 				= 0;
	$kpi_3 				= 0;
	$kpi_4 				= 0;




}




if($_GET['secondary_folder'] == 'edges'){				
echo "<div class='prompt-font' style='width:100%;text-align:center;font-size:smaller;'>";		
	echo "<a style='color:red;' target='_blank' href='/knowledgebase/current_service/phases_of_engagement/'>CRITICAL MAPPING:</a><br>
	Monthly data<br> estimates OK within +/- 10%
	<br>
Add data only where actually useful & practical
<br>
<span style='color:grey;'>Variables tracked may change as model improves<br></span>
<br>";
	      
	      //keeping it monthly obviously allows us to really get stuck into taking data and cleaning it out from the external systems:
	      //Xero, harvest, AroFlo etc etc.
	      //Most of these logos are within the external system
	      
echo "</div>";
}


//if selected an edge is selected
require $_SERVER['DOCUMENT_ROOT']."/components/tracking/input_table/styling.php";


	echo "
		<style>
		.edge_data_form{
			font-family: Comfortaa;
			text-align: center;
			
		}
		.edge_input_table_divs{
			
		}
		table{
			border: 	none; 
			cellspacing:	0; 
			cellpadding:	0;
			border-collapse: collapse; //this is the critical one to remove that annoying gap
			}
		td{border: 	none; }
		tr{	border: 	none; 
			padding-left: 10px; }	
		tr:nth-child(even) {background-image: linear-gradient(to right, #F6F2F2,#D9D9D9);}
		.edge_input_table_left_hand_side{
			color: #281e96;
			text-align: right;
		}
		.edge_input_table_right_hand_side{
			float: right;
		}		
		</style>
	";

echo "<div style='width:100%;text-align:center;'>";
	echo "<form class='edge_data_form' method='post' action='/map/components/edges/adjust/submit.php?item_id=".$_GET['item_id']."'>";
		echo "<table style='display:inline-block; '>";
		echo "<tr class='edge_input_table_divs'>";
			echo "<td class='edge_input_table_left_hand_side'>";
				echo "Time required by user";
			echo "</td>";
			echo "<td class='edge_input_table_right_hand_side'>";
				$item_name  		= "time";
				$max_width  		= "400px";	
				$value			= $time; 
				$display 		= "inline-block";
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			echo "</td>";
			echo "<td>hours</td>";
		echo "</tr>";
		
		echo "<tr class='edge_input_table_divs'>";
			echo "<td class='edge_input_table_left_hand_side'>";
				echo "Financial flow as seen by user";
			echo "</td>";
			echo "<td class='edge_input_table_right_hand_side'>";		
				$item_name  		= "financial_flow";
				$max_width  		= "400px";	
				$value			= $financial_flow; 
				$display 		= "inline-block";
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			echo "</td>";
			echo "<td>$</td>";
		echo "</tr>";
		
		echo "<tr class='edge_input_table_divs'>";
			echo "<td class='edge_input_table_left_hand_side'>";
				echo "Productivity";
			echo "</td>";
			echo "<td class='edge_input_table_right_hand_side'>";
				$item_name  	= "productivity";
				$max_width  	= "400px";	
				$value		= $productivity; 
				$display 	= "inline-block";
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			echo "</td>";
			echo "<td>$/hr</td>";
		echo "</tr>";
		echo "<tr class='edge_input_table_divs'>";
			echo "<td class='edge_input_table_left_hand_side'>";
				echo "Monthly productivity upgrade potential";
			echo "</td>";
			echo "<td class='edge_input_table_right_hand_side'>";
				$item_name  	= "productivity_improvement_potential";
				$max_width  	= "400px";	
				$value		= $productivity_improvement_potential; 
				$display 	= "inline-block";
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			echo "</td>";
			echo "<td>%</td>";
		echo "</tr>";		
		echo "<tr class='edge_input_table_divs'>";
			echo "<td class='edge_input_table_left_hand_side'>";
				echo "Overall communication";
			echo "</td>";
			echo "<td class='edge_input_table_right_hand_side'>";
				$item_name  	= "communication";
				$max_width  	= "400px";	
				$value		= $communication; 
				$display = "inline-block";
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			echo "</td>";
			echo "<td>/10</td>";
		echo "</tr>";
		echo "<tr class='edge_input_table_divs'>";
			echo "<td class='edge_input_table_left_hand_side'>";
				echo "Trust score";
			echo "</td>";
			echo "<td class='edge_input_table_right_hand_side'>";
				$item_name  	= "trust";
				$max_width  	= "400px";	
				$value		= $trust; 
				$display = "inline-block";
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			echo "</td>";
			echo "<td>/10</td>";
		echo "</tr>";	
		echo "<tr class='edge_input_table_divs'>";
			echo "<td class='edge_input_table_left_hand_side'>";
				echo "Quality score";
			echo "</td>";
			echo "<td class='edge_input_table_right_hand_side'>";
				$item_name	= "quality";
				$max_width  = "400px";	
				$value		= $quality; 
				$display 	= "inline-block";
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			echo "</td>";
			echo "<td>/10</td>";
		echo "</tr>";			
		echo "<tr class='edge_input_table_divs'>";
			echo "<td class='edge_input_table_left_hand_side'>";
				echo $kpi_1_title;
			echo "</td>";
			echo "<td class='edge_input_table_right_hand_side'>";
				$item_name  	= "kpi_1";
				$max_width  	= "400px";	
				$value		= $kpi_1; 
				$display = "inline-block";
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			echo "</td>";
			echo "<td></td>";
		echo "</tr>";
		
		echo "<tr class='edge_input_table_divs'>";
			echo "<td class='edge_input_table_left_hand_side'>";
				echo $kpi_2_title;
			echo "</td>";
			echo "<td class='edge_input_table_right_hand_side'>";
				$item_name  	= "kpi_2";
				$max_width  	= "400px";	
				$value		= $kpi_2; 
				$display = "inline-block";
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			echo "</td>";
			echo "<td></td>";
		echo "</tr>";
		
		echo "<tr class='edge_input_table_divs'>";
			echo "<td class='edge_input_table_left_hand_side'>";
				echo $kpi_3_title;
			echo "</td>";
			echo "<td class='edge_input_table_right_hand_side'>";
				$item_name  	= "kpi_3";
				$max_width  	= "400px";	
				$value		= $kpi_3; 
				$display = "inline-block";
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			echo "</td>";
			echo "<td></td>";
		echo "</tr>";
		
		echo "<tr class='edge_input_table_divs'>";
			echo "<td class='edge_input_table_left_hand_side'>";
				echo $kpi_4_title;
			echo "</td>";
			echo "<td class='edge_input_table_right_hand_side'>";
				$item_name  	= "kpi_4";
				$max_width  	= "400px";	
				$value		= $kpi_4; 
				$display = "inline-block";
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			echo "</td>";
			echo "<td></td>";
		echo "</tr>";
	echo "</table>";		
		require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/submits/standard.php";
	echo "</form>";
echo "</div>";

?>