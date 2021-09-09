<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

echo "
Clearly define who has permission to see and hear about what, vs our overall inputs that can almost certainly be applied universally
";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";