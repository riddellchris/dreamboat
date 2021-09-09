<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";

if($_GET['primary_folder'] != 'admin'){
	require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
	require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/start_of_page_top_of_centering_divs.php";
}

echo "<form action='/components/items/add_new_what_submit.php' method='post'>";
			
echo "<span class='prompt-font'>What do you want to add?</span><br>";
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/add_new_what.php";

hidden_form_inputs_for_folders_and_items();
//echo "<input type = 'hidden' name='adding_new' value=".$_GET['adding_new']."></input>";

require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/submits/standard.php";
echo "</form>";

if($_GET['primary_folder'] != 'admin'){
	require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/end_of_page_bottom_of_centering_divs.php";
	require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
}

?>

?>