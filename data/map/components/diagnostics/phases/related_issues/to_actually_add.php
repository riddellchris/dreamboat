<?php
if(!isset($_SESSION)){session_start();}

//therefore nodes to add
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
        echo "<td><pre>" , var_dump($diagnostics['related_issues_to_add']['database']) 			, "</pre></td>";
        echo "<td><pre>" , var_dump($diagnostics['related_issues_to_add']['id']) 				, "</pre></td>";		
        echo "<td><pre>" , var_dump($diagnostics['related_issues_to_add']['primary_folder']) 	, "</pre></td>";			
        echo "<td><pre>" , var_dump($diagnostics['related_issues_to_add']['secondary_folder']) 	, "</pre></td>";			
        echo "<td><pre>" , var_dump($diagnostics['related_issues_to_add']['title']) 			, "</pre></td>";			
        echo "<td><pre>" , var_dump($diagnostics['related_issues_to_add']['items_all_id']) 		, "</pre></td>";			
    echo "</tr>";
echo "</table>";