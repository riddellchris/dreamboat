<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/spacings/start_of_page_top_of_centering_divs.php";
echo "

<div class='prompt-font'>

Select referrer<BR><BR>

Rows of all current users<BR><BR>
Columns of runs against all tests Green red<BR><BR>
Final column - referred / contacted<BR><BR>
<BR><BR>
Print money<BR>




</div>

";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";


?>