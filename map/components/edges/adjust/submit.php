<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

//get this data out from the form
//store it as the latest update of this data and then go back to the form

/*
echo '<pre>' , var_dump($_GET) , '</pre>';
echo '<pre>' , var_dump($_POST) , '</pre>';
echo "<br>";
*/

//first unset any latest_data_for_this_edge items that are currently a yes
$sql = "UPDATE edge_data 
	SET latest_data_for_this_edge = 'no'
	WHERE relationship_id = '".mysqli_real_escape_string($conn, $_GET['item_id'])."'";
	
$result = mysqli_query($conn, $sql);

$sql = "INSERT INTO edge_data(
		user_id,
		relationship_id,
		latest_data_for_this_edge,
		time,
		financial_flow,
		productivity,
		productivity_improvement_potential,		
		communication,
		trust,
		quality,		
		kpi_1,
		kpi_2,
		kpi_3,
		kpi_4)


	VALUES	(	'".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."',
			'".mysqli_real_escape_string($conn, $_GET['item_id'])."',
			'yes',
			'".mysqli_real_escape_string($conn, $_POST['time'])."',
			'".mysqli_real_escape_string($conn, $_POST['financial_flow'])."',
			'".mysqli_real_escape_string($conn, $_POST['productivity'])."',
			'".mysqli_real_escape_string($conn, $_POST['productivity_improvement_potential'])."',			
			'".mysqli_real_escape_string($conn, $_POST['communication'])."',
			'".mysqli_real_escape_string($conn, $_POST['trust'])."',
			'".mysqli_real_escape_string($conn, $_POST['quality'])."',			
			'".mysqli_real_escape_string($conn, $_POST['kpi_1'])."',
			'".mysqli_real_escape_string($conn, $_POST['kpi_2'])."',
			'".mysqli_real_escape_string($conn, $_POST['kpi_3'])."',
			'".mysqli_real_escape_string($conn, $_POST['kpi_4'])."'
			)";
	
//echo $sql; exit();

$result = mysqli_query($conn, $sql);

//return to the item_id
header("Location: /map/edges/index.php?item_id=".$_GET['item_id']);
exit();

