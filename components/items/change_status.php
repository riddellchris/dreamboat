<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/folder_to_database_relationships.php";

$sql = "UPDATE ".$database." ";
	//calculate the current time at the server...
	//The server is currently in Singapore so we must adjust for that by the GMT+8 timezone that Singapore uses.
	$CurrentTime = date($_SERVER['REQUEST_TIME']);
	$datetime1 = gmdate("Y-m-d\ H:i:s", $CurrentTime + 11*60*60);//start time
	//this allows us to do many things in time but to start with it allows us to see how many have been "closed" in the past week
if($_GET['to'] == 'deleted'	){$sql .= "SET deleted = 'yes'";									$notification_type = 'deleted';}
if($_GET['to'] == 'undeleted'	){$sql .= "SET deleted = 'no'";										$notification_type = 'undeleted';}
if($_GET['to'] == 'resolved'	){$sql .= "SET status = 'resolved', 	status_to_completed_timestamp = '".$datetime1."'";		$notification_type = 'resolved';}
if($_GET['to'] == 'active'	){$sql .= "SET status = 'active',  	status_to_completed_timestamp = '0000-00-00 00:00:00'	";	$notification_type = 'active';}

$sql .= "	WHERE ";

if($_GET['primary_folder'] != 'admin' OR
	($_GET['primary_folder'] == 'admin' && $_GET['secondary_folder'] == 'users')){
	$sql .= "  user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' AND 	";
}
$sql .= "	item_id = '".mysqli_real_escape_string($conn, $_GET['item_id'])."'";
//echo $sql;
//exit();

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";	
mysqli_query($conn, $sql);


//Update all statuses in item relationships
$sql = "UPDATE items_all ";
	if($notification_type == 'deleted'){	$sql .= " SET deleted_or_not = 'yes'";}
	if($notification_type == 'undeleted'){	$sql .= " SET deleted_or_not = 'no'";}
	if($notification_type == 'resolved'){	$sql .= " SET current_status = 'active'";}
	if($notification_type == 'active'){	$sql .= " SET current_status = 'inactive'";}	
$sql .= " WHERE found_in_primary_folder 		= '".mysqli_real_escape_string($conn, $_GET['primary_folder'])."'
	  AND  found_in_secondary_folder 		= '".mysqli_real_escape_string($conn, $_GET['secondary_folder'])."'
	  AND  item_id 					= '".mysqli_real_escape_string($conn, $_GET['item_id'])."'
	  AND  user_id 					= '".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."'";
mysqli_query($conn, $sql);


//get out database name from items_all for use in the next one
$sql = "SELECT * FROM items_all 
	WHERE found_in_primary_folder 		= '".mysqli_real_escape_string($conn, $_GET['primary_folder'])."'
	  AND  found_in_secondary_folder 	= '".mysqli_real_escape_string($conn, $_GET['secondary_folder'])."'
	  AND  item_id 				= '".mysqli_real_escape_string($conn, $_GET['item_id'])."'
	  AND  user_id 				= '".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$database_name = $row['found_in_database'];


///then we have everything we need to change the relationships as appropriate


//get out current data 
$sql = "SELECT * FROM item_relationships WHERE ";
//update as apporpriate 
//restore
//repeat for item b not just item a relationships

//Update all statuses in item relationships
$sql = "UPDATE 	item_relationships 
	SET 	item_a_current_status 	= '".$notification_type."' 
	WHERE 	item_a_id 		= '".$_GET['primary folder']."'
	AND 	item_a_current_status 	= '".mysqli_real_escape_string($conn, $_GET['item_id'])."'";
	
	


//this can come back in //when it's all built more properly and I have all the right things there... infact I do so I probably could
//require $_SERVER['DOCUMENT_ROOT']."/components/notifications_and_alerts/create_new_notification_and_alert.php";

if(!isset($_SESSION['reviewing'])){ 
	header("Location: https://dreamboat.com.au".$_SESSION['this_page']);
	exit();
}






