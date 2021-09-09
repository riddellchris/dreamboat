<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/map/components/layers/sliding/styling.php";

echo "<div id='map_engine_sliding_container'>";

    require $_SERVER['DOCUMENT_ROOT']."/map/components/nodes/present/display.php";





		echo "<div id='map_display_relationship_layer' class='map_layer'>";

       //echo "<div style='background-color:red; width:100px; height: 100px; position: absolute; top: 499; left: 600;'></div>";
			require $_SERVER['DOCUMENT_ROOT']."/map/components/edges/present/create_layer.php";


		echo "</div>";
echo "</div>";