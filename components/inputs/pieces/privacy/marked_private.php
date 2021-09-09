<?php
if(!isset($_SESSION)){session_start();}$_SESSION['flow_privacy'] = 'private';
?>
<div style='text-align: center;'>
	<div style='width:100%;max-width:1100px;display: inline-block;padding: 0px 0px;'>
		<div class='wide-button shadow' style='padding: 3px 0px;padding-top:10px;color:#fff;width:50%;display:block;float: left;height: 26px;'   onclick="make_public('inputs_box_privacy_div')">
		MAKE PUBLIC
			
		</div>
		<div class='wide-button'  style='box-shadow: 0px 0px 0px rgba(0, 0, 0, 0);padding: 3px 0px;background-color: #ef2b2b;padding-top:10px;color:#fff;width:50%;display:block;margin-left: 50%;height: 26px;max-width:550px;'>
		
CURRENTLY PRIVATE
		</div>
	</div>	
</div>	