<?php

function count_date_gap_range($iniChartDate,$sql_init_date){
  $orgDate= $iniChartDate;
  $yearNum = "20".substr($orgDate,-2,2);
  $monthName = substr($orgDate,0,3);
  $monthNum = date("m", strtotime($monthName));
  $parsedOrgDate = "{$yearNum}-{$monthNum}-01";

  $date_gap_range = 0;
  if($sql_init_date !== $parsedOrgDate){
    $date1 = new DateTime($sql_init_date);
    $date2 = new DateTime($parsedOrgDate);
    
    $interval = $date1->diff($date2);
    $y = $interval->y;
    $m = $interval->m;
    $date_gap_range = $y*12 + $m;
  }
  return $date_gap_range;
}

function is_data_null($array){
  $array[2] == null ? false : true;
}

?>