<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";

if($_GET['primary_folder'] != 'admin'){
	require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
	require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/start_of_page_top_of_centering_divs.php";
}

//SOMETHING SHOULD GO HERE ABOUT TERTIARY = 'ITEM' THEREFORE WE ARE ADDING A RELATED ITEM .... THEREFORE IMPROVEMENTS SHOULD BE SET DIFFERENTLY ... I.E. DEFAULT TO PLANNED
//PERHAPS THERE IS A SIMPLER WORKAROUND BUT EITHER WAY I'M NOT GOING TO INVEST MY TIME INTO THIS/THAT FOR NOW


echo "<form action='/components/items/add_submit.php' method='post'>";

//how it was before the move to the database
//profile
//	if($_GET['adding_new'] == 'progress'){		$name_for_string = 'progress';}
	
	 	$sql_for_button_copy = "SELECT * 
			FROM items_central_index 
			WHERE adding_new_code = '".$_GET['adding_new']."'";
		
		$result_for_button_copy = mysqli_query($conn, $sql_for_button_copy);
		$row_for_button_copy = mysqli_fetch_array($result_for_button_copy, MYSQLI_ASSOC);

		$name_for_string = $row_for_button_copy['singular_string'];
			
echo "<span class='prompt-font'>What shall we call this ".$name_for_string."?</span>";
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/inputs/standard_input.php";

hidden_form_inputs_for_folders_and_items();
echo "<input type = 'hidden' name='adding_new' value=".$_GET['adding_new']."></input>";

require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/submits/standard.php";//submit button
echo "</form>";

if($_GET['primary_folder'] != 'admin'){
	require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/end_of_page_bottom_of_centering_divs.php";
	require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
}

?>