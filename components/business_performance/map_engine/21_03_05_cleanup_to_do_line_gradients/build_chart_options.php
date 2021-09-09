        var options = {
          legend: 'none',
          'chartArea': {'width': '95%', 'height': '95%'},
          vAxis: {title: '', baselineColor: '#fff', gridlineColor: '#fff', textPosition: 'none'},
          hAxis: {title: '', baselineColor: '#fff', gridlineColor: '#fff', textPosition: 'none'},
          pointSize: 30,
          tooltip: { isHtml: true },
          colors: ['#ff0000', '#cecece', '#4332ff'
          
<?php
/*

//the color sets will vary and change as required here but really all 
//this will need to vary dependent on the number or results
//ideally for all we take the thickness to be a proportion of the total hours displayed on the chart


for any and all non descript points add these multiple times over
		//these will need to expand into 7 by 7 arrays obviously and repeat 7 times to match the thicknesses
		//but that is roughly what is required here/as with everything it's not perfect but improving
          			
		if($_SESSION['current_edge_display'] == 'non_descript'){			echo "'#cecece',";}

		if($_SESSION['current_edge_display'] == 'financial'){				echo "'#4d4d4d',";}
		if($_SESSION['current_edge_display'] == 'users_time'){				echo "'#ffc0cb',";}
		if($_SESSION['current_edge_display'] == 'productivity'){			echo "'#7366ff',";}
		if($_SESSION['current_edge_display'] == 'productivity_improvement_potential'){	echo "'#7366ff',";}
		if($_SESSION['current_edge_display'] == 'communication'){			echo "'#cecece',";}
		if($_SESSION['current_edge_display'] == 'trust'){				echo "'#cecece',";}		
		if($_SESSION['current_edge_display'] == 'kpi_1'){				echo "'red',";}
		if($_SESSION['current_edge_display'] == 'kpi_2'){				echo "'blue',";}
		if($_SESSION['current_edge_display'] == 'kpi_3'){				echo "'orange',";}
		if($_SESSION['current_edge_display'] == 'kpi_4'){				echo "'green',";}       	
*/
?>          					
          					
          					
          					],
          series: {
			<!-- THIS SERIES ELEMENT DOESNT SHOW UP FOR ANYTHING BUT THOSE POINTS THAT ACTUALLY SHOW UP  -->		
	                0: { pointShape: 'circle', pointSize:20, lineWidth: 0},  <!-- nodes -->
	                1: { pointShape: 'circle', pointSize:0, lineWidth: 5},
	                2: { pointShape: 'circle', pointSize:10, lineWidth: 0}	 <!-- issues  -->
	                							 <!-- updates  #00ff00  -->
	                							 
	                							 
	                							 
	                							 
<?php 

//what is actually displayed here is simply a result of scanning the points array and the relationships array for the appropriate series
//to fully assess the hours and group into the appropriate quintile we need to adjust appropriately


//really we should have an additional number of series here ready to go
//in short this should really be an array of thicknesses here based on the intensity, hours and even line dashing too..


?>
            	   }
        };