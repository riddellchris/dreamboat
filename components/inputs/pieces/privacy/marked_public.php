<?php
if(!isset($_SESSION)){session_start();}
$_SESSION['flow_privacy'] = 'public';
?>

<div style='text-align: center;max-width:1100px;margin:auto;'>
	<div style='width:100%;max-width:1100px;display: inline-block;padding: 0px 0px;'>
		<div 		<?php 
		if(	$_SESSION['flow_sub_privacy_friends'] 		== 'private' OR
			$_SESSION['flow_sub_privacy_family'] 		== 'private' OR
			$_SESSION['flow_sub_privacy_colleagues'] 	== 'private' OR
			$_SESSION['flow_sub_privacy_work_contacts'] 	== 'private'){echo "class='wide-button part-privacy'";}
		else{echo "class='wide-button full-privacy'";}?> style='box-shadow:0px 0px 0px rgba(0, 0, 0, 0);padding: 3px 0px;padding-top:10px;color:#fff;width:50%;display:block;float: left;height: 26px;'  >
		CURRENTLY PUBLIC
		</div>
		<div class='wide-button shadow' 
 style='padding: 3px 0px;padding-top:10px;color:#fff;width:50%;		display:block;margin-left: 50%;height: 26px;max-width:550px;' onclick="make_private('inputs_box_privacy_div')">
		MAKE PRIVATE
		</div>
	</div>	
	<div id='focus_sub_privacy' style='width:100%;max-width:1100px;display: inline-block;padding: 0px 0px;'>
		<?php require $_SERVER['DOCUMENT_ROOT']."/inputs/pieces/privacy/sub_privacy/index.php";?>
	</div>
</div>	