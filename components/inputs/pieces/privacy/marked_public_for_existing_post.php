<?php
if(!isset($_SESSION)){session_start();}
//leave here and don't change the sesssion variable for these ones
//if(!isset($_SESSION)){session_start();}$_SESSION['flow_privacy'] = 'public';

if($row['input_id'] == ''){$input_id = $_GET['input_id'];}
else{$input_id = $row['input_id'];}

//this means that there isn't an input and we are running from 
if($row['input_id'] == ''){
	$sql = "UPDATE network_posts SET privacy='public' WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."' AND input_id='".mysqli_real_escape_string($conn, $_GET['input_id'])."'";
	require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
	$result = mysqli_query($conn, $sql);
	mysqli_close($conn);
}

?>

<div style='text-align: center;'>
	<div style='width:100%;max-width:1100px;display: inline-block;padding: 0px 0px;'>
		<div class='wide-button' style='background-color: #00e200;box-shadow:0px 0px 0px rgba(0, 0, 0, 0.0);padding: 3px 0px;padding-top:10px;color:#fff;width:50%;display:block;float: left;height: 26px;'>
		CURRENTLY PUBLIC
		</div>
		<div class='wide-button shadow make-private'  style='padding: 3px 0px;padding-top:10px;color:#fff;width:50%;display:block;margin-left: 50%;height: 26px;max-width:550px;'  onclick=<?php echo "make_existing_post_private('".$input_id."')"; ?>>
		MAKE PRIVATE
		</div>
	</div>	
</div>	