<?php
if(!isset($_SESSION)){session_start();}

echo "
<style>
.diagnostics_div{
    position: relative;
    top: 150;
    left: 300;
	width: calc(100% - 600px);

}
</style>
";



echo "<div class='diagnostics_div'>";
        echo "<table><tr><td style='vertical-align:top;'>";
                echo "NODES ARRAY";
                echo '<pre>' , var_dump($diagnostics['basic_nodes_array_setup']) , '</pre>';
            echo "</td><td style='vertical-align:top;'>";
                echo "EDGES ARRAY";
                echo '<pre>' , var_dump($diagnostics['basic_edges_array_setup']) , '</pre>';
            echo "</td></tr></table>";


echo $diagnostics['principle_nodes_sql'];
echo "<br>";
echo "<br>";
echo "<br>";

    echo "CRITICAL NODES FOR THIS ARRAY";

//initial nodes array table
require $_SERVER['DOCUMENT_ROOT']."/map/components/diagnostics/arrays/initial_critical_nodes.php";

if(	$_SESSION['current_issues_setting'] == 'issues_on' ){

	echo "<br><BR><BR>";
		echo "<div style='width: 100%; background-color: green; color: white;'>INCLUDING RELATED ISSUES</div>";

		echo $sql_to_find_related_issues;
		//related issues display
		//including those that it is connected to


	echo "<br><br><br>connected nodes and the issues they link to";
	//connected issues array table
	echo "<table>";
		echo "<tr>";
			echo "<td>";
				echo "issues database <br> (just to check)";
			echo "</td>";
			echo "<td>";
				echo "issues id";		
			echo "</td>";
			echo "<td>";
				echo "related node database";			
			echo "</td>";
			echo "<td>";
				echo "related node id";			
			echo "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['connected_issues_and_nodes_array']['database']) , '</pre>';
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['connected_issues_and_nodes_array']['id']) , '</pre>';		
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['connected_issues_and_nodes_array']['primary_node_database']) , '</pre>';			
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['connected_issues_and_nodes_array']['primary_node_id']) , '</pre>';			
			echo "</td>";
		echo "</tr>";
	echo "</table>";


	if(count($diagnostics['connected_issues_and_nodes_array']['database']) != 0){
		echo "<div style='background-color: orange;' class='blink_me'>
		THEREFORE THERE MUST BE <span style='font-size:xx-large;'>".count($diagnostics['connected_issues_and_nodes_array']['database'])." edges</span> displaying on the chart if they are all positioned linking just the issues to other nodes
		</div>";

	}


	//therefore nodes to add
	echo '<pre>' , var_dump($diagnostics['issues_to_add']) , '</pre>';
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
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['issues_to_add']['database']) , '</pre>';
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['issues_to_add']['id']) , '</pre>';		
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['issues_to_add']['primary_folder']) , '</pre>';			
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['issues_to_add']['secondary_folder']) , '</pre>';			
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['issues_to_add']['title']) , '</pre>';			
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['issues_to_add']['items_all_id']) , '</pre>';			
			echo "</td>";
		echo "</tr>";
	echo "</table>";



}
else{

	echo "<div style='width: 100%; background-color: red; color: white;'>not INCLUDING RELATED ISSUES</div>";

}


//therefore total nodes


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
			
		echo "</tr>";
		echo "<tr>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['all_nodes_to_display']['database']) , '</pre>';
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['all_nodes_to_display']['id']) , '</pre>';		
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['all_nodes_to_display']['primary_folder']) , '</pre>';			
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['all_nodes_to_display']['secondary_folder']) , '</pre>';			
			echo "</td>";

		echo "</tr>";
	echo "</table>";

//then see if currently positioned
//nodes/compile/find positioned

if(!is_null($diagnostics['positioned_ids'])){
	echo "<br><br><br>positioned nodes - all_items_id's";
echo '<pre>' , var_dump($diagnostics['positioned_ids']) , '</pre>';		

	echo "<br><br><br>positioned nodes - database and other id";
echo '<pre>' , var_dump($diagnostics['positioned_node_details']) , '</pre>';	


//then find those that aren't positioned
}
else{
	echo "there are no positioned nodes";
}
echo "<br><br><br>";

echo "Positioned nodes and their various locations";
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
			echo "<td>";
				echo "x_pos";			
			echo "</td>";	
			echo "<td>";
				echo "y_pos";			
			echo "</td>";	
		echo "</tr>";
		echo "<tr>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['positioned_nodes']['database']) , '</pre>';
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['positioned_nodes']['id']) , '</pre>';		
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['positioned_nodes']['primary_folder']) , '</pre>';			
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['positioned_nodes']['secondary_folder']) , '</pre>';			
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['positioned_nodes']['title']) , '</pre>';			
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['positioned_nodes']['items_all_id']) , '</pre>';			
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['positioned_nodes']['x_pos']) , '</pre>';			
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['positioned_nodes']['y_pos']) , '</pre>';			
			echo "</td>";		
		echo "</tr>";
	echo "</table>";




///then find those that need to be positioned if any
echo "unpositioned nodes";
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
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['unpositioned_nodes']['database']) , '</pre>';
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['unpositioned_nodes']['id']) , '</pre>';		
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['unpositioned_nodes']['primary_folder']) , '</pre>';			
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['unpositioned_nodes']['secondary_folder']) , '</pre>';			
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['unpositioned_nodes']['title']) , '</pre>';			
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['unpositioned_nodes']['items_all_id']) , '</pre>';			
			echo "</td>";
		echo "</tr>";
	echo "</table>";










///then make sure we can match those to relationships
echo "<br><br><br>Relationship 'search' sql<br>";
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
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['edges_to_check_for_display']['item_a_database']) , '</pre>';			
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['edges_to_check_for_display']['item_a_id']) , '</pre>';			
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['edges_to_check_for_display']['item_b_database']) , '</pre>';			
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['edges_to_check_for_display']['item_b_id']) , '</pre>';			
			echo "</td>";
		echo "</tr>";
	echo "</table>";


echo "<br><br><br><br>";
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
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['edges_to_finally_display']['item_a_database']) , '</pre>';			
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['edges_to_finally_display']['item_a_id']) , '</pre>';			
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['edges_to_finally_display']['item_b_database']) , '</pre>';			
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['edges_to_finally_display']['item_b_id']) , '</pre>';			
			echo "</td>";
		echo "</tr>";
	echo "</table>";





echo "<br><br><br><br>";
echo "edges with positions";
	echo "<table>";
		echo "<tr>";
			echo "<td>";
				echo "item_a_database";			
			echo "</td>";
			echo "<td>";
				echo "item_a_id";			
			echo "</td>";
			echo "<td>";
				echo "item_a_x_pos";			
			echo "</td>";
			echo "<td>";
				echo "item_a_y_pos";			
			echo "</td>";

			echo "<td>";
				echo "item_b_database";			
			echo "</td>";
			echo "<td>";
				echo "item_b_id";			
			echo "</td>";			
			echo "<td>";
				echo "item_b_x_pos";			
			echo "</td>";
			echo "<td>";
				echo "item_b_y_pos";			
			echo "</td>";
			echo "<td>";
				echo "still color";			
			echo "</td>";
			echo "<td>";
				echo "hover color";			
			echo "</td>";
			echo "<td>";
				echo "relationship_id";			
			echo "</td>";
			echo "<td>";
				echo "x diff";			
			echo "</td>";
 			echo "<td>";
				echo "y diff";			
			echo "</td>";           
 			echo "<td>";
				echo "line length";			
			echo "</td>";    
		echo "</tr>";
		echo "<tr>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['edges_with_positions']['item_a_database']) , '</pre>';			
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['edges_with_positions']['item_a_id']) , '</pre>';			
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['edges_with_positions']['item_a_x_pos']) , '</pre>';			
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['edges_with_positions']['item_a_y_pos']) , '</pre>';			
			echo "</td>";


			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['edges_with_positions']['item_b_database']) , '</pre>';			
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['edges_with_positions']['item_b_id']) , '</pre>';			
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['edges_with_positions']['item_b_x_pos']) , '</pre>';			
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['edges_with_positions']['item_b_y_pos']) , '</pre>';			
			echo "</td>";

			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['edges_with_positions']['still_color']) , '</pre>';			
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['edges_with_positions']['hover_color']) , '</pre>';			
			echo "</td>";
			echo "<td>";
				echo '<pre>' , var_dump($diagnostics['edges_with_positions']['relationship_id']) , '</pre>';			
			echo "</td>";

       		echo "<td>";
				echo '<pre>' , var_dump($diagnostics['edges_with_positions']['x_diff']) , '</pre>';			
			echo "</td>";   
        	echo "<td>";
				echo '<pre>' , var_dump($diagnostics['edges_with_positions']['y_diff']) , '</pre>';			
			echo "</td>";               
        	echo "<td>";
				echo '<pre>' , var_dump($diagnostics['edges_with_positions']['line_length']) , '</pre>';			
			echo "</td>";  
		echo "</tr>";
	echo "</table>";







//for an edge weight etc etc and boom :)

//just some very crapping padding situation at the end of the table there - clearly
echo "<div style='height: 300px; width: 100%; '></div>";


echo "</div>";

	//		echo '<pre>' , var_dump($initial_nodes_array) , '</pre>';
//this obviously needs to expand out into the full array of points and other things clearly.


