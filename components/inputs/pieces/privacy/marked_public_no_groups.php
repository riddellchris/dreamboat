<?php
if(!isset($_SESSION)){session_start();}$_SESSION['flow_privacy'] = 'public';
?>

<style>
.shadow{background-color: grey;}
.shadow:hover{box-shadow: 0px 8px 20px rgba(0, 0, 0, 0);background-color:#ff0000;}
</style>
<script>
function make_private() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("flow_box_privacy_div").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "/flow/pieces/privacy/marked_private.php", true);
  xhttp.send();
}
</script>
<script>
function make_public() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("flow_box_privacy_div").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "/flow/pieces/privacy/marked_public.php", true);
  xhttp.send();
}
</script>

<div style='text-align: center;'>
	<div style='width:100%;max-width:1100px;display: inline-block;padding: 0px 0px;'>
		<div class='wide-button shadow' style='padding: 3px 0px;padding-top:10px;color:#fff;width:50%;display:block;float: left;height: 26px;'  onclick="make_private('flow_box_privacy_div')">
		MAKE PRIVATE
		</div>
		<div class='wide-button'  style='box-shadow:0px 0px 0px rgba(0, 0, 0, 0);padding: 3px 0px;padding-top:10px;color:#fff;width:50%;background-color: #00e200;display:block;margin-left: 50%;height: 26px;max-width:550px;'>
		CURRENTLY PUBLIC
		</div>
	</div>	
</div>	