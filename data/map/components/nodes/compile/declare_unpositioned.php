<?php
if(!isset($_SESSION)){session_start();}

//to do this we can simply start with 
$all_nodes_to_display = $diagnostics['all_nodes_to_display'];

//then make a new array $unpositioned_nodes
//were we just check that the all_items_id is not part of the positioned array
//echo '<pre>' , var_dump($diagnostics['all_nodes_to_display']['items_all_id']) , '</pre>';		
//exit();
unset($unpositioned_nodes);
$j = 0;
for($i = 0; $i < count($nodes['items_all_id']); $i++){
	if(!in_array($nodes['items_all_id'][$i],$positioned_ids)){
		$unpositioned_nodes['items_all_id'][$j] 	= $nodes['items_all_id'][$i];
		$unpositioned_nodes['database'][$j]  		= $nodes['database'][$i];
		$unpositioned_nodes['id'][$j]  			    = $nodes['id'][$i];
		$unpositioned_nodes['primary_folder'][$j]  	= $nodes['primary_folder'][$i];
		$unpositioned_nodes['secondary_folder'][$j] = $nodes['secondary_folder'][$i];
		$unpositioned_nodes['title'][$j]  			= $nodes['title'][$i];	
                $j ++;	
	}
}

if($j != 0){
	$diagnostics['unpositioned_nodes'] = $unpositioned_nodes;
}
//then we can simply display those nodes

//then finally i get to move onto the actual positioning and finally the lines :)


