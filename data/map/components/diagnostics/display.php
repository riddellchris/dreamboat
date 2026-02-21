<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/map/components/diagnostics/styling.php";

echo "<div class='diagnostics_div'>";

						require $_SERVER['DOCUMENT_ROOT']."/map/components/diagnostics/phases/principle_array_setup.php";

						require $_SERVER['DOCUMENT_ROOT']."/map/components/diagnostics/phases/initial_node/selection_sql.php";  // /nodes/compile/initial_critical_for_view.php
	if($map_triggers['initial_node_count'] == 0){
						require $_SERVER['DOCUMENT_ROOT']."/map/components/diagnostics/phases/initial_node/empty_warning.php";  
	}
	else{
						require $_SERVER['DOCUMENT_ROOT']."/map/components/diagnostics/phases/initial_node/table.php";
		if(	$_SESSION['current_issues_setting'] == 'issues_on' ){
						require $_SERVER['DOCUMENT_ROOT']."/map/components/diagnostics/phases/related_issues/selection_sql.php";  


			if($map_triggers['related_issues_count'] == 0){
						require $_SERVER['DOCUMENT_ROOT']."/map/components/diagnostics/phases/related_issues/empty_warning.php";  
			}
			else{
						require $_SERVER['DOCUMENT_ROOT']."/map/components/diagnostics/phases/related_issues/table.php";  
						require $_SERVER['DOCUMENT_ROOT']."/map/components/diagnostics/phases/related_issues/to_actually_add.php";  
			}
		}
		else{	
						require $_SERVER['DOCUMENT_ROOT']."/map/components/diagnostics/phases/related_issues/not_included.php";	
		}

						require $_SERVER['DOCUMENT_ROOT']."/map/components/diagnostics/phases/combined_nodes/table.php";
						require $_SERVER['DOCUMENT_ROOT']."/map/components/diagnostics/phases/positioning/initial_scan_against_selected_view.php";		
						require $_SERVER['DOCUMENT_ROOT']."/map/components/diagnostics/phases/positioning/positioned_nodes.php";	
						require $_SERVER['DOCUMENT_ROOT']."/map/components/diagnostics/phases/positioning/unpositioned_nodes.php";	


		if($map_triggers['positioned_node_count'] != 0){
			require $_SERVER['DOCUMENT_ROOT']."/map/components/diagnostics/phases/edges/display_search.php";
			require $_SERVER['DOCUMENT_ROOT']."/map/components/diagnostics/phases/edges/display_confirm.php";
			require $_SERVER['DOCUMENT_ROOT']."/map/components/diagnostics/phases/edges/full_data_table.php";
		}
	}

	//just some very crapping padding situation at the end of the table there - clearly
	echo "<div style='height: 300px; width: 100%; '></div>";
echo "</div>";