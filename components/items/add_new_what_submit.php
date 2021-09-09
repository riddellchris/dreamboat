<?php
if(!isset($_SESSION)){session_start();}


//profile
	if($_POST['adding_new_type_of'] == 'Progress'){	$go_to_adding_new = 'progress';}
	
//business
	if($_POST['adding_new_type_of'] == 'Service'){	$go_to_adding_new = 'services';}
	if($_POST['adding_new_type_of'] == 'Product'){	$go_to_adding_new = 'products';}	
	
//network
	if($_POST['adding_new_type_of'] == 'Person'){	$go_to_adding_new = 'people';}
	if($_POST['adding_new_type_of'] == 'Business'){	$go_to_adding_new = 'businesses';}	
	if($_POST['adding_new_type_of'] == 'Community/group/organisation'){	$go_to_adding_new = 'groups';}
	
//biz_dev
	if($_POST['adding_new_type_of'] == 'Event'){	$go_to_adding_new = 'events';}
	if($_POST['adding_new_type_of'] == 'One to one'){	$go_to_adding_new = 'one_to_ones';}
	if($_POST['adding_new_type_of'] == 'Referrer'){	$go_to_adding_new = 'referrers';}
			
//sales	
	if($_POST['adding_new_type_of'] == 'Inital sale'){	$go_to_adding_new = 'new_potentials'	;}
	if($_POST['adding_new_type_of'] == 'Potential upsell'){	$go_to_adding_new = 'potential_upsells';}		
	if($_POST['adding_new_type_of'] == 'Recurring sale'){	$go_to_adding_new = 'recurring_sales';}	
						
//marketing
	if($_POST['adding_new_type_of'] == 'Target market'){	$go_to_adding_new = 'target_markets';}
	if($_POST['adding_new_type_of'] == 'Channel'){	$go_to_adding_new = 'channels';}
	if($_POST['adding_new_type_of'] == 'Marketing angle'){	$go_to_adding_new = 'angles';}
	if($_POST['adding_new_type_of'] == 'Promotion'){	$go_to_adding_new = 'promotions';}
	
//management
	if($_POST['adding_new_type_of'] ==  ucfirst(substr($_SESSION['viewing_client_what_clients_are_called'], 0, -1)) ){	$go_to_adding_new = 'clients';}
	if($_POST['adding_new_type_of'] == 'Staff member'){									$go_to_adding_new = 'staff';}
	if($_POST['adding_new_type_of'] == 'System'){										$go_to_adding_new = 'systems';}
	if($_POST['adding_new_type_of'] == 'Asset'){										$go_to_adding_new = 'assets';}
	if($_POST['adding_new_type_of'] == 'Management topic'){									$go_to_adding_new = 'other';}
	
//wheelhouse
	if($_POST['adding_new_type_of'] == 'Dream'){		$go_to_adding_new = 'dreams';}
	if($_POST['adding_new_type_of'] == 'Goal'){		$go_to_adding_new = 'goals';}
	if($_POST['adding_new_type_of'] == 'Milestone'){	$go_to_adding_new = 'milestones';}
	if($_POST['adding_new_type_of'] == 'Task'){		$go_to_adding_new = 'tasks';}
	if($_POST['adding_new_type_of'] == 'Homework'){		$go_to_adding_new = 'homework';}
	
//issues	
	if($_POST['adding_new_type_of'] == 'Issue'){		$go_to_adding_new = 'other_issue';}
	if($_POST['adding_new_type_of'] == 'Notable issue'){	$go_to_adding_new = 'notable_issue';}
	if($_POST['adding_new_type_of'] == 'Important issue'){	$go_to_adding_new = 'important_issue';}
	if($_POST['adding_new_type_of'] == 'Critical issue'){	$go_to_adding_new = 'critical_issue';}
	
//activities
	if($_POST['adding_new_type_of'] == 'Regular doing activity'){		$go_to_adding_new = 'doing'		;}
	if($_POST['adding_new_type_of'] == 'Regular planning activity'){	$go_to_adding_new = 'planning'		;}
	if($_POST['adding_new_type_of'] == 'Regular managing activity'){	$go_to_adding_new = 'managing'		;}
	if($_POST['adding_new_type_of'] == 'Regular administrating activity'){	$go_to_adding_new = 'administrating'	;}	
	if($_POST['adding_new_type_of'] == 'Regular growing activity'){		$go_to_adding_new = 'growing'		;}	
	if($_POST['adding_new_type_of'] == 'Regular support activity'){		$go_to_adding_new = 'supporting'	;}	




				
//opportunities
	if($_POST['adding_new_type_of'] == 'Skills opportunity'){	$go_to_adding_new = 'skills';}
	if($_POST['adding_new_type_of'] == 'Value opportunity'){	$go_to_adding_new = 'value';}
	if($_POST['adding_new_type_of'] == 'Efficiency opportunity'){	$go_to_adding_new = 'efficiency';}
	if($_POST['adding_new_type_of'] == 'Effectiveness opportunity'){$go_to_adding_new = 'effectiveness';}
	if($_POST['adding_new_type_of'] == 'Attention opportunity'){	$go_to_adding_new = 'attention';}
	if($_POST['adding_new_type_of'] == 'Allocation opportunity'){	$go_to_adding_new = 'allocation';}
	if($_POST['adding_new_type_of'] == 'Trust opportunity'){	$go_to_adding_new = 'trust';}
	if($_POST['adding_new_type_of'] == 'Risk opportunity'){		$go_to_adding_new = 'risk';}	
	if($_POST['adding_new_type_of'] == 'Communication opportunity'){$go_to_adding_new = 'communication';}	
	if($_POST['adding_new_type_of'] == 'Waste opportunity'){	$go_to_adding_new = 'waste';}
	if($_POST['adding_new_type_of'] == 'Direction opportunity'){	$go_to_adding_new = 'direction';}
	if($_POST['adding_new_type_of'] == 'Motivation opportunity'){	$go_to_adding_new = 'motivation';}		
		
//improvements
	if($_POST['adding_new_type_of'] == 'Improvements'){	$go_to_adding_new = 'improvements';}

//admin
	if($_POST['adding_new_type_of'] == 'Future question'){		$go_to_adding_new = 'future_questions';}
	if($_POST['adding_new_type_of'] == 'General note'){		$go_to_adding_new = 'general_notes';}
	if($_POST['adding_new_type_of'] == 'Support request'){		$go_to_adding_new = 'support_requests';}							
	if($_POST['adding_new_type_of'] == 'Bug to fix'){		$go_to_adding_new = 'bugs_to_fix';}
	if($_POST['adding_new_type_of'] == 'General maintenance'){	$go_to_adding_new = 'general_maintenance';}					
	if($_POST['adding_new_type_of'] == 'Iterative improvement'){	$go_to_adding_new = 'iterative_improvements';}
	if($_POST['adding_new_type_of'] == 'New feature'){		$go_to_adding_new = 'new_features';}
	if($_POST['adding_new_type_of'] == 'Other development'){	$go_to_adding_new = 'other_development';}						
	if($_POST['adding_new_type_of'] == 'Eternal improvement'){	$go_to_adding_new = 'eternal_improvements';}
	
	
header("Location: /components/items/add_new.php?adding_new=".$go_to_adding_new);
exit();