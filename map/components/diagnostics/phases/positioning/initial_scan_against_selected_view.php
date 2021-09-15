<?php
if(!isset($_SESSION)){session_start();}

echo "<div class='diagnostics_title green'>positioned nodes - search for those positioned for the current view</div>";
echo $diagnostics['positioned_node_sql'];

$map_triggers['positioned_node_count'] = mysqli_num_rows($result);

if($map_triggers['positioned_node_count'] != 0){






	echo "<div class='diagnostics_title green'>therefore those positioned nodes - all_items_id</div>";
	echo "<pre>" , var_dump($diagnostics['positioned_ids']) , "</pre></td>";		

	echo "<div class='diagnostics_title green'>therefore those positioned nodes - all_items_id, database and other id</div>";	

	echo "<table>";
		echo "<tr>";
			echo "<td>";
				echo "all_items_id";			
			echo "</td>";
			echo "<td>";
				echo "database";			
			echo "</td>";
			echo "<td>";
				echo "other_id";			
			echo "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>";
				echo "<pre>" , var_dump($diagnostics['positioned_node_details']['all_items_id']) , "</pre>";				
			echo "</td>";
			echo "<td>";
				echo "<pre>" , var_dump($diagnostics['positioned_node_details']['database']) , "</pre>";				
			echo "</td>";
			echo "<td>";
				echo "<pre>" , var_dump($diagnostics['positioned_node_details']['id']) , "</pre>";				
			echo "</td>";
		echo "</tr>";
	echo "</table>";

}
else{

	echo "<div class='diagnostics_title red'>there should be no positioned nodes</div>";
}