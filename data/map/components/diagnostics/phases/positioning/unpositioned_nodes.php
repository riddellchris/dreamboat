<?php
if(!isset($_SESSION)){session_start();}

echo "<div class='diagnostics_title green'>therefore those <b>UN</b>positioned nodes - all_items_id, database and other id</div>";	

echo "<table>";
    echo "<tr>";
        echo "<td>";
            echo "database <br> (just to check)";
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
        echo "<td><pre>" , var_dump($diagnostics['unpositioned_nodes']['database']) 		, "</pre>";
        echo "<td><pre>" , var_dump($diagnostics['unpositioned_nodes']['id']) 				, "</pre></td>";		
        echo "<td><pre>" , var_dump($diagnostics['unpositioned_nodes']['primary_folder']) 	, "</pre></td>";			
        echo "<td><pre>" , var_dump($diagnostics['unpositioned_nodes']['secondary_folder']) , "</pre></td>";			
        echo "<td><pre>" , var_dump($diagnostics['unpositioned_nodes']['title']) 			, "</pre></td>";			
        echo "<td><pre>" , var_dump($diagnostics['unpositioned_nodes']['items_all_id']) 	, "</pre></td>";			
    echo "</tr>";
echo "</table>";


