<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/sales/insights/styling.php";
echo "
<div class='info_view'>
<b>Summary</b><br>
◥ The point behind this chart is to look at contribution of each chart and how they change over time.<br>
◥ Not only does this allow for better forecasting but also better planning of marketing and <a style='color:red;' href='https://www.google.com/search?q=customer+journey' target='_blank'>customer journeys</a>.<br>
<br>
<b>Specifics</b><br>
◥ Breaking out each product and it's contribution to the revenue allows for a true understanding of where the business is and has capacity to improve.<br>
◥ While not a complete solution to better budgeting/trend and stretch forecasting, this chart is clearly a critical element of that.<br>
◥ But critically it leads to far further future leading business improvement insights as we start to delve into who buys what.<br>
<br><b>Shortfalls</b><br>
◥ Obviously doing this over only 24 months for now isn't ideal but it is a relevant place to start this assessment.<br>
<br><b>Future extensions</b><br>
◥ Mirroring this with product and service margins as well as the critical future demand planning / capability tracking.<br>
◥ In time, finding the most reliable historical date will be critical, 12, 36, 15 even.<br>
◥ The solution to this seems to be dependent on the results of more data, allowing better indications of solution here.<br>
</div>";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";