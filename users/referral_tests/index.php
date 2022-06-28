<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/start_of_page_top_of_centering_divs.php";
echo "

<div class='prompt-font'>

Select referrer

Rows of all current users
Columns of runs against all tests Green red
Final column - referred / contacted

Print money




</div>

";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";


?>