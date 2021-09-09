<?php
if(!isset($_SESSION)){session_start();}



//the scripts for all charts are found in
//components/layouts/standard_page/head
if($_GET['primary_folder'] == 'content'){
$user_to_view = 2;
}
else{
$user_to_view = $_SESSION['viewing_client_id'];
}


$sql = "SELECT * FROM tracking_inputs_weekly WHERE user_id = '".$user_to_view."' ORDER BY entry_id;";

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) == 0){$no_data = 'yes';}


if($no_data == 'yes'){
	echo "<div  style='width: 100%; height: 400px;";
		if($no_data == 'yes'){echo "margin-top:175px;color:#4332ff;";}
	echo "' class='prompt-font'>";
		echo "This chart will <span style='color:red;'>start to display</span> on Monday";
	echo "</div>";
}
else{ 

gcharts_div_display('crm_weekly_tracking_calculations','100%','400px');


}

?>
