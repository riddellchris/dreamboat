<?php
if(!isset($_SESSION)){session_start();}

//this is obviously linked to the other file
///folder_to_database_relationships.php

//$database_search['primary_folder']['secondary_folder'];

$database_search['profile']['progress'] 		= 'progress';

$database_search['business']['products'] 		= 'products_and_services';
$database_search['business']['services'] 		= 'products_and_services';

$database_search['network']['groups'] 		    = 'organisations';
$database_search['network']['businesses'] 		= 'organisations';
$database_search['network']['people'] 		    = 'people';

$database_search['biz_dev']['events'] 		    = 'events';
$database_search['biz_dev']['one_to_ones'] 		= 'one_to_ones';
$database_search['biz_dev']['referrers'] 		= 'people';

$database_search['marketing']['target_markets']	= 'target_markets';
$database_search['marketing']['angles'] 		= 'marketing_angles';
$database_search['marketing']['channels'] 		= 'channels';
$database_search['marketing']['promotions'] 	= 'promotions';

$database_search['sales']['recurring_sales'] 	= 'sales';
$database_search['sales']['potential_upsells'] 	= 'sales';
$database_search['sales']['new_potentials'] 	= 'sales';
$database_search['sales']['all'] 			    = 'sales';

$database_search['management']['clients']		= 'people';
$database_search['management']['staff'] 		= 'people';
$database_search['management']['systems'] 		= 'systems';
$database_search['management']['assets'] 		= 'assets';
$database_search['management']['other'] 		= 'other_management';

$database_search['wheelhouse']['dreams']		= 'wheelhouse';
$database_search['wheelhouse']['goals'] 		= 'wheelhouse';
$database_search['wheelhouse']['milestones']	= 'wheelhouse';
$database_search['wheelhouse']['tasks'] 		= 'wheelhouse';

$database_search['activities']['doing']		    = 'activities';
$database_search['activities']['planning'] 		= 'activities';
$database_search['activities']['managing'] 		= 'activities';
$database_search['activities']['supporting'] 	= 'activities';
$database_search['activities']['administrating'] 	= 'activities';
$database_search['activities']['growing'] 		= 'activities';
$database_search['activities']['all'] 		    = 'activities';

$database_search['issues']['all'] 			    = 'issues';
$database_search['issues']['critical'] 		    = 'issues';
$database_search['issues']['important'] 		= 'issues';
$database_search['issues']['other'] 		    = 'issues';
