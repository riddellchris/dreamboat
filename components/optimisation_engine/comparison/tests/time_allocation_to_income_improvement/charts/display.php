<?php
if(!isset($_SESSION)){session_start();}
?>


<div id='test_charts_container' style='margin-bottom:50px;display:flow-root;'>

<!-- how to center a chart
	<div style='width:100%;text-align:center;'>
		<div id='relative_incomes'	style='width:50%;height:45vh;display:inline-block;'>&nbsp;</div>
	</div>
-->

	<BR><BR>	
	<div id='relative_incomes'	style='width:50%;height:45vh;float:left;'>&nbsp;</div>
	<div id='growth_rate'		style='width:50%;float:left;height:45vh;'>&nbsp;</div>	
	<BR><BR>
	<div style='width:100%;text-align:center;'>	
		<div id='actual_hourly_wage'		style='width:100%;height:75vh;display:inline-block;'>&nbsp;</div>
	</div>
	<div style='width:100%;text-align:center;'>	
		<div id='productivity_improvement'	style='width:100%;height:75vh;display:inline-block;'>&nbsp;</div>
	</div>		
	<div style='width:100%;text-align:center;'>		
		<div id='hours_worked'			style='width:100%;height:75vh;float:left;'>&nbsp;</div>	
	</div>		
	<div id='time_working_on'	style='width:50%;float:left;height:45vh;'>&nbsp;</div>
	<div id='time_doing_the_work'	style='width:50%;float:left;height:45vh;'>&nbsp;</div>	
	<div style='width:100%;text-align:center;'>	
		<div id='time_managing_the_work'	style='width:50%;float:left;height:45vh;'>&nbsp;</div>	
	</div>		
	<div style='width:100%;text-align:center;'>	
		<div id='time_managing_the_business'	style='width:50%;float:left;height:45vh;'>&nbsp;</div>	
	</div>	
	<div style='width:100%;text-align:center;'>
		<div id='correlation_chart'	style='width:100%;height:75vh;float:left;'>&nbsp;</div>
	</div>		
	
<!-- not possible just yet -->
<!--	<BR>
	<div style='width:100%;text-align:center;'>
		<div id='value_of_time_spent_working_on_business'	style='width:50%;height:45vh;display:inline-block;'>&nbsp;</div>
	</div>
-->
	
</div>
