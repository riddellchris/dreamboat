<?php
//there is still something to be done here
///components/layouts/items_with_sidebars/related_items_display.php

//build tooltip
///components/numerical_planning/charts/script.php


//for now let's just have simple straight lines of the same color
//the next step will to be pretty much drawing our own chart which given the complexity of this isn't actually too hard....


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


//if nothing then need to add and grow from there?
	//there are no actively connected relationships - so please do that
	//there are no nodes so add your first node please



//issus are actually going to be polygons so that we can separate them out i guess as opposed to cirles but i'm not going to fix the symbology just for that right now
//so what if we just let yo



//. //item/go_to/sends to the right place
?>        
        
        
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable
            ([['X', 	{type:'string', role:'tooltip','p': {'html': true}}, 'a', 	{type:'string', role:'tooltip','p': {'html': true}} ,		'b', 	'c', 	'd', 	'e', 	'f',	'g', {'type': 'string', 'role': 'style'}, 				{type:'string', role:'tooltip','p': {'html': true}}],
              [1, 	'/item/go_to.php?database=&id=',2, 	"<div>text<br>this<br></div>",	null, 	null, 	null, 	null, 	null, 	null, 	null, 								"/dreamboat.com.au/item/go_to.php"],
              [2, 	'/item/go_to.php?database=&id=',2, 	null,3, 	null, 	null, 	null, 	null, 	null, 	null, 								null],
              [2, 	'/item/go_to.php?database=&id=',null, 	null,3, 	null, 	null, 	null, 	null, 	null, 	null, 								null],             
              [6, 	'/item/go_to.php?database=&id=',null, 	null,3, 	null, 	null, 	null, 	null, 	null, 	null, 								null],                  
              [3, 	'/item/go_to.php?database=&id=',2, 	null,null, 	4, 	null, 	null, 	null, 	null, 	null, 								null],
              [6, 	'/item/go_to.php?database=&id=',5, 	null,null, 	null, 	null, 	null, 	7, 	null, 	null, 								null],
              [4, 	'/item/go_to.php?database=&id=',null, 	null,null, 	null, 	5, 	null, 	null, 	null, 	null, 								null],
              [5, 	'/item/go_to.php?database=&id=',null, 	null,null, 	null, 	null, 	6, 	null, 	null, 	null, 								null],
              [6, 	'/item/go_to.php?database=&id=',null, 	null,null, 	null, 	null, 	null, 	null, 	7	,'point { size: 48; shape-type: star; fill-color: #a52714; shape-rotation: 10;}', 	"<div style='color:red;'>test html for this point only</div>"]

        ]);

        var options = {
          legend: 'none',
          'chartArea': {'width': '95%', 'height': '95%'},
          vAxis: {title: '', baselineColor: '#fff', gridlineColor: '#fff', textPosition: 'none'},
          hAxis: {title: '', baselineColor: '#fff', gridlineColor: '#fff', textPosition: 'none'},
          pointSize: 30,
          tooltip: { isHtml: true },
          series: {
                0: { pointShape: 'circle', lineWidth: 20, pointSize:0},
                1: { pointShape: 'triangle', lineWidth: 10},
                2: { pointShape: 'square' },
                3: { pointShape: 'diamond' },
                4: { pointShape: 'star' },
                5: { pointShape: 'polygon' },
                6: { }
            }
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
 
 
<!-- https://stackoverflow.com/questions/6205621/how-to-add-links-in-google-chart-api -->
    google.visualization.events.addListener(chart, 'select', selectHandler); 

    function selectHandler(e)     {   
        window.location = data.getValue(chart.getSelection()[0]['row'], 1 );
    }
 
        
         $(window).resize(function(){drawChart();});	 
      }
    </script>