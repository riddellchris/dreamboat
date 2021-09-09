<?php
if(!isset($_SESSION)){session_start();}

function gcharts_div_display($id, $width, $height){
admin_functions_in_pages_usage(__FUNCTION__,__FILE__);

	//
	
	
	
	//we are only showing print critical changes when on the legal only page

	echo "<div id='".$id."'"; 	 
			if($_GET['primary_folder'] == 'knowledgebase'){echo " class='not_for_print google_chart_divs' ";}		
	echo "style='height: ".$height.";'></div>";

	if($_GET['primary_folder'] == 'knowledgebase'){
		echo "<div id='".$id."_print' 	 class='print_only google_chart_divs' 	style='margin-left:auto;margin-right:auto;height:500px;width:500px;'		></div>";
		// style='width:".$width.";height:".$height.";'
	}

}