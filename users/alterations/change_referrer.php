<?php
if(!isset($_SESSION)){session_start();}


if($_GET['set'] == 'yes'	){$set='yes';}
if($_GET['set'] == 'no'		){$set='no';}

//if($proceed == 'yes'){
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
	
	$sql = "UPDATE user_account_details 
		SET proven_referrer 	= '".$set."'";
//		,
//		    ".$off_1." 	= 'no',
//		    ".$off_2." 	= 'no'	
	$sql .= "		WHERE user_id = '".$_GET['clients_user_id']."'
		";
		
	mysqli_query($conn, $sql);
	


//}

header("Location: ".$_SESSION['this_page']);
exit();
?>