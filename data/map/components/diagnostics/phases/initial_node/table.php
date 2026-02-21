<?php
if(!isset($_SESSION)){session_start();}

echo "<div class='diagnostics_title green''>THERE ARE ".$map_triggers['initial_node_count']." INITIAL NODES TO DISPLAY - SEE SQL QUERY ABOVE</div>";
echo "INITIAL NODES FOR THIS MAP - NOT INCLUDING ISSUES";

echo "<table>";
	echo "<tr>";
		echo "<td>";
			echo "Database";
		echo "</td>";
		echo "<td>";
			echo "id";		
		echo "</td>";
		echo "<td>";
			echo "primary_folder";			
		echo "</td>";
		echo "<td>";
			echo "secondary_folder";			
		echo "</td>";
		echo "<td>";
			echo "title";			
		echo "</td>";
		echo "<td>";
			echo "items_all_id";			
		echo "</td>";	
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
			echo '<pre>' , var_dump($diagnostics['initial_node_array']['database']) , '</pre>';
		echo "</td>";
		echo "<td>";
			echo '<pre>' , var_dump($diagnostics['initial_node_array']['id']) , '</pre>';		
		echo "</td>";
		echo "<td>";
			echo '<pre>' , var_dump($diagnostics['initial_node_array']['primary_folder']) , '</pre>';			
		echo "</td>";
		echo "<td>";
			echo '<pre>' , var_dump($diagnostics['initial_node_array']['secondary_folder']) , '</pre>';			
		echo "</td>";
		echo "<td>";
			echo '<pre>' , var_dump($diagnostics['initial_node_array']['title']) , '</pre>';				
		echo "</td>";
		echo "<td>";
			echo '<pre>' , var_dump($diagnostics['initial_node_array']['items_all_id']) , '</pre>';				
		echo "</td>";
	echo "</tr>";
echo "</table>";