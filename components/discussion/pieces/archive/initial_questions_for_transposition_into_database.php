<?php
if(!isset($_SESSION)){session_start();}


echo "for saftey - this has been commented off - you can read but not load it";


/*

echo 'hi';

function insert_into($primary, $secondary, $tertiary, $prompt){

	$sql = "
	INSERT INTO `all_prompts` (`prompt_id`, `submission_process`, `primary_folder`, `secondary_folder`, `tertiary_folder`, `required_for_review`, `review_sequence_number`, `prompt`, `mark_those_in_current_active_list_resolved`, `standard_input`, `find_focus_submit`, `standard_submit`, `standard_submit_but_add_more`, `standard_submit_but_move_on`, `skip`, `blue_7_point_scale_on`, `blue_7_point_scale_reverse_on`, `blue_7_point_scale_orginal_scoring_on`, `7_point_scale_plus_3`, `7_point_scale_plus_2`, `7_point_scale_plus_1`, `7_point_scale_midpoint`, `7_point_scale_minus_1`, `7_point_scale_minus_2`, `7_point_scale_minus_3`, `prompt_2`, `prompt_3`, `place_in_sequence`, `textarea`, `privacy_section`, `progress_plus_why_how`, `zero_to_ten`, `wheelhouse_category`, `wheelhouse_group_dream`, `wheelhouse_group_goal`, `wheelhouse_group_milestone`, `wheelhouse_group_issue`, `wheelhouse_group_task`, `wheelhouse_list_dreams`, `wheelhouse_list_goals`, `wheelhouse_list_milestones`, `wheelhouse_list_issues`, `wheelhouse_list_tasks`, `list_of_people_in_network_or_add_later`, `11_point_scale_on`, `11_point_scale_plus_5`, `11_point_scale_plus_4`, `11_point_scale_plus_3`, `11_point_scale_plus_2`, `11_point_scale_plus_1`, `11_point_scale_midpoint`, `11_point_scale_minus_1`, `11_point_scale_minus_2`, `11_point_scale_minus_3`, `11_point_scale_minus_4`, `11_point_scale_minus_5`, `binary_selection_off`, `binary_selection_on`) VALUES (NULL, '', '".$primary."', '".$secondary."', '".$tertiary."', 'no', '', '".$prompt."', 'off', 'off', 'off', 'on', 'off', 'off', 'off', '', 'off', 'off', '', '', '', '', '', '', '', '', '', '', 'on', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', '', '', '', '', '', '', '', '', '', '', '', '', '')";
	
	echo $sql;	
require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/database/connection.php";	
mysqli_query($conn, $sql);
}






$_GET['primary_folder'] = 'profile';
	$_GET['secondary_folder'] = 'wellbeing';
		$_GET['tertiary_folder']	= 'mood';
			$_SESSION['prompt'] = "How are you right now?"; 		
			$_SESSION['prompt'] = "What&#39;s making you happy?";
			$_SESSION['prompt'] = "What&#39;s making you upset?";
			$_SESSION['prompt'] = "Are you feeling pretty consistent?";
			$_SESSION['prompt'] = "Are you in a good place?";
			$_SESSION['prompt_bottom'] = "Discuss these to better optimise your mood...";
			
			
		$_GET['tertiary_folder']	= 'stress';
			$_SESSION['prompt'] = "How are your stress levels right now?";
			$_SESSION['prompt'] = "Is it always clear what needs to be done?";
			$_SESSION['prompt'] = "Are you sleeping well?";
			$_SESSION['prompt'] = "Do you feel scattered or calm and in control?";
			$_SESSION['prompt'] = "Are you able to actively look after yourself?";
			$_SESSION['prompt_bottom'] = "Discuss these to start better managing your stress...";
			
		
		$_GET['tertiary_folder']	= 'confidence';
			$_SESSION['prompt'] = "How is your confidence right now?";
			$_SESSION['prompt'] = "What&#39;s helping your confidence right now?";
			$_SESSION['prompt'] = "What if anything is hindering it?";
			$_SESSION['prompt'] = "How can you improve it in a healthy way?";
			$_SESSION['prompt'] = "So what&#39;s next then?";
			$_SESSION['prompt_bottom'] = "Discuss these questions to improve your confidence...";
					
		
		
		
		
		
		
		
		$_GET['tertiary_folder']	= 'energy';
			$_SESSION['prompt'] = "How are your energy levels right now?";
			$_SESSION['prompt'] = "What&#39;s helping or hindering your energy right now?";
			$_SESSION['prompt'] = "Do you have decent balance?";
			$_SESSION['prompt'] = "Are you able to look after yourself well?";
			$_SESSION['prompt'] = "How can you get more healthy, sustainable energy?";
			$_SESSION['prompt_bottom'] = "Discuss these questions to improve your energy levels...";
			
		
		$_GET['tertiary_folder']	= 'health';
			$_SESSION['prompt'] = "How is your health in general right now?";
			$_SESSION['prompt'] = "What&#39;s going well, what&#39;s not going so well?";
			$_SESSION['prompt'] = "Are there any issues really impacting your performance?";
			$_SESSION['prompt'] = "How can you start to improve your general health?";
			$_SESSION['prompt'] = "Where is best to start?";
			$_SESSION['prompt_bottom'] = "Discuss these through to improve your health...";
			
		
	$_GET['secondary_folder'] = 'flow';
		$_GET['tertiary_folder']	= 'focus';
			$_SESSION['prompt'] = "What&#39;s been happening?";
			$_SESSION['prompt'] = "What are you trying to achieve?";
			$_SESSION['prompt'] = "What&#39;s stopping you?";
			$_SESSION['prompt'] = "Are you missing something?";
			$_SESSION['prompt'] = "What can you do to keep moving right now?";
			$_SESSION['prompt_bottom'] = "Discuss these questions to find focus...";
			
	
		$_GET['tertiary_folder']	= 'think';
			$_SESSION['prompt'] = "What are all the things going through your mind?";
			$_SESSION['prompt'] = "What really matters?";
			$_SESSION['prompt'] = "What is most important to tackle now?";
			$_SESSION['prompt'] = "How can you do something about it right now?";
			$_SESSION['prompt'] = "Is there anything else really bugging you?";
			$_SESSION['prompt_bottom'] = "Discuss these questions to think clearly...";
			
			
		$_GET['tertiary_folder']	= 'plan';
			$_SESSION['prompt'] = "What&#39;s coming up?";
			$_SESSION['prompt'] = "What does the near future look like?";
			$_SESSION['prompt'] = "Is there anything concerning you?";
			$_SESSION['prompt'] = "How can you address any problems?";
			$_SESSION['prompt'] = "What&#39s most important going forward now?";
			$_SESSION['prompt_bottom'] = "Discuss these questions to plan ahead...";
			
		
		$_GET['tertiary_folder']	= 'vent';
			$_SESSION['prompt'] = "What going on?";
			$_SESSION['prompt'] = "How are you feeling?";
			$_SESSION['prompt'] = "What can you do about it?";
			$_SESSION['prompt'] = "Is it something you must tackle?";
			$_SESSION['prompt'] = "So what are you going to do now?";
			$_SESSION['prompt_bottom'] = "Discuss these questions to clear your head...";
			
			
		$_GET['tertiary_folder']	= 'dream';
			$_SESSION['prompt'] = "What does the future hold?";
			$_SESSION['prompt'] = "What does it look like?";
			$_SESSION['prompt'] = "What is in your way?";
			$_SESSION['prompt'] = "When will it happen?";
			$_SESSION['prompt'] = "So what are you going to do now?";
			$_SESSION['prompt_bottom'] = "Discuss these questions to see the future...";
			
			
		$_GET['tertiary_folder']	= 'reflect';
			$_SESSION['prompt'] = "What do you want to reflect about?";
			$_SESSION['prompt'] = "Where have you come from?";
			$_SESSION['prompt'] = "What have you acheived?";
			$_SESSION['prompt'] = "What has changed?";
			$_SESSION['prompt'] = "How are things better now?";
			$_SESSION['prompt'] = "And what&#39;s the future going to hold now?";
						
	
	$_GET['secondary_folder'] = 'progress';
		$_GET['tertiary_folder']	= 'item';
			$_SESSION['prompt'] = "Add notes about this prorgess...";
			$_SESSION['prompt'] = "How is it going?";
			$_SESSION['prompt'] = "What has happened since the last update?";
			$_SESSION['prompt'] = "How important is it now?";
			$_SESSION['prompt'] = "What needs to be done now?";		
			$_SESSION['prompt'] = "";		
		
		$_GET['tertiary_folder'] = '';	
			$_SESSION['prompt'] = "What progress have you made lately?";
			$_SESSION['prompt'] = "How do you feel things are going?";
			$_SESSION['prompt'] = "What are you proud of?";
			$_SESSION['prompt'] = "What could be better?";
			$_SESSION['prompt'] = "What major changes and achievements have happened?";
			$_SESSION['prompt_bottom'] = "Log your progress to keep moving forward...";
		
			
		

$_GET['primary_folder'] = 'business';
	$_GET['secondary_folder'] = 'products';
		$_GET['tertiary_folder'] = 'item';
			$_SESSION['prompt'] = "Add notes about this product...";
			$_SESSION['prompt'] = "How great is it for the business?";
			$_SESSION['prompt'] = "What are you currently charging (and want to charge)?";
			$_SESSION['prompt'] = "How is the delivery of it going?";
			$_SESSION['prompt'] = "What can/must be improved?";
			$_SESSION['prompt_bottom'] = "Discuss to optimise your product delivery...";		
		
		$_GET['tertiary_folder'] = '';
			$_SESSION['prompt'] = "How are your products performing right now?";
			$_SESSION['prompt'] = "Do they feel like a good market fit??";
			$_SESSION['prompt'] = "What&#39;s selling well?";
			$_SESSION['prompt'] = "What&#39;s not selling so well?";
			$_SESSION['prompt'] = "How could things be better?";
			$_SESSION['prompt_bottom'] = "Discuss to optimise your products...";
		
	
		
	$_GET['secondary_folder'] = 'services';
		$_GET['tertiary_folder'] = 'item';
			$_SESSION['prompt'] = "Add notes about this service...";
			$_SESSION['prompt'] = "How great is it for the business?";
			$_SESSION['prompt'] = "What are you currently charging (and want to charge)?";
			$_SESSION['prompt'] = "How is the delivery of it going?";
			$_SESSION['prompt'] = "What can/must be improved?";
			$_SESSION['prompt_bottom'] = "Discuss to optimise your service delivery...";			
		
		$_GET['tertiary_folder'] = '';	
			$_SESSION['prompt'] = "How are your services going right now?";
			$_SESSION['prompt'] = "What&#39;s easy to deliver?";
			$_SESSION['prompt'] = "What&#39;s secretly killing you?";
			$_SESSION['prompt'] = "What structure would be better?";
			$_SESSION['prompt'] = "How can you delegate things be better?";
			$_SESSION['prompt_bottom'] = "Discuss to optimise your services...";
		
	


$_GET['primary_folder'] = 'network';
	$_GET['secondary_folder'] = 'people';
		$_GET['tertiary_folder'] = 'item';
			$_SESSION['prompt'] = "How are you going with this person right now?";
			$_SESSION['prompt'] = "How the relationship working for you?";
			$_SESSION['prompt'] = "How much work is it taking to have a good relationship with them?";
			$_SESSION['prompt'] = "What are the drawbacks?";
			$_SESSION['prompt'] = "How could things be better?";
			$_SESSION['prompt_bottom'] = "Discuss to optimise your engagement with this person...";
		
		$_GET['tertiary_folder'] = '';
			$_SESSION['prompt'] = "Who are you engaging with most right now?";
			$_SESSION['prompt'] = "Who is best for your business now?";
			$_SESSION['prompt'] = "Who if any are just going to be friends?";
			$_SESSION['prompt'] = "What other patterns are you seeing with these people?";
			$_SESSION['prompt'] = "Can you tighten your target market definition now?";
			$_SESSION['prompt_bottom'] = "Discuss to optimise your productivity...";		
		
	
	$_GET['secondary_folder'] = 'businesses';
		$_GET['tertiary_folder'] = 'item';
			$_SESSION['prompt'] = "How are you going with this business right now?";
			$_SESSION['prompt'] = "What work is there to be done here?";
			$_SESSION['prompt'] = "How ideal will this business be for your business?";
			$_SESSION['prompt'] = "Is continuing with them worth it?";
			$_SESSION['prompt'] = "How could things be better?";
			$_SESSION['prompt_bottom'] = "Discuss to optimise make the most from this business...";
		
		$_GET['tertiary_folder'] = '';
			$_SESSION['prompt'] = "What businesses are you engaging with most right now?";
			$_SESSION['prompt'] = "How are you finding that engagement?";
			$_SESSION['prompt'] = "What patterns are you seeing within these businesses?";
			$_SESSION['prompt'] = "Which are most beneficial for your business?";
			$_SESSION['prompt'] = "Can you tighten your target market definition now?";
			$_SESSION['prompt_bottom'] = "Discuss to optimise your productivity...";		
		
		
	$_GET['secondary_folder'] = 'groups';
		$_GET['tertiary_folder'] = 'item';
			$_SESSION['prompt'] = "How are you going with this group right now?";
			$_SESSION['prompt'] = "How is it helping you?";
			$_SESSION['prompt'] = "How much work is it taking to have a good relationship with it?";
			$_SESSION['prompt'] = "What are the drawbacks?";
			$_SESSION['prompt'] = "How could things be better?";
			$_SESSION['prompt_bottom'] = "Discuss to optimise your engagement with this group...";
		
		$_GET['tertiary_folder'] = '';
			$_SESSION['prompt'] = "What communities are you finding helpful right now?";
			$_SESSION['prompt'] = "Where is your time best spent?";
			$_SESSION['prompt'] = "Where is your time probably being wasted?";
			$_SESSION['prompt'] = "Where should you double down your efforts?";
			$_SESSION['prompt'] = "Who in these groups do you need to target?";
			$_SESSION['prompt_bottom'] = "Discuss to optimise your productivity...";		
		

			

$_GET['primary_folder'] = 'biz_dev';
	$_GET['secondary_folder'] = 'events';
		$_GET['tertiary_folder'] = 'item';
			$_SESSION['prompt'] = "How did this event go?";
			$_SESSION['prompt'] = "What did you gain?";
			$_SESSION['prompt'] = "What successes did you have?";
			$_SESSION['prompt'] = "What did it cost you in time and money?";
			$_SESSION['prompt'] = "How could things be better going forward now?";
			$_SESSION['prompt_bottom'] = "Discuss to optimise your future event success...";
		
		$_GET['tertiary_folder'] = '';
			$_SESSION['prompt'] = "How are your events going at the moment?";
			$_SESSION['prompt'] = "What are your current goals?";
			$_SESSION['prompt'] = "What events are you targeting?";
			$_SESSION['prompt'] = "Are you seeing the rewards?";
			$_SESSION['prompt'] = "How can you improve your events strategy?";
			$_SESSION['prompt_bottom'] = "Discuss to optimise your events strategy...";		
		
	
	$_GET['secondary_folder'] = 'one_to_ones';
		$_GET['tertiary_folder'] = 'item';		
			$_SESSION['prompt'] = "Add notes about this one to one...";
			$_SESSION['prompt'] = "How did it go?";
			$_SESSION['prompt'] = "How should we categorise this person now then?";
			$_SESSION['prompt'] = "What&#39;s the plan going forward now?";
			$_SESSION['prompt'] = "What have you learnt for the future?";
			$_SESSION['prompt_bottom'] = "Discuss these through to improve your sales...";		
		
		$_GET['tertiary_folder'] = '';	
			$_SESSION['prompt'] = "How many one to ones have you had recently?";
			$_SESSION['prompt'] = "What is your current one to one goal?";
			$_SESSION['prompt'] = "Who are you meeting with?";
			$_SESSION['prompt'] = "What could be going better?";
			$_SESSION['prompt'] = "Where should you be focussing now then?";
			$_SESSION['prompt_bottom'] = "Discuss these through to improve your BD work...";
		
	
	$_GET['secondary_folder'] = 'referrers';
		$_GET['tertiary_folder'] = 'item';		
			$_SESSION['prompt'] = "How is this referrer going right now?";
			$_SESSION['prompt'] = "Are they delivering for you right now?";
			$_SESSION['prompt'] = "Are they taking up lots of time or money?";
			$_SESSION['prompt'] = "Are they worth focussing on?";
			$_SESSION['prompt'] = "What action should you take?";
			$_SESSION['prompt_bottom'] = "Discuss these through to improve your referrals...";		
		
		$_GET['tertiary_folder'] = '';	
			$_SESSION['prompt'] = "How are your referrers helping you at the moment?";		//insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How much are they contributing to your organisation?";		//insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What sub-set are working best for you?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How can we improve their effectiveness?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How much time should we allocate to this?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt_bottom'] = "Discuss these to improve your referral network...";				
		
			

$_GET['primary_folder'] = 'sales';
	$_GET['secondary_folder'] = 'new_potentials';
		$_GET['tertiary_folder'] = 'item';		
			$_SESSION['prompt'] = "Add notes about this potential sale...";
			$_SESSION['prompt'] = "What is the next touchpoint?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How confident are you about it?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How can you make more from it?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What&#39;s the plan?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt_bottom'] = "Discuss these through to improve your conversion rate...";		
		
		$_GET['tertiary_folder'] = '';	
			$_SESSION['prompt'] = "How are your initial sales going right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Are you converting well?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Why are you missing some conversions?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What if anything should change?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Where is best to start now then?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt_bottom'] = "Discuss these through to improve your sales...";
		
			
	$_GET['secondary_folder'] = 'potential_upsells';
		$_GET['tertiary_folder'] = 'item';		
			$_SESSION['prompt'] = "Add notes about this upsell...";
			$_SESSION['prompt'] = "Are you doing it / have you done it?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How is it going?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How can you make more from it?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What&#39;s the plan?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt_bottom'] = "Discuss these through to improve your sales...";		
		
		$_GET['tertiary_folder'] = '';	
			$_SESSION['prompt'] = "How are your upsells going?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What other opportunities exist right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Are you getting through them?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What if anything should change?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Where is best to start now then?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt_bottom'] = "Discuss these through to improve your sales...";
		
	
	$_GET['secondary_folder'] = 'recurring_sales';
		$_GET['tertiary_folder'] = 'item';		
			$_SESSION['prompt'] = "Add notes about this sale...";
			$_SESSION['prompt'] = "Are you doing it / have you done it?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How is it going?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How can you make more from it?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What&#39;s the plan?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt_bottom'] = "Discuss these through to improve your sales...";		
		
		$_GET['tertiary_folder'] = '';	
			$_SESSION['prompt'] = "How are your recurring sales going right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Are you maintaining them well?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Why are you losing any and why?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What if anything should change?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Where is best to start now then?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt_bottom'] = "Discuss these through to improve your recurring sales...";
		
	
	$_GET['secondary_folder'] = 'all';
		$_GET['tertiary_folder'] = 'item';		
			$_SESSION['prompt'] = "Add notes about this sale...";
			$_SESSION['prompt'] = "Are you doing it / have you done it?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How is it going?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How can you make more from it?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What&#39;s the plan?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt_bottom'] = "Discuss these through to improve your sales...";		
		
		$_GET['tertiary_folder'] = '';	
			$_SESSION['prompt'] = "How are your sales going right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Are you consistently improving?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Where do you want them to be?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What if anything should change?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Where is best to start now then?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt_bottom'] = "Discuss these through to improve your sales...";
		
	


$_GET['primary_folder'] = 'marketing';
	$_GET['secondary_folder'] = 'target_markets';
		$_GET['tertiary_folder'] = 'item';
			$_SESSION['prompt'] = "Add notes about this target market...";
			$_SESSION['prompt'] = "How rewarding is it for you right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How important to your business is this target market right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Should you be allocating more attention to it going forward?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What can you do to optimise the profitability of this target market?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt_bottom'] = "Discuss these questions to improve your marketing...";	
		
		$_GET['tertiary_folder'] = '';	
			$_SESSION['prompt'] = "How are your target markets working right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Do you need to edit them?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Do you need to reprioritise them?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What targeting gaps orWhat do you need to be achieving right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "So how can you refocus your marketing?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt_bottom'] = "Discuss these through to improve your marketing...";
		
	
	$_GET['secondary_folder'] = 'channels';
		$_GET['tertiary_folder'] = 'item';
			$_SESSION['prompt'] = "Add notes about this channel...";
			$_SESSION['prompt'] = "Is it working as desired right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What results and rewards have been achieved?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "All things considered do we double down, maintain or remove this channel?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "So how can you refocus this channel?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt_bottom'] = "Discuss these questions to improve your marketing...";	
		
		$_GET['tertiary_folder'] = '';	
			$_SESSION['prompt'] = "How is your marketing going right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Which channels are going really well?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Which channels are lagging?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What do you need to be achieving right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "So how can you refocus your marketing?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt_bottom'] = "Discuss these through to improve your marketing...";
		
	
	$_GET['secondary_folder'] = 'promotions';
		$_GET['tertiary_folder'] = 'item';
			$_SESSION['prompt'] = "Add notes about this promotion...";
			$_SESSION['prompt'] = "Is it working as desired right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What results and rewards have been achieved?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "All things considered do we double down, maintain or remove this activity?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "So how can you refocus this activity?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt_bottom'] = "Discuss these questions to improve your marketing...";	
		
		$_GET['tertiary_folder'] = '';	
			$_SESSION['prompt'] = "How are your promotions going right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Could your targeting be better?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Could your messaging be clearer?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How many leads to you really need?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "So how can you refocus your marketing?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt_bottom'] = "Discuss these through to improve your marketing...";
		
	
	$_GET['secondary_folder'] = 'angles';
		$_GET['tertiary_folder'] = 'item';
			$_SESSION['prompt'] = "Add notes about this marketing angle...";
			$_SESSION['prompt'] = "Is it working as desired right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What results and rewards have been achieved?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "All things considered do we double down, maintain or remove this marketing angle?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "";
			$_SESSION['prompt_bottom'] = "Discuss these questions to improve your marketing...";	
		
		$_GET['tertiary_folder'] = '';	
			$_SESSION['prompt'] = "How are your marketing angles going right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Could your messaging be better?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What should you be prioritising across the board?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What other options do you have?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "";
			$_SESSION['prompt_bottom'] = "Discuss these through to improve your marketing...";
		
		
	
	
	
	/*	
	$_GET['secondary_folder'] = 'tasks';
		$_GET['tertiary_folder'] = 'item';
			$_SESSION['prompt'] = "Add notes about this marketing task...";
			$_SESSION['prompt'] = "Are you getting it done?";
			$_SESSION['prompt'] = "How important does it seem right now?";
			$_SESSION['prompt'] = "All things considered do we double down, maintain or remove this activity?";
			$_SESSION['prompt'] = "So how can you refocus this activity?";
			$_SESSION['prompt_bottom'] = "Discuss these questions to improve your marketing...";	
		
		$_GET['tertiary_folder'] = '';	
			$_SESSION['prompt'] = "How are your marketing tasks going right now?";
			$_SESSION['prompt'] = "Could you be focussing your energy better?";
			$_SESSION['prompt'] = "What&#39;s most important right now?";
			$_SESSION['prompt'] = "What needs to be done in the next week or so?";
			$_SESSION['prompt'] = "Do you need to do it all yourself?";
			$_SESSION['prompt_bottom'] = "Discuss these through to improve your marketing...";
		
	
	*/		
	

/*
$_GET['primary_folder'] = 'management';
	$_GET['secondary_folder'] = 'assets';
		$_GET['tertiary_folder'] = 'item';
			$_SESSION['prompt'] = "Add notes about this asset...";
			$_SESSION['prompt'] = "How great is it for the business?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What are you gaining from using it?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How is the usage of it going?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How can it be improved?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt_bottom'] = "Discuss to optimise your business systems...";		
		
		$_GET['tertiary_folder'] = '';
			$_SESSION['prompt'] = "How are your assets performing right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Do they feel like they are a good fit for your needs still?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What&#39;s going well with them?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What&#39;s not going so well?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How could things be better?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt_bottom'] = "Discuss to optimise your asset values...";
		
	
	$_GET['secondary_folder'] = 'systems';
		$_GET['tertiary_folder'] = 'item';
			$_SESSION['prompt'] = "Add notes about this system...";
			$_SESSION['prompt'] = "How great is it for the business?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What are you gaining from using it?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How is the usage of it going?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How can it be improved?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt_bottom'] = "Discuss to optimise your business systems...";		
		
		$_GET['tertiary_folder'] = '';
			$_SESSION['prompt'] = "How are your support systems performing right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Do they feel like they are a good fit for your needs still?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What&#39;s going well with them?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What&#39;s not going so well?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How could things be better?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt_bottom'] = "Discuss to optimise your business systems...";
		
	
	$_GET['secondary_folder'] = 'staff';
		$_GET['tertiary_folder'] = 'item';		
			$_SESSION['prompt'] = "Add notes about this staff member...";
			$_SESSION['prompt'] = "How are they performing right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Do you trust them?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Where do you think they could improve?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How much more work can they handle right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt_bottom'] = "Discuss this staff member to start improving their performance...";
		
		$_GET['tertiary_folder'] = '';	
			$_SESSION['prompt'] = "How are your staff going now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Who&#39;s crushing it?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Who can you trust most?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What gaps are appearing?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Where do you think they could improve?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt_bottom'] = "Answer these questions to the function of your staff...";
		
	
	$_GET['secondary_folder'] = 'other';
		$_GET['tertiary_folder'] = 'item';		
			$_SESSION['prompt'] = "Add notes about this management topic...";
			$_SESSION['prompt'] = "How is it going?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What concerns do you have?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "";
			$_SESSION['prompt'] = "";
			$_SESSION['prompt_bottom'] = "Discuss this topic to optimise your management of it...";
		
		$_GET['tertiary_folder'] = '';	
			$_SESSION['prompt'] = "How is your management going right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What are you behind on?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What issues are currently outstanding?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Where are you vulnerable?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "And what tasks must you get done?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt_bottom'] = "Answer these questions to tighten your management...";
		
	

	$_GET['secondary_folder'] = 'clients';
		$singular = substr($_SESSION['viewing_client_what_clients_are_called'], 0, -1);
		$plural = $_SESSION['viewing_client_what_clients_are_called'];	
	
		$_GET['tertiary_folder'] = 'item';
			$_SESSION['prompt'] = "Add notes about this $singular...";
			$_SESSION['prompt'] = "How is this $singular going?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How happy are they?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "When did you speak to them last?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How good are they for the business direction?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt_bottom'] = "How can they fit the business better/help the business more?";
		
		$_GET['tertiary_folder'] = '';	
			$_SESSION['prompt'] = "How are your $plural going right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Is anyone lagging?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Who&#39;s causing you more stress than you deserve?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How can we help them more?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What else do they need?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt_bottom'] = "Discuss these questions to improve your $singular relationships...";
		
			



$_GET['primary_folder'] = 'tracking';
	$_GET['secondary_folder'] = 'kpis';
		$_SESSION['prompt'] = "How are we progressing?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
		$_SESSION['prompt'] = "Do you feel things are on track right now?";					insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);	
		$_SESSION['prompt'] = "If not, why not and how can we fix it?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
		$_SESSION['prompt'] = "What is required to make it happen?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
		$_SESSION['prompt'] = "How can we ensure we acheive it in good time?";					insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
		$_SESSION['prompt'] = "";	
	
	$_GET['secondary_folder'] = 'revenue_and_profit';
		$_SESSION['prompt'] = "How are we progressing?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
		$_SESSION['prompt'] = "Do you feel things are on track right now?";					insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);	
		$_SESSION['prompt'] = "If not, why not and how can we fix it?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
		$_SESSION['prompt'] = "What is required to make it happen?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
		$_SESSION['prompt'] = "How can we ensure we acheive it in good time?";					insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
		$_SESSION['prompt'] = "";	
	
	$_GET['secondary_folder'] = 'revenue_and_income';
		$_SESSION['prompt'] = "How are we progressing?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
		$_SESSION['prompt'] = "Do you feel things are on track right now?";					insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);	
		$_SESSION['prompt'] = "If not, why not and how can we fix it?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
		$_SESSION['prompt'] = "What is required to make it happen?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
		$_SESSION['prompt'] = "How can we ensure we acheive it on time?";					insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
		$_SESSION['prompt'] = "";		
	
	$_GET['secondary_folder'] = 'income_and_hours';	
		$_SESSION['prompt'] = "How are we progressing?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
		$_SESSION['prompt'] = "Do you feel things are on track right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);		
		$_SESSION['prompt'] = "If not, why not and how can we fix it?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
		$_SESSION['prompt'] = "What is required to make it happen?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
		$_SESSION['prompt'] = "How can we ensure we acheive it in good time?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
		$_SESSION['prompt'] = "";		
	
	$_GET['secondary_folder'] = 'productivity';	
		$_SESSION['prompt'] = "How are we progressing?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
		$_SESSION['prompt'] = "Do you feel things are on track right now?";					insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);	
		$_SESSION['prompt'] = "If not, why not and how can we fix it?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
		$_SESSION['prompt'] = "What is required to make it happen?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
		$_SESSION['prompt'] = "How can we ensure we acheive it in good time?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
		$_SESSION['prompt'] = "";		
	


$_GET['primary_folder'] = 'improvements';
	$_GET['secondary_folder'] = 'planned';
		$_GET['tertiary_folder'] = 'item';
			$_SESSION['prompt'] = "How can you define this planned improvement better right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What needs to be acheived?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Why does this improvement matter so much?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What will follow it?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "And when can it start?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt_bottom'] = "Discuss these plans to structure the improvement better...";		
		
		$_GET['tertiary_folder'] = '';	
			$_SESSION['prompt'] = "How are your planned improvements looking right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Is the order roughly correct?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Is anything missing?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What timeline adjustments are required?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What else is needed?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt_bottom'] = "Discuss these plans to structure the future better...";	
		
		
	$_GET['secondary_folder'] = 'completed';
		$_GET['tertiary_folder'] = 'item';
			$_SESSION['prompt'] = "Why are you looking back at this improvement?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What new ideas have you had?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Are you happy with how it went?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Do you want to do more similar to this now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What are you thinking about?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt_bottom'] = "Discuss this to maximise your general rate of improvement...";		
		
		$_GET['tertiary_folder'] = '';		
			$_SESSION['prompt'] = "Why are you looking back at these completed improvements?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How can you use them to keep improving now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What was most beneficial and why?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What else can you do now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "";
			$_SESSION['prompt_bottom'] = "Discuss your past improvements to move forward better now...";

		
	
	$_GET['secondary_folder'] = 'underway';
		$_GET['tertiary_folder'] = 'item';
			$_SESSION['prompt'] = "How is this improvement going?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What&#39;s good, what&#39;s bad what&#39;s ugly?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How will things change once it&#39;s completed?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What if anything are you struggling with?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What else is needed?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt_bottom'] = "Discuss this to better implement this improvement...";		
		
		$_GET['tertiary_folder'] = '';		
			$_SESSION['prompt'] = "How are these improvements going?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Are you making decent progress?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Are there any stumbling blocks right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Do you think you&#39;ll successfully complete it soon?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "";
			$_SESSION['prompt_bottom'] = "Discuss your current improvements to keep them rolling...";
		
		

$_GET['primary_folder'] = 'time';
			$_SESSION['prompt'] = "Where is your time going?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Where are you losing time?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Where can you gain time?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How could it be better spent?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Is it all accounted for?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt_bottom'] = "Discuss to improve your time utilisation...";





$_GET['primary_folder'] = 'admin';
	$_GET['secondary_folder'] = 'general_notes';
		$_GET['tertiary_folder']	= 'item';
			$_SESSION['prompt'] = "What do you need to document on this topic?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What general comments come to mind?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What are they working on?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Where do you think its going?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Where could they improve?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What aren&#39;t you telling them?";					insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);		
		
		$_GET['tertiary_folder'] = '';
			$_SESSION['prompt'] = "How is this client going?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What general comments come to mind?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What are they working on?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Where do you think its going?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Where could they improve?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What aren&#39;t you telling them?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
		
	


	$_GET['secondary_folder'] = 'homework';
		$_GET['tertiary_folder']	= 'item';
			$_SESSION['prompt'] = "Add notes about this homework...";
			$_SESSION['prompt'] = "How is it going?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What is it leading to?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How important is it now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What needs to be done now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "";			
		
		$_GET['tertiary_folder'] = '';
			$_SESSION['prompt'] = "How are your little homework tasks going?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Are you getting through all of them?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What&#39;s else needs to happen?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "";
			$_SESSION['prompt'] = "";
			$_SESSION['prompt_bottom'] = "Discuss your homework to move forward faster...";
		
	
	$_GET['secondary_folder'] = 'future_questions';
		$_GET['tertiary_folder']	= 'item';
			$_SESSION['prompt'] = "What issues come to mind on this question?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Note down as much as possible so you don&#39;t need to remember it";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			
		
		$_GET['tertiary_folder'] = '';
			$_SESSION['prompt'] = "What issues do you see that are coming up?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How can they help this client?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What are you worried about for them?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
		
		
	
	
		




$_GET['primary_folder'] = 'wheelhouse';
	$_GET['secondary_folder'] = 'dreams';
		$_GET['tertiary_folder']	= 'item';
			$_SESSION['prompt'] = "Add notes about this dream...";
			$_SESSION['prompt'] = "How are we progressing?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Do you feel things are on track right now?";					insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);	
			$_SESSION['prompt'] = "If not, why not and how can we fix it?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What is required to make it happen?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How can we ensure we acheive it in good time?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
		
		$_GET['tertiary_folder'] = '';
			$_SESSION['prompt'] = "What dreams are you chasing at the moment?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Are they all stored here?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What priority are they for you?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How confident about achieving them are you?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What&#39;s most important to you right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "... and why?";		
			
	
	$_GET['secondary_folder'] = 'goals';
		$_GET['tertiary_folder']	= 'item';
			$_SESSION['prompt'] = "Add notes about this goal...";
			$_SESSION['prompt'] = "How are we progressing?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Do you feel things are on track right now?";					insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);	
			$_SESSION['prompt'] = "If not, why not and how can we fix it?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What is required to make it happen?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How can we ensure we acheive it in good time?";					insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);	
		
		$_GET['tertiary_folder'] = '';
			$_SESSION['prompt'] = "What goals are you focussed on right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Are they all stored here?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What priority are they for you?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How confident about achieving them are you?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What&#39;s most important to you right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "... and why?";	
		
	
	$_GET['secondary_folder'] = 'milestones';
		$_GET['tertiary_folder']	= 'item';
			$_SESSION['prompt'] = "Add notes about this milestone...";
			$_SESSION['prompt'] = "How are we progressing?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Do you feel things are on track right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);		
			$_SESSION['prompt'] = "If not, why not and how can we fix it?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What is required to make it happen?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How can we ensure we acheive it on time?";					insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);		
		
		$_GET['tertiary_folder'] = '';
			$_SESSION['prompt'] = "What milestones are you trying to achieve right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What do they need to add?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What sequencing issues are there?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What should you be prioritising?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What&#39;s most important to you right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "... and why?";	
		
	
	$_GET['secondary_folder'] = 'tasks';	
		$_GET['tertiary_folder']	= 'item';
			$_SESSION['prompt'] = "Add notes about this task...";
			$_SESSION['prompt'] = "How are we progressing?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Do you feel things are on track right now?";					insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);	
			$_SESSION['prompt'] = "If not, why not and how can we fix it?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What is required to make it happen?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How can we ensure we acheive it in good time?";					insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);	
		
		$_GET['tertiary_folder'] = '';
			$_SESSION['prompt'] = "What tasks are you trying to crush right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What do they need to add?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What should you be prioritising?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How can you progress faster?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What&#39;s most important to you right now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "... and why?";	
		
	
	$_GET['secondary_folder'] = 'issues';
		$_GET['tertiary_folder']	= 'item';
			$_SESSION['prompt'] = "Add notes about this issue...";
			$_SESSION['prompt'] = "How is it going?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What has happened since the last update?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How important is it now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What needs to be done now?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);		
			$_SESSION['prompt'] = "";		
		
		$_GET['tertiary_folder'] = '';	
		
			$_SESSION['prompts_useful_for_review'] = 5;
			$_SESSION['prompt'] = "What issues are you facing at the moment?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How are they impacting your right at this moment?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "What is your plan for them?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "How can you progress further if you remove an issue or two?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt'] = "Is there anything else really bugging you?";				insert_into($_GET['primary_folder'], $_GET['secondary_folder'], $_GET['tertiary_folder'], $_SESSION['prompt']);
			$_SESSION['prompt_bottom'] = "Discuss these questions to move faster...";
		
	



	


/*

$_GET['primary_folder'] = 'messages';
	$_SESSION['dreamboat_crew'] = 'yes';$to = 'client '.$_SESSION['viewing_client_first_name']."?";
	else{$to = 'Productivity Pilot '.$_SESSION['pilots_first_name']."?";				
		$_SESSION['prompt'] = "What do you want to say to your ".$to;
	$_SESSION['dreamboat_crew'] != 'yes';			
		$_SESSION['prompt'] = "Don&#39;t forget you can just call them too.";
		$_SESSION['prompt'] = "Their number is in the top right corner of your screen.";
	
	$_SESSION['prompt'] = "";
	$_SESSION['prompt'] = "";
	$_SESSION['prompt'] = "";


*/








?>