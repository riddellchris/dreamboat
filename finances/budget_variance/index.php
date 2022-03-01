<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

/*
so this really 
needs budgets to be created and then variances monitored
probably on the BAS element of each amount
at the very least




to do that we would need a daily cron job to see what bas reports have been included
GEThttps://api.xero.com/api.xro/2.0/Reports
is the way to get this list
and then 

https://developer.xero.com/documentation/api/accounting/reports/#bank-summary
Optional parameters for GET BAS Report
ReportID	Add the ReportID to the end of the url to retrieve the details of a specific BAS Report
Example response for an individual published BAS Report

GET https://api.xero.com/api.xro/2.0/Reports/3d0a1240-e606-4fae-a823-77bcf79d5e79







*/



require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";