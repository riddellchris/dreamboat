<?php
if(!isset($_SESSION)){session_start();}

echo "	
<style>
	.crm_tabs{	float:left;
			width:50%;
			color:#281e96;
			margin-left:0px; //just to combat the nav-links 
			font-size:larger;
			padding-top:0.75vh;
			}
	.recommended_entry{
		color:red;
		font-weight: 600;
		}

	.under_box_div{
		width:100%;
		max-width:1100px;
		margin:auto;
		padding: 3px 0px;
		color:#fff;
		display:block;
		min-height: 40px;
		color:blue;
	}
</style>";



echo "<div class='under_box_div'>";

	if(is_person_based_item()){	
	
		$sql = "SELECT * FROM people WHERE item_id = '".$_GET['item_id']."'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);	
	
		echo "<div class='crm_tabs nav-links'>";
			if($row['phone'] == ''){echo "<a href='/components/crm/add_detail.php?item_id=".$_GET['item_id']."&detail=phone'>ADD PHONE";}
			else{echo "<a href='/components/crm/add_detail.php?item_id=".$_GET['item_id']."&detail=phone&".url_folder_get_string_creation()."' style='   background-color: transparent;'>Phone</a> ".$row['phone'];}						
		echo "</div>";
		echo "<div class='crm_tabs nav-links'>";
			if($row['email'] == ''){echo "<a href='/components/crm/add_detail.php?item_id=".$_GET['item_id']."&detail=email' style='background-color: transparent;'>ADD email";}
			else{echo "<a href='/components/crm/add_detail.php?item_id=".$_GET['item_id']."detail=email&".url_folder_get_string_creation()."' style='   background-color: transparent;'>email</a> ".$row['email'];}
		echo "</div>";	
		
	}
	
	if(check_primary_folder('sales')){		
		$sql = "SELECT * FROM sales WHERE item_id = '".$_GET['item_id']."'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);	
	
		echo "<div class='crm_tabs nav-links'>";
			if($row['price'] == '0'){	$class='recommended_entry';	$price='add total price';}
			else{				$class='';			$price=$row['price'];}
			echo "<a href='/components/crm/add_detail.php?detail=price&".url_folder_get_string_creation()."' class='".$class."' style='   background-color: transparent;'>".$price."</a>";				
		echo "</div>";
		echo "<div class='crm_tabs nav-links'>";
			if($row['gross_profit'] == '0'){	$class='recommended_entry';	$gross_profit='add gross profit';}
			else{					$class='';			$gross_profit=$row['gross_profit'];}
			echo "<a href='/components/crm/add_detail.php?detail=gross_profit&".url_folder_get_string_creation()."' class='".$class."' style='   background-color: transparent;'>".$gross_profit."</a>";	
		echo "</div>";	
	
	
		//at present... and it seems to remain - recurring sales is really about looking at ongoing sales 
		if($_GET['secondary_folder'] != 'recurring_sales'){		
			echo "<div class='under_box_div'>";
				echo "<div class='crm_tabs nav-links' style='width:100%;text-align:center;'>";	
					if($row['probability'] == '0'){	$class='recommended_entry';	$probability = 'add ';}
					else{					$class='';		$probability = $row['probability'];}
					echo "<a href='/components/crm/add_detail.php?detail=probability&".url_folder_get_string_creation()."' class='".$class."'>".$probability."% Probability</a>";				
				echo "</div>";		
			echo "</div>";
		}			
	}


	/*
	if(check_primary_folder('management') && check_secondary_folder('systems')){	
		$sql = "SELECT * FROM systems WHERE item_id = '".$_GET['item_id']."'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);	
	
		echo "<div class='crm_tabs nav-links'>";
			if($row['api_authentication_type'] == ''){	$class	=	'recommended_entry';	$auth_type	=	'add authentication type';}
			else{										$class	=	'';						$auth_type	=	$row['api_authentication_type'];}
			echo "<a href='/components/crm/add_detail.php?detail=api_authentication_type&".url_folder_get_string_creation()."' class='".$class."' style='   background-color: transparent;'>".$auth_type."</a>";				
		echo "</div>";
		echo "<div class='crm_tabs nav-links'>";
			if($row['api_identifier'] == ''){	$class='recommended_entry';	$api_identifier	=	'add api identifier';}
			else{								$class='';					$api_identifier	=	$row['api_identifier'];}
			echo "<a href='/components/crm/add_detail.php?detail=api_identifier&".url_folder_get_string_creation()."' class='".$class."' style='   background-color: transparent;'>".$api_identifier."</a>";	
		echo "</div>";	
		echo "<br>";
		echo "<div class='crm_tabs nav-links'>";
			if($row['api_code'] == ''){	$class='recommended_entry';	$api_code	=	'add api code';}
			else{						$class='';					$api_code	=	$row['api_code'];}
			echo "<a href='/components/crm/add_detail.php?detail=api_code&".url_folder_get_string_creation()."' class='".$class."' style='   background-color: transparent;'>".$api_code."</a>";	
		echo "</div>";
		echo "<div class='crm_tabs nav-links'>";
			if($row['api_access_point'] == ''){	$class='recommended_entry';	$api_access_point	=	'add access point';}
			else{								$class='';					$api_access_point	=	$row['api_access_point'];}
			echo "<a href='/components/crm/add_detail.php?detail=api_access_point&".url_folder_get_string_creation()."' class='".$class."' style='   background-color: transparent;'>".$api_access_point."</a>";	
		echo "</div>";
	}
*/



echo "</div>";	