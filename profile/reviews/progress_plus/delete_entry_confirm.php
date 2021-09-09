<?php
if(!isset($_SESSION)){session_start();}
$_SESSION['progress_plus_entry_to_remove'] = $_GET['entry_id'];

$sql = "DELETE FROM progress_plus_core WHERE input_id = '".$_SESSION['progress_plus_entry_to_remove']."' AND user_id = '".$_SESSION['user_id']."'";
require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
mysqli_query($conn, $sql);


//are you sure you want to do this - yes done - no return
//$_SESSION['next_input_id'] = ;
header("Location: /progress_plus/");
exit();




?>