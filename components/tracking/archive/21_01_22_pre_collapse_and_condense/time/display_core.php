<?php 
if(!isset($_SESSION)){session_start();}
if(is_numeric(strpos($_SERVER['REQUEST_URI'],'productivity_pilots/clients')) == 1){$user_to_display = $_SESSION['clients_id_for_saving'];}
else{$user_to_display = $_SESSION['user_id'];}
?>

<style>
	@media screen and (min-width: 900px){
		.first-chart{	 max-width: 900px; height: 500px; margin:auto;}
		.not-first-chart{max-width: 900px; height: 570px; margin:auto;}
		}
	@media screen and (max-width: 900px){
		.first-chart{width: 100%; height: 500px; margin:auto;}
		.not-first-chart{width: 100%; height: 570px; margin:auto;}
		}
</style>



<?php
if(is_numeric(strpos($_SERVER['REQUEST_URI'],'productivity_pilots/clients')) == 1){echo "<div style='height:120px;'></div>";}
?>



<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart(){
    var data = new google.visualization.DataTable();
    var data = google.visualization.arrayToDataTable([
        ['day',  
        
        <?php
echo "'";
        
              if($_SESSION['menu_set_productivity_tracker_category'] == 'income'){		echo strtoupper("daily dollars earnt");}
              if($_SESSION['menu_set_productivity_tracker_category'] == 'productivity'){	echo strtoupper("hourly earnings");}
            if($_SESSION['menu_set_productivity_tracker_category'] == 'time'){		echo strtoupper("hours spent working");}   
 echo "'";       
        ?>
        
        ],
        <?php
        
        require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
	$sql = "SELECT * FROM productivity_tracker_inputs WHERE user_id = '".$user_to_display."' LIMIT 30"; // select column
	$result = mysqli_query($conn, $sql);
        

            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                 
            echo     "['";
            
            if($_SESSION['menu_set_productivity_tracker_category'] == 'productivity' && $row['minutes_worked'] != 0){echo $row['date_day'];}
             if($_SESSION['menu_set_productivity_tracker_category'] == 'income' ){echo $row['date_day'];}
            if($_SESSION['menu_set_productivity_tracker_category'] == 'time' && $row['minutes_worked'] != 0){echo $row['date_day'];}               
            
            
            echo "', ";         
            
            if($_SESSION['menu_set_productivity_tracker_category'] == 'productivity'   && $row['minutes_worked'] != 0){echo round($row['income']/($row['minutes_worked']/60),2);}
            if($_SESSION['menu_set_productivity_tracker_category'] == 'income' ){echo $row['income'];}
            if($_SESSION['menu_set_productivity_tracker_category'] == 'time' && $row['minutes_worked'] != 0){echo $row['minutes_worked']/60;}           
            
            echo "],";
            }
            	$number = $number +1;
        ?>
       ]);

    var options = {
        title: <?php echo "'";
            		if($_SESSION['menu_set_productivity_tracker_category'] == 'income'){		echo strtoupper("daily dollars earnt");}
                	if($_SESSION['menu_set_productivity_tracker_category'] == 'productivity'){	echo strtoupper("hourly earnings");}
            		if($_SESSION['menu_set_productivity_tracker_category'] == 'time'){		echo strtoupper("hours spent working");}   
        		echo " ".strtoupper($_SESSION['menu_set_productivity_tracker_period_text'])."',";
        		?>
        curveType: 'function',
        legend: {position: 'bottom'},
        chartArea:{left:70,top:70,right:30,bottom:50},
        smoothLine: true,
        titleTextStyle: {
	        color: '#281e96',    	// any HTML string color ('red', '#cc00cc')
	        fontName: 'Helvetica', 	// i.e. 'Times New Roman'
	        fontSize: 24 		// 12, 18 whatever you want (don't specify px)
		},
	hAxis: {textStyle:{color: '#281e96'}},
	vAxis: {textStyle:{color: '#281e96'},
	        viewWindowMode:'explicit',
	        viewWindow: {
	        <?php
	            	if($_SESSION['menu_set_productivity_tracker_category'] == 'income'){		echo "max:1000, min:0";}
                	if($_SESSION['menu_set_productivity_tracker_category'] == 'productivity'){	echo "max:150, min:0";}
            		if($_SESSION['menu_set_productivity_tracker_category'] == 'time'){		echo "max:12, min:0";}   
	        
	        ?>
	                	           
	                
	                 }
            	}
    };

    var chart = new google.visualization.LineChart(document.getElementById('primary_chart_div'));
    chart.draw(data, options);
}

</script>

 <div id="primary_chart_div" class='first-chart'></div>

<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart(){
    var data = new google.visualization.DataTable();
    var data = google.visualization.arrayToDataTable([
        ['day',       
         <?php
              if($_SESSION['menu_set_productivity_tracker_category'] == 'income'	){echo "'High Value'	,'Average Value'     	,'Low Value'";}      
              if($_SESSION['menu_set_productivity_tracker_category'] == 'productivity'	){echo "'High Competency','Average Competency'	,'Low Competency'";}          
              if($_SESSION['menu_set_productivity_tracker_category'] == 'time'		){echo "'High Efficiency','Average Efficiency'	,'Low Efficiency'";}           
         ?>        
        ],
        <?php
        
        require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
	$sql = "SELECT * FROM productivity_tracker_inputs WHERE user_id = '".$user_to_display."' LIMIT 30"; // select column
	$result = mysqli_query($conn, $sql);
        

            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                     
            echo     "['".$row['date_day']."', ";          
            
            if($_SESSION['menu_set_productivity_tracker_category'] == 'productivity'){	echo $row['minutes_of_high_competency']."	,".$row['minutes_of_average_competency']."	,".$row['minutes_of_low_competency'];}
            if($_SESSION['menu_set_productivity_tracker_category'] == 'income'){	echo $row['minutes_of_high_value']."		,".$row['minutes_of_average_value']."		,".$row['minutes_of_low_value'];}
            if($_SESSION['menu_set_productivity_tracker_category'] == 'time'){		echo $row['minutes_of_high_efficiency']."	,".$row['minutes_of_average_efficiency']."	,".$row['minutes_of_low_efficiency'];}           
            
            echo "],";
            }
            	$number = $number +1;
        ?>
       ]);

    var options = {
        title: <?php echo "'";
            		if($_SESSION['menu_set_productivity_tracker_category'] == 'income'){		echo strtoupper("% of time per value zone");}
                	if($_SESSION['menu_set_productivity_tracker_category'] == 'productivity'){	echo strtoupper("% of time per core competency zone");}
            		if($_SESSION['menu_set_productivity_tracker_category'] == 'time'){		echo strtoupper("% of time per efficiency zone");}   
        		//echo " ".strtoupper($_SESSION['menu_set_productivity_tracker_period_text'])
        		echo "',";
        		?>
		        
        curveType: 'function',
        legend: { position: 'bottom'},
        chartArea:{left:70,top:150,right:30,bottom:50},
        isStacked: 'percent',
        titleTextStyle: {
	        color: '#281e96',    	// any HTML string color ('red', '#cc00cc')
	        fontName: 'Helvetica', 	// i.e. 'Times New Roman'
	        fontSize: 24 		// 12, 18 whatever you want (don't specify px)
		},
	hAxis: {textStyle:{color: '#281e96'}},
	vAxis: {textStyle:{color: '#281e96'}},
	colors: ['#ff0000', '#ffc55c', '#cecece'],
	    	is3D: true 


    };

    var chart = new google.visualization.AreaChart(document.getElementById('secondary_chart_div'));
    chart.draw(data, options);
}

</script> 
 
 
 <div id="secondary_chart_div" class='not-first-chart'></div>

<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart(){
    var data = new google.visualization.DataTable();
    var data = google.visualization.arrayToDataTable([
        ['day',

           <?php
              if($_SESSION['menu_set_productivity_tracker_category'] == 'income'	){echo "'High Efficiency','Average Efficiency'	,'Low Efficiency'";}      
              if($_SESSION['menu_set_productivity_tracker_category'] == 'productivity'	){echo "'High Value'	,'Average Value'	,'Low Value'";}          
              if($_SESSION['menu_set_productivity_tracker_category'] == 'time'		){echo "'High Competency','Average Competency'	,'Low Competency'";}           
         ?>        
        
        ],
        <?php
        
        require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
	$sql = "SELECT * FROM productivity_tracker_inputs WHERE user_id = '".$user_to_display."' LIMIT 30"; // select column
	$result = mysqli_query($conn, $sql);
        

            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
           
            echo     "['".$row['date_day']."', ";        
            
            if($_SESSION['menu_set_productivity_tracker_category'] == 'productivity'){	echo $row['minutes_of_high_value']."		,".$row['minutes_of_average_value']."		,".$row['minutes_of_low_value'];}
            if($_SESSION['menu_set_productivity_tracker_category'] == 'income'){	echo $row['minutes_of_high_efficiency']."	,".$row['minutes_of_average_efficiency']."	,".$row['minutes_of_low_efficiency'];}
            if($_SESSION['menu_set_productivity_tracker_category'] == 'time'){		echo $row['minutes_of_high_competency']."	,".$row['minutes_of_average_competency']."	,".$row['minutes_of_low_competency'];}           
            
            echo "],";
            }
            	$number = $number +1;
        ?>
       ]);

    var options = {
        title: <?php echo "'";
            		if($_SESSION['menu_set_productivity_tracker_category'] == 'income'){		echo strtoupper("% of time per efficiency zone");}
                	if($_SESSION['menu_set_productivity_tracker_category'] == 'productivity'){	echo strtoupper("% of time per value zone");}
            		if($_SESSION['menu_set_productivity_tracker_category'] == 'time'){		echo strtoupper("% of time per competency zone");}   
        		//echo " ".strtoupper($_SESSION['menu_set_productivity_tracker_period_text'])
        		echo" ',";
        		
        		?>
        curveType: 'function',
        legend: { position: 'bottom'},
        chartArea:{left:70,top:150,right:30,bottom:50},
                isStacked: 'percent',
        titleTextStyle: {
	        color: '#281e96',    	// any HTML string color ('red', '#cc00cc')
	        fontName: 'Helvetica', 	// i.e. 'Times New Roman'
	        fontSize: 24 		// 12, 18 whatever you want (don't specify px)
		},
	hAxis: {textStyle:{color: '#281e96'}},
	vAxis: {textStyle:{color: '#281e96'}},
	colors: ['#ff0000', '#ffc55c', '#cecece']
    };

    var chart = new google.visualization.AreaChart(document.getElementById('third_chart_div'));
    chart.draw(data, options);
}

</script> 
 
 
 <div id="third_chart_div" class='not-first-chart'></div>


<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart(){
    var data = new google.visualization.DataTable();
    var data = google.visualization.arrayToDataTable([
        ['day',
         <?php
              if($_SESSION['menu_set_productivity_tracker_category'] == 'income'	){echo "'High Competency','Average Competency'	,'Low Competency'";}      
              if($_SESSION['menu_set_productivity_tracker_category'] == 'productivity'	){echo "'High Efficiency','Average Efficiency'	,'Low Efficiency'";}          
              if($_SESSION['menu_set_productivity_tracker_category'] == 'time'		){echo "'High Value'	,'Average Value'	,'Low Value'";}           
         ?>
        
        ],
        <?php
        
        require $_SERVER['DOCUMENT_ROOT']."/back_of_house/database/connection.php";
	$sql = "SELECT * FROM productivity_tracker_inputs WHERE user_id = '".$user_to_display."' LIMIT 30"; // select column
	$result = mysqli_query($conn, $sql);
        

            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
         
            echo     "['".$row['date_day']."', ";       
            
            if($_SESSION['menu_set_productivity_tracker_category'] == 'productivity'){	echo $row['minutes_of_high_efficiency']."	,".$row['minutes_of_average_efficiency']."	,".$row['minutes_of_low_efficiency'];}
            if($_SESSION['menu_set_productivity_tracker_category'] == 'income'){	echo $row['minutes_of_high_competency']."	,".$row['minutes_of_average_competency']."	,".$row['minutes_of_low_competency'];}
            if($_SESSION['menu_set_productivity_tracker_category'] == 'time'){		echo $row['minutes_of_high_value']."		,".$row['minutes_of_average_value']."		,".$row['minutes_of_low_value'];}           
            
            echo "],";
            }
            	$number = $number +1;
        ?>
       ]);

    var options = {
        title:  <?php echo "'";
            		if($_SESSION['menu_set_productivity_tracker_category'] == 'income'){		echo strtoupper("% of time per competency zone");}
                	if($_SESSION['menu_set_productivity_tracker_category'] == 'productivity'){	echo strtoupper("% of time per efficiency zone");}
            		if($_SESSION['menu_set_productivity_tracker_category'] == 'time'){		echo strtoupper("% of time per value zone");}   
        		//echo " ".strtoupper($_SESSION['menu_set_productivity_tracker_period_text'])'
        		echo"',";
        		?>
        curveType: 'function',
        legend: { position: 'bottom'},
        chartArea:{left:70,top:150,right:30,bottom:50},
                isStacked: 'percent',
        titleTextStyle: {
	        color: '#281e96',    	// any HTML string color ('red', '#cc00cc')
	        fontName: 'Helvetica', 	// i.e. 'Times New Roman'
	        fontSize: 24 		// 12, 18 whatever you want (don't specify px)
		},
	hAxis: {textStyle:{color: '#281e96'}},
	vAxis: {textStyle:{color: '#281e96'}},
	colors: ['#ff0000', '#ffc55c', '#cecece']
    };

    var chart = new google.visualization.AreaChart(document.getElementById('final_chart_div'));
    chart.draw(data, options);
}

</script> 
 
 
 <div id="final_chart_div" class='not-first-chart'></div>

 <div style='height:45px;'></div>


