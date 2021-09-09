<?php
if(!isset($_SESSION)){session_start();}

//require $_SERVER['DOCUMENT_ROOT']."/components/functions/required.php";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/color_creation.php";




if($_POST['standard_input'] != ''){
	$title = mysqli_real_escape_string($conn, ucfirst($_POST['standard_input']));


	$adding_new = $_POST['adding_new'];
	
	//default setting for any "all submissions"
	//issues
	if($adding_new == 'issues'){	$category = 'critical';			}
	if($adding_new == 'actvities'){	$category = 'doing';			}
	if($adding_new == 'sales'){		$category = 'new_potentials';	}
	if($adding_new == 'upgrades'){	$category = 'planned';			}

	$sql = "SELECT * FROM items_central_index 
		WHERE adding_new_code = '".$adding_new."'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$primary_folder 		= $row['primary_folder'];
	$secondary_folder 		= $row['secondary_folder'];
	$db 					= $row['found_in_database'];	
		
	$different = 'no';



	//profile
	if($adding_new == 'progress'){		$sql_cols = "";		$sql_vals = "";	$different = 'yes';}
	
	//biz_dev
	if($adding_new == 'events'){		$sql_cols = "";		$sql_vals = "";	$different = 'yes';}
	if($adding_new == 'one_to_ones'){	$sql_cols = "";		$sql_vals = "";	$different = 'yes';}
	
	//marketing
	if($adding_new == 'target_markets'){	$sql_cols = "";	$sql_vals = "";	$different = 'yes';}
	if($adding_new == 'channels'){		$sql_cols = "";		$sql_vals = "";	$different = 'yes';}
	if($adding_new == 'angles'){		$sql_cols = "";		$sql_vals = "";	$different = 'yes';}
	if($adding_new == 'promotions'){	$sql_cols = "";		$sql_vals = "";	$different = 'yes';}

	if($adding_new == 'referrers'){		$sql_cols = "referrer,"; $sql_vals = "'yes',";	$different = 'yes';}

	if($adding_new == 'issues'){	$sql_cols = "category,";	$sql_vals = "'".$category."',";}
	if($adding_new == 'actvities'){	$sql_cols = "category,";	$sql_vals = "'".$category."',";}
	if($adding_new == 'sales'){		$sql_cols = "category,";	$sql_vals = "'".$category."',";}
	if($adding_new == 'upgrades'){	$sql_cols = "category,";	$sql_vals = "'".$category."',";}
		
	if($different == 'no'){			$sql_cols = "category,";	$sql_vals = "'".$adding_new."',";}









	//push all existing down a rank
	//include pushing down deleted etc because then we can just use one singluar rank
	if(	$_POST['primary_folder'] != 'admin' && 
		$_POST['primary_folder'] != 'technology'){
		$sql = "UPDATE ".$db." 
			SET rank = rank + 1 
			WHERE user_id = '".$_SESSION['viewing_client_id']."'";
		if($db == 'wheelhouse'){
			$sql .= "AND category = '".$category."'";}		
		}
	else{	$sql = "UPDATE ".$db." SET rank = rank + 1 WHERE category = 'technology'";}
	$result = mysqli_query($conn, $sql);
	
	
	//title in the following query will need to be adjusted to name if we change that in many of the databases for more data types
	// see and include /home/customer/www/dreamboat.com.au/public_html/components/layouts/box/item_title_display.php for more information/more of an idea
	//clients, staff, organisations should be using name not title for utmost accuracy in databases. Especially the people where the title is something else all together 
	 $sql = "INSERT INTO ".$db." (user_id, title, ".$sql_cols." rank, background_color, contrast_color,	text_color, degrees)
			VALUES(	'".$_SESSION['viewing_client_id']."', 	'".$title."', ".$sql_vals." '1', '".$background_color."', '".$contrast_color."', '".$text_color."', '".$degrees."')";
		//	echo $sql;exit();
	$result = mysqli_query($conn, $sql);
	$last_insert_id = mysqli_insert_id($conn); 




	//now we also add briefly into items_all
	$sql = "INSERT INTO items_all (	found_in_database, 
					item_id, 
					user_id, 
					".$sql_cols."
					found_in_primary_folder, 
					found_in_secondary_folder, 
					title";
					if($adding_new == 'referrers'){	$sql .= ", people_referrer";}
					$sql .= ")";
	
	
	$sql .= " VALUES(		'".$db."', 
					'".$last_insert_id."', 
					'".$_SESSION['viewing_client_id']."', 
					".$sql_vals."
					'".$primary_folder."',
					'".$secondary_folder."',	
					'".$title."'";
					if($adding_new == 'referrers'){	$sql .= ",'yes'";}
					$sql .= ")"; 
	$sql;
//	exit();
	mysqli_query($conn, $sql);



	$_SESSION[$primary_folder.'_page'] = $secondary_folder;
	$url_to_visit = "/".$primary_folder."/".$secondary_folder."/item/display.php?item_id=".$last_insert_id;
			

	//this should be done in time but not crtiical right now	
	//in short build automated connection
	//	$sql = "INSERT INTO item_relationships";
	//i think it's not that important so it's probably best to actually do this when we have made the transition to database and id connections
	
	
	if($_POST['primary_folder'] != 'admin'){		
		//don't unset adding new so at least something works if they go back or whatever
		$notification_type = 'add_new';
		require $_SERVER['DOCUMENT_ROOT']."/components/notifications_and_alerts/create_new_notification_and_alert.php";
	}


	//if NOT part of a review process at this point cut out and go to the page
	if(!isset($_SESSION['reviewing'])){ 	
		//go to the item
		header("Location: ".$url_to_visit);
		exit();
	}
}	
else{header("Location: ".$_SESSION['this_page']);exit();}
?>