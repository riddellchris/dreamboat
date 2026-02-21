<?php
if(!isset($_SESSION)){session_start();}

$sql="SELECT * FROM user_account_details WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'";
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
			details_row_starter("Name");
				$item_name = 'first_name';	
				$value	= $row[$item_name];	
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
				$item_name = 'second_name';	
				$value	= $row[$item_name];	
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";							
			details_row_ender();						

			details_row_starter("Phone");
				$item_name = 'phone_number';	
				$value	= $row[$item_name];						
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";	
			details_row_ender();	

			details_row_starter("Email");
				$item_name = 'email';	
				$value	= $row[$item_name];							
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";	
			details_row_ender();

			details_row_starter("Role/title");
				$item_name = 'role';	
				$value	= $row[$item_name];							
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";	
			details_row_ender();			

			details_row_starter("How are you best described?");
				$timename = 'type_of_person';				
				$selected = $row[$timename];
				require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/type_of_person.php";	
			details_row_ender();
		
		
	



		
		
if($_SESSION['dreamboat_crew'] == 'yes'){
echo"
</div>
<div class='pilots_eyes_only_font' style='width:100%;'>
The settings below here edit the menus and reviews for each user
</div>
		<div style='align-self: center;display:table;width:100%;max-width:1100px;'>
";


}		

//these really should be conditionally openned


	details_row_starter("Own the business?");			
		$timename = 'own_yes_no';				
		$selected = $row[$timename];
		require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/yes_no.php";	
	details_row_ender();

/*
	details_row_starter("Access to the business productivity network?");			
		$timename = 'network_access_yes_no';				
		$selected = $row[$timename];
		require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/yes_no.php";	
	details_row_ender();
*/
		
	details_row_starter("Do you work in a business that's only you?");			
		$timename = 'work_solo_yes_no';				
		$selected = $row[$timename];
		require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/yes_no.php";	
	details_row_ender();

	details_row_starter("Are you involved in the overall management of this business?");			
		$timename = 'overall_management_yes_no';				
		$selected = $row[$timename];
		require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/yes_no.php";	
	details_row_ender();
	
	details_row_starter("Do you work in a team?");
		$timename = 'work_in_a_team_yes_no';				
		$selected = $row[$timename];
		require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/yes_no.php";	
	details_row_ender();

	details_row_starter("Are you involved in deciding the direction of this business?");
		$timename = 'direction_involvement_yes_no';				
		$selected = $row[$timename];
		require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/yes_no.php";	
	details_row_ender();


	details_row_starter("Are you involved in the sales process in this business?");
		$timename = 'sales_process_involvement_yes_no';				
		$selected = $row[$timename];
		require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/yes_no.php";	
	details_row_ender();
			
	details_row_starter("Do you earn any money by commission?");			
		$timename = 'commission_yes_no';				
		$selected = $row[$timename];
		require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/yes_no.php";	
	details_row_ender();
			
	details_row_starter("Do you engage with clients/customers/users?");			
		$timename = 'client_engagement_yes_no';				
		$selected = $row[$timename];
		require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/yes_no.php";	
	details_row_ender();
			
	details_row_starter("Do you have to manage staff and/or contractors?");			
		$timename = 'staff_management_yes_no';				
		$selected = $row[$timename];
		require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/yes_no.php";	
	details_row_ender();
			
	details_row_starter("Are you involved in the financial managment of the business?");			
		$timename = 'financial_management_yes_no';				
		$selected = $row[$timename];
		require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/yes_no.php";	
	details_row_ender();
			

			
			
	if($row[$timename] != 'yes'){
	echo"
		<div  style='display:table-row;'>
			<div  style='display:table-cell;text-align:left;color:red' class='blinking'>
			This does not mean Managment is totaly turned off<br>
			as interactions occur with that section of the platform.";		
	details_row_ender();		
	}


			
			
	echo "	</div>";

echo "	<div  style='display:table-row;'>
			<div  style='display:table-cell;width:100%;'>";
			//$max_width= '541.5px';$float = 'right';
		require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/submits/standard.php";
		echo "
			</div>
		</div>
	</form>
</div>		
";