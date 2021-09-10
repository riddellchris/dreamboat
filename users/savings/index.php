<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

echo "
This is probably - for me a mix of personal and business savings<br>
//if it expands in time it probably won't quite be like that for everyone - though it may be<br>

";


require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
