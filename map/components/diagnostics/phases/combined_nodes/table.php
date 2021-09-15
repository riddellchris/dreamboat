<?php
if(!isset($_SESSION)){session_start();}

echo "<div class='diagnostics_title green'>combined nodes - (including related issues if relevant)</div>";

echo "<table>";
	echo "<tr>";
		echo "<td>database <br> (just to check)";
		echo "</td>";
		echo "<td>id";		
		echo "</td>";
		echo "<td>primary_folder";			
		echo "</td>";
		echo "<td>secondary_folder";			
		echo "</td>";		
	echo "</tr>";
	echo "<tr>";
		echo "<td><pre>" , var_dump($diagnostics['all_nodes_to_display']['database']) 			, "</pre></td>";
		echo "<td><pre>" , var_dump($diagnostics['all_nodes_to_display']['id']) 				, "</pre></td>";		
		echo "<td><pre>" , var_dump($diagnostics['all_nodes_to_display']['primary_folder']) 	, "</pre></td>";			
		echo "<td><pre>" , var_dump($diagnostics['all_nodes_to_display']['secondary_folder']) 	, "</pre></td>";			
	echo "</tr>";
echo "</table>";


