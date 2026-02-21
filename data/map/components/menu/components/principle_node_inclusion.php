<?php
if(!isset($_SESSION)){session_start();}

echo "
<style>
.greyed_out{
	background-color: #cecece;
	color: #8c8c8c;

}
.greyed_out:hover{
	background-color: #cecece;
	color: #8c8c8c;
	box-shadow: 4px 0px 8px 4px rgb(0 0 0 / 13%);
}
</style>

";



//defaults are set at the top of the script /components/map_engine/scripts/current_version.php
echo "<select name='map_view_".$map_node_select_count."' onchange='this.form.submit()'";

	if($_SESSION['critical_node_include_1'] == 'all' && $map_node_select_count != '1'){
			echo " class = 'greyed_out'";
		}
	echo ">";
	if($map_node_select_count == '1'){
		echo "	<option value='all'";						if($_SESSION['critical_node_include_'.$map_node_select_count] == 'all'){						echo " selected ";}		echo ">All active nodes</option>";
	}
	if( ($_SESSION['critical_node_include_1'] == 'all' && $map_node_select_count == '1') OR 
         $_SESSION['critical_node_include_1'] != 'all')           {


             //TODO: Clean up how this displays
		echo "	<option value='business'";		if($_SESSION['critical_node_include_'.$map_node_select_count] == 'business'){	    echo " selected ";}		echo ">BUSINESS - Products & services</option>";
		echo "	<option value='network'";	    if($_SESSION['critical_node_include_'.$map_node_select_count] == 'network'){        echo " selected ";}		echo ">NETWORK - People, groups & businesses</option>";
		echo "	<option value='biz_dev'";		if($_SESSION['critical_node_include_'.$map_node_select_count] == 'biz_dev'){		echo " selected ";}		echo ">BIZ DEV - Referrers, events, meetings, one to ones</option>";
		echo "	<option value='marketing'";		if($_SESSION['critical_node_include_'.$map_node_select_count] == 'marketing'){		echo " selected ";}		echo ">MARKETING - Targets, angles, channels, promotions</option>";
		echo "	<option value='sales'";			if($_SESSION['critical_node_include_'.$map_node_select_count] == 'sales'){			echo " selected ";}		echo ">SALES - Recurring, upsells, new</option>";
		echo "	<option value='management'";	if($_SESSION['critical_node_include_'.$map_node_select_count] == 'management'){		echo " selected ";}		echo ">MANAGEMENT - Systems, assets, other (only)</option>";
		echo "	<option value='wheelhouse'";	if($_SESSION['critical_node_include_'.$map_node_select_count] == 'wheelhouse'){		echo " selected ";}		echo ">WHEELHOUSE - Dreams, goals, milestones, tasks</option>";

		echo "	<option value='activities'";	if($_SESSION['critical_node_include_'.$map_node_select_count] == 'activities'){		echo " selected ";}		echo ">ACTIVITIES - Doing, planning, managing, supporting etc...</option>";

			//improvements view when added back as a subcategory of wheelhouse

		echo "	<option value='upgrades'";		if($_SESSION['critical_node_include_'.$map_node_select_count] == 'upgrades'){	    echo " selected ";}		echo ">UPGRADES - Completed, underway, planned</option>";		
		//assets view		
		//in time this might bring up some phases or otherwise	additional times to filter by		
	}
	else{
		echo "	<option>All nodes currently showing</option>";

	}
echo "</select>";	




$first_principle_node_inclusion = 'no';

