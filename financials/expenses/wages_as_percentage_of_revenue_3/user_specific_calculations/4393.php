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

$extracted['wages']                     = array();
$extracted['percent_of_revenue']        = array();

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
$date_index = $row['date_index'];
if($row['account_name'] == 'Total Income'){          if(!isset($extracted['total_income'][$date_index])){ $extracted['total_income'][$date_index]  = 0;} $extracted['total_income'][$date_index]  += $row['value'];}
//if($row['account_name'] == 'Wages and Salaries'){    if(!isset($extracted['wages'][$date_index])){ $extracted['wages'][$date_index]  = 0;} $extracted['wages'][$date_index]  += $row['value'];}    
if($row['account_name'] == 'Subcontractor - no GST'){           if(!isset($extracted['wages'][$date_index])){ $extracted['wages'][$date_index]  = 0;} $extracted['wages'][$date_index]  += $row['value'];}    
if($row['account_name'] == 'Subcontractor - GST'){           if(!isset($extracted['wages'][$date_index])){ $extracted['wages'][$date_index]  = 0;} $extracted['wages'][$date_index]  += $row['value'];}  
                  
$extracted['period_for_chart_display'][$date_index] = $row['period_for_chart_display'];
}





echo "['Month',   'Percentage', { role: 'annotation' } ";
/*
    , 'Total Income', { role: 'annotation' }, 'Wages', { role: 'annotation' }
*/
echo "],";
for($extraction_counter = -6; $extraction_counter < 0; $extraction_counter ++){

$correct_elements = 0;
if(isset($extracted['wages'][$extraction_counter] )){$wages = $extracted['wages'][$extraction_counter]; $correct_elements ++;}
if(isset($extracted['total_income'][$extraction_counter] )){$total_income = $extracted['total_income'][$extraction_counter]; $correct_elements ++;}
if($correct_elements == 2){
$computed['wages_percentage'][$extraction_counter] = round($extracted['wages'][$extraction_counter] / $extracted['total_income'][$extraction_counter] * 100, 1);

}


echo " ['".$extracted['period_for_chart_display'][$extraction_counter]."',      
    ".$computed['wages_percentage'][$extraction_counter].",  '".$computed['wages_percentage'][$extraction_counter]."'";
    /*
    ,                       
    ".$extracted['total_income'][$extraction_counter].",           '".$extracted['total_income'][$extraction_counter]."',    
    ".$extracted['wages'][$extraction_counter].",           '".$extracted['wages'][$extraction_counter]."' 
    */
    echo "]      ";
    
if($extraction_counter < -1){echo ",";}

$sub_title = $row['accurate_as_at_string'];

//RAW_Contract Manufacturing not included as not a sales item

}   