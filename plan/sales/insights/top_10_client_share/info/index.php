<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
//echo "<div class='prompt-font' style='text-align:center; width: 100%; '>Based on data from the last 24 months</div>";

require $_SERVER['DOCUMENT_ROOT']."/sales/insights/styling.php";
echo "
<div class='info_view'>
<b>Summary</b><br>
◥ The point behind this chart is to ensure that accurate forecasting can be done around the growth rate of current large clients.<br>
◥ Therefore allowing for more accurate trend and stretch goal setting into the future.<br>
◥ By defining the growth of these top 10 clients over the past two years we can better plan for the future.<br>
<br>
<b>Specifics</b><br>
◥ Tracing the upper band 24 months into the future allows for a high mark for expected revenue.<br>
◥ Comparison of the high and low mark shows the gaps between growth rates in high value vs low value clients.<br>
&nbsp;&nbsp; ◥ And therefore where application of effort in the past has paid dividends.<br>
◥ While not a complete solution to better budgeting/trend and stretch forecasting, this chart is clearly a critical element of that.<br>
<br><b>Shortfalls</b><br>
◥ Obviously doing this over only 24 months for now isn't ideal but it is a relevant place to start this assessment.<br>
<br><b>Future extensions</b><br>
◥ In time, finding the most reliable historical date will be critical, 12, 36, 15 even.<br>
◥ The solution to this seems to be dependent on the results of more data, allowing better indications of solution here.<br>


</div>
";
//break out top 10 clients as individual stacks of revenue  then the remaining bit fitting there
//probably a combo chart with a "share line" it's what matters
//pretty simple maths there too

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";