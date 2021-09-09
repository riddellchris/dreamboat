<?php
if(!isset($_SESSION)){session_start();}

echo "
<style>
#map_engine_sliding_container{
	position: relative;
	z-index:-2000;
	width:20000px; 
	height: 20000px;
}
#body:fullscreen 	#map_engine_sliding_container{  background-color: white;}
</style>

";

echo "<div id='map_engine_sliding_container'>";
	if($display_chart == 'yes'){
		echo "
		<style>

		#map_container{
			width: 					100vw; 
			z-index:				-2000;
			margin-left: 			auto;
			margin-right: 			auto;";
			/* important part */
			echo "
			display: 				grid;
			place-items: 			center;
			grid-template-areas:	'inner-div';
			";

            //just because of the bottom menu issue
            if($_SESSION['dreamboat_crew'] == 'yes'){	echo "height: 70vh;";}
            else{										echo "height: 75vh;";}
            //if change this then need to change the position setting further down the page
			
echo "		}";

	//make 25 x 25 grid of the sizes for the map container
	// from 2500 - 500 px using steps of 100px

	//threfore we will also make this many matching versions of the div positions to match that for each relationship
	//this will therefore allow for clickable divs






	echo "
		.map_layer{
			height: 100%;
			width: 100%;
			/* important part */
			grid-area: inner-div;
										
			}
			</style>";


	echo "<div id='map_container'>";
		//	echo "<div id='chart_div' class='map_layer'></div>";


		//now find max and mins of x and y coordinates
		$x_max = max($nodes['x_coordinate]);echo"<br>";
		$x_min = min($nodes['x_coordinate]);echo"<br>";
		$y_max = max($nodes['y_coordinate]);echo"<br>";
		$y_min = min($nodes['y_coordinate]);echo"<br>";

	$x_range = $x_max - $x_min;
	$y_range = $y_max - $y_min;


	echo "<style>
	.issues{color: red;}
	.issues:hover{color: #bf0000; text-decoration:none;}

	.standard_node{color: #4332ff;}
	.standard_node:hover{color: #1302cf; text-decoration:none;}
	</style>
	";

		echo "<div id='map_display_name_overlay' class='map_layer'>";
			for($k = 0; $k <= count($nodes['database']) ; $k ++){
			//taken from print_data_table
				$x = $nodes['x_coordinate][$k];			
				$y = $nodes['y_coordinate][$k];

				//not part of the original script bit so it's added here 
				$nodes['display_margin_x][$k] = (($x - $x_min) / $x_range);
				$nodes['display_margin_y][$k] = (($y_max - $y) / $y_range);
			
				$x_display_margin = $nodes['display_margin_x][$k];

				if($_SESSION['dreamboat_crew'] == 'yes'){$map_vh_size = 70;}	else{$map_vh_size = 75;}
				$y_display_margin = $nodes['display_margin_y][$k];

				$margin_left = 95 * $x_display_margin;
				$margin_top  = $map_vh_size * $y_display_margin;

		//function create_go_to_link($db, $item_id){return " '/components/items/go_to.php?db=".$db."&item_id=".$item_id."' ";}	

				//get all the titles out and position them appropriately



				echo "<a 
				
					class='";
				if($database == 'issues'){echo " issues ";}
				else{echo " standard_node ";}	               
					echo "'
					href='".$nodes['link][$k]."'
							style ='margin-left: ".$margin_left."%;
									margin-top: ".$margin_top."vh;
									z-index: 2000;
									font-family: Barlow Semi Condensed;
									font-weight: 600;
									position: absolute;'

		


						
							target='_blank'>".$nodes['title][$k]."</a>"; 

				//dots go underneath this
				//then we make the lines to match

			}

			//echo '<pre>' , var_dump($nodes['link]) , '</pre>';


		echo "</div>";

		if($_SESSION['dreamboat_crew'] == 'yes'){
		echo "<div id='map_display_relationship_layer' class='map_layer'>";
			require $_SERVER['DOCUMENT_ROOT']."/map/components/edges/create_layer.php";


		echo "</div>";
		}




	echo "</div>";

		}

echo "</div>";
