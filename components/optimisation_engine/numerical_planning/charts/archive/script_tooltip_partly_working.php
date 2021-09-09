  <script type="text/javascript">
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
while($row = mysqli_fetch_array($result_for_display, MYSQLI_ASSOC)){


     //.  and then redirect as appropriate to taht Item id adjusting what is needed
     if($row['value_zone'] == 'top_10_percent'){$zone_number = 95;	$zone_description = 'Top 10% of activities';}     
     if($row['value_zone'] == 'top_20_percent'){$zone_number = 85;	$zone_description = 'Top 20% of activities';}    
     if($row['value_zone'] == 'top_30_percent'){$zone_number = 75;     	$zone_description = 'Top 30% of activities';}    
     if($row['value_zone'] == 'top_40_percent'){$zone_number = 65;     	$zone_description = 'Top 40% of activities';}    
     if($row['value_zone'] == 'top_50_percent'){$zone_number = 55;     	$zone_description = 'Top 50% of activities';}    
     if($row['value_zone'] == 'top_60_percent'){$zone_number = 45;     	$zone_description = 'Top 60% of activities';}    
     if($row['value_zone'] == 'top_70_percent'){$zone_number = 35;     	$zone_description = 'Top 70% of activities';}    
     if($row['value_zone'] == 'top_80_percent'){$zone_number = 25;	$zone_description = 'Top 80% of activities';}    
     if($row['value_zone'] == 'top_90_percent'){$zone_number = 15;	$zone_description = 'Top 90% of activities';}    
     if($row['value_zone'] == 'top_100_percent'){$zone_number = 5;	$zone_description = 'Bottom 10% of activities';}      
     
     
     
     echo "[".$zone_number.", '".$url_string.$row['item_id']."', 11, createCustomHTMLContent('https://upload.wikimedia.org/wikipedia/en/a/a4/Flag_of_the_United_States.svg', 46, 29, 29,
     '".$zone_description."'),'point { size: 8; }'],"; //remove this 
         $count ++;  
	if($count < ($number_of_results_to_display)){echo ",";}      
     
        
?>        

          [95, 'https://www.dreamboat.com.au/time/activities/find.php?item_id=', 11, 'rw','point { size: 1; }'],
          [2, 'http://www.thefreedictionary.com/eat', 2, 'rw','point { size: 18; }'],
          [3, 'http://www.thefreedictionary.com/commute', 2, 'rw','point { size: 18; }'],
          [4, 'http://www.thefreedictionary.com/television',2,'rw', 'point { size: 18; }'],
          [5,  'http://www.thefreedictionary.com/sleep', 7, createCustomHTMLContent('https://upload.wikimedia.org/wikipedia/en/a/a4/Flag_of_the_United_States.svg', 46, 29, 29, 55),'point { size: 18; }']
          
<?php          

}        
?>              
        ]);

        var view = new google.visualization.DataView(data);
        view.setColumns([2, 0,3]);

        var options = {
          title: '',
          legend: 'none',
          tooltip: { isHtml: true }
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
	
	
function createCustomHTMLContent2(flagURL, totalGold, totalSilver, totalBronze) {
  return '<div style="padding:5px 5px 5px 5px;">' + flagURL 
      '<img src="' + flagURL + '" style="width:75px;height:50px"><br/>' +
      '<table class="medals_layout">' + '<tr>' +
      '<td>' + totalGold + '</b></td>' + '</tr>' + '<tr>' +
      '<td><img src="https://upload.wikimedia.org/wikipedia/commons/1/15/Gold_medal.svg" style="width:25px;height:25px"/></td>' +
      '<td><b>' + totalGold + '</b></td>' + '</tr>' + '<tr>' +
      '<td><img src="https://upload.wikimedia.org/wikipedia/commons/0/03/Silver_medal.svg" style="width:25px;height:25px"/></td>' +
      '<td><b>' + totalSilver + '</b></td>' + '</tr>' + '<tr>' +
      '<td><img src="https://upload.wikimedia.org/wikipedia/commons/5/52/Bronze_medal.svg" style="width:25px;height:25px"/></td>' +
      '<td><b>' + totalBronze + '</b></td>' + '</tr>' + '</table>' + '</div>';
}	
	
function createCustomHTMLContent(flagURL, totalGold, totalSilver, totalBronze, zone) {
  return '<div style="padding:5px 5px 5px 5px;">' +
      '<img src="' + flagURL + '" style="width:75px;height:50px"><br/>' +
      '<table class="medals_layout">' + '<tr>' +
      '<td><img src="https://upload.wikimedia.org/wikipedia/commons/1/15/Gold_medal.svg" style="width:25px;height:25px"/></td>' +
      '<td><b>' + totalGold + zone +'</b></td>' + '</tr>' + '<tr>' +
      '<td><img src="https://upload.wikimedia.org/wikipedia/commons/0/03/Silver_medal.svg" style="width:25px;height:25px"/></td>' +
      '<td><b>' + totalSilver + '</b></td>' + '</tr>' + '<tr>' +
      '<td><img src="https://upload.wikimedia.org/wikipedia/commons/5/52/Bronze_medal.svg" style="width:25px;height:25px"/></td>' +
      '<td><b>' + totalBronze + '</b></td>' + '</tr>' + '</table>' + '</div>';
}

	
    </script>