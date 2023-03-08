<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

if(check_primary_folder('activities')){		$db = 'activities';}
if(check_primary_folder('issues')){		$db = 'issues';}	//cost
if(check_primary_folder('opportunities')){	$db = 'opportunities';}
if(check_primary_folder('upgrades')){	$db = 'upgrades';}
if(check_primary_folder('upgrades')){		$db = 'upgrades';}






$sql = "SELECT * FROM ".$db."
	WHERE item_id = '".$_GET['item_id']." '";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$number_of_results = mysqli_num_rows($result);

//if($number_of_results == 1){	$submit_name= 'update time estimate';	$stored_value = $row['resource_description'];}
//else{				$submit_name= 'add time estimate';	$stored_value = '';}
$submit_name= 'update';

//if(isset($placeholder)){

echo "<div name ='keeping_the_left_inbounds' style='width:100%;text-align:center;'>";
	echo "<div style='max-width:1100px; display: inline-block;'>";

	echo "
	
	<form action='/components/optimisation_engine/numerical_planning/submit.php?item_id=".$_GET['item_id']."' method='post'>";
	
	hidden_form_inputs_for_folders_and_items();
	
	
	echo "
	<style>
	.secure_input.business_requirements::-webkit-input-placeholder { /* Edge */
	  color: #cecece;
	}
	
	.secure_input.business_requirements:-ms-input-placeholder { /* Internet Explorer 10-11 */
	  color: #cecece;
	}
	
	.secure_input.business_requirements::placeholder {
	  color: #cecece;
	}
	</style>";
	
	echo "<div style='max-width:1100px;margin-left:auto;margin-right:auto;'>";
	
		echo "<div style='float:left;background-image: linear-gradient(to left, teal, #31e0d6);color:white;padding:8px;width:calc(100% - 16px);'>";
			echo "<div style='display: table;text-align:left;font-family:Comfortaa;'>";
				echo "<div style='display: table-row;'>";
					echo "<div style='display:table-cell;'>";
						if(check_primary_folder('activities')){		echo "Of everything you are currently doing, what value zone is the activity in?"; }//value production zone
						if(check_primary_folder('issues')){		echo "Where would you rank the urgency of this issue right now?"; }				//issue importance
						if(check_primary_folder('upgrades')){	echo "How difficult is it going to be to implement this upgrade right now?"; }	
						if(check_primary_folder('opportunities')){	echo "How difficult is it going to be to implement this opportunity right now?"; }							
					echo "</div>";
					echo "<div style='display:table-cell;'>";
						
						if(check_primary_folder('activities')){		require_file('/components/inputs/pieces/selects/numerical_planning_zones.php');}
						if(check_primary_folder('issues')){		require_file('/components/inputs/pieces/selects/numerical_planning_zones.php');}					
						if(check_primary_folder('upgrades')){	require_file('/components/inputs/pieces/selects/numerical_planning_zones.php');}					
						if(check_primary_folder('opportunities')){	require_file('/components/inputs/pieces/selects/numerical_planning_zones.php');}					
						
					echo "</div>";
				echo "</div>";
				echo "<div style='display: table-row;'>";
					echo "<div style='display:table-cell;'>";
						if(check_primary_folder('activities')){		echo "Averaged out, how much time are you spending each week on this activity?";}
						if(check_primary_folder('issues')){		echo "Of all the issues you have right now, what impact is it having on your productivity?";}
						if(check_primary_folder('opportunities')){	echo "How much upside does this opportunity have for your productivity this year?";}					
						if(check_primary_folder('upgrades')){	echo "Of all the upgrades to make right now, where would you rate it's potential upgrade?";}
					echo "</div>";
					echo "<div style='display:table-cell;'>";
						$max_width = "150px;";
						$display = "inline-block;";
						$item_name = "numerical_datapoint";		$value = floatval($row[$item_name]);												
						unset($placeholder); //incase used anywhere else earlier in the page.
						require $_SERVER['DOCUMENT_ROOT'].'/components/inputs/pieces/inputs/standard_input.php';
						if(check_primary_folder('activities')){		echo " hours or part thereof ";}
						if(check_primary_folder('issues')){		echo " % negative impact on productivity";}
						if(check_primary_folder('opportunities')){	echo " % positive impact on productivity";}					
						if(check_primary_folder('upgrades')){	echo " % upgrade on productivity";}					
						
						
					echo "</div>";
				echo "</div>";
			echo "</div>";
		echo "</div>";	
		
	
		
		echo "<div style='float:right;'>";		
			echo "<input class='login-submit' type='submit' style='float:left;margin-top:0px;width:100%;padding:8px;color:white;background-image: linear-gradient(to left, #31e0d6, teal);' value='".$submit_name."'></input>";		
		echo "</div>";	
	echo "</div>";
	echo "
	
	</form>";
		echo "<div style='float: left;'>
			<div style='max-width:1100px; margin-left: 10px;'>";	
		if(	check_primary_folder('activities') OR
			check_primary_folder('issues') OR
			check_primary_folder('opportunities')
			
			){
			
			echo "<form method='post' action='/components/items/move.php?db=activities&id=".$_GET['item_id']."&".url_folder_get_string_creation()."'>";
			//an option here is to include  
			//but this doesn't work or help with moving dicussion right now 20.08.17
			
			//hidden data required here //should be fine with just the function to use $_GET instead
			hidden_form_inputs_for_folders_and_items();
			
			$make_onchange = 'yes';
			if(check_primary_folder('activities')){		require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/activity_category.php";}
			//if(check_primary_folder('opportunities')){	require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/opportunities_category.php";}
			//nothing required here for upgrades
			unset($make_onchange);
			echo "</form>";
			}
		echo "</div>
		</div>"	;
	//}
	echo "</div>";	
echo "</div>";
?>


<!-- History records -->
<?php

	$sql = "SELECT * FROM {$db}_updates
	WHERE item_id = {$_GET['item_id']}
	ORDER BY `update_timestamp` DESC";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$number_of_results = mysqli_num_rows($result);
?>
<div class="record-info">
<?php if($number_of_results == 0): ?>
		<h3>There is no record yet.</h3>
<?php else: ?>
		<button class='btn-record'>Hide Records</button>
<?php endif ?>
</div>


<div class='record-wrapper <?php if($number_of_results == 0) echo"hidden"?>'>
<?php while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)):?>
	<div class="record-item">
		<div class="record-item__data">
			<h4><span>Average hours spent on each week: </span><?=number_format($row['numerical_datapoint'],2)?> Hours</h4>
			<?php if($row['numerical_zone'] != '...' || ''):?>
				<h4 class="value-zone"><span>Value Zone: </span><?=$row['numerical_zone']?></h4>
			<?php endif;?>
		</div>
		<p class="timestamp"><span>Set at </span><?=$row['update_timestamp']?></p>
	</div>
	<?php endwhile;?>
</div>
<style>
	.record-wrapper,.record-info{
		max-width:1050px;
		margin:0 auto;
		font-family: Comfortaa;
	}
	/* Record Info */
	.record-info{
		text-align:left;
	}
	.record-info .btn-record{
		padding: 1rem;
		cursor:pointer;
	}

	.record-wrapper{
  padding:1rem 0; 
  max-height:200px;
  overflow-y:scroll;
}
.record-wrapper.hidden{
	display:hidden;
}
.record-item{
  display:flex;
  justify-content:space-between;
  align-items:center;
  background-color:#f5f5f5;
  margin-bottom:.5rem;
  padding:.625rem;
}
.record-item__data > *{
	text-align:left;
}
.record-item__data h4 span{
	opacity: .5;
}
.timestamp{
  opacity:.5;
}
</style>

<script>
	const RecordToggleBtn = document.querySelector(".record-info .btn-record");
	const RecordWrapper = document.querySelector(".record-wrapper");

	let status = false;
	RecordToggleBtn.addEventListener('click',function(e){
		e.preventDefault();
		status = !status ;
		if(status){
			RecordToggleBtn.textContent = 'Show Records';
			RecordWrapper.classList.add("hidden");
		}else{
			RecordToggleBtn.textContent = 'Hide Records';
			RecordWrapper.classList.remove("hidden");
		}
	})
</script>
