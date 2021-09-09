<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

echo "
This is only viewable if a the user is a referrer.<br>
this should log all referrals and list payments to them as a result, for lists of products and purchase dates, include delay and then.<br>
payment details viewable via /account/payments/";

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";