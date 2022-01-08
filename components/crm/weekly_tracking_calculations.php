<?php
if(!isset($_SESSION)){session_start();}


$gchart_identifier	= "crm_weekly_tracking_calculations";
gcharts_standard_script_start($gchart_identifier);
     
echo "['Week ending dd/mm', ";


require $_SERVER['DOCUMENT_ROOT']."/components/crm/weekly_tracking_calculations_inner_workings.php";
         
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
          title: <?php if(isset($title_if_desired)){echo "'".$title_if_desired."'";}//if I want I can put some stuff in here?>,
          curveType: 'function',
          crosshair: { trigger: 'both' },
          legend: { position: 'bottom' },
           'chartArea': {'width': '85%', 'height': '85%'},
           seriesType: 'bars',
           colors: ['#00de00', '#281e96', '#0dd7ff'],
           fontName: 'Comfortaa',
           series: {1: {type: 'line', lineWidth: 4}},
           crosshair: { trigger: 'both' }
        };

<?php
gcharts_standard_script_end($gchart_identifier, 'ComboChart');
?>
    
    
    