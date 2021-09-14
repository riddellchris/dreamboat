<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/tracking/input_table/styling.php";

$using_for_data_tables = 'yes';
require $_SERVER['DOCUMENT_ROOT']."/components/crm/weekly_tracking_calculations_inner_workings.php";

function open_cell(){

echo "
			
			<div class='div-table-cell'>
";
}


function close_cell(){
echo "		
	</div>

";

}

///components/crm/weekly_tracking_calculations.php
//has what data to actually show here
//other than time data obviously which is just going to be standard tracking
echo "
<style>
.div-table-cell{padding: 1vh 1.5%;}
.div-table-row{width:100%;}
.div-table-col_1{width:25%;}
</style>

	<form>
<div style='width:100%;display:table;'>

	";
	//show the last 5 weeks that have passed and allow editing of those numbers
	echo "
	<div class='div-table-row'>";
		open_cell();
			//echo date('Y-m-d',strtotime('last sunday'));
		close_cell();
		open_cell();
			echo $new_title;
		close_cell();	
		open_cell();		
			echo $active_title;
		close_cell();	
		open_cell();					
			echo $closed_title;
		close_cell();				
	echo "</div>";	


   $sql = "SELECT * FROM tracking_inputs_weekly WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' ORDER BY entry_id DESC LIMIT 5";
 require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
 $result = mysqli_query($conn, $sql);
// $i = 0;
 
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

//$starting_point = $i-1; //because there was the additional ++ just placed there at the end of the while loopp in  require $_SERVER['DOCUMENT_ROOT']."/components/crm/weekly_tracking_calculations_inner_workings.php";
//$stopping_point = $starting_point - 5;
//for($i = $starting_point; $i > $stopping_point; $i--){

echo "<div class='div-table-row'>";
	open_cell();
		echo $row['week_ending_day']."/".$row['week_ending_month'];
	close_cell();
	open_cell();
		echo "
			<input ";
				echo "class	='si_digits_wide ".$variable_name."'"; 
				echo "name	='".$variable_name."_".$month_combo[$i]."'"; 
				echo "value 	='".$total_active[$i]."'";
			echo "	>";
		echo "	</input>";
	close_cell();
	open_cell();
			echo "
					<input ";
						echo "class	='si_digits_wide ".$variable_name."'"; 
						echo "name	='".$variable_name."_".$month_combo[$i]."'"; 
						echo "value 	='".$weekly_new[$i]."'";
					echo "	>";
				echo "	</input>";
	close_cell();
	open_cell();
			echo "
					<input ";
						echo "class	='si_digits_wide ".$variable_name."'"; 
						echo "name	='".$variable_name."_".$month_combo[$i]."'"; 
						echo "value 	='".$weekly_closed[$i]."'";
					echo "	>";
				echo "	</input>";
	close_cell();
echo"	</div>";

}






echo "	
	

</div>";

require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/submits/standard.php";
echo "
</form>
	//then we need to track what data is displayed on what pages	
";
?>