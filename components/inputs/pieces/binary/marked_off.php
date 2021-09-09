<?php
if(!isset($_SESSION)){session_start();}
$_SESSION['binary'] = 'no';
if($flow_row['binary_selection_off'] != ''){$_SESSION['binary_display_for_off'] = $flow_row['binary_selection_off'];}
if($flow_row['binary_selection_on']  != ''){$_SESSION['binary_display_for_on']  = $flow_row['binary_selection_on'];}
?>

<style>
.shadow:hover{box-shadow: 0px 8px 20px rgba(0, 0, 0, 0);}
</style>
<script>
function mark_on() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("inputs_box_binary_div").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "/inputs/pieces/binary/marked_on.php", true);
  xhttp.send();
}
function mark_off() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("inputs_box_binary_div").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "/inputs/pieces/binary/marked_off.php", true);
  xhttp.send();
}
</script>


<div style='text-align: center;'>
	<div style='width:100%;max-width:1100px;display: inline-block;padding: 0px 0px;'>
		<div class='wide-button shadow' style='padding: 3px 0px;padding-top:10px;color:#fff;width:50%;background-color: #ef2b2b;display:block;float: left;height: 26px;'  onclick="mark_on()">
		<?php echo $_SESSION['binary_display_for_off'];?>
			
		</div>
		<div class='wide-button'  style='box-shadow:inset 0px 4px 12px rgba(0, 0, 0, 0.4);padding: 3px 0px;padding-top:10px;color:#fff;width:50%;background-color: grey;display:block;margin-left: 50%;height: 26px;max-width:550px;'  onclick="mark_on()"> 
		<?php echo "make ".$_SESSION['binary_display_for_on'];?>

		</div>
	</div>	
</div>	