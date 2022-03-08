<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
echo "<div class='prompt-font' style='text-align:center; width: 100%; '>Based on data from the last 24 months</div>";

//break out top 10 clients as individual stacks of revenue  then the remaining bit fitting there
//probably a combo chart with a "share line" it's what matters
//pretty simple maths there too

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";