<?php
if(!isset($_SESSION)){session_start();}

echo $user_id;

require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
echo $sql = "INSERT INTO 		progress_plus_core (	user_id, 
						   	productivity,
						   	productivity_why,
						   	productivity_improvement,
						   	focus,
						   	focus_why,
						   	focus_improvement,
						   	stress,
						   	stress_why,
						   	stress_improvement,
						   	confidence,
						   	confidence_why,
						   	confidence_improvement,
						   	control,
						   	control_why,
						   	control_improvement,
						   	health,
						   	health_why,
						   	health_improvement,
						   	happiness,
						   	happiness_why,
						   	happiness_improvement,
						   	energy, 
						   	energy_why, 
						   	energy_improvement 
						   	) 
						   	
					VALUES ('".$user_id."',
						'-5',
						'You felt you achieved nothing today',					
						'Coaching yourself to a better tomorrow',
						
						'-5',
						'',
						'Coaching yourself to a better tomorrow',
						
						'-5',
						'',
						'Coaching yourself to a better tomorrow',
						
						'-5',
						'',
						'Coaching yourself to a better tomorrow',
						
						'-5',
						'',
						'Coaching yourself to a better tomorrow',
						
						'-5',
						'',
						'Coaching yourself to a better tomorrow',
						
						'-5',
						'',
						'Coaching yourself to a better tomorrow',
						
						'-5',
						'',
						'Coaching yourself to a better tomorrow')";
mysqli_query($conn, $sql);


//services released to user
$sql = "INSERT INTO 		progress_plus_core (	user_id, 
						   	productivity,
						   	productivity_why,
						   	productivity_improvement,
						   	focus,
						   	focus_why,
						   	focus_improvement,
						   	stress,
						   	stress_why,
						   	stress_improvement,
						   	confidence,
						   	confidence_why,
						   	confidence_improvement,
						   	control,
						   	control_why,
						   	control_improvement,
						   	health,
						   	health_why,
						   	health_improvement,
						   	happiness,
						   	happiness_why,
						   	happiness_improvement,
						   	energy, 
						   	energy_why, 
						   	energy_improvement 
						   	) 
						   	
					VALUES ('".$user_id."',
						'-4',
						'You barely achieved anything today',					
						'Coaching yourself to a better tomorrow',
						
						'-4',
						'',
						'Coaching yourself to a better tomorrow',
						
						'-4',
						'',
						'Coaching yourself to a better tomorrow',
						
						'-4',
						'',
						'Coaching yourself to a better tomorrow',
						
						'-4',
						'',
						'Coaching yourself to a better tomorrow',
						
						'-4',
						'',
						'Coaching yourself to a better tomorrow',
						
						'-4',
						'',
						'Coaching yourself to a better tomorrow',
						
						'-4',
						'',
						'Coaching yourself to a better tomorrow')";
mysqli_query($conn, $sql);


//services released to user
$sql = "INSERT INTO 		progress_plus_core (	user_id, 
						   	productivity,
						   	productivity_why,
						   	productivity_improvement,
						   	focus,
						   	focus_why,
						   	focus_improvement,
						   	stress,
						   	stress_why,
						   	stress_improvement,
						   	confidence,
						   	confidence_why,
						   	confidence_improvement,
						   	control,
						   	control_why,
						   	control_improvement,
						   	health,
						   	health_why,
						   	health_improvement,
						   	happiness,
						   	happiness_why,
						   	happiness_improvement,
						   	energy, 
						   	energy_why, 
						   	energy_improvement 
						   	) 
						   	
					VALUES ('".$user_id."',
						'-3',
						'You were stuck all day today',					
						'Coaching yourself to a better tomorrow',
						
						'-3',
						'',
						'Coaching yourself to a better tomorrow',
						
						'-3',
						'',
						'Coaching yourself to a better tomorrow',
						
						'-3',
						'',
						'Coaching yourself to a better tomorrow',
						
						'-3',
						'',
						'Coaching yourself to a better tomorrow',
						
						'-3',
						'',
						'Coaching yourself to a better tomorrow',
						
						'-3',
						'',
						'Coaching yourself to a better tomorrow',
						
						'-3',
						'',
						'Coaching yourself to a better tomorrow')";
mysqli_query($conn, $sql);


//services released to user
$sql = "INSERT INTO 		progress_plus_core (	user_id, 
						   	productivity,
						   	productivity_why,
						   	productivity_improvement,
						   	focus,
						   	focus_why,
						   	focus_improvement,
						   	stress,
						   	stress_why,
						   	stress_improvement,
						   	confidence,
						   	confidence_why,
						   	confidence_improvement,
						   	control,
						   	control_why,
						   	control_improvement,
						   	health,
						   	health_why,
						   	health_improvement,
						   	happiness,
						   	happiness_why,
						   	happiness_improvement,
						   	energy, 
						   	energy_why, 
						   	energy_improvement 
						   	) 
						   	
					VALUES ('".$user_id."',
						'-2',
						'It was a very slow day today',					
						'Coaching yourself to a better tomorrow',
						
						'-2',
						'',
						'Coaching yourself to a better tomorrow',
						
						'-2',
						'',
						'Coaching yourself to a better tomorrow',
						
						'-2',
						'',
						'Coaching yourself to a better tomorrow',
						
						'-2',
						'',
						'Coaching yourself to a better tomorrow',
						
						'-2',
						'',
						'Coaching yourself to a better tomorrow',
						
						'-2',
						'',
						'Coaching yourself to a better tomorrow',
						
						'-2',
						'',
						'Coaching yourself to a better tomorrow')";
mysqli_query($conn, $sql);

//services released to user
$sql = "INSERT INTO 		progress_plus_core (	user_id, 
						   	productivity,
						   	productivity_why,
						   	productivity_improvement,
						   	focus,
						   	focus_why,
						   	focus_improvement,
						   	stress,
						   	stress_why,
						   	stress_improvement,
						   	confidence,
						   	confidence_why,
						   	confidence_improvement,
						   	control,
						   	control_why,
						   	control_improvement,
						   	health,
						   	health_why,
						   	health_improvement,
						   	happiness,
						   	happiness_why,
						   	happiness_improvement,
						   	energy, 
						   	energy_why, 
						   	energy_improvement 
						   	) 
						   	
					VALUES ('".$user_id."',
						'-1',
						'You were not quite on the money today',					
						'Coaching yourself to a better tomorrow',
						
						'-1',
						'',
						'Coaching yourself to a better tomorrow',
						
						'-1',
						'',
						'Coaching yourself to a better tomorrow',
						
						'-1',
						'',
						'Coaching yourself to a better tomorrow',
						
						'-1',
						'',
						'Coaching yourself to a better tomorrow',
						
						'-1',
						'',
						'Coaching yourself to a better tomorrow',
						
						'-1',
						'',
						'Coaching yourself to a better tomorrow',
						
						'-1',
						'',
						'Coaching yourself to a better tomorrow')";
mysqli_query($conn, $sql);

//services released to user
$sql = "INSERT INTO 		progress_plus_core (	user_id, 
						   	productivity,
						   	productivity_why,
						   	productivity_improvement,
						   	focus,
						   	focus_why,
						   	focus_improvement,
						   	stress,
						   	stress_why,
						   	stress_improvement,
						   	confidence,
						   	confidence_why,
						   	confidence_improvement,
						   	control,
						   	control_why,
						   	control_improvement,
						   	health,
						   	health_why,
						   	health_improvement,
						   	happiness,
						   	happiness_why,
						   	happiness_improvement,
						   	energy, 
						   	energy_why, 
						   	energy_improvement 
						   	) 
						   	
					VALUES ('".$user_id."',
						'0',
						'Today was just that, a day',					
						'Coaching yourself to a better tomorrow',
						
						'0',
						'',
						'Coaching yourself to a better tomorrow',
						
						'0',
						'',
						'Coaching yourself to a better tomorrow',
						
						'0',
						'',
						'Coaching yourself to a better tomorrow',
						
						'0',
						'',
						'Coaching yourself to a better tomorrow',
						
						'0',
						'',
						'Coaching yourself to a better tomorrow',
						
						'0',
						'',
						'Coaching yourself to a better tomorrow',
						
						'0',
						'',
						'Coaching yourself to a better tomorrow')";
mysqli_query($conn, $sql);

//services released to user
$sql = "INSERT INTO 		progress_plus_core (	user_id, 
						   	productivity,
						   	productivity_why,
						   	productivity_improvement,
						   	focus,
						   	focus_why,
						   	focus_improvement,
						   	stress,
						   	stress_why,
						   	stress_improvement,
						   	confidence,
						   	confidence_why,
						   	confidence_improvement,
						   	control,
						   	control_why,
						   	control_improvement,
						   	health,
						   	health_why,
						   	health_improvement,
						   	happiness,
						   	happiness_why,
						   	happiness_improvement,
						   	energy, 
						   	energy_why, 
						   	energy_improvement 
						   	) 
						   	
					VALUES ('".$user_id."',
						'1',
						'You acheived a few important things today',					
						'Coaching yourself to a better tomorrow',
						
						'1',
						'',
						'Coaching yourself to a better tomorrow',
						
						'1',
						'',
						'Coaching yourself to a better tomorrow',
						
						'1',
						'',
						'Coaching yourself to a better tomorrow',
						
						'1',
						'',
						'Coaching yourself to a better tomorrow',
						
						'1',
						'',
						'Coaching yourself to a better tomorrow',
						
						'1',
						'Coaching yourself to a better tomorrow',
						'',
						
						'1',
						'',
						'Coaching yourself to a better tomorrow')";
mysqli_query($conn, $sql);

//services released to user
$sql = "INSERT INTO 		progress_plus_core (	user_id, 
						   	productivity,
						   	productivity_why,
						   	productivity_improvement,
						   	focus,
						   	focus_why,
						   	focus_improvement,
						   	stress,
						   	stress_why,
						   	stress_improvement,
						   	confidence,
						   	confidence_why,
						   	confidence_improvement,
						   	control,
						   	control_why,
						   	control_improvement,
						   	health,
						   	health_why,
						   	health_improvement,
						   	happiness,
						   	happiness_why,
						   	happiness_improvement,
						   	energy, 
						   	energy_why, 
						   	energy_improvement 
						   	) 
						   	
					VALUES ('".$user_id."',
						'2',
						'You achieved a fair bit today',					
						'Coaching yourself to a better tomorrow',
						
						'2',
						'',
						'Coaching yourself to a better tomorrow',
						
						'2',
						'',
						'Coaching yourself to a better tomorrow',
						
						'2',
						'',
						'Coaching yourself to a better tomorrow',
						
						'2',
						'',
						'Coaching yourself to a better tomorrow',
						
						'2',
						'',
						'Coaching yourself to a better tomorrow',
						
						'2',
						'',
						'Coaching yourself to a better tomorrow',
						
						'2',
						'',
						'Coaching yourself to a better tomorrow')";
mysqli_query($conn, $sql);

//services released to user
$sql = "INSERT INTO 		progress_plus_core (	user_id, 
						   	productivity,
						   	productivity_why,
						   	productivity_improvement,
						   	focus,
						   	focus_why,
						   	focus_improvement,
						   	stress,
						   	stress_why,
						   	stress_improvement,
						   	confidence,
						   	confidence_why,
						   	confidence_improvement,
						   	control,
						   	control_why,
						   	control_improvement,
						   	health,
						   	health_why,
						   	health_improvement,
						   	happiness,
						   	happiness_why,
						   	happiness_improvement,
						   	energy, 
						   	energy_why, 
						   	energy_improvement 
						   	) 
						   	
					VALUES ('".$user_id."',
						'3',
						'You acheived lots today',					
						'',
						
						'3',
						'',
						'Coaching yourself to a better tomorrow',
						
						'3',
						'',
						'Coaching yourself to a better tomorrow',
						
						'3',
						'',
						'Coaching yourself to a better tomorrow',
						
						'3',
						'',
						'Coaching yourself to a better tomorrow',
						
						'3',
						'',
						'Coaching yourself to a better tomorrow',
						
						'3',
						'',
						'Coaching yourself to a better tomorrow',
						
						'3',
						'',
						'Coaching yourself to a better tomorrow')";
mysqli_query($conn, $sql);

//services released to user
$sql = "INSERT INTO 		progress_plus_core (	user_id, 
						   	productivity,
						   	productivity_why,
						   	productivity_improvement,
						   	focus,
						   	focus_why,
						   	focus_improvement,
						   	stress,
						   	stress_why,
						   	stress_improvement,
						   	confidence,
						   	confidence_why,
						   	confidence_improvement,
						   	control,
						   	control_why,
						   	control_improvement,
						   	health,
						   	health_why,
						   	health_improvement,
						   	happiness,
						   	happiness_why,
						   	happiness_improvement,
						   	energy, 
						   	energy_why, 
						   	energy_improvement 
						   	) 
						   	
					VALUES ('".$user_id."',
						'4',
						'You achieved a great deal today',					
						'Coaching yourself to a better tomorrow',
						
						'4',
						'',
						'Coaching yourself to a better tomorrow',
						
						'4',
						'',
						'Coaching yourself to a better tomorrow',
						
						'4',
						'',
						'Coaching yourself to a better tomorrow',
						
						'4',
						'',
						'Coaching yourself to a better tomorrow',
						
						'4',
						'',
						'Coaching yourself to a better tomorrow',
						
						'4',
						'',
						'Coaching yourself to a better tomorrow',
						
						'4',
						'',
						'Coaching yourself to a better tomorrow')";
mysqli_query($conn, $sql);

//services released to user
$sql = "INSERT INTO 		progress_plus_core (	user_id, 
						   	productivity,
						   	productivity_why,
						   	productivity_improvement,
						   	focus,
						   	focus_why,
						   	focus_improvement,
						   	stress,
						   	stress_why,
						   	stress_improvement,
						   	confidence,
						   	confidence_why,
						   	confidence_improvement,
						   	control,
						   	control_why,
						   	control_improvement,
						   	health,
						   	health_why,
						   	health_improvement,
						   	happiness,
						   	happiness_why,
						   	happiness_improvement,
						   	energy, 
						   	energy_why, 
						   	energy_improvement 
						   	) 
						   	
					VALUES ('".$user_id."',
						'5',
						'You absolutely crushed today',					
						'Coaching yourself to a better tomorrow',
						
						'5',
						'',
						'Click +new in the menu to create your own entry',
						
						'5',
						'',
						'Coaching yourself to a better tomorrow',
						
						'5',
						'',
						'Coaching yourself to a better tomorrow',
						
						'5',
						'',
						'Coaching yourself to a better tomorrow',
						
						'5',
						'',
						'Coaching yourself to a better tomorrow',
						
						'5',
						'',
						'Coaching yourself to a better tomorrow',
						
						'5',
						'',
						'Coaching yourself to a better tomorrow')";
mysqli_query($conn, $sql);
?>