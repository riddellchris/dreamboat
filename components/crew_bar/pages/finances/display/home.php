<?php
if(!isset($_SESSION)){session_start();}


require $_SERVER['DOCUMENT_ROOT']."/admin/financials/chart/first_chart.php";

//<div style='width:100%;text-align:center;'>
echo "	<div id='finance_tracker' style='display:inline-block;height:35vh;'></div>";
//</div>	


echo "<br>Daily chart of revenue per pilot here";
echo "<br>";
echo "If managing then can see and flick through all users you are managing";
echo "<br>";
echo "if monthly subscription value is greater than $6200 here in Australia based on modelling<br>generating suffient ~ $1500AUD monthly profit therefore a small investment of a similar amount is possible to hire more staff<br>Mark this with a secondary y-column anda. column chart to show this";



echo "tracking the modelling and incomes through all our systems, per staff memmber, payments, through departments, and forecasting to display here using xero, stripe, whatever else is required";

echo "<br>build a cron job to track the revenue.<br>
then when msking more than 1,500 on top
can hire another business analyst";




