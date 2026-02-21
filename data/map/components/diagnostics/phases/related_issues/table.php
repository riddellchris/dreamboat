<?php
if(!isset($_SESSION)){session_start();}


echo "<div class='diagnostics_title green'>initial nodes and their related issues </div>";
echo "INITIAL NODES AND THE ISSUES THEY RELATE TO";
//connected issues array table
echo "<table>";
    echo "<tr>";
        echo "<td>";
            echo "initial node database";			
        echo "</td>";
        echo "<td>";
            echo "initial node id";			
    echo "</td>";
    echo "<td>";
            echo "issues database <br> (just to check)";
        echo "</td>";
        echo "<td>";
            echo "issues id";		
        echo "</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td><pre>" , var_dump($diagnostics['connected_issues_and_nodes_array']['primary_node_database']) 	, "</pre></td>";			
        echo "<td><pre>" , var_dump($diagnostics['connected_issues_and_nodes_array']['primary_node_id']) 		, "</pre></td>";		
        echo "<td><pre>" , var_dump($diagnostics['connected_issues_and_nodes_array']['database']) 				, "</pre></td>";
        echo "<td><pre>" , var_dump($diagnostics['connected_issues_and_nodes_array']['id']) 					, "</pre></td>";
    echo "</tr>";
echo "</table>";