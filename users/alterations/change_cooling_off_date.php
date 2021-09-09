<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/users/alterations/pieces/standard_top.php";

echo "<form action='edit_cooling_off_date.php?".url_folder_get_string_creation()."' method='post'>";
echo "<span class='prompt-font'>what is the cooling off date for ".$_SESSION['viewing_client_first_name']." ".$_SESSION['viewing_client_last_name']."now?<br>
	<small style='color:grey;'>11 business days from now<br>
		don&#39t miss public holidays etc</small>

	</span>";



//need to get it out of the database as not really part of the standard select client request in this particular case





$value = $_SESSION['viewing_client_cooling_off_date'];
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/date.php";
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/submits/standard.php";
echo "</form>";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/end_of_page_bottom_of_centering_divs.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
