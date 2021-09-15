<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

function node_selection($node_number, $defined_yes_no, $database_if_defined, $item_id_if_defined){
echo "<div style='float:left;'>";
echo "	<div style='display: inline-block;padding:6px;margin:6px;text-align:left;width:100%;'>Node #".$node_number."</div><br>";
echo "	<select style='display:inline-block;'  onchange='this.form.submit()' name='link_node_selection_".$node_number."'>";	


/* THESE THINGS WOULD BE IDEAL BUT NOT ESSENTIAL
	//with that of link_collections to see if POTENTIAL matches exits
	//if so put them to the top of the table

	//then separate with two rows of 
	//"-----"
	//"-----"

	//also make sure to remove 'itself or any selected
	//this is already done based upon how it's built out of item relationships
*/

			//get out all nodes that have a link associated with them

			$sql = "SELECT DISTINCT item_a_database, item_a_type, item_a_id, item_a_title
				FROM item_relationships 
				WHERE item_a_user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' AND
					item_b_user_id =  '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'
				ORDER BY
				  CASE item_a_type 	";
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
$sql = "SELECT DISTINCT item_a_database, item_a_type, item_a_id, item_a_title
					FROM item_relationships 
					WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) == 0){
	echo "	<div class='prompt-font' style='width:100%;text-align:center;height:65vh;bottom: 0;position: absolute;'>
	
	<span style='color:red;'>This page is not needed until a sufficient enough proportion of a network remain consistent for 2-3 months</span><br><br>
		For this page to function appropriately you need 
		<a 
		target='_blank' 
		href='https://mathinsight.org/definition/network_link#:~:text=A%20link%20(or%20edge)%20of,in%20the%20first%20figure%20below.'
		style='color:red;'
		>links</a> between items.<br>
		You can create these links on any item page in the side columns.<br><br>
		Then you can add data for this link to start optimising your network.
		</div>";
		
	require_once $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
}
else{

	//to be in here we must have some relationships that exist already


	echo "<form style='display: inline-block; width:100%; text-align:center;' method='post' action='/components/links/submit_link.php'  >";
		echo "<div style='display:inline-block;'>";
			
			echo "<div class='prompt-font blink_me' style='width:100%;text-align:center;font-size:smaller;'>
				<BR>//the order of multiple nodes matters</div>";
				
				
				//from the link_selected array
				$sql = "	SELECT * FROM links_selected 
						WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'
						ORDER BY selection_id DESC LIMIT 1";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_array($result, MYSQLI_ASSOC);	
				

				$currently_selected = array();
				$currently_selected[1][unselectable] = $row[link_1_unselectable];
					if($currently_selected[1][unselectable] != 'yes'){
						$defined[1] = 'yes';
						$currently_selected[1]['database'] = $row[link_1_database];
						$currently_selected[1][item_id]	 = $row[link_1_item_id];
						}
				$currently_selected[2][unselectable] = $row[link_2_unselectable];
					if($currently_selected[2][unselectable] != 'yes'){
						$defined[2] = 'yes';
						$currently_selected[2]['database'] = $row[link_2_database];
						$currently_selected[2][item_id]	 = $row[link_2_item_id];
						}
				$currently_selected[3][unselectable] = $row[link_3_unselectable];
					if($currently_selected[3][unselectable] != 'yes'){
						$defined[3] = 'yes';
						$currently_selected[3]['database'] = $row[link_3_database];
						$currently_selected[3][item_id]	 = $row[link_3_item_id];
						}
				$currently_selected[4][unselectable] = $row[link_4_unselectable];
					if($currently_selected[4][unselectable] != 'yes'){
						$defined[4] = 'yes';
						$currently_selected[4]['database'] = $row[link_4_database];
						$currently_selected[4][item_id]	 = $row[link_4_item_id];
						}
				
				//show these across the page
					//if and only if the ones before are filled appropriately
					//thereby making the system abundently clear
					//obviously show one more than currently exists to allow for that filling process to occur	
						
					node_selection(1,$defined[1],$currently_selected[1]['database'],$currently_selected[1][item_id]);
					if(mysqli_num_rows($result) != 0){
						if($row[link_1_unselectable] != 'yes' OR !isset($row[link_1_unselectable])){
							node_selection(2,$defined[2],$currently_selected[2]['database'],$currently_selected[2][item_id]);
						}
						if($row[link_2_unselectable] != 'yes'){
							node_selection(3,$defined[3],$currently_selected[3]['database'],$currently_selected[3][item_id]);
						}
						if($row[link_3_unselectable] != 'yes'){
							node_selection(4,$defined[4],$currently_selected[4]['database'],$currently_selected[4][item_id]);
						}
					}
		echo "</div>";
	echo "</form>";
		
	require $_SERVER['DOCUMENT_ROOT']."/components/tracking/display_elements/end_of_page_requires.php";
}


?>