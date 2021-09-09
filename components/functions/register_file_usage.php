<?php
if(!isset($_SESSION)){session_start();}
//require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/register_function_usage.php";

function admin_file_usage($file, $conn){

	if(isset($_SESSION['user_id'])){

		//to use it once this page is included just use the code below:
		//	admin_file_usage(__FILE__);
			
		//	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";

			$sql = "INSERT INTO admin_files_used
					(this_file_name, user_id, page_load_number)
				VALUES 	('".$file."','".$_SESSION['user_id']."', '".$_SESSION['page_load_number']."')"; //CR 18.07.20 Page load number is derived by each load of a standard page
			
		//	echo $sql; exit();
			mysqli_query($conn, $sql);
	}
}

