<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/sub_menus/styles.php";
require $_SERVER['DOCUMENT_ROOT']."/components/sub_menus/defaults.php";



/*
CR 29.03.22
So this really needs to transform into something pretty succinct such that I can pull all of these things together.
So that I can collapse everything depending on the client and the user scenario.
Obviously some flexibility is critical.
How that's done remains to be seen though.
Let's see.

This should really be turned into a session variable that adjusts for each users such that they don't see everything or can't access everything from the cookie
Which honestly doesn't matter too much.

Really the biggest issue here is the problem of the dreamboat crew bit.
That's the most critical problem

This though should be stored in a database nice and efficiently 
Entirely efficiently.
how that works is most critical but not today

Figuring out how the budgets can work / should work seems to be most critical - essential even


*/

unset($top_sub_menu_options);
unset($top_sub_sub_menu_options);
if(!isset($top_sub_menu_options)){		$top_sub_menu_options = array();}
if(!isset($top_sub_sub_menu_options)){	$top_sub_sub_menu_options = array();}


//This stuff will be important in time to ensure maximial control and variation in the sub-menus
//Not for tonight 19.06.20 though - not for tonight 
function add_top_sub_menu_option($name, $top_sub_menu_options){
	if(!isset($top_sub_menu_options)){$top_sub_menu_options = array();}
		$top_sub_menu_options[count($top_sub_menu_options)] = $name;	
		return $top_sub_menu_options;
}

function add_top_sub_sub_menu_option($name, $top_sub_sub_menu_options){
	if(!isset($top_sub_sub_menu_options)){$top_sub_sub_menu_options = array();}
		$top_sub_sub_menu_options[count($top_sub_sub_menu_options)] = $name;	
		return $top_sub_sub_menu_options;
}
if(check_primary_folder('home')){	    $top_sub_menu_options = add_top_sub_menu_option('display_no_menu'	,$top_sub_menu_options);	}

if(check_primary_folder('snapshot')){	$top_sub_menu_options = add_top_sub_menu_option('display_no_menu'	,$top_sub_menu_options);	}	

if(check_primary_folder('plan')){	    $top_sub_menu_options = add_top_sub_menu_option('display_no_menu'	,$top_sub_menu_options);	}	
	
if(check_primary_folder('problem')){	$top_sub_menu_options = add_top_sub_menu_option('display_no_menu'	,$top_sub_menu_options);	}
if(check_primary_folder('solution')){	$top_sub_menu_options = add_top_sub_menu_option('institutional'		,$top_sub_menu_options);	
					$top_sub_menu_options = add_top_sub_menu_option('general'								,$top_sub_menu_options);	
					//$top_sub_menu_options = add_top_sub_menu_option('specific'							,$top_sub_menu_options);	
					}

if(check_primary_folder('solutions')){	
					$top_sub_menu_options = add_top_sub_menu_option('perspective_change'		,$top_sub_menu_options);	
					//$top_sub_menu_options = add_top_sub_menu_option('issue_removal'			,$top_sub_menu_options);	
					$top_sub_menu_options = add_top_sub_menu_option('economic_normalisation'	,$top_sub_menu_options);
					$top_sub_menu_options = add_top_sub_menu_option('initial_product'			,$top_sub_menu_options);	
					//$top_sub_menu_options = add_top_sub_menu_option('specific'				,$top_sub_menu_options);	
					}
if(check_primary_folder('impact')){	$top_sub_menu_options = add_top_sub_menu_option('on_you'		,$top_sub_menu_options);
									//$top_sub_menu_options = add_top_sub_menu_option('on_staff'					,$top_sub_menu_options);
									$top_sub_menu_options = add_top_sub_menu_option('on_businesses'					,$top_sub_menu_options);
									$top_sub_menu_options = add_top_sub_menu_option('on_economies'					,$top_sub_menu_options);	}


if(check_primary_folder('processes')){
	$top_sub_menu_options = add_top_sub_menu_option('individual'	,$top_sub_menu_options);	
	$top_sub_menu_options = add_top_sub_menu_option('businesses'	,$top_sub_menu_options);	
	$top_sub_menu_options = add_top_sub_menu_option('economic'		,$top_sub_menu_options);	
																	}
if(check_primary_folder('contact_us')){	$top_sub_menu_options = add_top_sub_menu_option('display_no_menu'	,$top_sub_menu_options);	}
	
if(check_primary_folder('insights')){	$top_sub_menu_options = add_top_sub_menu_option('preparation'	,$top_sub_menu_options);
										$top_sub_menu_options = add_top_sub_menu_option('display'		,$top_sub_menu_options);	}	

if(check_primary_folder('walkthroughs')){	
											$top_sub_menu_options = add_top_sub_menu_option('critical_background'			,$top_sub_menu_options);
											$top_sub_menu_options = add_top_sub_menu_option('our_process'					,$top_sub_menu_options);
											$top_sub_menu_options = add_top_sub_menu_option('other_samples_and_examples'	,$top_sub_menu_options);
											}	

if(check_primary_folder('highlights')){	$top_sub_menu_options = add_top_sub_menu_option('display_no_menu'	,$top_sub_menu_options);}	
if(check_primary_folder('overview')){	$top_sub_menu_options = add_top_sub_menu_option('display_no_menu'	,$top_sub_menu_options);}		
	
if(check_primary_folder('profile')){
	$top_sub_menu_options = add_top_sub_menu_option('details'	,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('wellbeing'	,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('flow'		,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('progress'	,$top_sub_menu_options);

	if(check_secondary_folder('wellbeing')){
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('health'		,$top_sub_sub_menu_options);
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('energy'		,$top_sub_sub_menu_options);
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('confidence'	,$top_sub_sub_menu_options);
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('stress'		,$top_sub_sub_menu_options);
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('mood'			,$top_sub_sub_menu_options);
	}	
	if(check_secondary_folder('flow')){
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('reflect'	,$top_sub_sub_menu_options);
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('dream'		,$top_sub_sub_menu_options);
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('vent'		,$top_sub_sub_menu_options);
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('think'		,$top_sub_sub_menu_options);
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('plan'		,$top_sub_sub_menu_options);
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('focus'		,$top_sub_sub_menu_options);
	}
}


if(check_primary_folder('interrogation')){
	$top_sub_menu_options = add_top_sub_menu_option('all'		,$top_sub_menu_options);
}



if(check_primary_folder('data')){
	$top_sub_menu_options = add_top_sub_menu_option('apis'			,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('matching'		,$top_sub_menu_options);
}



if(check_primary_folder('map')){

	//$top_sub_menu_options = add_top_sub_menu_option('apis'		,$top_sub_menu_options);
	//if(check_secondary_folder('apis')){
	//	if($_SESSION['dreamboat_crew'] == 'yes'){
	//	$top_sub_sub_menu_options = add_top_sub_sub_menu_option('test_sub_menu'		,$top_sub_sub_menu_options);		
	//	}
	//}
	//if(check_secondary_folder('economy')){
	//	$top_sub_sub_menu_options = add_top_sub_sub_menu_option('main_view'		,$top_sub_sub_menu_options);		

	//}
	//echo $_SESSION['dreamboat_crew'];exit();

	$top_sub_menu_options = add_top_sub_menu_option('personal'	,$top_sub_menu_options);
	if(check_secondary_folder('personal')){
		if($_SESSION['dreamboat_crew'] == 'yes'){
			$top_sub_sub_menu_options = add_top_sub_sub_menu_option('main_view'			,$top_sub_sub_menu_options);			
			$top_sub_sub_menu_options = add_top_sub_sub_menu_option('matching'			,$top_sub_sub_menu_options);
			$top_sub_sub_menu_options = add_top_sub_sub_menu_option('interplay'			,$top_sub_sub_menu_options);
			$top_sub_sub_menu_options = add_top_sub_sub_menu_option('valuation'			,$top_sub_sub_menu_options);
		}
	}

	//leave this here // in time this can happen but privacy concerns need to be workedout
	//	if($_SESSION['viewing_client_network_access_yes_no'] == 'yes'){	
	if($_SESSION['dreamboat_crew'] == 'yes'){
		$top_sub_menu_options = add_top_sub_menu_option('business'					,$top_sub_menu_options);
		if(check_secondary_folder('business')){
				$top_sub_sub_menu_options = add_top_sub_sub_menu_option('main_view'		,$top_sub_sub_menu_options);		
				$top_sub_sub_menu_options = add_top_sub_sub_menu_option('grouping'		,$top_sub_sub_menu_options);
				$top_sub_sub_menu_options = add_top_sub_sub_menu_option('matching'		,$top_sub_sub_menu_options);
				$top_sub_sub_menu_options = add_top_sub_sub_menu_option('interplay'		,$top_sub_sub_menu_options);
				$top_sub_sub_menu_options = add_top_sub_sub_menu_option('valuation'		,$top_sub_sub_menu_options);
				$top_sub_sub_menu_options = add_top_sub_sub_menu_option('permissions'	,$top_sub_sub_menu_options);
		}
	}
	//	}
		
					
	if($_SESSION['dreamboat_crew'] == 'yes'){
		$top_sub_menu_options = add_top_sub_menu_option('economy'	,$top_sub_menu_options);
	}		

	//hidden unless 
	//this is because it's only to be added to as we go - use new tab where possible
	if($_GET['secondary_folder'] == 'edges'){		
		$top_sub_menu_options = add_top_sub_menu_option('edges'			,$top_sub_menu_options);				
	}
}



if(check_primary_folder('notes')){
	$top_sub_menu_options = add_top_sub_menu_option('pilot_notes'							,$top_sub_menu_options);
	if(check_secondary_folder('pilot_notes')){
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('for_the_phone'				,$top_sub_sub_menu_options);
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('for_sales_and_meetings'	,$top_sub_sub_menu_options);
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('for_printing'				,$top_sub_sub_menu_options);

	}	
	$top_sub_menu_options = add_top_sub_menu_option('all_discussion_history'	,$top_sub_menu_options);
}


if(check_primary_folder('business')){
	$top_sub_menu_options = add_top_sub_menu_option('details'		,$top_sub_menu_options);
	//$top_sub_menu_options = add_top_sub_menu_option('settings'	,$top_sub_menu_options);
	//$top_sub_menu_options = add_top_sub_menu_option('reviews'		,$top_sub_menu_options);// this will come back as part of the business review process

	$top_sub_menu_options = add_top_sub_menu_option('services'		,$top_sub_menu_options);			
	$top_sub_menu_options = add_top_sub_menu_option('products'		,$top_sub_menu_options);
}
if(check_primary_folder('network')){
	$top_sub_menu_options = add_top_sub_menu_option('groups'		,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('businesses'	,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('people'		,$top_sub_menu_options);
}
if(check_primary_folder('biz_dev')){
	$top_sub_menu_options = add_top_sub_menu_option('referrers'		,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('events'		,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('one_to_ones'	,$top_sub_menu_options);
}
if(check_primary_folder('sales')){
	$top_sub_menu_options = add_top_sub_menu_option('recurring_sales'	,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('potential_upsells'	,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('new_potentials'	,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('all'				,$top_sub_menu_options);
	
	

	
	$top_sub_menu_options = add_top_sub_menu_option('insights'		,$top_sub_menu_options);	//this should only be visible if the pilot has activated a worksheet from this list
	if(check_secondary_folder('insights')){	
		$top_sub_sub_menu_options 		= add_top_sub_sub_menu_option('top_10_client_share'			,$top_sub_sub_menu_options);
		$top_sub_sub_menu_options 		= add_top_sub_sub_menu_option('new_client_share'			,$top_sub_sub_menu_options);	
		$top_sub_sub_menu_options 		= add_top_sub_sub_menu_option('product_share'				,$top_sub_sub_menu_options);
		//		$top_sub_sub_menu_options 		= add_top_sub_sub_menu_option('average_client_growth_rate'	,$top_sub_sub_menu_options);						
		//standard client trajectory is far more useful here than average client growth rate
		//but for now this can probably just be left ouf
		// all of these would need far more comparaitive data further back and better information about the client journey
		//ass this will have changed over time / some bounding is crticial
		//this is probably good after the bounding menu is completed
	}
	$top_sub_menu_options = add_top_sub_menu_option('worksheets'		,$top_sub_menu_options);	//this should only be visible if the pilot has activated a worksheet from this list
	if(check_secondary_folder('worksheets')){	
		$top_sub_sub_menu_options 		= add_top_sub_sub_menu_option('client_product_matrix'				,$top_sub_sub_menu_options);	
	}	

}
if(check_primary_folder('marketing')){
	$top_sub_menu_options = add_top_sub_menu_option('target_markets'	,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('angles'			,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('channels'			,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('promotions'		,$top_sub_menu_options);
//	$top_sub_menu_options = add_top_sub_menu_option('funnel'			,$top_sub_menu_options);		
}
if(check_primary_folder('management')){
	$top_sub_menu_options = add_top_sub_menu_option('other'		,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('assets'	,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('systems'	,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('staff'		,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('clients'	,$top_sub_menu_options);
}

if(check_primary_folder('wheelhouse')){
	$top_sub_menu_options = add_top_sub_menu_option('dreams'		,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('goals'			,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('milestones'	,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('tasks'			,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('insights'		,$top_sub_menu_options);	
	if(check_secondary_folder('insights')){	
		$top_sub_sub_menu_options 		= add_top_sub_sub_menu_option('wip_valuation'				,$top_sub_sub_menu_options);	
	}	
}

if(check_primary_folder('issues')){
	$top_sub_menu_options = add_top_sub_menu_option('other'		,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('important'	,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('critical'	,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('all'		,$top_sub_menu_options);
	}

if(check_primary_folder('activities')){
	$top_sub_menu_options = add_top_sub_menu_option('doing'				,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('planning'			,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('managing'			,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('supporting'		,$top_sub_menu_options);	
	$top_sub_menu_options = add_top_sub_menu_option('administrating'	,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('growing'			,$top_sub_menu_options);			
	$top_sub_menu_options = add_top_sub_menu_option('all'				,$top_sub_menu_options);
	}
if(check_primary_folder('time')){
	//what has been put in here is simply ONLY because of 


		$top_sub_menu_options = add_top_sub_menu_option('this_week'				,$top_sub_menu_options);
		if(check_secondary_folder('this_week')){	
			//$top_sub_sub_menu_options 		= add_top_sub_sub_menu_option('by_activity'			,$top_sub_sub_menu_options);
			$top_sub_sub_menu_options 		= add_top_sub_sub_menu_option('by_client'			,$top_sub_sub_menu_options);		
		}
			//since last session?
		$top_sub_menu_options = add_top_sub_menu_option('this_month'			,$top_sub_menu_options);
		if(check_secondary_folder('this_month')){	
			//$top_sub_sub_menu_options 		= add_top_sub_sub_menu_option('by_activity'			,$top_sub_sub_menu_options);
			$top_sub_sub_menu_options 		= add_top_sub_sub_menu_option('by_client'			,$top_sub_sub_menu_options);	
			//$top_sub_sub_menu_options 		= add_top_sub_sub_menu_option('by_revenue'			,$top_sub_sub_menu_options);					
		}


	//	$top_sub_menu_options = add_top_sub_menu_option('past_year'			,$top_sub_menu_options);
		//if(check_secondary_folder('past_year')){	
			//$top_sub_sub_menu_options 		= add_top_sub_sub_menu_option('by_activity'			,$top_sub_sub_menu_options);
			//$top_sub_sub_menu_options 		= add_top_sub_sub_menu_option('by_client'			,$top_sub_sub_menu_options);	
			//$top_sub_sub_menu_options 		= add_top_sub_sub_menu_option('by_revenue'			,$top_sub_sub_menu_options);					
		//}	
	}

if(check_primary_folder('upgrades')){
	$top_sub_menu_options = add_top_sub_menu_option('all'		,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('completed'	,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('underway'	,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('planned'	,$top_sub_menu_options);	
	$top_sub_menu_options = add_top_sub_menu_option('homework'	,$top_sub_menu_options);		

}

if(check_primary_folder('results')){
//	$top_sub_menu_options = add_top_sub_menu_option('weekly'	,$top_sub_menu_options);
//	$top_sub_menu_options = add_top_sub_menu_option('monthly'	,$top_sub_menu_options);
//	if(check_secondary_folder('monthly')){
		$top_sub_menu_options = add_top_sub_menu_option('kpis'				,$top_sub_menu_options);


		if($_SESSION['viewing_client_sales_process_involvement_yes_no'] == 'yes'){
		$top_sub_menu_options = add_top_sub_menu_option('sales'				,$top_sub_menu_options);	
		}
		if($_SESSION['viewing_client_commission_yes_no'] == 'yes'){
		$top_sub_menu_options = add_top_sub_menu_option('commission'		,$top_sub_menu_options);		
		}		
		if($_SESSION['viewing_client_financial_management_yes_no'] == 'yes'){
		$top_sub_menu_options = add_top_sub_menu_option('financials'			,$top_sub_menu_options);	


		}			
		$top_sub_menu_options = add_top_sub_menu_option('work'								,$top_sub_menu_options);		
		$top_sub_menu_options = add_top_sub_menu_option('productivity'						,$top_sub_menu_options);		
//	}
}
if(check_primary_folder('financials')){

	$top_sub_menu_options = add_top_sub_menu_option('balance_sheet'							,$top_sub_menu_options);
	if(check_secondary_folder('balance_sheet')){	
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('budgets'					,$top_sub_sub_menu_options);
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('actuals'					,$top_sub_sub_menu_options);	
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('forecasts'					,$top_sub_sub_menu_options);	
	}

	$top_sub_menu_options = add_top_sub_menu_option('cash'									,$top_sub_menu_options);
	if(check_secondary_folder('cash')){	
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('owner_drawings'			,$top_sub_sub_menu_options);	
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('at_bank'					,$top_sub_sub_menu_options);			
	}

	$top_sub_menu_options = add_top_sub_menu_option('cashflow'								,$top_sub_menu_options);
	if(check_secondary_folder('cashflow')){	
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('debtor_days'				,$top_sub_sub_menu_options);
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('cash_cycle'				,$top_sub_sub_menu_options);
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('collections_this_week'		,$top_sub_sub_menu_options);
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('collections_this_month'	,$top_sub_sub_menu_options);
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('collections_summary'		,$top_sub_sub_menu_options);		
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('actuals'					,$top_sub_sub_menu_options);	
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('forecasts'					,$top_sub_sub_menu_options);

	}

	$top_sub_menu_options = add_top_sub_menu_option('billing'								,$top_sub_menu_options);
	if(check_secondary_folder('billing')){	
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('invoices'					,$top_sub_sub_menu_options);	
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('quotes'					,$top_sub_sub_menu_options);			
	}


	$top_sub_menu_options = add_top_sub_menu_option('profit_and_loss'						,$top_sub_menu_options);
	if(check_secondary_folder('profit_and_loss')){	
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('gross_profit'				,$top_sub_sub_menu_options);
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('net_profit'				,$top_sub_sub_menu_options);

		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('budgets'					,$top_sub_sub_menu_options);
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('actuals'					,$top_sub_sub_menu_options);	
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('forecasts'					,$top_sub_sub_menu_options);	
	}


	$top_sub_menu_options = add_top_sub_menu_option('revenue'								,$top_sub_menu_options);
	if(check_secondary_folder('revenue')){	
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('tracker'					,$top_sub_sub_menu_options);	
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('breakdown'					,$top_sub_sub_menu_options);
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('seasonality'				,$top_sub_sub_menu_options);


		//if($_SESSION['dreamboat_crew'] == 'yes' OR $_SESSION['user_id'] == ''){
			$top_sub_sub_menu_options = add_top_sub_sub_menu_option('shopify_comparison'	,$top_sub_sub_menu_options);
		//}

		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('sales_mix'					,$top_sub_sub_menu_options);
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('sales_mix_l'				,$top_sub_sub_menu_options);	//longditudinal	
	}
	$top_sub_menu_options = add_top_sub_menu_option('expenses'								,$top_sub_menu_options);	
	if(check_secondary_folder('expenses')){	
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('total'						,$top_sub_sub_menu_options);
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('adspend_vs_return'			,$top_sub_sub_menu_options);	
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('operating'					,$top_sub_sub_menu_options);	
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('wages'						,$top_sub_sub_menu_options);	

	}




	$top_sub_menu_options = add_top_sub_menu_option('worksheets'							,$top_sub_menu_options);
	if(check_secondary_folder('worksheets')){	
		$top_sub_sub_menu_options 		= add_top_sub_sub_menu_option('margins'				,$top_sub_sub_menu_options);
		//$top_sub_sub_menu_options 		= add_top_sub_sub_menu_option('margins'			,$top_sub_sub_menu_options);	
		//$top_sub_sub_menu_options 		= add_top_sub_sub_menu_option('margins'			,$top_sub_sub_menu_options);
		//$top_sub_sub_menu_options 		= add_top_sub_sub_menu_option('margins'			,$top_sub_sub_menu_options);
		
			//gross & per product
			//per product
	}
}
if(check_primary_folder('diagnostics')){
	$top_sub_menu_options = add_top_sub_menu_option('central'							,$top_sub_menu_options);

}

if(check_primary_folder('reporting')){
	$top_sub_menu_options = add_top_sub_menu_option('6_chart_A4'							,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('20_chart_A4'							,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('40_chart_A4'							,$top_sub_menu_options);	
	//$top_sub_menu_options = add_top_sub_menu_option('layout_2'			,$top_sub_menu_options);
}

//CR 26.03.21
//The thing here is that this whole section should be split into something like:
//Outreach:
//	Cold - sub_sub_menu
//	Gap filling - sub_sub_menu
//	Referrals - sub_sub_menu
//Products
//Settings
//	--this would required a bit of juggling which isn't critical today 


if(check_primary_folder('users')){
	//$top_sub_menu_options = add_top_sub_menu_option('initial_outreach'		, $top_sub_menu_options);
		/* This really should expand out into multiple things 
			Networks
			Cold calls & poentially 
			Then even advertising		
		*/



	//$top_sub_menu_options = add_top_sub_menu_option('gap_filling'			,$top_sub_menu_options);	
	/*
		This should probably even be followed up by gap filling
		this really isn't anything other than calls at this point in my head
		perhaps there is something about email/gap filling
		  .... some sort of network gap filling
		  ..... Chris added you to his dreamboat so that he can improve his productivity
		  .... help him, help yourself and help the country to do that too --- join.... that would be SICK and totally possible too

	*/


	//$top_sub_menu_options = add_top_sub_menu_option('sales'				,$top_sub_menu_options);
//	$top_sub_menu_options = add_top_sub_menu_option('owners'					,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('regular_users'				,$top_sub_menu_options);
	if($_SESSION['user_id'] == '1'){
		$top_sub_menu_options = add_top_sub_menu_option('display_controls'		,$top_sub_menu_options);
		$top_sub_menu_options = add_top_sub_menu_option('referral_tests'		,$top_sub_menu_options);		
	}
//	$top_sub_menu_options = add_top_sub_menu_option('details'					,$top_sub_menu_options);
	//if($_SESSION['user_id'] == '1'){
	//	$top_sub_menu_options = add_top_sub_menu_option('financials'				,$top_sub_menu_options);
	//	$top_sub_menu_options = add_top_sub_menu_option('savings'				,$top_sub_menu_options);
	//}
}
if(check_primary_folder('notifications')){
	$top_sub_menu_options = add_top_sub_menu_option('alerts'		,$top_sub_menu_options);	
//	$top_sub_menu_options = add_top_sub_menu_option('achievements'	,$top_sub_menu_options);	//hopefully we can add this back in with real meaning soon enough
}

if(check_primary_folder('account') &&
	check_secondary_folder('security') != 1 //this is just to ensure that when loggingin ///resetting password etc the submenu doesn't show up
	){
	$top_sub_menu_options = add_top_sub_menu_option('settings'		,$top_sub_menu_options);

	if($_SESSION['viewing_client_proven_referrer'] == 'yes'){
		$top_sub_menu_options = add_top_sub_menu_option('referrals'		,$top_sub_menu_options);
		}

	$top_sub_menu_options = add_top_sub_menu_option('payments'		,$top_sub_menu_options);
	$top_sub_menu_options = add_top_sub_menu_option('logout'		,$top_sub_menu_options);
	
	if(check_secondary_folder('settings')){
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('email_preferences'	,$top_sub_sub_menu_options);
		$top_sub_sub_menu_options = add_top_sub_sub_menu_option('work_schedule'		,$top_sub_sub_menu_options);
	//	$top_sub_sub_menu_options = add_top_sub_sub_menu_option('periodic_reviews'	,$top_sub_sub_menu_options);
		if($_SESSION['viewing_client_mental_health_only'] != 'yes'){
			$top_sub_sub_menu_options = add_top_sub_sub_menu_option('default_pages'	,$top_sub_sub_menu_options);	//we just set it as profile on every login see /account/variables/initial_setup.php	
		}

		//not sure what this was for
		//maybe for turning things on and off for clients/users
		/*
		if($_SESSION['dreamboat_crew'] == 'yes'){
			$top_sub_sub_menu_options = add_top_sub_sub_menu_option('main_nav_control'		,$top_sub_sub_menu_options);
		}
		*/
	}	
}

if(check_primary_folder('legal')){
	$top_sub_menu_options = add_top_sub_menu_option('privacy_policy'		,$top_sub_menu_options);
//	$top_sub_menu_options = add_top_sub_menu_option('pds'					,$top_sub_menu_options);// build this out in time
	$top_sub_menu_options = add_top_sub_menu_option('terms_and_conditions'	,$top_sub_menu_options);
}



if(check_primary_folder('knowledgebase')){
	$top_sub_menu_options = add_top_sub_menu_option('display'				,$top_sub_menu_options);
}


if(check_primary_folder('support')){
	$top_sub_menu_options = add_top_sub_menu_option('contact_us'		,$top_sub_menu_options);
	if($_SESSION['logged_in'] == 'yes'){
		$top_sub_menu_options = add_top_sub_menu_option('requests'		,$top_sub_menu_options);
	}
//	$top_sub_menu_options = add_top_sub_menu_option('tickets'		,$top_sub_menu_options);
//	$top_sub_menu_options = add_top_sub_menu_option('bug_id'		,$top_sub_menu_options);	
}

require $_SERVER['DOCUMENT_ROOT']."/components/sub_menus/display.php";
require $_SERVER['DOCUMENT_ROOT']."/components/sub_menus/sub_sub_menu/display.php";
?>