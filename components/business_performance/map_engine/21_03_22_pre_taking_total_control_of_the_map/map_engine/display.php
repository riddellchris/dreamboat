<?php
if(!isset($_SESSION)){session_start();}
//taken from the script earlier
///components/map_engine/scripts/current_version.php
if($code_development_output != ''){echo $code_development_output;}
?>
<div style='width:100%;text-align:center;padding-top:15px;padding-bottom:15px;text-transform:uppercase;font-family:helvetica;'>

<?php
	if($_SESSION['dreamboat_crew'] == 'yes'){
		echo "<div style='width:100%;'>";
		if($_GET['secondary_folder'] == 'economy'){echo "<span class='pilots_eyes_only_font blink_me'>this page is for dreamboat crew only</span>";}
		if($_GET['secondary_folder'] == 'business'){echo "<span class='pilots_eyes_only_font blink_me'>
									At present this view is only available for dreamboat crew.<br>
									user access will soon be controlled by access in /profile/details/</span>";}	
		echo "</div>";
	}
?>



	<style>
		.add_new_item_button{	text-decoration:none; 
					padding: 6px 10px;}			
		.add_new_item_button:link{color: #4332ff}
		.add_new_item_button:active{color: #4332ff}
		.add_new_item_button:visited{color: #4332ff}
		.add_new_item_button:hover{color: #281e96;background-color: #cfecff;}	
	</style>

	<a class='add_new_item_button' style='z-index:2000;' href='/components/items/add_new_what.php'>add node</a>	
	<a class='add_new_item_button' style='z-index:2000;' href='/components/items/add_new_issue.php'>add issue</a>

<form method = 'post' action='/components/map_engine/display_options/change_view.php' style='display:inline-block;'>
	
	
<?php

//CR 21.02.14 
//There is bucket loads of work here to always make this look great and work and optimse as we go but right now as we speak there is a decent foundation to build off and upon
//the view/issues/connection/layout and edges are the critical factors that shape the actual graph now we just need to make that work better and better for every user and every introduction
//but without question we can have continuing faith we are more than on the right track here

//defaults are set at the top of the script /components/map_engine/scripts/current_version.php
echo "<select name='map_view' onchange='this.form.submit()'>";
	echo "	<option value='all'";				if($_SESSION['current_map_view'] == 'all'){			echo " selected ";}			echo ">All active nodes</option>";
	echo "	<option value='activities'";			if($_SESSION['current_map_view'] == 'activities'){		echo " selected ";}			echo ">Activities only</option>";
		//maybe some sort of sub "task / vs activities" view to see that we have proper alignment and connections here too
	echo "	<option value='people_and_organisations'";	if($_SESSION['current_map_view'] == 'people_and_organisations'){echo " selected ";}			echo ">People & Organisations only</option>";
	echo "	<option value='sales_and_marketing'";		if($_SESSION['current_map_view'] == 'sales_and_marketing'){	echo " selected ";}			echo ">Sales & marketing only</option>";
	echo "	<option value='wheelhouse'";			if($_SESSION['current_map_view'] == 'wheelhouse'){		echo " selected ";}			echo ">Wheelhouse only</option>";
		//improvements view when added back as a subcategory of wheelhouse
	echo "	<option value='products_and_services'";		if($_SESSION['current_map_view'] == 'products_and_services'){		echo " selected ";}	echo ">Products & services only</option>";
	//assets view		
	//in time this might bring up some phases or otherwise	additional times to filter by		
echo "</select>";	


echo "<select name='issues_control' onchange='this.form.submit()'>";
	echo "	<option value='issues_on'";	if($_SESSION['current_issues_setting'] == 'issues_on'){		echo " selected ";}	echo ">Include related issues</option>";
	echo "	<option value='issues_off'";	if($_SESSION['current_issues_setting'] == 'issues_off'){	echo " selected ";}	echo ">Hide related issues</option>";
echo "</select>";



echo "	<select name='map_display' onchange='this.form.submit()'>";
	echo "	<option value='relationship_centric'";	if($_SESSION['current_map_display'] == 'relationship_centric'){		echo " selected ";}	echo ">Relationship centric layout</option>";
	//in time this really should be AI based
		//just pull out the issues and display them first to make this one happen
		//this cannot work if issues are off of course
		//so we should probably adjust the warnings here as a result
//	echo "	<option value='central_issues'";	if($_SESSION['current_map_display'] == 'central_issues'){		echo " selected ";}	echo ">Central issues layout</option>";
		//puts the issues in the inner rings and sorts outwards from there
	//echo "	<option value='distributed_network'";		if($_SESSION['current_map_display'] == 'distributed_network'){	echo " selected ";}		echo ">Distributed network display</option>";
		//lays out based on left to right //throughput/breakdown
	//echo "	<option value='fractal_network_display'";	if($_SESSION['current_map_display'] == 'fractal_network_display'){	echo " selected ";}	echo ">Fractal network display</option>";
		//lays out in a radial arrangement
	//echo "	<option value='critical_edges_display'";	if($_SESSION['current_map_display'] == 'critical_edges_display'){	echo " selected ";}	echo ">Critical edges display</option>";	
		//Essentially organises it all based on the most important/highest weighted edges being in the center now
		
		//issues are hidden for this one
//	echo "	<option value='critical_edges_display'";	if($_SESSION['current_map_display'] == 'business_layout'){	echo " selected ";}	echo ">Business Layout</option>";	
		//Essentially organises it all based on the most important/highest weighted edges being in the center now		
//		problem trees is also really valid here as a subset of the view etc etc	
		
echo "
	</select>";


require $_SERVER['DOCUMENT_ROOT']."/components/tracking/productivity_title_creation.php";


echo "	<select name='edge_displays' onchange='this.form.submit()'>";
	echo "	<option value='non_descript'";	if($_SESSION['current_edge_display'] == 'non_descript'){	echo " selected ";}			echo ">Nondescript edges</option>";
	echo "	<option value='users_time'";	if($_SESSION['current_edge_display'] == 'users_time'){		echo " selected ";}			echo ">User's time edges (to match line widths)</option>";
	echo "	<option value='financial'";	if($_SESSION['current_edge_display'] == 'financial'){		echo " selected ";}			echo ">User's perspective financial edges</option>";
	echo "	<option value='productivity'";	if($_SESSION['current_edge_display'] == 'productivity'){	echo " selected ";}			echo ">Productivity edges</option>";
	echo "	<option value='productivity_improvement_potential'";	if($_SESSION['current_edge_display'] == 'productivity_improvement_potential'){	echo " selected ";}	echo ">Productivity improvement edges</option>";	
	echo "	<option value='communication'";	if($_SESSION['current_edge_display'] == 'communication'){	echo " selected ";}		echo ">Total communication quality edges</option>";
	echo "	<option value='trust'";		if($_SESSION['current_edge_display'] == 'trust'){		echo " selected ";}		echo ">Trust edges</option>";	
	echo "	<option value='kpi_1'";		if($_SESSION['current_edge_display'] == 'kpi_1'){		echo " selected ";}		echo ">".$kpi_1_title." edges</option>";	
	echo "	<option value='kpi_2'";		if($_SESSION['current_edge_display'] == 'kpi_2'){		echo " selected ";}		echo ">".$kpi_2_title." edges</option>";	
	echo "	<option value='kpi_3'";		if($_SESSION['current_edge_display'] == 'kpi_3'){		echo " selected ";}		echo ">".$kpi_3_title." edges</option>";	
	echo "	<option value='kpi_4'";		if($_SESSION['current_edge_display'] == 'kpi_4'){		echo " selected ";}		echo ">".$kpi_4_title." edges</option>";
echo "	</select>";


//ideally some settings about:

//		$top_sub_menu_options = add_top_sub_menu_option('2D'	,$top_sub_menu_options);
//		$top_sub_menu_options = add_top_sub_menu_option('3D'	,$top_sub_menu_options);	//3d, click and movable version of the network	



echo "<span style='color: #4332ff;'>
	&nbsp;&nbsp;optimal comparison: <span style='color: red;'>insufficient inputs</span>
      </span>";
// <input type='checkbox'></input>";//on/off <greyed out insufficient inputs as yet"; //this really is the "end of the line here as this is what it's all about"; keep building and optimising this
//comparative variance.  -- uses all data for similar people
//this should really be a checkbox but essentially be model driven checks against all these things
	
?>	
	
</form>
	
	
	
</div>

<?php

$display_chart = 'yes';


$sql = "SELECT * FROM items_all 
	WHERE user_id = '".$_SESSION['viewing_client_id']."'
	AND current_status = 'active'
	AND deleted_or_not = 'no'";
$result = mysqli_query($conn, $sql);
$number_of_items = mysqli_num_rows($result);

if($number_of_items == 0){
	$map_warning = "You have no items to display on your map<br>
			Add some <a href='/components/items/add_new_what.php' style='color:red;'>here</a> to start building your productivity network";
	$display_chart = 'no';
}

if($_SESSION['current_issues_setting'] == 'issues_off'){
	if($_SESSION['current_map_display'] == 'central_issues'){
		$map_warning = "This layout won't work with issues hidden<br>Please turn issues on";
		$display_chart = 'no';
	}
}



if($display_chart == 'no'){
		echo "<div class='prompt-font' style='width:100%;text-align:center;height:65vh;bottom: 0;position: absolute;'>";
			echo $map_warning;
		echo "</div>";
}

if($display_chart == 'yes'){
	echo "
	<style>
	#chart_div{
		width: 95vw; 
		z-index:-2000;
		margin-left: auto;
		margin-right: auto;";
			//just because of the bottom menu issue
			if($_SESSION['dreamboat_crew'] == 'yes'){	echo "height: 70vh;";}
			else{						echo "height: 75vh;";}
	echo "}
		</style>";
	echo "<div id='chart_div' ></div>";
	}