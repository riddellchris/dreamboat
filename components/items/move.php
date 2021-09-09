<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";



//var_dump($_POST);
//exit();


//these inputs really need to be cleaned up or at the very least checked first of all before we put it in
//partly against mysqli_real_escape_string but also against the standard set and correct where errors occur
$database 	= $_GET['db'];

if($_GET['primary_folder'] == 'activities'){	$item_id 	= $_GET['item_id'];}
else{											$item_id 	= $_GET['id'];}

if($_GET['primary_folder'] == 'activities'){	$change_to 	= $_POST['activity_category'];} //this is because activities comes from a form not a link due to it's numerous categories
else{											$change_to 	= $_GET['to'];}



//now using our basic database and id combination we can get out latest primary_folder, secondary_folder and status, deleted or not and title
//thus leaving us in a position to properly move and edit all the databases accurately
//most importantly
//items_all, item_relationships, the specific item database: people etc
//discussion
//notifications etc too
$sql = "SELECT * FROM items_all 
		WHERE found_in_database = '".$database."' 
		AND item_id = '".$item_id."'";
//	echo $sql; exit();
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
//var_dump($row);

//echo '<pre>' , var_dump($row) , '</pre>';
//exit();

$primary_folder 	= $row['found_in_primary_folder'];
$secondary_folder 	= $row['found_in_secondary_folder'];
$current_category	= $row['category'];
$current_status 	= $row['current_status'];
$deleted_or_not 	= $row['deleted_or_not'];
$people_referrer	= $row['people_referrer'];

$folders_actually_changed = 'yes';
//business
if($change_to == 'products'			){$new_category = $change_to;	$_SESSION['business_page'] = $new_category;}
if($change_to == 'services'			){$new_category = $change_to;	$_SESSION['business_page'] = $new_category;}
//network
if($change_to == 'groups'			){$new_category = $change_to;	$_SESSION['network_page'] = $new_category;}
if($change_to == 'businesses'		){$new_category = $change_to;	$_SESSION['network_page'] = $new_category;}
//biz_dev
if($change_to == 'non_referrer'		){$new_category = $current_category; $query_element = " SET referrer = 'no'";}
if($change_to == 'referrer'			){$new_category = $current_category; $query_element = " SET referrer = 'yes'";}
//sales
if($change_to == 'new_potentials'	){$new_category = $change_to;	$_SESSION['sales_page'] = $new_category;}
if($change_to == 'potential_upsells'){$new_category = $change_to;	$_SESSION['sales_page'] = $new_category;}
if($change_to == 'recurring_sales'	){$new_category = $change_to;	$_SESSION['sales_page'] = $new_category;}
//management
if($change_to == 'clients'			){$new_category = $change_to;	$_SESSION['management_page'] = $new_category;}
if($change_to == 'staff'			){$new_category = $change_to;	$_SESSION['management_page'] = $new_category;}
//wheelhouse
if($change_to == 'dreams'			){$new_category = $change_to;	$_SESSION['wheelhouse_page'] = $new_category;}
if($change_to == 'goals'			){$new_category = $change_to;	$_SESSION['wheelhouse_page'] = $new_category;}
if($change_to == 'milestones'		){$new_category = $change_to;	$_SESSION['wheelhouse_page'] = $new_category;}
if($change_to == 'tasks'			){$new_category = $change_to;	$_SESSION['wheelhouse_page'] = $new_category;}
//activities
//this comes from a select form not a simple binary form
if($change_to == 'doing'			){$new_category = $_POST['activity_category'];	$_SESSION['activities_page'] = $new_category;}
if($change_to == 'planning'			){$new_category = $_POST['activity_category'];	$_SESSION['activities_page'] = $new_category;}
if($change_to == 'managing'			){$new_category = $_POST['activity_category'];	$_SESSION['activities_page'] = $new_category;}
if($change_to == 'administrating'	){$new_category = $_POST['activity_category'];	$_SESSION['activities_page'] = $new_category;}
if($change_to == 'supporting'		){$new_category = $_POST['activity_category'];	$_SESSION['activities_page'] = $new_category;}
if($change_to == 'growing'			){$new_category = $_POST['activity_category'];	$_SESSION['activities_page'] = $new_category;}
//issues
if($change_to == 'critical'			){$new_category = $change_to;	$_SESSION['issues_page'] = $new_category;}
if($change_to == 'important'		){$new_category = $change_to;	$_SESSION['issues_page'] = $new_category;}
if($change_to == 'other'			){$new_category = $change_to;	$_SESSION['issues_page'] = $new_category;}
//upgrades
if($change_to == 'completed'		){$new_category = $change_to;	$_SESSION['upgrades_page'] = $new_category;}
if($change_to == 'underway'			){$new_category = $change_to;	$_SESSION['upgrades_page'] = $new_category;}
if($change_to == 'planned'			){$new_category = $change_to;	$_SESSION['upgrades_page'] = $new_category;}



//deleted
if($change_to == 'deleted'			){$new_category = $current_category;	$folders_actually_changed = 'no';}
if($change_to == 'undeleted'		){$new_category = $current_category;	$folders_actually_changed = 'no';}

if($change_to == 'active'			){$new_category = $current_category;	$folders_actually_changed = 'no';}
if($change_to == 'resolved'			){$new_category = $current_category;	$folders_actually_changed = 'no';}

if($change_to == 'referrer'			){$new_category = $current_category;	$folders_actually_changed = 'no';}
if($change_to == 'non_referrer'		){	$new_category = $current_category;	$folders_actually_changed = 'no';}

//then we can split all this into 
//orginal primary folder, original secondary folder
//AND
//new primary folder, new secondary folder
//which allows us to use the update feature where = original settings and update to the new setttings
//to do this we just set them all and then adjust for the anomalies
//other than these couple of anomalies
$original_primary_folder	= $primary_folder;
$original_secondary_folder 	= $secondary_folder;
if($folders_actually_changed == 'yes'){
	$adjusted_primary_folder	= $primary_folder;
	$adjusted_secondary_folder	= $change_to;
}
else{
	$adjusted_primary_folder	= $original_primary_folder;
	$adjusted_secondary_folder	= $original_secondary_folder;
	$new_category 			= $current_category;
}
	
//now we need to calculate the new primary_folder & secondary folders
if($change_to == 'clients'		){$adjusted_primary_folder 	= 'management';}
if($change_to == 'staff'		){$adjusted_primary_folder 	= 'management';}
if($change_to == 'referrer'		){$adjusted_primary_folder	= 'biz_dev';	$adjusted_secondary_folder 	= 'referrers';}
if($change_to == 'non_referrer'	){
						$sql = "SELECT * FROM people 
							WHERE item_id = '".$item_id."'";
						$result = mysqli_query($conn, $sql);
						$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
						
						$just_person = 'yes';
						if($row['category'] == 'people'){	$adjusted_primary_folder	= 'biz_dev';	$adjusted_secondary_folder 	= 'referrers';	$just_person = 'no';}
						if($row['category'] == 'clients'){	$adjusted_primary_folder	= 'management';	$adjusted_secondary_folder 	= 'clients';	$just_person = 'no';}
						if($row['category'] == 'staff'){	$adjusted_primary_folder	= 'management';	$adjusted_secondary_folder 	= 'staff';		$just_person = 'no';}
						if($just_person == 'yes'){			$adjusted_primary_folder	= 'network';	$adjusted_secondary_folder 	= 'people';}
					}


//now let's adjust the specific database
//making note of the issue with people & referrers
$sql = "UPDATE 						   ".$database."
	SET 			category 		= '".$new_category."'";
				//,
				//primary_folder  	= '".$adjusted_primary_folder."',
				//secondary_folder 	= '".$adjusted_secondary_folder."'";
if($change_to == 'referrer'){		$sql .= ",referrer = 'yes'";}		
if($change_to == 'non_referrer'){	$sql .= ",referrer = 'no'";}			
if($change_to == 'deleted'){		$sql .= ",deleted = 'yes'";}		
if($change_to == 'undeleted'){		$sql .= ",deleted = 'no'";}
if($change_to == 'active'){			$sql .= ",status = 'yes'";}		
if($change_to == 'resolved'){		$sql .= ",status = 'no'";}		
$sql .="	
	WHERE 	user_id 	= '".$_SESSION['viewing_client_id']."'
	AND 	item_id 	= '".$item_id."'";
//echo "hi";
//echo $sql; exit();

mysqli_query($conn, $sql);



//then let's adjust items_all for this specific item
$sql = "UPDATE items_all 
		SET 
			found_in_primary_folder   	= '".$adjusted_primary_folder."',
			found_in_secondary_folder 	= '".$adjusted_secondary_folder."',
			category 		  			= '".$new_category."'";
if($change_to == 'deleted'){		$sql .= ",deleted_or_not = 'yes'";}		
if($change_to == 'undeleted'){		$sql .= ",deleted_or_not = 'no'";}
if($change_to == 'active'){			$sql .= ",current_status = 'yes'";}		
if($change_to == 'resolved'){		$sql .= ",current_status = 'no'";}	
		
$sql .= "
	WHERE found_in_database = '".$database."'
	AND   item_id 			= '".$item_id."'";
mysqli_query($conn, $sql);



//only if changing the referrer element
if(	$change_to == 'referrer'		OR
	$change_to == 'non_referrer'	){
		if(	$change_to == 'referrer'	){	$set_to = 'yes';}
		if(	$change_to == 'non_referrer'){		$set_to = 'no';}			
		$sql = "UPDATE 	items_all 
				SET 	people_referrer 	= '".$set_to."'
				WHERE 	found_in_database 	= '".$database."'
				AND   	item_id 			= '".$item_id."'";
		mysqli_query($conn, $sql); 
}

//then finally let's adjust the items relationships_table for all instances of this item
$sql = "UPDATE item_relationships
	SET item_a_primary_folder 	= '".$adjusted_primary_folder."',
	    item_a_secondary_folder	= '".$adjusted_secondary_folder."'
	WHERE item_a_database 		= '".$database."'
	AND item_a_id 			= '".$item_id."'";
mysqli_query($conn, $sql); 
//then repeat in reverse for b 
$sql = "UPDATE item_relationships
	SET item_b_primary_folder 	= '".$adjusted_primary_folder."',
	    item_b_secondary_folder	= '".$adjusted_secondary_folder."'
	WHERE item_b_database 		= '".$database."'
	AND item_b_id 			= '".$item_id."'";
mysqli_query($conn, $sql); 



//this doesn't have to be overly complicated because really we are just working through all this
//we can pull out the appropriate relationships as we please
$sql = "UPDATE item_relationships
	SET ";
if($change_to == 'deleted'){		$sql .= "item_a_deleted_or_not = 'yes'";}		
if($change_to == 'undeleted'){		$sql .= "item_a_deleted_or_not = 'no'";}
if($change_to == 'active'){		$sql .= "item_a_current_status = 'yes'";}		
if($change_to == 'resolved'){		$sql .= "item_a_current_status = 'no'";}
	$sql .= "WHERE item_a_database 		= '".$database."'
		 AND item_a_id 			= '".$item_id."'";
mysqli_query($conn, $sql); 

$sql = "UPDATE item_relationships
	SET ";
if($change_to == 'deleted'){		$sql .= "item_b_deleted_or_not = 'yes'";}		
if($change_to == 'undeleted'){		$sql .= "item_b_deleted_or_not = 'no'";}
if($change_to == 'active'){		$sql .= "item_b_current_status = 'yes'";}		
if($change_to == 'resolved'){		$sql .= "item_b_current_status = 'no'";}
	$sql .= "WHERE item_b_database 		= '".$database."'
		 AND item_b_id 			= '".$item_id."'";
mysqli_query($conn, $sql); 



//CR 21.01.29
//labels should really go here as well
//not currently active though so leave it be





//this will all be the same no matter where
//change all notifications and links within the notifications page of this
$sql = "UPDATE notifications_and_alerts 
	SET 	primary_folder		= '".$adjusted_primary_folder."' AND
		secondary_folder 	= '".$adjusted_secondary_folder."' 
	WHERE user_id 		= '".$_SESSION['viewing_client_id']."'
	AND primary_folder 	= '".$original_primary_folder."'
	AND secondary_folder 	= '".$original_secondary_folder."'
	AND item_id 		= '".$item_id ."'";
mysqli_query($conn, $sql);

//echo "/".$adjusted_primary_folder."/".$adjusted_secondary_folder."/";
//exit();
//adjust all reminders
$sql = "UPDATE reminders 
	SET 	primary_folder	 = '".$adjusted_primary_folder."' AND
		secondary_folder = '".$adjusted_secondary_folder."' 
	WHERE for_user_id 	= '".$_SESSION['viewing_client_id']."'
	AND primary_folder 	= '".$original_primary_folder."'
	AND secondary_folder 	= '".$original_secondary_folder."'
	AND item_id 		= '".$item_id ."'";
mysqli_query($conn, $sql);


 $sql = "UPDATE discussion 
 	SET 	primary_folder 		= '".$adjusted_primary_folder."',
  		secondary_folder 	= '".$adjusted_secondary_folder."'   		
	WHERE (	user_id 		= '".$_SESSION['viewing_client_id']."' 
		OR
		to_user_id 	=  '".$_SESSION['viewing_client_id']."' )
	AND primary_folder 	= '".$original_primary_folder."'
	AND secondary_folder 	= '".$original_secondary_folder."'	
	AND related_id 		= '".$item_id ."'";
		
mysqli_query($conn, $sql);

//echo "/".$adjusted_primary_folder."/".$adjusted_secondary_folder."/";
//exit();


header("Location: /".$adjusted_primary_folder."/".$adjusted_secondary_folder."/item/display.php?item_id=".$item_id);
exit();

//once this is completed we can the move onto finally finishing the chart... which if I'm honest is where we are up to right now


