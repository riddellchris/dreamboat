<?php
if(!isset($_SESSION)){session_start();}

echo "<div name='principle_arrays_setup_container'>
<div class='diagnostics_title green'>PRINCIPLE ARRAYS SETUP
</div>";
echo "<table>";
	echo "<tr>";
		echo "<td style='vertical-align:top;'>";
			echo "NODES ARRAY";
			echo "<pre>" , var_dump($diagnostics['basic_nodes_array_setup']) , "</pre>";
		echo "</td>";
		echo "<td style='vertical-align:top;'>";
			echo "EDGES ARRAY";
			echo "<pre>" , var_dump($diagnostics['basic_edges_array_setup']) , "</pre>";
		echo "</td>";
		echo "<td style='vertical-align:top;'>";
			echo "TRIGGERS ARRAY";
			echo "<pre>" , var_dump($diagnostics['basic_triggers_array_setup']) , "</pre>";
		echo "</td>";
		echo "<td style='vertical-align:top;'>";
			echo "DIAGNOSTICS ARRAY";
			//echo "<pre>" , var_dump($diagnostics) , "</pre>";
		echo "</td>";
	echo "</tr>";
echo "</table>";
echo "</div>";