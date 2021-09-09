<?php
if(!isset($_SESSION)){session_start();}


///components/layouts/items_with_sidebars/left_hand_sidebar.php

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT * FROM item_relationships 
	WHERE item_a_user_id 		=  '".$_SESSION['viewing_client_id']."'";
//	AND   item_a_secondary_folder 	<> '".$_GET['secondary_folder']."'
//	AND   item_a_id 		<> '".$_GET['item_id']."'";

$sql .= "
	AND   item_b_user_id 		= '".$_SESSION['viewing_client_id']."'
	AND   item_b_secondary_folder 	= '".$_GET['secondary_folder']."'
	AND   item_b_id 		= '".$_GET['item_id']."'
	
	AND   total_relationship_status = 'active'
	AND   item_a_current_status 	= 'active'
	AND   item_b_current_status 	= 'active'	
	
	AND   item_a_deleted_or_not 	<> 'yes'
	AND   item_b_deleted_or_not 	<> 'yes'
	
	ORDER BY
		CASE item_a_secondary_folder 	";
		  	$order_number = 0;

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
	




//	echo $sql; exit();
$result = mysqli_query($conn, $sql);
$strings_echoed = array();
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$changed_string = 'no';
		if($row['item_a_secondary_folder'] == 'critical'){	$category_string_for_display 	= 'critical issues';		$changed_string = 'yes';}
		if($row['item_a_secondary_folder'] == 'important'){	$category_string_for_display 	= 'important issues';		$changed_string = 'yes';}
		if($row['item_a_secondary_folder'] == 'other'){		$category_string_for_display 	= 'other issues';		$changed_string = 'yes';}
		if(	$row['item_a_secondary_folder'] == 'all' && 
			$row['item_a_primary_folder'] == 'issues'){		$category_string_for_display 	= 'uncategorised issues';	$changed_string = 'yes';}
		
		//activities
		if($row['item_a_secondary_folder'] == 'doing'		){	$category_string_for_display 	= 'doing activities';		$changed_string = 'yes';}					
		if($row['item_a_secondary_folder'] == 'planning'	){	$category_string_for_display 	= 'planning activities';	$changed_string = 'yes';}
		if($row['item_a_secondary_folder'] == 'managing'	){	$category_string_for_display 	= 'managing activities';	$changed_string = 'yes';}
		if($row['item_a_secondary_folder'] == 'supporting'	){	$category_string_for_display 	= 'supporting activities';	$changed_string = 'yes';}
		if($row['item_a_secondary_folder'] == 'administrating'){	$category_string_for_display 	= 'administrating activities';	$changed_string = 'yes';}					
		if($row['item_a_secondary_folder'] == 'growing'	){		$category_string_for_display 	= 'growing activities';		$changed_string = 'yes';}			
		if(	$row['item_a_secondary_folder'] == 'all' && 
			$row['item_a_primary_folder'] == 'issues'){		$category_string_for_display 	= 'uncategorised activities';	$changed_string = 'yes';}		
		
		if($changed_string == 'no'){$category_string_for_display = $row['item_a_secondary_folder'];}
		
		
		if(!in_array($category_string_for_display, $strings_echoed )){
			echo "<div style='color:#cecece;font-family:Comfortaa;margin-top:8px;'>".strtoupper($category_string_for_display)."</div>";
			$strings_echoed[count($strings_echoed)] = $category_string_for_display;
		}
		


	//a simple red "X" should go in here to disconnect items
	//please note that these things shouldn't be linked as they are via "folder" directions rather database/item_id relationships as items are changing folders... for example people/staff/clients/referrers
	
	echo "<a href='/components/layouts/items_with_sidebars/remove_connection.php?relationship_id=".$row['relationship_id']."' style='font-family:Comfortaa;font-size:1.2em;color:red;'>x</a>&nbsp;&nbsp;";
	
	echo " <a style='font-family:Comfortaa;font-size:1em;color: #281e96;' href='/".$row['item_a_primary_folder']."/".$row['item_a_secondary_folder']."/item/display.php?item_id=".$row['item_a_id'];
	echo $url;			
	echo "'>".$row['item_a_title']."</a>";//title may not always be correct so need to adjust per the correct column


require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/database_search_array.php";	
	echo "	<a href='/map/edges/index.php?item_id=".$row['relationship_id']."'><i class='fas fa-project-diagram'></i></a>";

//	echo "	<a href='/components/map_engine/edges/change_edges.php?node_a_database=".$database_search[$_GET['primary_folder']][$_GET['secondary_folder']]."&node_a_id=".$_GET['item_id']."&node_b_database=".$database_search[$row['item_a_primary_folder']][$row['item_a_secondary_folder']]."&node_b_id=".$row['item_a_id']."'><i class='fas fa-project-diagram'></i></a>";
	
	
	
	echo "<br>";
	
}