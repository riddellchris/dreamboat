<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/start_of_page_top_of_centering_divs.php";
echo "

<div class='prompt-font'>
In time...
A list of owners... of businesses separate from all the individuals that use this service


</div>

";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";


?>