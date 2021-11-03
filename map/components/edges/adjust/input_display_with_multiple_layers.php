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
	WHERE client_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' 
	ORDER BY entry_id DESC LIMIT 1"; // select column
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


if($row['kpi_1_title'] != ''){$kpi_1_title = $row['kpi_1_title'];}else{$kpi_1_title = 'KPI #1';}
if($row['kpi_2_title'] != ''){$kpi_2_title = $row['kpi_2_title'];}else{$kpi_2_title = 'KPI #2';}
if($row['kpi_3_title'] != ''){$kpi_3_title = $row['kpi_3_title'];}else{$kpi_3_title = 'KPI #3';}
if($row['kpi_4_title'] != ''){$kpi_4_title = $row['kpi_4_title'];}else{$kpi_4_title = 'KPI #4';}




//pull out the latest data and update all the values along the way

$sql = "SELECT * FROM edge_data 
	WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'
	AND relationship_id = '".mysqli_real_escape_string($conn, $_GET['item_id'])."'
	AND latest_data_for_this_edge = 'yes'
	ORDER BY entry_id DESC LIMIT 1";
//	echo $sql; exit();
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) == 1){
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$time 			= $row['time'];


		$value_array['financial_flow'] 	= $row['financial_flow'];
		$value_array['productivity'] 		= $row['productivity'];
		$value_array['productivity_improvement_potential'] 	= $row['productivity_improvement_potential'];	
		$value_array['communication'] 	= $row['communication'];
		$value_array['trust'] 			= $row['trust'];	
		$value_array['quality'] 			= $row['quality'];		
		$value_array['kpi_1'] 			= $row['kpi_1'];
		$value_array['kpi_2'] 			= $row['kpi_2'];
		$value_array['kpi_3'] 			= $row['kpi_3'];
		$value_array['kpi_4'] 			= $row['kpi_4'];
	}
}
else{
	$value_array['time']				= 0;
	$value_array['financial_flow'] 	= 0;
	$value_array['productivity'] 		= 0;
	$value_array['productivity_improvement_potential'] 	= 0;
	$value_array['communication'] 	= 0;
	$value_array['trust'] 			= 0;
	$value_array['quality'] 			= 0;		
	$value_array['kpi_1'] 			= 0;
	$value_array['kpi_2'] 			= 0;
	$value_array['kpi_3'] 			= 0;
	$value_array['kpi_4'] 			= 0;




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

		$key = 'time';
		echo "<tr class='edge_input_table_divs'>";
			echo "<td class='edge_input_table_left_hand_side'>";
				echo "Time required by user";
			echo "</td>";
			echo "<td class='edge_input_table_right_hand_side'>";
				$item_name_array[$key]  	= "time";
				$value_array[$key]			= $time; 

				$item_name 		= $item_name_array[$key]
				$value 			= $value_array[$key]
				$max_width  	= "400px";	
				$display 		= "inline-block";
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			echo "</td>";
			echo "<td>hours</td>";
		echo "</tr>";

		
		$key = 'time';
		echo "<tr class='edge_input_table_divs'>";
			echo "<td class='edge_input_table_left_hand_side'>";
				echo "Financial flow as seen by user";
			echo "</td>";
			echo "<td class='edge_input_table_right_hand_side'>";		
				$item_name_array[$key]  	= "financial_flow";
				$value_array[$key]			= $financial_flow; 

				$item_name 		= $item_name_array[$key]
				$value 			= $value_array[$key]
				$max_width  	= "400px";	
				$display 		= "inline-block";
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			echo "</td>";
			echo "<td>$</td>";
		echo "</tr>";

		
		$key = 'productivity';
		echo "<tr class='edge_input_table_divs'>";
			echo "<td class='edge_input_table_left_hand_side'>";
				echo "Productivity";
			echo "</td>";
			echo "<td class='edge_input_table_right_hand_side'>";
				$item_name_array[$key]  	= "productivity";
				$value_array[$key]			= $productivity; 

				$item_name 		= $item_name_array[$key]
				$value 			= $value_array[$key]
				$max_width  	= "400px";	
				$display 		= "inline-block";
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			echo "</td>";
			echo "<td>$/hr</td>";
		echo "</tr>";

		$key = 'productivity_improvement_potential';
		echo "<tr class='edge_input_table_divs'>";
			echo "<td class='edge_input_table_left_hand_side'>";
				echo "Monthly productivity upgrade potential";
			echo "</td>";
			echo "<td class='edge_input_table_right_hand_side'>";
				$item_name_array[$key]  	= "productivity_improvement_potential";
				$display 					= "inline-block";

				$item_name 					= $item_name_array[$key]
				$value 						= $value_array[$key]
				$max_width  				= "400px";	
				$value_array[$key]			= $productivity_improvement_potential; 
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			echo "</td>";
			echo "<td>%</td>";
		echo "</tr>";		

		$key = 'communication';
		echo "<tr class='edge_input_table_divs'>";
			echo "<td class='edge_input_table_left_hand_side'>";
				echo "Overall communication";
			echo "</td>";
			echo "<td class='edge_input_table_right_hand_side'>";
				$item_name_array[$key]  	= "communication";
				$value_array[$key]			= $communication; 
				$item_name 		= $item_name_array[$key]
				$value 			= $value_array[$key]
				$max_width  	= "400px";	
				$display 		= "inline-block";
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			echo "</td>";
			echo "<td>/10</td>";
		echo "</tr>";

		$key = 'trust';
		echo "<tr class='edge_input_table_divs'>";
			echo "<td class='edge_input_table_left_hand_side'>";
				echo "Trust score";
			echo "</td>";
			echo "<td class='edge_input_table_right_hand_side'>";
				$item_name_array[$key]  	= "trust";
				$value_array[$key]			= $trust; 
				$item_name 		= $item_name_array[$key]
				$value 			= $value_array[$key]
				$max_width  	= "400px";	
				$display 		= "inline-block";
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			echo "</td>";
			echo "<td>/10</td>";
		echo "</tr>";	

		$key = 'quality';
		echo "<tr class='edge_input_table_divs'>";
			echo "<td class='edge_input_table_left_hand_side'>";
				echo "Quality score";
			echo "</td>";
			echo "<td class='edge_input_table_right_hand_side'>";
				$item_name_array[$key]	= "quality";
				$value_array[$key]		= $quality; 
				$max_width  = "400px";	
				$display 	= "inline-block";
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			echo "</td>";
			echo "<td>/10</td>";
		echo "</tr>";		
		
		$key = 'kpi_1';
		echo "<tr class='edge_input_table_divs'>";
			echo "<td class='edge_input_table_left_hand_side'>";
				echo $kpi_1_title;
			echo "</td>";
			echo "<td class='edge_input_table_right_hand_side'>";
				$item_name_array[$key]  	= "kpi_1";
				$value_array[$key]			= $kpi_1; 
				$item_name 		= $item_name_array[$key]
				$value 			= $value_array[$key]
				$max_width  	= "400px";	
				$display 		= "inline-block";
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			echo "</td>";
			echo "<td></td>";
		echo "</tr>";

		$key = 'kpi_2';		
		echo "<tr class='edge_input_table_divs'>";
			echo "<td class='edge_input_table_left_hand_side'>";
				echo $kpi_2_title;
			echo "</td>";
			echo "<td class='edge_input_table_right_hand_side'>";
				$item_name_array[$key]  	= "kpi_2";
				$value_array[$key]			= $kpi_2; 
				$item_name 		= $item_name_array[$key]
				$value 			= $value_array[$key]
				$max_width  	= "400px";	
				$display 		= "inline-block";
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			echo "</td>";
			echo "<td></td>";
		echo "</tr>";

		$key = 'kpi_3';		
		echo "<tr class='edge_input_table_divs'>";
			echo "<td class='edge_input_table_left_hand_side'>";
				echo $kpi_3_title;
			echo "</td>";
			echo "<td class='edge_input_table_right_hand_side'>";
				$item_name_array[$key]  	= "kpi_3";
				$value_array[$key]			= $kpi_3; 
				$item_name 		= $item_name_array[$key]
				$value 			= $value_array[$key]
				$max_width  	= "400px";	
				$display 		= "inline-block";
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			echo "</td>";
			echo "<td></td>";
		echo "</tr>";

		$key = 'kpi_4';		
		echo "<tr class='edge_input_table_divs'>";
			echo "<td class='edge_input_table_left_hand_side'>";
				echo $kpi_4_title;
			echo "</td>";
			echo "<td class='edge_input_table_right_hand_side'>";
				$item_name_array[$key]  	= "kpi_4";
				$value_array[$key]		= $kpi_4; 
				$item_name 		= $item_name_array[$key]
				$value 			= $value_array[$key]
				$max_width  	= "400px";	
				$display 		= "inline-block";
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			echo "</td>";
			echo "<td></td>";
		echo "</tr>";
	echo "</table>";		
		require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/submits/standard.php";
	echo "</form>";
echo "</div>";

?>