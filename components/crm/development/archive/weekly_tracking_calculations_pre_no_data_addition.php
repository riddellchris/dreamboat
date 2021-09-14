<?php
if(!isset($_SESSION)){session_start();}
?>



    <script type='text/javascript'>
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart2);

      function drawChart2() {
        var data = google.visualization.arrayToDataTable([
        
<?php 
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/strip_underscores.php";
$item_type = ucfirst(strip_underscores($_SESSION['secondary_folder']));

     
echo "['Week ending dd/mm', ";

	$primary 	= $_SESSION['primary_folder'];
	$secondary 	= $_SESSION['secondary_folder'];
		
//network		
	if($primary == 'network' && $secondary == 'groups'){$active_title = "'Total Active ".$item_type."'"; 		$new_title = "'Weekly New ".$item_type."'"; 	$closed_title = "";}
	if($primary == 'network' && $secondary == 'people'){$active_title = "'Total Active ".$item_type."'"; 		$new_title = "'Weekly New ".$item_type."'"; 	$closed_title = "";}
	if($primary == 'network' && $secondary == 'businesses'){$active_title = "'Total Active ".$item_type."'"; 	$new_title = "'Weekly New ".$item_type."'"; 	$closed_title = "";}
	
//biz_dev		
	if($primary == 'biz_dev' && $secondary == 'events'){		$active_title = "'Currently Planned ".$item_type."'"; 	$new_title = "'".$item_type." ADDED'"; 		$closed_title = "'".$item_type." ATTENDED'";}
	if($primary == 'biz_dev' && $secondary == 'one_to_ones'){	$active_title = "'Currently Planned ".$item_type."'"; 	$new_title = "'".$item_type." ADDED'"; 		$closed_title = "'".$item_type." HAD'";}
	if($primary == 'biz_dev' && $secondary == 'referrers'){		$active_title = "'Total Active ".$item_type."'"; 	$new_title = "'Weekly New ".$item_type."'"; 	$closed_title = "";}	
	
//SALES		
	if($primary == 'sales' && $secondary == 'new_potentials'){	$active_title = "'Currently Active ".$item_type."'"; 	$new_title = "'".$item_type." ADDED'"; 		$closed_title = "'".$item_type." CLOSED'";}
	if($primary == 'sales' && $secondary == 'potential_upsells'){	$active_title = "'Currently Active ".$item_type."'"; 	$new_title = "'".$item_type." ADDED'"; 		$closed_title = "'".$item_type." CLOSED'";}
	if($primary == 'sales' && $secondary == 'recurring_sales'){	$active_title = "'Total Active ".$item_type."'"; 	$new_title = "'Weekly New ".$item_type."'"; 	$closed_title = "";}		
	
//SALES		
	if($primary == 'management' && $secondary == 'clients'){	$active_title = "'Currently Active ".$item_type."'"; 	$new_title = "'".$item_type." ADDED'"; 		$closed_title = "'".$item_type." LOST'";}
			
	
	
	


//new... events /// events planned this week not just new          
        if($new_title != ''){echo $new_title;}
        if($new_title != '' && $active_title != ''){echo ",";}
        if($active_title != ''){echo $active_title;}
        if($active_title != '' && $closed_title != ''){echo ",";}                 
        if($closed_title != ''){echo $closed_title;}     


     
          echo "],";
          
   $sql = "SELECT * FROM tracking_inputs_weekly WHERE user_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."' ORDER BY entry_id;";
 require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
 $result = mysqli_query($conn, $sql);
 $i = 0;
 
 $secondary = $_SESSION['secondary_folder'];
 
 while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
 	      if($secondary == 'people'){		$total_active[$i] = $row[$secondary.'_currently_active']; 	$weekly_new[$i] = $row[$secondary.'_gained_this_week'];	$weekly_closed[$i] = -$row[$secondary.'_closed_this_week'];}
 	      if($secondary == 'groups'){		$total_active[$i] = $row[$secondary.'_currently_active']; 	$weekly_new[$i] = $row[$secondary.'_gained_this_week'];	$weekly_closed[$i] = -$row[$secondary.'_closed_this_week'];}
 	      if($secondary == 'businesses'){		$total_active[$i] = $row[$secondary.'_currently_active']; 	$weekly_new[$i] = $row[$secondary.'_gained_this_week'];	$weekly_closed[$i] = -$row[$secondary.'_closed_this_week'];}
 	      if($secondary == 'referrers'){		$total_active[$i] = $row[$secondary.'_currently_active']; 	$weekly_new[$i] = $row[$secondary.'_gained_this_week'];	$weekly_closed[$i] = -$row[$secondary.'_closed_this_week'];}
 	      if($secondary == 'events'){		$total_active[$i] = $row[$secondary.'_currently_active']; 	$weekly_new[$i] = $row[$secondary.'_gained_this_week'];	$weekly_closed[$i] = -$row[$secondary.'_closed_this_week'];}
 	      if($secondary == 'one_to_ones'){		$total_active[$i] = $row[$secondary.'_currently_active']; 	$weekly_new[$i] = $row[$secondary.'_gained_this_week'];	$weekly_closed[$i] = -$row[$secondary.'_closed_this_week'];}
 	      if($secondary == 'new_potentials'){	$total_active[$i] = $row[$secondary.'_currently_active']; 	$weekly_new[$i] = $row[$secondary.'_gained_this_week'];	$weekly_closed[$i] = -$row[$secondary.'_closed_this_week'];}
 	      if($secondary == 'potential_upsells'){ 	$total_active[$i] = $row[$secondary.'_currently_active']; 	$weekly_new[$i] = $row[$secondary.'_gained_this_week'];	$weekly_closed[$i] = -$row[$secondary.'_closed_this_week'];}
 	      if($secondary == 'recurring_sales'){	$total_active[$i] = $row[$secondary.'_currently_active']; 	$weekly_new[$i] = $row[$secondary.'_gained_this_week'];	$weekly_closed[$i] = -$row[$secondary.'_closed_this_week'];}
 	      if($secondary == 'clients'){		$total_active[$i] = $row[$secondary.'_currently_active']; 	$weekly_new[$i] = $row[$secondary.'_gained_this_week'];	$weekly_closed[$i] = -$row[$secondary.'_closed_this_week'];}
 	      
 	      $week_starting[$i] = "'Week ending Sunday: ".$row['week_ending_day']."/".$row['week_ending_month']."'";
 $i++;
 }
         
$number_of_entries = $i;

for($i = 0; $i < $number_of_entries; $i ++){
	echo "[".$week_starting[$i].",";
	
	        if($new_title != ''){echo $weekly_new[$i];}
	        if($new_title != '' && $active_title != ''){echo ",";}
	        if($active_title != ''){echo $total_active[$i];}
	        if($active_title != '' && $closed_title != ''){echo ",";}                 
	        if($closed_title != ''){echo $weekly_closed[$i];}   




	
		echo "]";
	//for the nex row of data as per the google chart system	
	if($i <> ($number_of_entries - 1)){echo ",";}

	}
          
          
       ?>
     
        ]);

        var options = {
          title: <?php echo "'".$title_if_desired."'";//if I want I can put some stuff in here?>,
          curveType: 'function',
          crosshair: { trigger: 'both' },
          legend: { position: 'bottom' },
           'chartArea': {'width': '85%', 'height': '85%'},
           seriesType: 'bars',
           colors: ['#00de00', '#5071c7', '#ff0000'],
           series: {1: {type: 'line'}}
        };

        var chart = new google.visualization. ComboChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
      
      $(window).resize(function(){
		draw_chart2();
	});
    </script>
    
  
    
    
    