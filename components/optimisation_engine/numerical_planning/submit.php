<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/functions/safely_replacing_apostrophies_function.php";	
require $_SERVER['DOCUMENT_ROOT']."/components/functions/url_and_folder_functions.php";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	
if($_POST['primary_folder'] == 'activities'){	$db = 'activities';}
if($_POST['primary_folder'] == 'issues'){	$db = 'issues';}	//cost
if($_POST['primary_folder'] == 'upgrades'){	$db = 'upgrades';}
if($_POST['primary_folder'] == 'opportunities'){$db = 'opportunities';}


$sql = "UPDATE ".$db."
	SET 	numerical_zone 		= '".$_POST['value_zone']."',
		numerical_datapoint	= '".$_POST['numerical_datapoint']."'
	WHERE 	item_id 		= '".$_POST['item_id']."'";
	
//	echo $sql;
//	exit();
mysqli_query($conn, $sql);



/*
//this importance of these updates is to be able to build tracking of changes over time...
//from estimattions to prediction of what impact it really has... so that we can adjust an initial estimation of say:
A 8-10% impact on productivity from stress at home as an attention issue
For someone that then goes to address that...
How they will readjust it
And ultimately how they will change things over time...
*/

$sql = "SHOW COLUMNS FROM ".$db;
$result = mysqli_query($conn,$sql);
$column_string = '';
$column_count = 0;
while($row = mysqli_fetch_array($result)){
	if($column_count != 0){$column_string .= ', ';}
	$column_string .= $row['Field'];
	$column_count ++; 
}

 $sql = "	INSERT 	".$db."_updates (".$column_string.")
		SELECT 	".$column_string." 
		FROM 	".$db."
		WHERE 	item_id 	= '".$_POST['item_id']."'";

mysqli_query($conn,$sql);








/*

//CR 15.06.2020 There is still some problem here with this folder showing up as unknown here when it really should just show up as unset
if($_POST['quaternary_folder'] == 'item'){$quaternary_folder = 'item';}
else{$quaternary_folder = '';}



	
	$sql = "INSERT INTO resource_requirements (
					primary_folder, 		     
					secondary_folder, 
					tertiary_folder, 
					quaternary_folder, 					
					related_id,						    			 
					user_id, 			     
					resource_description) 
		VALUES(			
					'".mysqli_real_escape_string($conn, $_POST['primary_folder'])."',
					'".mysqli_real_escape_string($conn, $_POST['secondary_folder'])."',
					'".mysqli_real_escape_string($conn, $_POST['tertiary_folder'])."',
					'".mysqli_real_escape_string($conn, $quaternary_folder)."',					
					'".mysqli_real_escape_string($conn, $_POST['item_id'])."',								
					'".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."',
					'".mysqli_real_escape_string($conn, $_POST['time_requirement'])."')";

				
	$result = mysqli_query($conn, $sql);
*/	
	
	
//the appropriate alert just hasn't been completed yet	
//create alert notification and send email iff required
//$notification_type = 'standard_discussion';
//require $_SERVER['DOCUMENT_ROOT']."/components/notifications_and_alerts/create_new_notification_and_alert.php";

header("Location: /".$_POST['primary_folder']."/".$_POST['secondary_folder']."/item/display.php?item_id=".$_POST['item_id']);
exit();

?>