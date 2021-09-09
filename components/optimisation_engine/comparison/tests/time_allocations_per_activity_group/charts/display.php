<?php
if(!isset($_SESSION)){session_start();}
?>


<div id='test_charts_container' style='margin-bottom:50px;display:flow-root;'>

<!-- how to center a chart
	<div style='width:100%;text-align:center;'>
		<div id='relative_incomes'	style='width:50%;height:45vh;display:inline-block;'>&nbsp;</div>
	</div>
-->
	
	<div id='relative_incomes'	style='width:50%;height:45vh;float:left;'>&nbsp;</div>
	<div id='hours_worked'		style='width:50%;height:45vh;float:left;'>&nbsp;</div>	
	<BR><BR>
	<div id='time_working_on'	style='width:50%;float:left;height:45vh;'>&nbsp;</div>
	<div id='time_doing_the_work'	style='width:50%;float:left;height:45vh;'>&nbsp;</div>	
	<BR><BR>
	<div id='time_managing_the_work'	style='width:50%;float:left;height:45vh;'>&nbsp;</div>	
	<div id='time_managing_the_business'	style='width:50%;float:left;height:45vh;'>&nbsp;</div>	
	<BR>
	<div id='growth_rate'		style='width:50%;float:left;height:45vh;'>&nbsp;</div>
	<div id='correlation_chart'	style='width:50%;float:left;height:45vh;'>&nbsp;</div>
	
	
<!-- not possible just yet -->
<!--	<BR>
	<div style='width:100%;text-align:center;'>
		<div id='value_of_time_spent_working_on_business'	style='width:50%;height:45vh;display:inline-block;'>&nbsp;</div>
	</div>
-->
	
</div>
