<?php
if(!isset($_SESSION)){session_start();}
$brisbane_basic_time = $_SERVER['REQUEST_TIME'] + 10*60*60;

$brisbane_day			= gmdate("w", $brisbane_basic_time);
$Brisbane_hour 			= gmdate("H", $brisbane_basic_time);
$todays_date_in_Brisbane  	= gmdate("Y-m-d", $brisbane_basic_time);

//just it weekly on sundays for now
if($Brisbane_hour == '21' && $brisbane_day == '0' ){

	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	
	//for each user calculate data and then display it...
	//just do it for all users now... regardless of if active or not...
	$sql = "SELECT * FROM user_account_details";
	$result = mysqli_query($conn, $sql);
	
	$i = 0;
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$user_id_array[$i] = $row['user_id'];
		$i += 1;
	}
	//now we have a complete array of users.... now all we need to do is calculate each variable
	//essentially there are queries and results which match the column to store it in

	//	var_dump($user_id_array);
	//	echo "<br>";
		
	foreach($user_id_array as &$user_id){	
		//people
			//people currently active
			$sql = "SELECT * FROM people WHERE user_id = '".$user_id."' AND status = 'active' AND deleted = 'no'";
			$result = mysqli_query($conn, $sql);
			$people_currently_active[$user_id] = mysqli_num_rows($result);
				
			//people added in the past week
			$sql = "SELECT * FROM people WHERE user_id = '".$user_id."' AND DATEDIFF(NOW(), `created_timestamp`) < 7";
			$result = mysqli_query($conn, $sql);
			$people_gained_this_week[$user_id] = mysqli_num_rows($result);
		
			//people "closed" in the past week
			$sql = "SELECT * FROM people WHERE user_id = '".$user_id."' AND DATEDIFF(NOW(), `status_to_completed_timestamp`) < 7";
			$result = mysqli_query($conn, $sql);
			$people_closed_this_week[$user_id] = mysqli_num_rows($result);
	
		//groups
			//groups currently active
			$sql = "SELECT * FROM organisations WHERE user_id = '".$user_id."' AND non_biz_group = 'yes' AND status = 'active' AND deleted = 'no'";
			$result = mysqli_query($conn, $sql);
			$groups_currently_active[$user_id] = mysqli_num_rows($result);
				
			//groups added in the past week
			$sql = "SELECT * FROM organisations WHERE user_id = '".$user_id."' AND non_biz_group = 'yes' AND DATEDIFF(NOW(), `created_timestamp`) < 7";
			$result = mysqli_query($conn, $sql);
			$groups_gained_this_week[$user_id] = mysqli_num_rows($result);
		
			//groups "closed" in the past week
			$sql = "SELECT * FROM organisations WHERE user_id = '".$user_id."' AND non_biz_group = 'yes' AND DATEDIFF(NOW(), `status_to_completed_timestamp`) < 7";
			$result = mysqli_query($conn, $sql);
			$groups_closed_this_week[$user_id] = mysqli_num_rows($result);	
			
		//businesses
			//businesses currently active
			$sql = "SELECT * FROM organisations WHERE user_id = '".$user_id."' AND business = 'yes' AND status = 'active' AND deleted = 'no'";
			$result = mysqli_query($conn, $sql);
			$businesses_currently_active[$user_id] = mysqli_num_rows($result);
				
			//businesses added in the past week
			$sql = "SELECT * FROM organisations WHERE user_id = '".$user_id."' AND business = 'yes' AND DATEDIFF(NOW(), `created_timestamp`) < 7";
			$result = mysqli_query($conn, $sql);
			$businesses_gained_this_week[$user_id] = mysqli_num_rows($result);
		
			//businesses "closed" in the past week
			$sql = "SELECT * FROM organisations WHERE user_id = '".$user_id."' AND business = 'yes' AND DATEDIFF(NOW(), `status_to_completed_timestamp`) < 7";
			$result = mysqli_query($conn, $sql);
			$businesses_closed_this_week[$user_id] = mysqli_num_rows($result);		
	
		//referrers
			//referrers currently active
			$sql = "SELECT * FROM people WHERE referrer = 'yes' AND user_id = '".$user_id."' AND status = 'active' AND deleted = 'no'";
			$result = mysqli_query($conn, $sql);
			$referrers_currently_active[$user_id] = mysqli_num_rows($result);
				
			//referrers added in the past week
			$sql = "SELECT * FROM people WHERE referrer = 'yes' AND user_id = '".$user_id."' AND DATEDIFF(NOW(), `created_timestamp`) < 7";
			$result = mysqli_query($conn, $sql);
			$referrers_gained_this_week[$user_id] = mysqli_num_rows($result);
		
			//referrers "closed" in the past week
			$sql = "SELECT * FROM people WHERE referrer = 'yes' AND user_id = '".$user_id."' AND DATEDIFF(NOW(), `status_to_completed_timestamp`) < 7";
			$result = mysqli_query($conn, $sql);
			$referrers_closed_this_week[$user_id] = mysqli_num_rows($result);	
	
		//events
			//events currently active
			$sql = "SELECT * FROM events WHERE user_id = '".$user_id."' AND status = 'active' AND deleted = 'no'";
			$result = mysqli_query($conn, $sql);
			$events_currently_active[$user_id] = mysqli_num_rows($result);
				
			//events added in the past week
			$sql = "SELECT * FROM events WHERE user_id = '".$user_id."' AND DATEDIFF(NOW(), `created_timestamp`) < 7";
			$result = mysqli_query($conn, $sql);
			$events_gained_this_week[$user_id] = mysqli_num_rows($result);
		
			//events "closed" in the past week
			$sql = "SELECT * FROM events WHERE user_id = '".$user_id."' AND DATEDIFF(NOW(), `status_to_completed_timestamp`) < 7";
			$result = mysqli_query($conn, $sql);
			$events_closed_this_week[$user_id] = mysqli_num_rows($result);
		
		//one_to_ones
			//one_to_ones currently active
			$sql = "SELECT * FROM one_to_ones WHERE user_id = '".$user_id."' AND status = 'active' AND deleted = 'no'";
			$result = mysqli_query($conn, $sql);
			$one_to_ones_currently_active[$user_id] = mysqli_num_rows($result);
				
			//one_to_ones added in the past week
			$sql = "SELECT * FROM one_to_ones WHERE user_id = '".$user_id."' AND DATEDIFF(NOW(), `created_timestamp`) < 7";
			$result = mysqli_query($conn, $sql);
			$one_to_ones_gained_this_week[$user_id] = mysqli_num_rows($result);
		
			//one_to_ones "closed" in the past week
			$sql = "SELECT * FROM one_to_ones WHERE user_id = '".$user_id."' AND DATEDIFF(NOW(), `status_to_completed_timestamp`) < 7";
			$result = mysqli_query($conn, $sql);
			$one_to_ones_closed_this_week[$user_id] = mysqli_num_rows($result);	
	
		//new_potentials
			//new_potentials currently active
			$sql = "SELECT * FROM sales WHERE mode = 'new_potentials' AND user_id = '".$user_id."' AND status = 'active' AND deleted = 'no'";
			$result = mysqli_query($conn, $sql);
			$new_potentials_currently_active[$user_id] = mysqli_num_rows($result);
				
			//new_potentials added in the past week
			$sql = "SELECT * FROM sales WHERE mode = 'new_potentials' AND user_id = '".$user_id."' AND DATEDIFF(NOW(), `created_timestamp`) < 7";
			$result = mysqli_query($conn, $sql);
			$new_potentials_gained_this_week[$user_id] = mysqli_num_rows($result);
		
			//clients "closed" in the past week
			$sql = "SELECT * FROM sales WHERE mode = 'new_potentials' AND user_id = '".$user_id."' AND DATEDIFF(NOW(), `status_to_completed_timestamp`) < 7";
			$result = mysqli_query($conn, $sql);
			$new_potentials_closed_this_week[$user_id] = mysqli_num_rows($result);	
			
			$_SESSION['viewing_client_id'] = $user_id;
			$_SESSION['secondary_folder'] = 'new_potentials';
			require $_SERVER['DOCUMENT_ROOT']."/components/crm/funnel_calculations.php";	
			$new_potentials_value[$user_id]			= $funnel_value;
			$new_potentials_weighted_value[$user_id]	= $weighted_funnel;

		//potential_upsells
			//potential_upsells currently active
			$sql = "SELECT * FROM sales WHERE mode = 'potential_upsells' AND user_id = '".$user_id."' AND status = 'active' AND deleted = 'no'";
			$result = mysqli_query($conn, $sql);
			$potential_upsells_currently_active[$user_id] = mysqli_num_rows($result);
				
			//potential_upsells added in the past week
			$sql = "SELECT * FROM sales WHERE mode = 'potential_upsells' AND user_id = '".$user_id."' AND DATEDIFF(NOW(), `created_timestamp`) < 7";
			$result = mysqli_query($conn, $sql);
			$potential_upsells_gained_this_week[$user_id] = mysqli_num_rows($result);
		
			//clients "closed" in the past week
			$sql = "SELECT * FROM sales WHERE mode = 'potential_upsells' AND user_id = '".$user_id."' AND DATEDIFF(NOW(), `status_to_completed_timestamp`) < 7";
			$result = mysqli_query($conn, $sql);
			$potential_upsells_closed_this_week[$user_id] = mysqli_num_rows($result);	


			$_SESSION['viewing_client_id'] = $user_id;
			$_SESSION['secondary_folder'] = 'potential_upsells';
			require $_SERVER['DOCUMENT_ROOT']."/components/crm/funnel_calculations.php";	
			$potential_upsells_value[$user_id]		= $funnel_value;
			$potential_upsells_weighted_value[$user_id]	= $weighted_funnel;

		//recurring_sales
			//recurring_sales currently active
			$sql = "SELECT * FROM sales WHERE mode = 'recurring_sales' AND user_id = '".$user_id."' AND status = 'active' AND deleted = 'no'";
			$result = mysqli_query($conn, $sql);
			$recurring_sales_currently_active[$user_id] = mysqli_num_rows($result);
				
			//recurring_sales added in the past week
			$sql = "SELECT * FROM sales WHERE mode = 'recurring_sales' AND user_id = '".$user_id."' AND DATEDIFF(NOW(), `created_timestamp`) < 7";
			$result = mysqli_query($conn, $sql);
			$recurring_sales_gained_this_week[$user_id] = mysqli_num_rows($result);
		
			//clients "closed" in the past week
			$sql = "SELECT * FROM sales WHERE mode = 'recurring_sales' AND user_id = '".$user_id."' AND DATEDIFF(NOW(), `status_to_completed_timestamp`) < 7";
			$result = mysqli_query($conn, $sql);
			$recurring_sales_closed_this_week[$user_id] = mysqli_num_rows($result);	


			$_SESSION['viewing_client_id'] = $user_id;
			$_SESSION['secondary_folder'] = 'recurring_sales';
			require $_SERVER['DOCUMENT_ROOT']."/components/crm/funnel_calculations.php";	
			$recurring_sales_value[$user_id]		= $funnel_value;
			//no weighted... as at present 23/4/20 we aren't running a funnel on recurring...
			//the primary reason for this is most people if not all have an initial upfront service with some follow up... correct or not... we will see...
			//chances are it's pretty accurate for 80-90% of industries and in time we will really adjust and improve this over time as we specialise this system for others
			//CHRIS RIDDELL - 23.4.20

		//clients
			//clients currently active
			$sql = "SELECT * FROM people WHERE client = 'yes' AND user_id = '".$user_id."' AND status = 'active' AND deleted = 'no'";
			$result = mysqli_query($conn, $sql);
			$clients_currently_active[$user_id] = mysqli_num_rows($result);
				
			//clients added in the past week
			$sql = "SELECT * FROM people WHERE client = 'yes' AND user_id = '".$user_id."' AND DATEDIFF(NOW(), `created_timestamp`) < 7";
			$result = mysqli_query($conn, $sql);
			$clients_gained_this_week[$user_id] = mysqli_num_rows($result);
		
			//clients "closed" in the past week
			$sql = "SELECT * FROM people WHERE client = 'yes' AND user_id = '".$user_id."' AND DATEDIFF(NOW(), `status_to_completed_timestamp`) < 7";
			$result = mysqli_query($conn, $sql);
			$clients_closed_this_week[$user_id] = mysqli_num_rows($result);	
	
	echo "<br>";
		
		//then enter it into the system in arrays
echo	$sql = "INSERT INTO tracking_inputs_weekly (
				user_id, 
				gm_date_week_of_year,
				week_ending_year,
				week_ending_month,
				week_ending_day,
				people_currently_active,
				people_gained_this_week,
				people_closed_this_week,
				groups_currently_active,
				groups_gained_this_week,
				groups_closed_this_week,
				businesses_currently_active,
				businesses_gained_this_week,
				businesses_closed_this_week,
				referrers_currently_active,
				referrers_gained_this_week,
				referrers_closed_this_week,
				events_currently_active,
				events_gained_this_week,
				events_closed_this_week,
				one_to_ones_currently_active,
				one_to_ones_gained_this_week,
				one_to_ones_closed_this_week,
				new_potentials_currently_active,
				new_potentials_gained_this_week,
				new_potentials_closed_this_week,
				new_potentials_value,
				new_potentials_weighted_value,
				potential_upsells_currently_active,
				potential_upsells_gained_this_week,
				potential_upsells_closed_this_week,
				potential_upsells_value,
				potential_upsells_weighted_value,
				recurring_sales_currently_active,
				recurring_sales_gained_this_week,
				recurring_sales_closed_this_week,
				recurring_sales_value,
				clients_currently_active,
				clients_gained_this_week,
				clients_closed_this_week
				
				)
			VALUES (
			'".$user_id."',
			'".gmdate("W", $brisbane_basic_time)."',
			'".gmdate("y", $brisbane_basic_time)."',
			'".gmdate("n", $brisbane_basic_time)."',
			'".gmdate("j", $brisbane_basic_time)."',				
			'".$people_currently_active[$user_id]."',
			'".$people_gained_this_week[$user_id]."',
			'".$people_closed_this_week[$user_id]."',
			'".$groups_currently_active[$user_id]."',
			'".$groups_gained_this_week[$user_id]."',
			'".$groups_closed_this_week[$user_id]."',
			'".$businesses_currently_active[$user_id]."',
			'".$businesses_gained_this_week[$user_id]."',
			'".$businesses_closed_this_week[$user_id]."',
			'".$referrers_currently_active[$user_id]."',
			'".$referrers_gained_this_week[$user_id]."',
			'".$referrers_closed_this_week[$user_id]."',
			'".$events_currently_active[$user_id]."',
			'".$events_gained_this_week[$user_id]."',
			'".$events_closed_this_week[$user_id]."',
			'".$one_to_ones_currently_active[$user_id]."',
			'".$one_to_ones_gained_this_week[$user_id]."',
			'".$one_to_ones_closed_this_week[$user_id]."',
			'".$new_potentials_currently_active[$user_id]."',
			'".$new_potentials_gained_this_week[$user_id]."',
			'".$new_potentials_closed_this_week[$user_id]."',
			'".$new_potentials_value[$user_id]."',
			'".$new_potentials_weighted_value[$user_id]."',
			'".$potential_upsells_currently_active[$user_id]."',
			'".$potential_upsells_gained_this_week[$user_id]."',
			'".$potential_upsells_closed_this_week[$user_id]."',
			'".$potential_upsells_value[$user_id]."',
			'".$potential_upsells_weighted_value[$user_id]."',
			'".$recurring_sales_currently_active[$user_id]."',
			'".$recurring_sales_gained_this_week[$user_id]."',
			'".$recurring_sales_closed_this_week[$user_id]."',
			'".$recurring_sales_value[$user_id]."',
			'".$clients_currently_active[$user_id]."',
			'".$clients_gained_this_week[$user_id]."',
			'".$clients_closed_this_week[$user_id]."'
			)";
	echo "<br>";	
			
		mysqli_query($conn, $sql);	
			
	}	
}