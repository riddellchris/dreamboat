<?php
if(!isset($_SESSION)){session_start();}

$select_name 	= "adding_new_type_of";
$styling 	= "width: 100%;max-width: 1100px;margin: 0px;";
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/pieces/open_select_and_include_functions.php";
//value sent through will include the capital to be honest



if($_SESSION['current_map_view'] == 'activities'){			
	//activities
	produce_option("Regular doing activity",			$selected);
	produce_option("Regular planning activity",			$selected);
	produce_option("Regular managing activity",			$selected);
	produce_option("Regular administrating activity",	$selected);	
	produce_option("Regular growing activity",			$selected);	
	produce_option("Regular support activity",			$selected);	
}
if($_SESSION['current_map_view']  == 'people_and_organisations'){	
	produce_option("Person",						$selected);
	produce_option("Business",						$selected);	
	produce_option("Community/group/organisation",	$selected);
	produce_option("Referrer",						$selected);
	produce_option(ucfirst(substr($_SESSION['viewing_client_what_clients_are_called'], 0, -1)),	$selected);
	produce_option("Staff member",					$selected);	
}
	
	
	
	


if($_SESSION['current_map_view']  == 'sales_and_marketing'){		
	//sales	
	produce_option("Inital sale",			$selected);
	produce_option("Potential upsell",		$selected);		
	produce_option("Recurring sale",		$selected);	
							
	//marketing
	produce_option("Target market",			$selected);
	produce_option("Channel",				$selected);
	produce_option("Marketing angle",		$selected);
	produce_option("Promotion",				$selected);
}



if($_SESSION['current_map_view']  == 'time_flow'){			$_SESSION['current_map_view'] = $_SESSION['current_map_view'] ;}
if($_SESSION['current_map_view']  == 'money_flow'){			$_SESSION['current_map_view'] = $_SESSION['current_map_view'] ;}
if($_SESSION['current_map_view']  == 'future_planning'){	$_SESSION['current_map_view'] = $_SESSION['current_map_view'] ;}
if($_SESSION['current_map_view']  == 'critical_issues'){	$_SESSION['current_map_view'] = $_SESSION['current_map_view'] ;}



//profile
//commented out just for the moment CR 21.01.15
//produce_option("Progress",		$selected);
	
//business
produce_option("Service",			$selected);	
produce_option("Product",			$selected);	
	
	
if($_SESSION['current_map_view']  != 'people_and_organisations'){		
	//network
	produce_option("Person",						$selected);
	produce_option("Business",						$selected);	
	produce_option("Community/group/organisation",	$selected);
}
	
//biz_dev
produce_option("Event",				$selected);	
produce_option("One to one",		$selected);
produce_option("Referrer",			$selected);

if($_SESSION['current_map_view']  != 'sales_and_marketing'){				
	//sales	
	produce_option("Inital sale",			$selected);
	produce_option("Potential upsell",		$selected);		
	produce_option("Recurring sale",		$selected);	
							
	//marketing
	produce_option("Target market",		$selected);
	produce_option("Channel",			$selected);
	produce_option("Marketing angle",	$selected);
	produce_option("Promotion",			$selected);
}
	
//management
if($_SESSION['current_map_view']  != 'people_and_organisations'){	
	produce_option(ucfirst(substr($_SESSION['viewing_client_what_clients_are_called'], 0, -1)),	$selected);
	produce_option("Staff member",																$selected);
}
produce_option("System",			$selected);
produce_option("Asset",				$selected);
produce_option("Management topic",	$selected);
	
//wheelhouse
produce_option("Dream",			$selected);
produce_option("Goal",			$selected);
produce_option("Milestone",		$selected);
produce_option("Task",			$selected);
produce_option("Homework",		$selected);
	




if($_SESSION['current_map_view'] != 'activities'){	
	//activities
	produce_option("Regular doing activity",			$selected);
	produce_option("Regular planning activity",			$selected);
	produce_option("Regular managing activity",			$selected);
	produce_option("Regular administrating activity",	$selected);	
	produce_option("Regular growing activity",			$selected);	
	produce_option("Regular support activity",			$selected);	
}		
		


//upgrades
produce_option("Planned upgrade",			$selected);
produce_option("Underway upgrade",			$selected);
produce_option("Completed upgrade",			$selected);


/*	KEEP THIS STUFF HERE AS DIMENSIONS OF UPGRADES TO BE USED LATER NO DOUBT
//CR 21.03.23	
//opportunities
produce_option("Skills opportunity",		$selected);
produce_option("Value opportunity",		$selected);	
produce_option("Efficiency opportunity",	$selected);
produce_option("Effectiveness opportunity",	$selected);		
produce_option("Attention opportunity",		$selected);
produce_option("Allocation opportunity",	$selected);
produce_option("Trust opportunity",		$selected);	
produce_option("Risk opportunity",		$selected);		
produce_option("Communication opportunity",	$selected);	
produce_option("Waste opportunity",		$selected);	
produce_option("Direction opportunity",		$selected);	
produce_option("Motivation opportunity",	$selected);
*/
//issues	
/*
produce_option("Issue",					$selected);
produce_option("Notable issue",			$selected);
produce_option("Important issue",		$selected);
produce_option("Critical issue",		$selected);*/	



/*
//this ensures that we are not only on dreamboat crew but on our own profile... i.e. can't add to anyone elses thing
if($_SESSION['dreamboat_crew'] == 'yes' && $_SESSION['viewing_client_id'] == $_SESSION['user_id']){
	//admin
	produce_option("Future question",		$selected);
	produce_option("General note",			$selected);	
	produce_option("Support request",		$selected);				
	produce_option("Bug to fix",			$selected);	
	produce_option("General maintenance",		$selected);				
	produce_option("Iterative improvement",		$selected);
	produce_option("New feature",			$selected);		
	produce_option("Other development",		$selected);				
	produce_option("Eternal improvement",		$selected);	
}
*/

require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/selects/pieces/close_select_unset_arguments.php";

