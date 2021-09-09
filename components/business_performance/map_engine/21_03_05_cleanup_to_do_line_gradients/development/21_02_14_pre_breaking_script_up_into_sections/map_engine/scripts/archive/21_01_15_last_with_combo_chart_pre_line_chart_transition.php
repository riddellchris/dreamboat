<?php
//there is still something to be done here
///components/layouts/items_with_sidebars/related_items_display.php

//build tooltip
///components/numerical_planning/charts/script.php


//for now let's just have simple straight lines of the same colour
//the next step will to be pretty much drawing our own chart which given the complexity of this isn't actually too hard....

?>



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
        
<?php

//count all nodes
$nodes_count = 2;

//create positions of each node
if($nodes_count == 1){$node[1][x] = 250; $node[1][y] = 500;}

if($nodes_count == 2){	$node[1][x] = 250 - sin(15); $node[1][y] = 250 + 250*cos(15);
			$node[2][x] = 250 - sin(15); $node[2][y] = 250 + 250*cos(15);
			}
//draw lines

//build final array

//print





require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT * FROM `item_relationships` WHERE user_id = '".$_SESSION['viewing_client_id']."' AND status = 'active'";

$select = mysqli_query($conn, $sql);

//collect unique list of items
$strings = array();

while($row = mysqli_fetch_array($select, MYSQLI_ASSOC)) {
	//get out the two item id's
	$strings[count($strings)] = $row['item_a_type']."_".$row['item_a_id'];
	$strings[count($strings)] = $row['item_b_type']."_".$row['item_b_id'];	
}	
sort($strings);
//var_dump($strings);

$strings = array_unique($strings);

//echo "<br>";
//var_dump($strings);	

//so this gives us the real number
//check this /components/layouts/items_with_sidebars/related_items_display.php


	$only_active_strings;
	//then check if they are active or not... within each database
	for($i = 0; $i<count($strings); $i++){
	//do this ugly to start with
		//get up to the underscore
		
		
	
		$sql = "SELECT * FROM '".$up_to_the_underscore."' WHERE status = 'active'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows(result) == 1){
			//can probably add the name of the string here too if you want
			//$only_active_strings(count($only_active_strings)) = 
		}
	}

	//status/// active per database
	//this should really be done by altering a table/relevant central table so not to have any other crap on
	
	//then for those remaining ones just put that together


	//then space out and put into the squares
	
	
	//then lay them out on the five by five grid and boom

	//space them out appropriately
	
	//selling can then begin there is nothing left to do from there




?>        
        
        
        
          ['x', 	'Nodes', 	'link_1','link_2',	{'type': 'string', 'role': 'style'},    			{type:'string', role:'tooltip','p': {'html': true}}],
          [0,  		165, 		null, null,		'point { size: 18;shape-type: star;fill-color: #cecece;}',	'html name for this tooltip'],          
          [1,  		165, 		null, null,		'point { size: 18;shape-type: star;}',		'html name for this tooltip'],

//N.B.
//drawing lines can only be done between two points right next to each other
          [2,  		135, 		135, 135,		'point { size: 18;}','html name for this tooltip - 2,135'],
          [250,  	250, 		250, 250,		'point { size: 18; shape-type: star; fill-color: #a52714;}','html name for this tooltip'],
          [3,  		139, 		null, null,		'point { size: 18;}','html name for this tooltip'],
          [4,  		136, 		null, null,		'point { size: 18;}','html name for this tooltip'],
          
          [250,  	500,		null, 500,		'point { size: 18;shape-type: circle;fill-color: #cecece;}','html name for this tooltip -- 250,500']   ,           
          [300,  	300,	        null, 300, 		'point { size: 18;shape-type: circle;fill-color: #cecece;}','html name for this tooltip -- 300 , 300']          
        ]);

        var options = {
        legend: {position: 'none'},
         pointSize: 15,
tooltip: { isHtml: true },

//'clickable line' element
//https://stackoverflow.com/questions/38227335/how-to-make-line-clickable-on-google-line-chart
         
          title : '',
          'chartArea': {'width': '90%', 'height': '90%'},
          vAxis: {title: '', baselineColor: '#fff', gridlineColor: '#fff', textPosition: 'none'},
          hAxis: {title: '', baselineColor: '#fff', gridlineColor: '#fff', textPosition: 'none'},

          <?php
          //series for each line
          //this is set by default at 2 right now
        
	echo "	
			series: {0: {type: 'line',lineWidth: 0  }}
		,         series: {1: {type: 'line',color: 'black',lineWidth: 40  }}
		,         series: {2: {type: 'scatter',color: 'yellow',lineWidth: 80  }}
	
		
		";
/*
          if($nodes_count == 2){echo ",         series: {".($nodes_count -1).": {type: 'line',color: 'yellow',lineWidth: 40  }}";}
          if($nodes_count == 3){echo ",         series: {".($nodes_count - 1).": {type: 'line'}}";}        
          if($nodes_count == 4){echo ",         series: {".($nodes_count - 1).": {type: 'line'}}";}        
          if($nodes_count == 5){echo ",         series: {".($nodes_count - 1).": {type: 'line'}}";}
          if($nodes_count == 6){echo ",         series: {".($nodes_count - 1).": {type: 'line'}}";}      
          if($nodes_count == 7){echo ",         series: {".($nodes_count - 1).": {type: 'line'}}";}          
          if($nodes_count == 8){echo ",         series: {".($nodes_count - 1).": {type: 'line'}}";}          
          if($nodes_count == 9){echo ",         series: {".($nodes_count - 1).": {type: 'line'}}";}
          if($nodes_count == 10){echo ",         series: {".($nodes_count - 1).": {type: 'line'}}";}         
  */                        
          
          ?>
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
        chart.draw(data, options);
        
            $(window).resize(function(){drawVisualization();});	 
        
      }
   
   
//also initially stolen from  
//components/numerical_planning/charts/script.php   
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