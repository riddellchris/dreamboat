<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";


function node_selection($node_number, $defined_yes_no, $database_if_defined, $item_id_if_defined){
echo "<div style='float:left;'>";
echo "	<div style='display: inline-block;padding:6px;margin:6px;text-align:left;width:100%;'>Node #".$node_number."</div><br>";
echo "	<select style='display:inline-block;'  onchange='this.form.submit()' name='link_node_selection_".$node_number."'>";	

	//get out all nodes that have a link associated with them
	$sql = "SELECT DISTINCT item_a_database, item_a_primary_folder, item_a_secondary_folder, item_a_id, item_a_title
		FROM item_relationships 
		WHERE item_a_user_id = '".$_SESSION['viewing_client_id']."' AND
			item_b_user_id =  '".$_SESSION['viewing_client_id']."' AND 
			total_relationship_status = 'active'
		ORDER BY
		  CASE item_a_secondary_folder 	";
		  	$order_number = 0;
		  	
			/*
			CR 21.01.24
			Some effort has been applied here to order the list
			*/		
  	
			$sql .= " WHEN 'progress' THEN ".$order_number; $order_number ++;		  
			
			$sql .= " WHEN 'issues' THEN ".$order_number; $order_number ++;

			$sql .= " WHEN 'activities' THEN ".$order_number; $order_number ++;
		  	
			//don't duplicate here either
			$sql .= " WHEN 'people' THEN ".$order_number; $order_number ++;	
			$sql .= " WHEN 'staff' THEN ".$order_number; $order_number ++;					
			$sql .= " WHEN 'clients' THEN ".$order_number; $order_number ++;  //rename customers as needed	
			
			//don't duplicate here either								
			$sql .= " WHEN 'businesses' THEN ".$order_number; $order_number ++;
			$sql .= " WHEN 'groups' THEN ".$order_number; $order_number ++;
			
			//business
			$sql .= " WHEN 'products' THEN ".$order_number; $order_number ++;
			$sql .= " WHEN 'services' THEN ".$order_number; $order_number ++;
					
			//remaining management that isn't above				
			$sql .= " WHEN 'systems' THEN ".$order_number; $order_number ++;
			$sql .= " WHEN 'assets' THEN ".$order_number; $order_number ++;
			$sql .= " WHEN 'topics' THEN ".$order_number; $order_number ++;
											
			//wheelhouse										
			$sql .= " WHEN 'dreams' THEN ".$order_number; $order_number ++;
			$sql .= " WHEN 'goals' THEN ".$order_number; $order_number ++;
			$sql .= " WHEN 'milestones' THEN ".$order_number; $order_number ++;
			$sql .= " WHEN 'tasks' THEN ".$order_number; $order_number ++;
		
			//sales
			$sql .= " WHEN 'new_potentials' THEN ".$order_number; $order_number ++;
			$sql .= " WHEN 'potential_upsells' THEN ".$order_number; $order_number ++;	
			$sql .= " WHEN 'recurring_sales' THEN ".$order_number; $order_number ++;

			//marketing
			$sql .= " WHEN 'promotions' THEN ".$order_number; $order_number ++;
			$sql .= " WHEN 'channels' THEN ".$order_number; $order_number ++;	
			$sql .= " WHEN 'marketing_angles' THEN ".$order_number; $order_number ++;  /* THIS ONE NEEDS SOME WORK AND SOME CHECKING, as angles and marketing angles are somewhat confused */
			$sql .= " WHEN 'target_markets' THEN ".$order_number; $order_number ++;

			//biz_dev
			$sql .= " WHEN 'one_to_ones' THEN ".$order_number; $order_number ++;
			$sql .= " WHEN 'events' THEN ".$order_number; $order_number ++;	
			$sql .= " WHEN 'referrers' THEN ".$order_number; $order_number ++;

			$sql .= " END";
			//for more information on this please see here
			//https://stackoverflow.com/questions/8471539/sql-order-by-sequence
	
//		echo $sql;
//		exit();
	
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	$result = mysqli_query($conn, $sql);
		
			
	$last_item_type = '';
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		if($row['item_a_type'] != $last_item_type){
			echo "<option value='unselectable'>";
				echo ">>".strtoupper($row['item_a_type']);
			echo "</option>";
		
		}
		
		if($row['item_a_title'] != ''){

			echo "<option value='db=".$row['item_a_database']."&item_id=".$row['item_a_id']."'>";
				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['item_a_title'];
			echo "</option>";
		}
		
		$last_item_type = $row['item_a_type'];
	}
			
				
	echo "</select>";
	echo "</div>";
}



//quick check that there is enough/any relationships that exist - without those relationships this page is redundant.....
//so:
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT DISTINCT item_a_database, item_a_id, item_a_primary_folder, item_a_secondary_folder, item_a_title
					FROM item_relationships 
					WHERE item_a_user_id = '".$_SESSION['viewing_client_id']."'
					AND item_a_current_status = 'active'
					AND total_relationship_status = 'active'
					";
					
					//echo $sql;exit();
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) == 0){
	echo "	<div class='prompt-font' style='width:100%;text-align:center;height:65vh;bottom: 0;position: absolute;'>";

	//see if it's a total lack of active items OR just relationships and then display the message
	$sql = "SELECT * FROM items_all WHERE user_id = '".$_SESSION['viewing_client_id']."'
					AND current_status = 'active'
					AND deleted_or_not = 'no'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) == 0){				
		echo "
		<span>	you have currently active items. <br>
			make some here by clicking <a href='/components/items/add_new_what.php' style='color:red;'>here</a>.</div>";	

	}
	else{
		echo "
		<span>	you have no relationships between items. <br>
			make some here by clicking on your nodes <a href='/map/views/' style='color:red;'>here</a>.</div>";
	}


		

	
}
else{

	//to be in here we must have some relationships that exist already


	echo "<form style='display: inline-block; width:100%; text-align:center;' method='post' action='/components/edges/change_edges.php'  >";
		echo "<div style='display:inline-block;'>";


		echo "</div>";
	echo "</form>";
		
	if($_GET['secondary_folder'] == 'edges'){require $_SERVER['DOCUMENT_ROOT']."/components/edges/input_display.php";}
		require $_SERVER['DOCUMENT_ROOT']."/components/discussion/display.php";
	

}



require_once $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";

?>