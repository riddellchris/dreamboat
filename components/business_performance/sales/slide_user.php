<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

$id = mysqli_real_escape_string($conn, $_GET['id']);

$sql = "SELECT * FROM user_account_details WHERE user_id = '".$id ."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$sql = "UPDATE user_account_details SET ";

   $CurrentTime = date($_SERVER['REQUEST_TIME']) + 8 *60 *60;

if($_GET['direction'] == 'forwards'){
	if($row['initial_email_sent'] 		== 'no' 						){$sql .= "initial_email_sent 	= 'yes', initial_email_sent_stamp 	= '".gmdate("Y-m-d\ H:i:s", $CurrentTime)."'";}
	if($row['initial_email_sent'] 		== 'yes'  && $row['call_1_made'] 		== 'no'	){$sql .= "call_1_made 		= 'yes', call_1_made_stamp 		= '".gmdate("Y-m-d\ H:i:s", $CurrentTime)."'";	$_SESSION['performance_sales_sub_menu'] = 'call_1';}	
	if($row['call_1_made'] 			== 'yes'  && $row['call_2_made'] 		== 'no'	){$sql .= "call_2_made 		= 'yes', call_2_made_stamp 		= '".gmdate("Y-m-d\ H:i:s", $CurrentTime)."'";	$_SESSION['performance_sales_sub_menu'] = 'call_2';}
	if($row['call_2_made'] 			== 'yes'  && $row['call_3_made'] 		== 'no'	){$sql .= "call_3_made 		= 'yes', call_3_made_stamp 		= '".gmdate("Y-m-d\ H:i:s", $CurrentTime)."'";	$_SESSION['performance_sales_sub_menu'] = 'call_3';}
	if($row['call_3_made'] 			== 'yes'  && $row['prospectus_delivered'] 	== 'no'	){$sql .= "prospectus_delivered = 'yes', prospectus_delivered_stamp 	= '".gmdate("Y-m-d\ H:i:s", $CurrentTime)."'";	$_SESSION['performance_sales_sub_menu'] = 'prospectus';}
	if($row['prospectus_delivered'] 	== 'yes'  && $row['followup_done'] 		== 'no'	){$sql .= "followup_done 	= 'yes', followup_done_stamp 		= '".gmdate("Y-m-d\ H:i:s", $CurrentTime)."'";	$_SESSION['performance_sales_sub_menu'] = 'follow_up_done';}
	if($row['followup_done'] 		== 'yes'  && $row['walkthrough_planned'] 	== 'no'	){$sql .= "walkthrough_planned 	= 'yes', walkthrough_planned_stamp 	= '".gmdate("Y-m-d\ H:i:s", $CurrentTime)."'";	$_SESSION['performance_sales_sub_menu'] = 'walkthrough_planned';}
	if($row['walkthrough_planned'] 		== 'yes'  && $row['walkthrough_had'] 		== 'no'	){$sql .= "walkthrough_had 	= 'yes', walkthrough_had_stamp 		= '".gmdate("Y-m-d\ H:i:s", $CurrentTime)."'";	$_SESSION['performance_sales_sub_menu'] = 'walkthrough_had';}
	if($row['walkthrough_had'] 		== 'yes'  && $row['client_gained'] 		== 'no'	){$sql .= " client_gained 	= 'yes', client_gained_stamp 		= '".gmdate("Y-m-d\ H:i:s\ ", $CurrentTime)."'";}	
}

if($_GET['direction'] == 'backwards'){

	if($row['initial_email_sent'] 		== 'yes'  && $row['call_1_made'] 		== 'no'	){$sql .= "initial_email_sent	= 'no', initial_email_stamp 		= ''";	$_SESSION['performance_sales_sub_menu'] = 'initial_email';}
	if($row['call_1_made'] 			== 'yes'  && $row['call_2_made'] 		== 'no'	){$sql .= "call_1_made 		= 'no', call_1_made_stamp 		= ''";	$_SESSION['performance_sales_sub_menu'] = 'call_1';}
	if($row['call_2_made'] 			== 'yes'  && $row['call_3_made'] 		== 'no'	){$sql .= "call_2_made 		= 'no', call_2_made_stamp 		= ''";	$_SESSION['performance_sales_sub_menu'] = 'call_1';}
	if($row['call_3_made'] 			== 'yes'  && $row['prospectus_delivered'] 	== 'no'	){$sql .= "call_3_made 		= 'no', call_3_made_stamp 		= ''";	$_SESSION['performance_sales_sub_menu'] = 'call_2';}
	if($row['prospectus_delivered'] 	== 'yes'  && $row['followup_done'] 		== 'no'	){$sql .= "prospectus_delivered = 'no', prospectus_delivered_stamp 	= ''";	$_SESSION['performance_sales_sub_menu'] = 'call_3';}
	if($row['followup_done'] 		== 'yes'  && $row['walkthrough_planned'] 	== 'no'	){$sql .= "followup_done 	= 'no', followup_done_stamp 		= ''";	$_SESSION['performance_sales_sub_menu'] = 'prospectus';}
	if($row['walkthrough_planned'] 		== 'yes'  && $row['walkthrough_had'] 		== 'no'	){$sql .= "walkthrough_planned 	= 'no', walkthrough_planned_stamp 	= ''";	$_SESSION['performance_sales_sub_menu'] = 'follow_up_done';}
	if($row['walkthrough_had'] 		== 'yes'  && $row['client_gained'] 		== 'no'	){$sql .= "walkthrough_had 	= 'no', walkthrough_had_stamp 		= ''";	$_SESSION['performance_sales_sub_menu'] = 'walkthrough_planned';}	
	if($row['client_gained'] 		== 'yes'						){$sql .= " client_gained 	= 'no', client_gained_stamp 		= ''";	$_SESSION['performance_sales_sub_menu'] = 'walkthrough_had';}	
}

$sql .= " WHERE user_id = '".$id."'";

//echo $sql;
//exit();
$result = mysqli_query($conn, $sql);

header("Location: ".$_SESSION['this_page']);
exit();