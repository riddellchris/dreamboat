<?php
if(!isset($_SESSION)){session_start();}
$sql="SELECT * FROM user_account_details WHERE user_id = '".$_SESSION['viewing_client_id']."'";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
//var_dump($row);

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/details/functions/basic.php";

echo "

<style>
.right{width:60%;}
</style>

<div style='width:100%; display:flex;justify-content: center;font-family:Comfortaa;'>
	<form method='post' action='adjust.php' style='width:90%;'>
		<div style='align-self: center;display:table;width:100%;max-width:1100px;'>";
			details_row_starter("Business name");
			$item_name = 'business_name';	
			$value	= $row[$item_name];					
			require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";	
			details_row_ender();
			
			details_row_starter("Website");			
			$item_name = 'business_website';	
			$value	= $row[$item_name];				
			require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			details_row_ender();

			details_row_starter("Business age");					
			$item_name = 'business_age';				
			$value = $row[$item_name];		
			require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";	
			details_row_ender();			
			
			details_row_starter("Industries");				
			$item_name = 'industry';				
			$value = $row[$item_name];		
			require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";	
			details_row_ender();	
			
			details_row_starter("Primary Industry");				
			$item_name = 'primary_industry';				
			$selected = $row[$item_name];		
			$styling = "width:100%;";
			$select_name = $item_name;
			require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/linkedin_industry_list.php";
			details_row_ender();	
			
			details_row_starter("Business definition");				
			$item_name = 'business_definition';				
			$selected = $row[$item_name];	
			$select_name = $item_name;
			$styling = "width:100%;";	
			require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/bni_end_business_names.php";
			details_row_ender();				

			details_row_starter("Number of <span style='color:#4332ff;font-weight: 900;' title='Full Time Equivalent'>(FTE)</span> staff");				
			$item_name = 'number_of_staff';				
			$value = $row[$item_name];		
			require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
			details_row_ender();	
			
			details_row_starter("Business size group");				
			$item_name = 'business_size_group';				
			$selected = $row[$item_name];	
			$select_name = $item_name;
			$styling = "width:100%;";				
			require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/business_size_groups.php";
			details_row_ender();	
			
			details_row_starter("What are 'clients' called?");						
			$timename = 'what_clients_are_called';				
			$selected = $row[$timename];		
			$select_name = $timename;
			require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/what_clients_are_called.php";	
			details_row_ender();	

	echo "	</div>";

echo "		
			<div  style=''>
				<div  style='width:100%;'>";
			require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/submits/standard.php";
			echo "
				</div>
			</div>

	</form>
</div>		
";


