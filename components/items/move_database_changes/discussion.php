<?php
if(!isset($_SESSION)){session_start();}

 $sql = "UPDATE discussion 
 	SET 	primary_folder 	= '".$primary."',
  		secondary_folder 	= '".$secondary."' ";
  if(isset($tertiary)){ $sql .= " , tertiary_folder = '".$tertiary."'";}
  		
  $sql .= "		
  		
	WHERE (	user_id 	= '".$_SESSION['viewing_client_id']."' 
		OR
		to_user_id 	=  '".$_SESSION['viewing_client_id']."' )
	AND primary_folder 	= '".$_GET['primary_folder']."'
	AND secondary_folder 	= '".$_GET['secondary_folder']."'";
	  if(isset($tertiary)){ $sql .= " AND tertiary_folder 	= '".$_GET['tertiary_folder']."'";}
$sql .= "	
	AND related_id 		= '".$_GET['item_id'] ."'";
	
	
//echo $sql;
//exit();