<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

$sql = "SELECT * FROM activities WHERE item_id = '".$_GET['item_id']."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$selected = $row['category'];
?>

<select name = 'activity_category' 
<?php if($make_onchange == 'yes'){echo " onchange='this.form.submit()' ";}?>
	style='width:100%;max-width:1100px;' >
	<option <?php if($selected == 'doing'){echo 'selected';} ?> 		value="doing"		><?php if($selected == 'doing'){echo 'Change category from ';}else{echo "To ";} ?> Doing</option>
	<option <?php if($selected == 'planning'){echo 'selected';} ?> 		value="planning"	><?php if($selected == 'planning'){echo 'Change category from ';}else{echo "To ";} ?> Planning</option>
	<option <?php if($selected == 'managing'){echo 'selected';} ?> 		value="managing"	><?php if($selected == 'managing'){echo 'Change category from ';}else{echo "To ";} ?> Managing</option>
	<option <?php if($selected == 'supporting'){echo 'selected';} ?> 	value="supporting"	><?php if($selected == 'supporting'){echo 'Change category from ';}else{echo "To ";} ?> Supporting</option>	
	<option <?php if($selected == 'administrating'){echo 'selected';} ?> 	value="administrating"	><?php if($selected == 'administrating'){echo 'Change category from ';}else{echo "To ";} ?> Administrating</option>
	<option <?php if($selected == 'growing'){echo 'selected';} ?> 		value="growing"		><?php if($selected == 'growing'){echo 'Change category from ';}else{echo "To ";} ?> Growing</option>
  
</select>
