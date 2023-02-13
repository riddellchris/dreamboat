<?php
if(!isset($_SESSION)){session_start();}

if($_GET['primary_folder'] != 'reporting'){
  $location_string = $_GET['primary_folder']."_".$_GET['secondary_folder']."_".$_GET['tertiary_folder'];
}
else{
  $location_string = 'financials_revenue_tracker';
}
?>

<?php
require $_SERVER['DOCUMENT_ROOT']."/components/tracking/date_update_system/current_month_and_year_combo.php";
require $_SERVER['DOCUMENT_ROOT']."/financials/revenue/functions.php";

  // Prepare data
  $user_to_display = $_SESSION['viewing_client_id'];

  // Dummy data
  $dummy_data = [
    ['Month', 'LAST YEAR',['role'=> 'annotation' ],'Revenue', ['role'=> 'annotation' ],'Target'],
    ['Dec 21',0,'0',450, '450', 614.6],          
    ['Jan 22',120,'120',450, '450', 614.6],
    ['Feb 22',150,'150',288, '288', 682],
    ['Mar 22',250, '250',397, '397', 623],
    ['Apr 22',180,'180',215, '215', 609.4],
    ['May 22',280,'280',366, '366', 569.6]
  ];
  $sub_title = "Dummy data only";


// REVIEW:why do we need to backup?
// $sql = "SELECT * FROM api_xero_reports_pnl_by_calendar_month
// WHERE         latest_version_for_this_user = 'yes'
// AND           date_index > -$month_to_loop "; 

// $result = mysqli_query($conn, $sql);
// if(isset($display_chart['backup_period_for_chart_display'])){
//   unset($display_chart['backup_period_for_chart_display']);
// }


// while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){     
//   $date_index = $row['date_index'];
//   if(!isset($display_chart['backup_period_for_chart_display'][$date_index])){
//     // period_for_chart_display will display like MMM YY
//     $display_chart['backup_period_for_chart_display'][$date_index] = $row['period_for_chart_display'];
//   }
// }

  // convert date display format - current year
  for($i = 0; $i<$month_to_loop; $i++){
    $year = substr($month_combo[$i],3);
    $display_month_combo[$i]  = $month_name[$i]." ". $year;
  }

  // Get data from current searching date range from current_month_and_year_combo.php
  $sql_date_end = "{$endYear}-{$endMonth}-01";
  $sql_date_start = $startYear."-".str_pad($startMonth,'2','0',STR_PAD_LEFT)."-01";

    
  $sql = "SELECT * FROM `api_xero_reports_pnl_by_calendar_month`
  WHERE `user_id` = $user_to_display
  AND `latest_version_for_this_user` = 'yes' 
  AND `account_name` = 'Total Income' 
  AND `date_index_start` >= '{$sql_date_start}'
  AND `date_index_start` <= '{$sql_date_end}'
  ORDER BY `date_index_start` ASC
  ";

  // Use `$month_name YY` to ensure the data is matched
  // if it's not match, check the date, and neither is matched, give applied the number to zero/null
  $result = mysqli_query($conn, $sql);
  
  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    $display_chart['Total period_for_chart_display'][] = $row['period_for_chart_display'];
    $display_chart['Total Income'][] = $row['value'];
    
    $sub_title = $row['accurate_as_at_string'];
  }

  $date_gap_range = count_date_gap_range($display_chart['Total period_for_chart_display'][0],$sql_date_start);
  
  $income_backup = $display_chart['Total Income'];
  $display_chart['Total period_for_chart_display']= $display_month_combo;

  for($i = 0; $i<$month_to_loop;$i++){
    if($i<$date_gap_range){
      $display_chart['Total Income'][$i] = 0;
    }else{
      $display_chart['Total Income'][$i] = $income_backup[$i-$date_gap_range];
    }
  }
?>
<?php
// Get same month range of last year to compare the number side by side
require $_SERVER['DOCUMENT_ROOT']."/components/tracking/date_update_system/prev_month_and_year_combo.php";

  $sql = "SELECT * FROM `api_xero_reports_pnl_by_calendar_month`
  WHERE `user_id` = $user_to_display
  AND `latest_version_for_this_user` = 'yes' 
  AND `account_name` = 'Total Income' 
  AND `date_index_start` >= '{$sql_last_year_date_start}'
  AND `date_index_start` <= '{$sql_last_year_date_end}'
  ORDER BY `date_index_start` ASC
  ";
  $result = mysqli_query($conn, $sql);
  $last_year_chart_data = array();
  
  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    $last_year_chart_data['Total period_for_chart_display'][] = $row['period_for_chart_display'];
    $last_year_chart_data['Total Income'][] = $row['value'];    
  }
  $date_gap_range = count_date_gap_range($last_year_chart_data['Total period_for_chart_display'][0],$sql_last_year_date_start);


  // convert date display format - last year
  for($i = 0; $i<$month_to_loop; $i++){
    $year = substr($month_combo[$i],3);
    $year -= 1;
    $display_month_combo_last_year[$i]  = $month_name[$i]." ". $year;
  }
  $last_year_income_backup = $last_year_chart_data['Total Income'];
  $last_year_chart_data['Total period_for_chart_display'] = $display_month_combo_last_year;

  for($i = 0; $i<$month_to_loop;$i++){
    if($i<$date_gap_range){
      $last_year_chart_data['Total Income'][$i] = 0;
    }else{
      $last_year_chart_data['Total Income'][$i] = $last_year_income_backup[$i-$date_gap_range];
    }
  }

  //Get Revenue Target
  $revenue_target = array();
  $sql = "SELECT * FROM tracking_inputs 
  WHERE user_id = $user_to_display
  AND latest_version_of_this_data_type = 'yes' 
  AND data_type='revenue_target' 
  ORDER BY entry_id DESC LIMIT 1
  ";
  $result = mysqli_query($conn, $sql);
  unset($revenue_target);
  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$all_null = 'yes';
		for($i=0;$i<$month_to_loop;$i++){
			if($row[$month_combo_reverse[$i]] != 0){
				$revenue_target[$month_combo_reverse[$i]] = $row[$month_combo_reverse[$i]];
				$all_null = 'no';
			}else{
				$revenue_target[$month_combo_reverse[$i]] = 0;
			}
		}
	}
  
  // Create array for chart to use
$chart_data_array = array();
for($i=0;$i<$month_to_loop;$i++){
  $new_chart_data = [
    $display_month_combo[$i],
    floatval($last_year_chart_data['Total Income'][$i]),
    $last_year_chart_data['Total Income'][$i],
    floatval($display_chart['Total Income'][$i]),
    $display_chart['Total Income'][$i],
    floatval($revenue_target[$month_combo_reverse[$i]])
  ];
  array_push($chart_data_array,$new_chart_data);
}
?>

<!-- Draw google chart -->
<script type="text/javascript" name=<?=$location_string?>>
  let arrOfInput = <?=json_encode($chart_data_array)?>;
  let subtitle = <?=json_encode($sub_title)?>;
  let dataArray = [];
  let isShownDefault = false;
  let arrOfTitle = ['Month', 'LAST YEAR', { role: 'annotation' }, 'Revenue', { role: 'annotation' }, 'Target'];
  
  if(!arrOfInput[0][0]) isShownDefault = true;

  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawVisualization);
  
      function drawVisualization() {
        let options = {
          title: `Revenue Tracker`,
          vAxis: {title: '$'},
          legend: { position: 'top'},
          seriesType: 'bars',  
        };

        if(isShownDefault){
          options.title = `Revenue Tracker - ${subtitle}`,
          arrOfInput = <?=json_encode($dummy_data)?>;
          dataArray = [...arrOfInput];
          options['series'] = {       
            1: {type: 'line',  lineWidth: 10, color: '#cecece'}
          };
        }else{
          dataArray = [arrOfTitle,...arrOfInput];
          options['series'] = {       
              0: {color: '#281e96'},
              1: {color: '#3c78d8'},                          
              2: {type: 'line',  lineWidth: 10, color: '#cecece'}  
          };
        }

        let data = google.visualization.arrayToDataTable(dataArray);

        let locationString = <?=json_encode($location_string)?>;

        var chart = new google.visualization.ComboChart(document.getElementById(`${locationString}_div`));
        
        chart.draw(data, options);
      }
</script>