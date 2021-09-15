<?php
if(!isset($_SESSION)){session_start();}

echo "<div class='diagnostics_title green'>Relationship 'search' sql</div>";	
echo $diagnostics['relationship_search_sql'];
echo "<br><Br><br>";
echo "edges to check for display (i.e. are both nodes actually currently positioned yet?";
    echo "<table>";
        echo "<tr>";
            echo "<td>";
                echo "item_a_database";			
            echo "</td>";
            echo "<td>";
                echo "item_a_id";			
            echo "</td>";
            echo "<td>";
                echo "item_b_database";			
            echo "</td>";
            echo "<td>";
                echo "item_b_id";			
            echo "</td>";			
        echo "</tr>";
        echo "<tr>";
            echo "<td><pre>" , var_dump($diagnostics['edges_to_check_for_display']['item_a_database']) 	, "</pre></td>";			
            echo "<td><pre>" , var_dump($diagnostics['edges_to_check_for_display']['item_a_id']) 		, "</pre></td>";			
            echo "<td><pre>" , var_dump($diagnostics['edges_to_check_for_display']['item_b_database']) 	, "</pre></td>";			
            echo "<td><pre>" , var_dump($diagnostics['edges_to_check_for_display']['item_b_id']) 		, "</pre></td>";			
        echo "</tr>";
    echo "</table>";