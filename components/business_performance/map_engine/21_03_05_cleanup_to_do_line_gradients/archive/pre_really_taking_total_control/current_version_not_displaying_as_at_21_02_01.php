<?php
if(!isset($_SESSION)){session_start();}


//require $_SERVER['DOCUMENT_ROOT']."/components/functions/safely_replacing_apostrophies_function.php";
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";
$sql = "SELECT * FROM `item_relationships` 
	WHERE 	item_a_user_id = '".$_SESSION['viewing_client_id']."' 
	AND 	item_b_user_id = '".$_SESSION['viewing_client_id']."' 

	AND 	item_a_current_status = 'active' 
	AND 	item_b_current_status = 'active' 
	AND 	item_a_deleted_or_not = 'no' 
	AND 	item_b_deleted_or_not = 'no' 
	
	AND total_relationship_status = 'active'";
//for different views add to this SQL
//activities view - we get out all the activities for example and the related issues etc etc
//similar for people and organisations
/*
		<!-- <option>Activities view</option> -->
		<!-- <option>People & Organisations view</option> -->
		<!-- <option>Sales & marketing</option> -->		
		<!-- <option>Time utilisation view</option> -->	//this can use triangular maths for sure
		<!-- <option>Money flow view</option> -->	//this can use triangular maths for sure //this can also sum money in and out flow - to find more and more issues without question	
		<!-- <option>Central nodes view</option> -->
		<!-- <option>Future planning view/option> --> 
*/




$result = mysqli_query($conn, $sql);



$number_for_final_array = 0;	

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
//then order based on the highest number of relationships with active numbers
	//$final_results['number_of_active_relationships'][$i] = ;	





	//as we are storing intro appropriate arrays we need to count:
	//total number of unique points & total number of relationships per item too
	//therefore allowing us to reorder all arrays based on the total number of relationships 
		//before we print them out
			

	//prior to storing titles we should also 
	//$title = safely_remove_apostrophies($row['title']);


	
	$number_for_final_array ++;
}



require $_SERVER['DOCUMENT_ROOT']."/components/map_engine/views/central_issues_view/point_locations_calculations.php";


//now let's co-ordinate all the separate values:
//align each of the items with a point based on the relationship ranking






function create_go_to_link($db, $item_id){echo "'/components/items/go_to.php?db=".$db."&item_id=".$item_id."/'";}


//then use a for loop down here
	//spit out those that aren't issues
	//spit out those that are issues
	//spit out the lines that match/join the two links together
	
	
	
	
	
?>        
        
        
    <script name="primary_map_engine_script" type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable
           ([['X', 	{ role: 'link' },'nodes',{type:'string', role:'tooltip','p': {'html': true}},'','',{type:'string', role:'tooltip','p': {'html': true}}],
       
<?php     //non-issue nodes	
?>
 	[250, 			create_go_to_link('people','1322'), 	250, 			createCustomHTMLContent('A dogs breakfast'),		null, 		null,		null],
	[264.51531373598, 	create_go_to_link('people','1322'), 	308.21774357656, 	createCustomHTMLContent('Staffing issues'),		null, 		null,		null],
	[206.83961197968, 	create_go_to_link('people','1322'), 	291.67950222754, 	createCustomHTMLContent('Development concern'),		null, 		null,		null],
	[192.3242982437, 	create_go_to_link('people','1322'), 	233.46175865098, 	createCustomHTMLContent('Financial management'),	null, 		null,		null],
	    
       
       
<?php    //issues		
?>
 	[235.67746285783,	'/dds/', 				null, 			'',							null, 		260,		createCustomHTMLContent('Issue3 title')],     
 
       
<?php     
     //lines that hold issues -->
     //run from point to point
     //soonce the points are known we can just collect them up   
?>
 	[250, 			'/dds/', 				null, 			'',							250, 		null,		null], 	   
  	[235.67746285783,	'/dds/', 				null, 			'',							260, 		null,		null],     
 	[null, 			'/dds/',				null, 			'',							null, 		null,		null],  
 	      
 	[264.51531373598, 	'/dds/', 				null, 			'',							308.21774357656,null,		null],
	[206.83961197968, 	'/dds/', 				null, 			'',							291.67950222754,null,		null],      
	[null, 			'/dds/', 				null, 			'',							null, 		null,		null],  
	
	
 	[192.3242982437, 	'/dds/', 				null, 			'',							233.46175865098,null,		null],
	[264.51531373598, 	'/dds/', 				null, 			'',							308.21774357656,null,		null]
 	
        ]);
   

        var options = {
          legend: 'none',
          'chartArea': {'width': '95%', 'height': '95%'},
          vAxis: {title: '', baselineColor: '#fff', gridlineColor: '#fff', textPosition: 'none'},
          hAxis: {title: '', baselineColor: '#fff', gridlineColor: '#fff', textPosition: 'none'},
          pointSize: 30,
          tooltip: { isHtml: true },
          colors: ['#ff0000','#cecece','#4332ff'],
          series: {

<!-- THIS SERIES ELEMENT DOESNT SHOW UP FOR ANYTHING BUT THOSE POINTS THAT ACTUALLY SHOW UP  -->
                0: { pointShape: 'circle', pointSize:20, lineWidth: 0},  <!-- nodes -->
                1: { pointShape: 'circle', pointSize:0, lineWidth: 10},
               2: { pointShape: 'circle', pointSize:10, lineWidth: 0}
                       
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
      
      
//https://developers.google.com/chart/interactive/docs/customizing_tooltip_content	
//this should also include a total share of workload
function createCustomHTMLContent(title) {
  return '<div style="padding:5px 5px 5px 5px;">' +
      '<table class="medals_layout" style="font-family:Comfortaa;color:#4332ff;">' + 
      	'<tr>' + '<td style="font-weight:900;color:281e96;">' + title +'</td>' + '</tr>' + 
      	'<tr>' + '<td style="color: #cecece;"><b>click to edit</b></td>' + '</tr>' +      	
      	'</table>' + '</div>';
}      
      
    </script>