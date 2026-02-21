<?php
if(!isset($_SESSION)){session_start();}


$sub_title = "over the past 6 complete months";


$sql = "SELECT * FROM api_xero_reports_pnl_by_calendar_month
        WHERE user_id = '".$_SESSION['viewing_client_id']."'
        AND   latest_version_for_this_user = 'yes'";
$result = mysqli_query($conn, $sql);

$to_present = array();
$to_present['label'] = array();
$to_present['value'] = array();

$shopify['value']         = 0;
$distributors['value']    = 0;
$wholesale['value']       = 0;
$manufacturing['value']   = 0;
$other['value']           = 0;


while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
if($row['date_index'] > -7){ // summing over the past 6 months

    if($row['account_name'] == 'LAM _Shopify'){               $shopify['value']       += $row['value'];}
    if($row['account_name'] == 'LAM_Distributors'){           $distributors['value']  += $row['value'];}
    if($row['account_name'] == 'RAW_Distributors'){           $distributors['value']  += $row['value'];}                
    if($row['account_name'] == 'LAM_Wholesale'){              $wholesale['value']     += $row['value'];}
    if($row['account_name'] == 'Sale from wholesale'){        $wholesale['value']     += $row['value'];}
    if($row['account_name'] == 'RAW_Contract Manufacturing'){ $manufacturing['value'] += $row['value'];}                  
    if($row['account_name'] == 'RAW_Other'){                  $other['value']         += $row['value'];}
    if($row['account_name'] == 'Sales from Market Stalls'){   $other['value']         += $row['value'];}


    //RAW_Contract Manufacturing not included as not a sales item
}

}

//this is because pie charts cannot have negative values
//                if($shopify['value'] < 0){
                            echo " ['Month',         'Dollars',                   { role: 'annotation' }],";
if($shopify['value']      > 0){  echo " ['Website',       ".$shopify['value'].",      '".$shopify['value']."'],      ";}
if($wholesale['value']    > 0){  echo " ['Wholesale',     ".$wholesale['value'].",    '".$wholesale['value']."'],    ";}
if($distributors['value'] > 0){  echo " ['Distributors',  ".$distributors['value'].", '".$distributors['value']."'],  ";}
if($manufacturing['value'] > 0){  echo " ['Manufacturing',  ".$manufacturing['value'].", '".$manufacturing['value']."'],  ";}              
if($other['value']        > 0){  echo " ['Other',         ".$other['value'].",        '".$other['value']."']        ";}
$legend = "colors: ['#f6b26b', '#3c78d8', 'green', 'black', 'red']";