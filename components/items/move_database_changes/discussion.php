<?php
if(!isset($_SESSION)){session_start();}

 $sql = "UPDATE discussion 
 	SET 	primary_folder 	= '".$primary."',
  		secondary_folder 	= '".$secondary."' ";
  if(isset($tertiary)){ $sql .= " , tertiary_folder = '".$tertiary."'";}
  		
  $sql .= "		
  		
	WHERE (	user_id 	= '".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."' 
		OR
		to_user_id 	=  '".mysqli_real_escape_string($conn, $_GET['viewing_client_id'])."' )
	AND primary_folder 	= '".mysqli_real_escape_string($conn, $_GET['primary_folder'])."'
	AND secondary_folder 	= '".mysqli_real_escape_string($conn, $_GET['secondary_folder'])."'";
	  if(isset($tertiary)){ $sql .= " AND tertiary_folder 	= '".mysqli_real_escape_string($conn, $_GET['tertiary_folder'])."'";}
$sql .= "	
	AND related_id 		= '".mysqli_real_escape_string($conn, $_GET['item_id'])."'";
	
	
//echo $sql;
//exit();