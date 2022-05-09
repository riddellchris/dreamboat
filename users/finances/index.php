<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

echo "
Obviously how the financials are tracking.<br>
Where those expenses going and what exactly is happening<br><br>
//this probably should be done with Google charts and some great databases connected to Xero on the back end.<br>
//then with some simple forecasting as a result - happy days!!!!<br>
<br>
This is exactly how and where to start with the API connections too.<br>
SNAP!

";


require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
