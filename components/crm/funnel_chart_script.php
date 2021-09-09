<?php
if(!isset($_SESSION)){session_start();}

//it would be so awesome if in time you could actually build this so that when a bar of the funnel is clicked... only those "items" are displayed...and obviously have a way back from that too


require $_SERVER['DOCUMENT_ROOT']."/components/crm/funnel_calculations.php";


$standard_colors[10]	= '#32C5FF';
$standard_colors[20]	= '#2CC3E4';	
$standard_colors[30]	= '#27C0C9';
$standard_colors[40]	= '#21BEAE';
$standard_colors[50]	= '#1CBC93';
$standard_colors[60]	= '#16B978';
$standard_colors[70]	= '#11B75D';
$standard_colors[80]	= '#0BB542';
$standard_colors[90]	= '#06B227';
$standard_colors[100]	= '#00B00C';

if(	$_SESSION['funnel_focus'][$_GET['secondary_folder']] == '10'	OR
	$_SESSION['funnel_focus'][$_GET['secondary_folder']] == '20'	OR
	$_SESSION['funnel_focus'][$_GET['secondary_folder']] == '30'	OR
	$_SESSION['funnel_focus'][$_GET['secondary_folder']] == '40'	OR
	$_SESSION['funnel_focus'][$_GET['secondary_folder']] == '50'	OR
	$_SESSION['funnel_focus'][$_GET['secondary_folder']] == '60'	OR
	$_SESSION['funnel_focus'][$_GET['secondary_folder']] == '70'	OR
	$_SESSION['funnel_focus'][$_GET['secondary_folder']] == '80'	OR
	$_SESSION['funnel_focus'][$_GET['secondary_folder']] == '90'	OR
	$_SESSION['funnel_focus'][$_GET['secondary_folder']] == '100'){
	$focus = 'on';
	}


if($focus == 'on'){

	$off_color = '#cecece';

	$color[10] 	= $off_color;
	$color[20] 	= $off_color;
	$color[30] 	= $off_color;
	$color[40] 	= $off_color;
	$color[50] 	= $off_color;
	$color[60] 	= $off_color;
	$color[70] 	= $off_color;
	$color[80] 	= $off_color;
	$color[90] 	= $off_color;
	$color[100] 	= $off_color;

	if($focus = 'on' && $_SESSION['funnel_focus'][$_GET['secondary_folder']] == '10'){$color[10] = $standard_colors[10];}
	if($focus = 'on' && $_SESSION['funnel_focus'][$_GET['secondary_folder']] == '20'){$color[20] = $standard_colors[20];}
	if($focus = 'on' && $_SESSION['funnel_focus'][$_GET['secondary_folder']] == '30'){$color[30] = $standard_colors[30];}
	if($focus = 'on' && $_SESSION['funnel_focus'][$_GET['secondary_folder']] == '40'){$color[40] = $standard_colors[40];}
	if($focus = 'on' && $_SESSION['funnel_focus'][$_GET['secondary_folder']] == '50'){$color[50] = $standard_colors[50];}
	if($focus = 'on' && $_SESSION['funnel_focus'][$_GET['secondary_folder']] == '60'){$color[60] = $standard_colors[60];}
	if($focus = 'on' && $_SESSION['funnel_focus'][$_GET['secondary_folder']] == '70'){$color[70] = $standard_colors[70];}
	if($focus = 'on' && $_SESSION['funnel_focus'][$_GET['secondary_folder']] == '80'){$color[80] = $standard_colors[80];}
	if($focus = 'on' && $_SESSION['funnel_focus'][$_GET['secondary_folder']] == '90'){$color[90] = $standard_colors[90];}
	if($focus = 'on' && $_SESSION['funnel_focus'][$_GET['secondary_folder']] == '100'){$color[100] = $standard_colors[100];}

}
else{
	$color[10] 	= $standard_colors[10];
	$color[20] 	= $standard_colors[20];
	$color[30] 	= $standard_colors[30];
	$color[40] 	= $standard_colors[40];
	$color[50] 	= $standard_colors[50];
	$color[60] 	= $standard_colors[60];
	$color[70] 	= $standard_colors[70];
	$color[80] 	= $standard_colors[80];
	$color[90] 	= $standard_colors[90];
	$color[100] 	= $standard_colors[100];
}








$gchart_identifier	= "crm_funnel_chart";
gcharts_standard_script_start($gchart_identifier);


$a = "/components/crm/funnel_charts_focus.php?focus=";
$b = "&cache=".rand()."&primary_folder=".$_GET['primary_folder']."&secondary_folder=".$_GET['secondary_folder'];



?>        
        ["Probability", "Potential Revenue", 				{ role: "style" } , { role: 'annotation' }, {type:'string', role:'tooltip',         	'p': {'html': true}}],
        ["0-10%",      <?php	echo $revenue_at_0_to_10_percent.'	, "color: '.$color[10].'","'.$revenue_at_0_to_10_percent.'","'.$a.'0-10%'.$b.'"';	?>],
        ["10-20%",     <?php 	echo $revenue_at_10_to_20_percent.'	, "color: '.$color[20].'","'.$revenue_at_10_to_20_percent.'","'.$a.'10-20%'.$b.'"';	?>],
        ["20-30%",     <?php 	echo $revenue_at_20_to_30_percent.'	, "color: '.$color[30].'","'.$revenue_at_20_to_30_percent.'","'.$a.'20-30%'.$b.'"';	?>],
        ["30-40%",     <?php 	echo $revenue_at_30_to_40_percent.'	, "color: '.$color[40].'","'.$revenue_at_30_to_40_percent.'","'.$a.'30-40%'.$b.'"';	?>],
        ["40-50%",     <?php 	echo $revenue_at_40_to_50_percent.'	, "color: '.$color[50].'","'.$revenue_at_40_to_50_percent.'","'.$a.'40-50%'.$b.'"';	?>],
        ["50-60%",     <?php 	echo $revenue_at_50_to_60_percent.'	, "color: '.$color[60].'","'.$revenue_at_50_to_60_percent.'","'.$a.'50-60%'.$b.'"';	?>],
        ["60-70%",     <?php 	echo $revenue_at_60_to_70_percent.'	, "color: '.$color[70].'","'.$revenue_at_60_to_70_percent.'","'.$a.'60-70%'.$b.'"';	?>],
        ["70-80%",     <?php 	echo $revenue_at_70_to_80_percent.'	, "color: '.$color[80].'","'.$revenue_at_70_to_80_percent.'","'.$a.'70-80%'.$b.'"';	?>],
        ["80-90%",     <?php 	echo $revenue_at_80_to_90_percent.'	, "color: '.$color[90].'","'.$revenue_at_80_to_90_percent.'","'.$a.'80-90%'.$b.'"';	?>],
        ["90-100%",    <?php 	echo $revenue_at_90_to_100_percent.'	, "color: '.$color[100].'","'.$revenue_at_90_to_100_percent.'","'.$a.'90-100%'.$b.'"';	?>] 
        
      ]);

       
   
        
      var options = {
        title: "",
      tooltip: {trigger: 'none' },
        height: 400,
        bar: {groupWidth: "95%"},
        fontName: 'Comfortaa',
        legend: { position: "none" },
        'chartArea': {'width': '100%', 'height': '100%'}
      };
      
<?php      gcharts_standard_script_end($gchart_identifier, 'BarChart');      ?> 
