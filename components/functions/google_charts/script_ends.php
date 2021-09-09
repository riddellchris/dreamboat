<?php
if(!isset($_SESSION)){session_start();}

function gcharts_standard_script_end($chart_identifier, $chart_type){
		admin_functions_in_pages_usage(__FUNCTION__,__FILE__);

//there is some work to do here... when considering a single universal load to deal with multiple charts frankly
//https://developers.google.com/chart/interactive/docs/basic_multiple_charts


//the name is just for id when opening up source
echo "	var chart = new google.visualization.".$chart_type."(document.getElementById('".$chart_identifier."'));";

//20.08.21
//select_handler code goes here (if nothing then will not echo anything)
//This relates to... if you click on something then what happens
//this can also be done with links in the data as a separate column in the data as per activity tracking which honestly is probably the simpler way to go!!!...
//so for now....
if($chart_identifier == 'crm_funnel_chart'){require $_SERVER['DOCUMENT_ROOT']."/components/google_charts/select_handler_script_for_the_crm_funnel.php";}

if($_GET['primary_folder'] != 'legal'){
echo"    var selectHandler = function(e) {
         window.location = data.getValue(chart.getSelection()[0]['row'], 5 );
        }

        // Add our selection handler.
        google.visualization.events.addListener(chart, 'select', selectHandler);    ";
        }

//YEP this really does seem like a bit of a joke having it here...
//really no need for it at all.... now we know a far simpler way


echo "      chart.draw(data, options);}";

echo "$(window).resize(function(){".$chart_identifier."();});";	//this ensures that the chart resizes as the window resizes //SNAP //so far there is no need to have this as an argument driven option
echo "</script>";
    
    

}//this is actually the end to this function