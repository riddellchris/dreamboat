<?php
if(!isset($_SESSION)){session_start();}
if($_GET['primary_folder'] == 'business'){		$show_this_type = 'staff';		related_items_display($show_this_type);
							$show_this_type = 'systems';		related_items_display($show_this_type);}
if($_GET['primary_folder'] == 'network'){		$show_this_type = 'one_to_ones';	related_items_display($show_this_type);
							$show_this_type = 'sales';		related_items_display($show_this_type);}
if($_GET['primary_folder'] == 'biz_dev'){
	if($_GET['primary_folder'] != 'referrers'){	$show_this_type = 'people';		related_items_display($show_this_type);}		
							$show_this_type = 'businesses';		related_items_display($show_this_type);
}
if($_GET['primary_folder'] == 'marketing'){		$show_this_type = 'products';		related_items_display($show_this_type);
							$show_this_type = 'services';		related_items_display($show_this_type);}



//FOR ALL
							$show_this_type = 'tasks';		related_items_display($show_this_type);
							$show_this_type = 'milestones';		related_items_display($show_this_type);	
							$show_this_type = 'goals';		related_items_display($show_this_type);
						if(	$_GET['primary_folder'] == 'wheelhouse'){
							$show_this_type = 'dreams';		related_items_display($show_this_type);
						}
						

	

if($_GET['primary_folder'] == 'improvements'){		$show_this_type = 'target_markets';	related_items_display($show_this_type);
							$show_this_type = 'promotions';		related_items_display($show_this_type);
							$show_this_type = 'channels';		related_items_display($show_this_type);
							$show_this_type = 'angles';		related_items_display($show_this_type);}
	
if($_SESSION['dreamboat_crew'] == 'yes' && $_SESSION['show_as_dreamboat_crew'] == 'yes' ){
	if($_GET['secondary_folder'] != 'future_questions'){	$show_this_type = 'future_questions';	related_items_display($show_this_type);}
}

