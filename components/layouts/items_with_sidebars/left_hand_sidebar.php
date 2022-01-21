<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

$sql = "SELECT * FROM items_all 
	WHERE current_status = 'active'
	AND user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'";
$result = mysqli_query($conn, $sql);
$number_of_currently_active_items = mysqli_num_rows($result);

if($number_of_currently_active_items == 0){
	echo 	"<div class='prompt-font' style='font-size: larger;'>
			You have no active items<br>
			<a style='color:red;' href='/components/items/add_new_what.php'>click here</a> to add one
		</div>";
}
else{

	$relationship_items = array();
	$relationship_items['database'] = array();
	$relationship_items['item_id'] = array();
	
	$sql = "SELECT * FROM item_relationships 
		WHERE item_a_user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'
		AND   item_b_user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'
		AND total_relationship_status = 'active'
		AND ( 	(	item_a_primary_folder 	= '".mysqli_real_escape_string($conn, $_GET['primary_folder'])."' 	AND
				item_a_secondary_folder = '".mysqli_real_escape_string($conn, $_GET['secondary_folder'])."' 	AND
				item_a_id 		= '".mysqli_real_escape_string($conn, $_GET['item_id'])."')
			OR
		 	(	item_b_primary_folder 	= '".mysqli_real_escape_string($conn, $_GET['primary_folder'])."' 	AND
				item_b_secondary_folder = '".mysqli_real_escape_string($conn, $_GET['secondary_folder'])."' 	AND
				item_b_id 		= '".mysqli_real_escape_string($conn, $_GET['item_id'])."'))
		";
	$result = mysqli_query($conn, $sql);
	
	//echo mysqli_num_rows($result);exit();
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		array_push($relationship_items['database'], $row['item_a_database']);
		array_push($relationship_items['item_id'] , $row['item_a_id']);
	}
	
	$sql = "SELECT 	found_in_database 
		FROM 	items_central_index 
		WHERE	primary_folder = '".mysqli_real_escape_string($conn, $_GET['primary_folder'])."'
		AND 	secondary_folder = '".mysqli_real_escape_string($conn, $_GET['secondary_folder'])."'";
	$result = mysqli_query($conn, $sql);
	$row 	= mysqli_fetch_array($result, MYSQLI_ASSOC);
	
	array_push($relationship_items['database'], $row['found_in_database']);
	array_push($relationship_items['item_id'], $_GET['item_id']);
	
	
	
	$sql = "SELECT DISTINCT *
		FROM items_all 
		WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'
		AND deleted_or_not = 'no'
		AND current_status = 'active'
		ORDER BY
		CASE found_in_secondary_folder 	";
		  	$order_number = 0;

			$sql .= " WHEN 'progress' THEN ".$order_number; $order_number ++;		  
			$sql .= " WHEN 'issues' THEN ".$order_number; $order_number ++;
			$sql .= " WHEN 'activities' THEN ".$order_number; $order_number ++;
		  	
			//don't duplicate here either
			$sql .= " WHEN 'people' THEN ".$order_number; $order_number ++;	
			$sql .= " WHEN 'staff' THEN ".$order_number; $order_number ++;					
			$sql .= " WHEN 'clients' THEN ".$order_number; $order_number ++;  //rename customers as needed	
	
			//biz_dev	
			$sql .= " WHEN 'referrers' THEN ".$order_number; $order_number ++;	
			$sql .= " WHEN 'one_to_ones' THEN ".$order_number; $order_number ++;
			$sql .= " WHEN 'events' THEN ".$order_number; $order_number ++;		
			
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
			

			//activities
			$sql .= " WHEN 'doing' THEN ".$order_number; $order_number ++;
			$sql .= " WHEN 'planning' THEN ".$order_number; $order_number ++;	
			$sql .= " WHEN 'managing' THEN ".$order_number; $order_number ++;
			$sql .= " WHEN 'supporting' THEN ".$order_number; $order_number ++;
			$sql .= " WHEN 'administrating' THEN ".$order_number; $order_number ++;	
			$sql .= " WHEN 'growing' THEN ".$order_number; $order_number ++;				
		
			//sales
			$sql .= " WHEN 'new_potentials' THEN ".$order_number; $order_number ++;
			$sql .= " WHEN 'potential_upsells' THEN ".$order_number; $order_number ++;	
			$sql .= " WHEN 'recurring_sales' THEN ".$order_number; $order_number ++;

			//marketing
			$sql .= " WHEN 'promotions' THEN ".$order_number; $order_number ++;
			$sql .= " WHEN 'channels' THEN ".$order_number; $order_number ++;	
			$sql .= " WHEN 'marketing_angles' THEN ".$order_number; $order_number ++;  /* THIS ONE NEEDS SOME WORK AND SOME CHECKING, as angles and marketing angles are somewhat confused */
			$sql .= " WHEN 'target_markets' THEN ".$order_number; $order_number ++;




			$sql .= " END";


		require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
		$result = mysqli_query($conn, $sql);
				
		$last_item_type = '';
		$first_unconnected_element = 'yes';
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
			if(	in_array($row['found_in_database'], 	$relationship_items['database']) &&
			 	in_array($row['item_id'], 		$relationship_items['item_id']) ){	$already_connected = 'yes';}
			else{$already_connected = 'no';}


			//if not found in the connections already
			if($already_connected == 'no'){ 
				if($first_unconnected_element == 'yes'){
					echo 	
					"<div class='prompt-font' style='font-size: larger;'>
						Connect the relevant items to this one..<br>
						..using the options below
					</div>";			
				
				
					echo "	
						<form method='post' action='/components/items/connect.php?primary_folder=".$_GET['primary_folder']."&secondary_folder=".$_GET['secondary_folder']."&item_id=".$_GET['item_id']."'>
						<select style='display:inline-block;'  onchange='this.form.submit()' name='link_node_selection'>";	
					$first_unconnected_element = 'no';
				}
			
			
				if($row['found_in_secondary_folder'] != $last_item_type){
					echo "<optgroup label='";
					
					//more customisations to be added here without doubt
					//including
					$custom_display = 'no';
					if($row['found_in_secondary_folder'] == 'critical'	){		$category_string_for_display 	= 'critical issues';			$custom_display = 'yes';}
					if($row['found_in_secondary_folder'] == 'important'	){		$category_string_for_display 	= 'important issues';			$custom_display = 'yes';}
					if($row['found_in_secondary_folder'] == 'other'		){		$category_string_for_display 	= 'other issues';				$custom_display = 'yes';}
					if(	$row['found_in_secondary_folder'] == 'all'	&&	
						$row['found_in_primary_folder'] == 'issues'	){			$category_string_for_display 	= 'uncategorised issues';		$custom_display = 'yes';}
					
					if($row['found_in_secondary_folder'] == 'doing'		){		$category_string_for_display 	= 'doing activities';			$custom_display = 'yes';}					
					if($row['found_in_secondary_folder'] == 'planning'	){		$category_string_for_display 	= 'planning activities';		$custom_display = 'yes';}
					if($row['found_in_secondary_folder'] == 'managing'	){		$category_string_for_display 	= 'managing activities';		$custom_display = 'yes';}
					if($row['found_in_secondary_folder'] == 'supporting'	){	$category_string_for_display 	= 'supporting activities';		$custom_display = 'yes';}
					if($row['found_in_secondary_folder'] == 'administrating'){	$category_string_for_display 	= 'administrating activities';	$custom_display = 'yes';}					
					if($row['found_in_secondary_folder'] == 'growing'	){		$category_string_for_display 	= 'growing activities';			$custom_display = 'yes';}					
					if(	$row['found_in_secondary_folder'] == 'all'	&&	
						$row['found_in_primary_folder'] == 'activities'	){		$category_string_for_display 	= 'uncategorised activities';	$custom_display = 'yes';}					
										
					if($custom_display == 'no'){								$category_string_for_display 	= $row['found_in_secondary_folder'];}
					
					
					
					
					
					
						echo strtoupper($category_string_for_display);
					echo "'>";				
				}
				
				if($row['found_in_secondary_folder'] != ''){	
					echo "<option value='db=".$row['found_in_database']."&secondary_folder=".$row['found_in_secondary_folder']."&item_id=".$row['item_id']."'>";
						echo $row['title'];
					echo "</option>";
				}
				
				$last_item_type = $row['found_in_secondary_folder'];
				echo "</optgroup>";				
			}
			
		}	
		if($first_unconnected_element == 'no'){
			echo "	</select>
				</form>";
		}
				
		if($first_unconnected_element == 'yes'){
			echo 	
			"<div class='prompt-font' style='font-size: larger;'>
				You have no active items..<br>..not yet connected to this one<br>
				<a style='color:red;' href='/components/items/add_new_what.php'>click here</a> to add more
			</div>";	
		}
}

