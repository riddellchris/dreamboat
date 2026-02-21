<?php
if(!isset($_SESSION)){session_start();}

$sql = "SELECT * FROM api_xero_reports_pnl_by_calendar_month
WHERE         user_id = '".$_SESSION['viewing_client_id']."'
AND           latest_version_for_this_user = 'yes'
AND           date_index > -7
ORDER BY date_index ASC          
";
//echo $sql; exit();
$result = mysqli_query($conn, $sql);

unset($extracted);

$extracted['website']       = array();
$extracted['adspend']       = array();

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
$date_index = $row['date_index'];
if($row['account_name'] == 'LAM _Shopify'){                       if(!isset($extracted['website'][$date_index])){ $extracted['website'][$date_index]  = 0;} $extracted['website'][$date_index]  += $row['value'];}
if($row['account_name'] == 'Advertising and Marketing - LAM'){    if(!isset($extracted['adspend'][$date_index])){ $extracted['adspend'][$date_index]  = 0;} $extracted['adspend'][$date_index]  += $row['value'];}                      
$extracted['period_for_chart_display'][$date_index] = $row['period_for_chart_display'];
}





echo "['Month',   'Return', { role: 'annotation' }, 'Websales', { role: 'annotation' }, 'Adspend', { role: 'annotation' }],";
for($extraction_counter = -6; $extraction_counter < 0; $extraction_counter ++){

$correct_elements = 0;
if(isset($extracted['adspend'][$extraction_counter] )){$adspend = $extracted['adspend'][$extraction_counter]; $correct_elements ++;}
if(isset($extracted['website'][$extraction_counter] )){$website = $extracted['website'][$extraction_counter]; $correct_elements ++;}
if($correct_elements == 2){
$computed['return_on_adspend'][$extraction_counter] = round($extracted['website'][$extraction_counter] / $extracted['adspend'][$extraction_counter], 1);

}


echo " ['".$extracted['period_for_chart_display'][$extraction_counter]."',      
    ".$computed['return_on_adspend'][$extraction_counter].",  '".$computed['return_on_adspend'][$extraction_counter]."',                       
    ".$extracted['website'][$extraction_counter].",           '".$extracted['website'][$extraction_counter]."',    
    ".$extracted['adspend'][$extraction_counter].",           '".$extracted['adspend'][$extraction_counter]."' ]      ";

if($extraction_counter <> 0){echo ",";}

$sub_title = $row['accurate_as_at_string'];

//RAW_Contract Manufacturing not included as not a sales item

}   