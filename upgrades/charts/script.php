<script name='/components/activites/charts/' type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
           [	'Value Zone', 
           	'link', 
           	'Hours a week',
           	{type:'string', role:'tooltip', 'p': {'html': true}},
           	{'type': 'string', 'role': 'style'}
           ],       
<?php
require $_SERVER['DOCUMENT_ROOT']."/components/lists/main_sql_query.php";


//sum total hours
$url_string = "https://www.dreamboat.com.au/time/activities/find.php?primary_folder=".$_GET['primary_folder']."&secondary_folder=".$_GET['secondary_folder']."&tertiary_folder=".$_GET['tertiary_folder']."&item_id=";



$count = 0;
$total_time_worked = 0;
while($row = mysqli_fetch_array($result_for_display, MYSQLI_ASSOC)){


     //.  and then redirect as appropriate to taht Item id adjusting what is needed
     if($row['value_zone'] == 'top_10_percent'){$zone_number = 95;	$zone_description = 'Top 10% of value producing activities';}     
     if($row['value_zone'] == 'top_20_percent'){$zone_number = 85;	$zone_description = 'Top 20% of value producing activities';}    
     if($row['value_zone'] == 'top_30_percent'){$zone_number = 75;     	$zone_description = 'Top 30% of value producing activities';}    
     if($row['value_zone'] == 'top_40_percent'){$zone_number = 65;     	$zone_description = 'Top 40% of value producing activities';}    
     if($row['value_zone'] == 'top_50_percent'){$zone_number = 55;     	$zone_description = 'Top 50% of value producing activities';}    
     if($row['value_zone'] == 'top_60_percent'){$zone_number = 45;     	$zone_description = 'Top 60% of value producing activities';}    
     if($row['value_zone'] == 'top_70_percent'){$zone_number = 35;     	$zone_description = 'Top 70% of value producing activities';}    
     if($row['value_zone'] == 'top_80_percent'){$zone_number = 25;	$zone_description = 'Top 80% of value producing activities';}    
     if($row['value_zone'] == 'top_90_percent'){$zone_number = 15;	$zone_description = 'Top 90% of value producing activities';}    
     if($row['value_zone'] == 'top_100_percent'){$zone_number = 5;	$zone_description = 'Bottom 10% of value producing activities';}      
     
     
     
     echo "[".$zone_number.", '".$url_string.$row['item_id']."', ".$row['hours_a_week'].", createCustomHTMLContent('".$row['title']."','".$zone_description."',".$row['hours_a_week']."),'point { size: 8; }']"; //remove this 
         $count ++;  
	if($count < ($number_of_results_to_display)){echo ",";}      
   
   
   
   $total_time_worked += $row['hours_a_week'];
   
     
   /*	just stored for now
             [95, 'https://www.dreamboat.com.au/time/activities/find.php?item_id=', 11, 'rw','point { size: 1; }'],
          [2, 'http://www.thefreedictionary.com/eat', 2, 'rw','point { size: 18; }'],
          [3, 'http://www.thefreedictionary.com/commute', 2, 'rw','point { size: 18; }'],
          [4, 'http://www.thefreedictionary.com/television',2,'rw', 'point { size: 18; }'],
          [5,  'http://www.thefreedictionary.com/sleep', 7, createCustomHTMLContent(46, 29, 29),'point { size: 18; }']
          */     
?>        


          
<?php          

}        
?>              
        ]);

        var view = new google.visualization.DataView(data);
        view.setColumns([2, 0,3]);

        var options = {
          title: '',
          legend: 'none',
          tooltip: { isHtml: true },

          
hAxis: {
      	title: 'Time worked per week',
        textStyle:{color: '#281e96', fontName: 'Comfortaa'},
        titleTextStyle: { color: '#281e96' },
        baselineColor: '#a1a1a1',
        gridlines: {color: '#FFFFFF'}
    },
vAxis: {
      title: 'Value creation zone of all activities',
           textStyle:{color: '#281e96', fontName: 'Comfortaa'},
                 titleTextStyle: { color: '#281e96' },
           gridlines: {color: '#FFFFFF'},
            baselineColor: '#cecece',
      viewWindow:{
          max:100,
          min:0
      }
    }
        };

        var chart = new google.visualization.ScatterChart( 
          document.getElementById('chart_div'));
        chart.draw(view, options);

        var selectHandler = function(e) {
         window.location = data.getValue(chart.getSelection()[0]['row'], 1 );
        }

        // Add our selection handler.
        google.visualization.events.addListener(chart, 'select', selectHandler);
      }
      
        $(window).resize(function(){
		drawChart();
	});
	
//https://developers.google.com/chart/interactive/docs/customizing_tooltip_content	
//this should also include a total share of workload
function createCustomHTMLContent(title, zone, hours) {
  return '<div style="padding:5px 5px 5px 5px;">' +
      '<table class="medals_layout" style="font-family:Comfortaa;color:#4332ff;">' + 
      	'<tr>' + '<td style="font-weight:900;color:281e96;">' + title +'</td>' + '</tr>' + 
      	'<tr>' + '<td><b>' + zone + '</b></td>' + '</tr>' + 
      	'<tr>' + '<td><b>' + hours + ' hours a week</b></td>' + '</tr>' + 
      	'<tr>' + '<td style="color: #cecece;"><b>click to edit</b></td>' + '</tr>' +      	
      	'</table>' + '</div>';
}

	
    </script>