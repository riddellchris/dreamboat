<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/start_of_page_top_of_centering_divs.php";

$sql="SELECT * FROM user_account_details WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
//var_dump($row);

echo "
<div style='width:100%; display:flex;justify-content: center;font-family:Comfortaa;'>
	<form method='post' action='adjust.php'>
		<div style='align-self: center;display:table;'>
			<div  style='display:table-row;'>
				<div  style='display:table-cell;text-align:left;'>Name		
				</div>
				<div  style='display:table-cell;'>";
					$item_name = 'first_name';	
					$value	= $row[$item_name];	
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";
					$item_name = 'second_name';	
					$value	= $row[$item_name];	
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";				
					
	echo "			
				</div>
			</div>							
			<div  style='display:table-row;'>
				<div  style='display:table-cell;text-align:left;'>Phone		
				</div>	
				<div  style='display:table-cell;'>";
					$item_name = 'phone_number';	
					$value	= $row[$item_name];						
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";	
	echo "
				</div>
			</div>		
			<div  style='display:table-row;'>
				<div  style='display:table-cell;text-align:left;'>Email		
				</div>	
				<div  style='display:table-cell;'>";
					$item_name = 'email';	
					$value	= $row[$item_name];							
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";	
	echo "
				</div>
			</div>	
			<div  style='display:table-row;'>
				<div  style='display:table-cell;text-align:left;'>How are you best described?		


				</div>	
				<div  style='display:table-cell;'>";
					$timename = 'type_of_person';				
					$selected = $row[$timename];
					//echo "row".		$row[$timename]."dd";
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/type_of_person.php";	
	echo "
				</div>
			</div>			
			
			
			
			
			
				
			<div  style='display:table-row;'>
				<div  style='display:table-cell;text-align:left;'>Do you earn any money by commission?		


				</div>	
				<div  style='display:table-cell;'>";
					$timename = 'commission_yes_no';				
					$selected = $row[$timename];
					//echo "row".		$row[$timename]."dd";
					require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/commission_yes_no.php";	
	echo "
				</div>
			</div>

			
			
			";
					
	echo "		
		</div>";

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






require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>