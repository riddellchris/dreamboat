<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

$sql = "SELECT * FROM issues WHERE item_id = '".mysqli_real_escape_string($conn, $_GET['item_id'])."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$selected = $row['category'];
?>

<select name = 'issue_category' 
<?php if($make_onchange == 'yes'){echo " onchange='this.form.submit()' ";}?>
	style='width:100%;max-width:1100px;'>
	<option <?php if($selected == 'attention'){echo 'selected';} ?> 	value="attention"	><?php if($selected == 'attention'){echo 'Change category from ';}else{echo "To ";} ?> Attention</option>
	<option <?php if($selected == 'allocation'){echo 'selected';} ?> 	value="allocation"	><?php if($selected == 'allocation'){echo 'Change category from ';}else{echo "To ";} ?> Allocation</option>	
	<option <?php if($selected == 'communication'){echo 'selected';} ?> 	value="communication"	><?php if($selected == 'communication'){echo 'Change category from ';}else{echo "To ";} ?> Communication</option>
	<option <?php if($selected == 'efficiency'){echo 'selected';} ?> 	value="efficiency"	><?php if($selected == 'efficiency'){echo 'Change category from ';}else{echo "To ";} ?> Efficiency</option>
	<option <?php if($selected == 'effectiveness'){echo 'selected';} ?> 	value="effectiveness"	><?php if($selected == 'effectiveness'){echo 'Change category from ';}else{echo "To ";} ?> Effectiveness</option>	
	<option <?php if($selected == 'risk'){echo 'selected';} ?> 		value="risk"		><?php if($selected == 'risk'){echo 'Change category from ';}else{echo "To ";} ?> Risk</option>	
	<option <?php if($selected == 'direction'){echo 'selected';} ?> 	value="direction"	><?php if($selected == 'direction'){echo 'Change category from ';}else{echo "To ";} ?> Direction</option>
	<option <?php if($selected == 'motivation'){echo 'selected';} ?> 	value="motivation"	><?php if($selected == 'motivation'){echo 'Change category from ';}else{echo "To ";} ?> Motivation</option>		
	<option <?php if($selected == 'skills'){echo 'selected';} ?> 		value="skills"		><?php if($selected == 'skills'){echo 'Change category from ';}else{echo "To ";} ?> Skills</option>
	<option <?php if($selected == 'trust'){echo 'selected';} ?> 		value="trust"		><?php if($selected == 'trust'){echo 'Change category from ';}else{echo "To ";} ?> Trust</option>
	<option <?php if($selected == 'value'){echo 'selected';} ?> 		value="value"		><?php if($selected == 'value'){echo 'Change category from ';}else{echo "To ";} ?> Value</option>
	<option <?php if($selected == 'waste'){echo 'selected';} ?> 		value="waste"		><?php if($selected == 'waste'){echo 'Change category from ';}else{echo "To ";} ?> Waste</option>
  
</select>
