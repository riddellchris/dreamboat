<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/sales/insights/styling.php";
echo "
<div class='info_view'>
<b>Summary</b><br>
◥ Knowing which clients have bought / continue to buy what allows for easy improvements on sales.<br>
◥ Being able to identify missing sales from current clients allows for easy targeting and upticks in sales from existing relationships.<br>
<br>
<br><b>Specifics</b><br>
◥ By marking those which are potential opportunities and then addressing those<br>
<br>
<br><b>Shortfalls</b><br>
◥ At present, note taking and reminders around each opportunity is not ideal.<br>
<br>
<br><b>Future extensions</b><br>
◥ Better sorting and labeling of each client<br>
◥ Far better connection and integration with CRMs<br>

</div>
";






require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>