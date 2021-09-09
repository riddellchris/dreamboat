<?php
if(!isset($_SESSION)){session_start();}

$display_chart = 'yes';

$number_of_items = count($nodes);

//just to test
//$number_of_items = 0;
if($number_of_items == 0){
	if($_SESSION['current_map_view'] == 'all'){						$item_descriptor = "items";						$item_link = '/components/items/add_new_what.php';}	
	if($_SESSION['current_map_view'] == 'activities'){				$item_descriptor = "activities";				$item_link = '/activities/';}		
	if($_SESSION['current_map_view'] == 'people_and_organisations'){$item_descriptor = "people or organisations";	$item_link = '/network/';}		
	if($_SESSION['current_map_view'] == 'sales_and_marketing'){		$item_descriptor = "sales or marketing";		$item_link = '/marketing/';}	
	if($_SESSION['current_map_view'] == 'wheelhouse'){				$item_descriptor = "wheelhouse items";			$item_link = '/wheelhouse/';}	
	if($_SESSION['current_map_view'] == 'products_and_services'){	$item_descriptor = "products or services";		$item_link = '/business/';}	




	$map_warning = "You have no <a style='color:red;' target='_blank' href='".$item_link."'>".$item_descriptor."</a> to display on your map<br>
			Add some <a href='/components/items/add_new_what.php' style='color:red;'>here</a> to start building your productivity network";
	$display_chart = 'no';
}


/*  This is actually from a really old version of the platform - no longer needed
if($_SESSION['current_issues_setting'] == 'issues_off'){
	if($_SESSION['current_map_display'] == 'central_issues'){
		$map_warning = "This layout won't work with issues hidden<br>Please turn issues on";
		$display_chart = 'no';
	}
}
*/


