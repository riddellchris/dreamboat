<?php
if(!isset($_SESSION)){session_start();}

$sql = "SELECT * FROM user_account_details WHERE pilots_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."' AND client_status = 'active' AND dead = 'no' ";

//	if($_SESSION['performance_sales_sub_menu'] == 'call_1'){		$sql .= " AND call_1_made 		= 'no' ";}
	if($_SESSION['performance_sales_sub_menu'] == 'initial_email'){		$sql .= " 					 AND initial_email_sent		= 'no' ";}
	
	if($_SESSION['performance_sales_sub_menu'] == 'call_1'){		$sql .= " AND initial_email_sent	= 'yes'  AND call_1_made		= 'no' ";}	
	if($_SESSION['performance_sales_sub_menu'] == 'call_2'){		$sql .= " AND call_2_made 		= 'yes'  AND call_3_made		= 'no' ";}
	if($_SESSION['performance_sales_sub_menu'] == 'call_3'){		$sql .= " AND call_3_made 		= 'yes'  AND prospectus_delivered 	= 'no' ";}
	if($_SESSION['performance_sales_sub_menu'] == 'prospectus'){		$sql .= " AND prospectus_delivered 	= 'yes'  AND followup_done 		= 'no' ";}
	if($_SESSION['performance_sales_sub_menu'] == 'follow_up_done'){	$sql .= " AND followup_done 		= 'yes'  AND walkthrough_planned 	= 'no' ";}	
	if($_SESSION['performance_sales_sub_menu'] == 'walkthrough_planned'){	$sql .= " AND walkthrough_planned 	= 'yes'  AND walkthrough_had 		= 'no' ";}
	if($_SESSION['performance_sales_sub_menu'] == 'walkthrough_had'){	$sql .= " AND walkthrough_had 		= 'yes'  AND client_gained 		= 'no' ";}	


	if($_SESSION['performance_sales_sub_menu'] == 'initial_email'){		$sql .= " ORDER BY created_stamp DESC";}
	if($_SESSION['performance_sales_sub_menu'] == 'call_1'){		$sql .= " ORDER BY call_1_made_stamp DESC";}
	if($_SESSION['performance_sales_sub_menu'] == 'call_2'){		$sql .= " ORDER BY call_2_made_stamp DESC";}
	if($_SESSION['performance_sales_sub_menu'] == 'call_3'){		$sql .= " ORDER BY call_3_made_stamp DESC";}
	if($_SESSION['performance_sales_sub_menu'] == 'prospectus'){		$sql .= " ORDER BY prospectus_delivered_stamp DESC";}
	if($_SESSION['performance_sales_sub_menu'] == 'follow_up_done'){	$sql .= " ORDER BY followup_done_stamp DESC";}	
	if($_SESSION['performance_sales_sub_menu'] == 'walkthrough_planned'){	$sql .= " ORDER BY walkthrough_planned_stamp DESC";}
	if($_SESSION['performance_sales_sub_menu'] == 'walkthrough_had'){	$sql .= " ORDER BY walkthrough_had_stamp DESC";}


echo "<style>
	.list_cell{display:table-cell;padding:10px;text-align:left;}
	</style>
";

//echo $sql;
//exit();

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);

echo "<div style='display: table;text-align:left;font-family:helvetica;text-transform:uppercase;margin-top:auto;margin-bottom:auto;margin-left:auto;margin-right:auto;'>";
	echo "<br>";	echo "<br>";
		
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

	if($_SESSION['performance_sales_sub_menu'] == 'initial_email'){		$time_to_use = $row['created_stamp'];}
	if($_SESSION['performance_sales_sub_menu'] == 'call_1'){		$time_to_use = $row['call_1_made_stamp'];}	
	if($_SESSION['performance_sales_sub_menu'] == 'call_2'){		$time_to_use = $row['call_2_made_stamp'];}
	if($_SESSION['performance_sales_sub_menu'] == 'call_3'){		$time_to_use = $row['call_3_made_stamp'];}
	if($_SESSION['performance_sales_sub_menu'] == 'prospectus'){		$time_to_use = $row['prospectus_delivered_stamp'];}
	if($_SESSION['performance_sales_sub_menu'] == 'follow_up_done'){	$time_to_use = $row['followup_done_stamp'];}	
	if($_SESSION['performance_sales_sub_menu'] == 'walkthrough_planned'){	$time_to_use = $row['walkthrough_planned_stamp'];}
	if($_SESSION['performance_sales_sub_menu'] == 'walkthrough_had'){	$time_to_use = $row['walkthrough_had_stamp'];}

//echo $sql;

	echo "<div style='display: table-row;'>";

		if($_SESSION['performance_sales_sub_menu'] != 'initial_email'){
			echo "<div><a style='float:right;color:#000000;text-decoration:none;' href='/components/performance/sales/slide_user.php?direction=backwards&id=".$row['user_id']."'><<</a></div>";	
		}
		echo "<div style='display:table-cell;'><a href='/users/alterations/mark_dead.php?id=".$row['user_id']."' style='color:red;'>x</a></div>";
		echo "<div style='display:table-cell;'>".time_since_string($time_to_use)."</div>";		
		
		echo "<div style='display:table-cell;padding:10px;'><a style='float:right;color: #ffffff;' href='select_client.php?clients_user_id=".$row['user_id']."'>";
			echo $row['first_name']." ".$row['second_name'];
		echo "</a></div>";		
		echo"<div class='list_cell'> <a href='/users/change_phone_number.php?clients_user_id=".$row['user_id']."'>";
				if($row['phone_number']==''){echo ' --- ';}else{echo $row['phone_number'];}
		echo "</a></div>";
	//	echo"<div class='list_cell'> <a href='/users/change_email.php?clients_user_id=".$row['user_id']."'>";
	//		if($row['email']==''){echo ' --- ';}else{echo $row['email'];}
	//	echo "</a></div>";
		if($row['user_id'] != $_SESSION['viewing_client_id']){
		echo "<div><a style='float:right;color:#000000;text-decoration:none;' href='/components/performance/sales/slide_user.php?direction=forwards&id=".$row['user_id']."'>>></a></div>";
		}
		else{echo "<span style='color:red;float:right;'>selected &nbsp;&nbsp;</span>";}
	echo "</div>";
	echo "<br>";
}
echo "</div>";


?>