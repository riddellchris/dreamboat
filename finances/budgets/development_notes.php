<?php
if(!isset($_SESSION)){session_start();}

/*
so this really is the hardest one to pull together - absolutely the hardest one
mostly because i don't know much about it but equally as with anything it's just a matter of solving it
which is pretty much about looking ahead at least 12 months - maybe all the way through to the next financial year
//that's a critical question for them
needs budgets to be created and then variances monitored
probably on the BAS element of each amount
at the very least


Really there is nothing hard about it at all.
The same "matching" in terms of everything there
//perhaps really pushing that should be done well with the correct bits and piecs



so somehow this can be done in such a way that we can track multiple elements across the way then that would be great
the biggest problem here seems to be fitting in 24 months somehow becaue really if you're going to do this well it should be done with some properly visual charts
rather than just mumbers


I can obviously pull together that data out of xero reports
//there has to be some sort of structure or process here to really nail this


to do that we would need a daily cron job to see what bas reports have been included
GEThttps://api.xero.com/api.xro/2.0/Reports
is the way to get this list
and then 

https://developer.xero.com/documentation/api/accounting/reports/#bank-summary
Optional parameters for GET BAS Report
ReportID	Add the ReportID to the end of the url to retrieve the details of a specific BAS Report
Example response for an individual published BAS Report

GET https://api.xero.com/api.xro/2.0/Reports/3d0a1240-e606-4fae-a823-77bcf79d5e79




DUE DATES
next week - Tuesday and Thursday


*/