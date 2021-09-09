<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/users/alterations/pieces/standard_top.php";

echo "<form action='edit_contract_sent_date.php?".url_folder_get_string_creation()."' method='post'>";
echo "<span class='prompt-font'>when did you send the contract to ".$_SESSION['viewing_client_first_name']." ".$_SESSION['viewing_client_last_name']."?<br>
	<small style='color:grey;'>This MUST match your email records<br>
	Don&#39;t be silly now</small>

	</span>";



//need to get it out of the database as not really part of the standard select client request in this particular case





$value = $_SESSION['viewing_client_contract_sent_date'];
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/date.php";
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/submits/standard.php";
echo "</form>";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/end_of_page_bottom_of_centering_divs.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
