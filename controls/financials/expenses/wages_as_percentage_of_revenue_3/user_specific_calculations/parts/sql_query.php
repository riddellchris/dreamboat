<?php
if(!isset($_SESSION)){session_start();}



//this should be for:
    //database table name
    //report name
        //this therefore has a matching folder tree
        //in time this folder needs to adjust because there will be many, many obviously
        
    //user name
    //viewing_client_id
    //last used for this client

//but equally this should also include:
    //each report should include some mix of charts per report
$table_to_draw_from                         = "api_xero_reports_pnl_by_calendar_month";
$periods_to_calculate_for                   = 6;
$required_periods_prior_to_chart_beggining  = 0;



$sql = "SELECT * FROM ".$table_to_draw_from."
WHERE         user_id = '".$_SESSION['viewing_client_id']."'
AND           latest_version_for_this_user = 'yes'
AND           date_index > -7
ORDER BY date_index ASC          
";
//echo $sql; exit();
$result = mysqli_query($conn, $sql);