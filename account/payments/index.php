<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/start_of_page_top_of_centering_divs.php";


echo "<span class='prompt-font'>For now, your invoicing and payment are sent from Xero.<br><small style='color:".$_SESSION['masked_domain_primary_colour']."'>If you don&#39;t have a recent invoice please contact support</small></span>";

require $_SERVER['DOCUMENT_ROOT']."/account/pieces/back_button.php";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>