<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/sales/insights/styling.php";
echo "
<div class='info_view'>
<b>Summary</b><br>
◥ The point behind this chart is to look at the value of new clients and how they grow and change over time.<br>
◥ Not only does this allow for better forecasting of what these clients contribute but also what and how they grow over time.<br>
◥ Further to this, far better understanding about what is required in terms of new clients to reach and achieve goals is also critical.<br>
<br>
<b>Specifics</b><br>
◥ Tracing the upper band 24 months into the future allows for a high mark for these new clients.<br>
◥ Further to this, what new clients contribute immediately and how they are enabled to grow, or not, become critical metrics to understand, if not track.<br>
<br>
◥ While not a complete solution to better budgeting/trend and stretch forecasting, this chart is clearly a critical element of that.<br>
<br><b>Shortfalls</b><br>
◥ Obviously doing this over only 24 months for now isn't ideal but it is a relevant place to start this assessment.<br>
<br><b>Future extensions</b><br>
◥ In time, finding the most reliable historical date will be critical, 12, 36, 15 even.<br>
◥ The solution to this seems to be dependent on the results of more data, allowing better indications of solution here.<br>
</div>";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";