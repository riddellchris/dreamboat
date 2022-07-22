<?php
if(!isset($_SESSION)){session_start();}

$months_to_display = 6;
//therefore
$max_extract_to_for_sql = $months_to_display * -1 - 1;
$extraction_counter_start = $months_to_display * -1; 

$sql = "SELECT * FROM api_xero_reports_pnl_by_calendar_month
        WHERE         user_id = '".$_SESSION['viewing_client_id']."'
        AND           latest_version_for_this_user = 'yes'
        AND           date_index > ".$max_extract_to_for_sql."
        ORDER BY date_index ASC          
        ";
//echo $sql; exit();
$result = mysqli_query($conn, $sql);

unset($extracted);

$extracted['website']       = array();
$extracted['other']         = array();
$extracted['distribution']  = array();
$extracted['wholesale']     = array();

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    $date_index = $row['date_index'];
    if($row['account_name'] == 'Sales'){               if(!isset($extracted['website'][$date_index])){      $extracted['website'][$date_index]       = 0;} $extracted['website'][$date_index]       += $row['value'];}              
    if($row['account_name'] == 'Sales - Wholesale'){              if(!isset($extracted['wholesale'][$date_index])){    $extracted['wholesale'][$date_index]     = 0;} $extracted['wholesale'][$date_index]     += $row['value'];}                  
    
    $extracted['period_for_chart_display'][$date_index] = $row['period_for_chart_display'];

}
echo "['Month',     'Website', { role: 'annotation' }, 'Wholesale', { role: 'annotation' }],";
for($extraction_counter = $extraction_counter_start; $extraction_counter < 0; $extraction_counter ++){
    echo " ['".$extracted['period_for_chart_display'][$extraction_counter]."',       
            ".$extracted['website'][$extraction_counter].",                     '".$extracted['website'][$extraction_counter]."',    
            ".$extracted['wholesale'][$extraction_counter].",                   '".$extracted['wholesale'][$extraction_counter]."'

            
            
            
            ],      ";

    $sub_title = $row['accurate_as_at_string'];

    //RAW_Contract Manufacturing not included as not a sales item

} 

