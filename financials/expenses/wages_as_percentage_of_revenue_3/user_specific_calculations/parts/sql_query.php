<?php
if(!isset($_SESSION)){session_start();}

$sql = "SELECT * FROM api_xero_reports_pnl_by_calendar_month
WHERE         user_id = '".$_SESSION['viewing_client_id']."'
AND           latest_version_for_this_user = 'yes'
AND           date_index > -7
ORDER BY date_index ASC          
";
echo $sql; exit();
$result = mysqli_query($conn, $sql);