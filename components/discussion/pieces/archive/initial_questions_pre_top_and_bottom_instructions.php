<?php
if(!isset($_SESSION)){session_start();}

if('profile' == $_GET['primary_folder']){
	if('wellbeing' == $_GET['secondary_folder']){
		if('mood' == $_GET['tertiary_folder']){
			$_SESSION['prompt_1'] = "How are you right now?";
			$_SESSION['prompt_2'] = "What&#39;s making you happy?";
			$_SESSION['prompt_3'] = "What&#39;s making you upset?";
			$_SESSION['prompt_4'] = "Are you feeling pretty consistent?";
			$_SESSION['prompt_5'] = "Are you in a good place?";
			$_SESSION['prompt_6'] = "Discuss these to better optimise your mood...";
			}
			
		if('stress' == $_GET['tertiary_folder']){
			$_SESSION['prompt_1'] = "How are your stress levels right now?";
			$_SESSION['prompt_2'] = "Is it always clear what needs to be done?";
			$_SESSION['prompt_3'] = "Are you sleeping well?";
			$_SESSION['prompt_4'] = "Do you feel scattered or calm and in control?";
			$_SESSION['prompt_5'] = "Are you able to actively look after yourself?";
			$_SESSION['prompt_6'] = "Discuss these to start better managing your stress...";
			}
		
		if('energy' == $_GET['tertiary_folder']){
			$_SESSION['prompt_1'] = "How are your energy levels right now?";
			$_SESSION['prompt_2'] = "What&#39;s helping or hindering your energy right now?";
			$_SESSION['prompt_3'] = "Do you have decent balance?";
			$_SESSION['prompt_4'] = "Are you able to look after yourself well?";
			$_SESSION['prompt_5'] = "How can you get more healthy, sustainable energy?";
			$_SESSION['prompt_6'] = "Discuss these questions to improve your energy levels...";
			}
		
		if('health' == $_GET['tertiary_folder']){
			$_SESSION['prompt_1'] = "How is your health in general right now?";
			$_SESSION['prompt_2'] = "What&#39;s going well, what&#39;s not going so well?";
			$_SESSION['prompt_3'] = "Are there any issues really impacting your performance?";
			$_SESSION['prompt_4'] = "How can you start to improve your general health?";
			$_SESSION['prompt_5'] = "Where is best to start?";
			$_SESSION['prompt_6'] = "Discuss these through to improve your health...";
			}
	}	
	if('flow' == $_GET['secondary_folder']){
		if('focus' == $_GET['tertiary_folder']){
			$_SESSION['prompt_1'] = "What&#39;s been happening?";
			$_SESSION['prompt_2'] = "What are you trying to achieve?";
			$_SESSION['prompt_3'] = "What&#39;s stopping you?";
			$_SESSION['prompt_4'] = "Are you missing something?";
			$_SESSION['prompt_5'] = "What can you do to keep moving right now?";
			$_SESSION['prompt_6'] = "Discuss these questions to find focus...";
			}
	
		if('think' == $_GET['tertiary_folder']){
			$_SESSION['prompt_1'] = "What are all the things going through your mind?";
			$_SESSION['prompt_2'] = "What really matters?";
			$_SESSION['prompt_3'] = "What is most important to tackle now?";
			$_SESSION['prompt_4'] = "How can you do something about it right now?";
			$_SESSION['prompt_5'] = "Is there anything else really bugging you?";
			$_SESSION['prompt_6'] = "Discuss these questions to think clearly...";
			}
			
		if('plan' == $_GET['tertiary_folder']){
			$_SESSION['prompt_1'] = "What&#39;s coming up?";
			$_SESSION['prompt_2'] = "What does the near future look like?";
			$_SESSION['prompt_3'] = "Is there anything concerning you?";
			$_SESSION['prompt_4'] = "How can you address any problems?";
			$_SESSION['prompt_5'] = "What&#39s most important going forward now?";
			$_SESSION['prompt_6'] = "Discuss these questions to plan ahead...";
			}
		
		if('vent' == $_GET['tertiary_folder']){
			$_SESSION['prompt_1'] = "What going on?";
			$_SESSION['prompt_2'] = "How are you feeling?";
			$_SESSION['prompt_3'] = "What can you do about it?";
			$_SESSION['prompt_4'] = "Is it something you must tackle?";
			$_SESSION['prompt_5'] = "So what are you going to do now?";
			$_SESSION['prompt_6'] = "Discuss these questions to clear your head...";
			}
			
		if('dream' == $_GET['tertiary_folder']){
			$_SESSION['prompt_1'] = "What does the future hold?";
			$_SESSION['prompt_2'] = "What does it look like?";
			$_SESSION['prompt_3'] = "What is in your way?";
			$_SESSION['prompt_4'] = "When will it happen?";
			$_SESSION['prompt_5'] = "So what are you going to do now?";
			$_SESSION['prompt_6'] = "Discuss these questions to see the future...";
			}
			
		if('reflect' == $_GET['tertiary_folder']){
			$_SESSION['prompt_1'] = "What do you want to reflect about?";
			$_SESSION['prompt_2'] = "Where have you come from?";
			$_SESSION['prompt_3'] = "What have you acheived?";
			$_SESSION['prompt_4'] = "What has changed?";
			$_SESSION['prompt_5'] = "How are things better now?";
			$_SESSION['prompt_6'] = "And what&#39;s the future going to hold now?";
		}				
	}
	if('progress' == $_GET['secondary_folder']){
		if('item' == $_GET['tertiary_folder']){
			$_SESSION['prompt_1'] = "Add notes about this prorgess...";
			$_SESSION['prompt_2'] = "How is it going?";
			$_SESSION['prompt_3'] = "What has happened since the last update?";
			$_SESSION['prompt_4'] = "How important is it now?";
			$_SESSION['prompt_5'] = "What needs to be done now?";		
			$_SESSION['prompt_6'] = "";		
		}
		else{	
			$_SESSION['prompt_1'] = "What progress have you made lately?";
			$_SESSION['prompt_2'] = "How do you feel things are going?";
			$_SESSION['prompt_3'] = "What are you proud of?";
			$_SESSION['prompt_4'] = "What could be better?";
			$_SESSION['prompt_5'] = "What major changes and achievements have happened?";
			$_SESSION['prompt_6'] = "Log your progress to keep moving forward...";
		}
	}		
}		

if('business' == $_GET['primary_folder']){
	if($_GET['secondary_folder'] == 'products'){
		if($_GET['tertiary_folder'] == 'item'){
			$_SESSION['prompt_1'] = "Add notes about this product...";
			$_SESSION['prompt_2'] = "How great is it for the business?";
			$_SESSION['prompt_3'] = "What are you currently charging (and want to charge)?";
			$_SESSION['prompt_4'] = "How is the delivery of it going?";
			$_SESSION['prompt_5'] = "What can/must be improved?";
			$_SESSION['prompt_6'] = "Discuss to optimise your product delivery...";		
		}
		else{
			$_SESSION['prompt_1'] = "How are your products performing right now?";
			$_SESSION['prompt_2'] = "Do they feel like a good market fit??";
			$_SESSION['prompt_3'] = "What&#39;s selling well?";
			$_SESSION['prompt_4'] = "What&#39;s not selling so well?";
			$_SESSION['prompt_5'] = "How could things be better?";
			$_SESSION['prompt_6'] = "Discuss to optimise your products...";
		}
	}
		
	if($_GET['secondary_folder'] == 'services'){
		if($_GET['tertiary_folder'] == 'item'){
			$_SESSION['prompt_1'] = "Add notes about this service...";
			$_SESSION['prompt_2'] = "How great is it for the business?";
			$_SESSION['prompt_3'] = "What are you currently charging (and want to charge)?";
			$_SESSION['prompt_4'] = "How is the delivery of it going?";
			$_SESSION['prompt_5'] = "What can/must be improved?";
			$_SESSION['prompt_6'] = "Discuss to optimise your service delivery...";			
		}
		else{	
			$_SESSION['prompt_1'] = "How are your services going right now?";
			$_SESSION['prompt_2'] = "What&#39;s easy to deliver?";
			$_SESSION['prompt_3'] = "What&#39;s secretly killing you?";
			$_SESSION['prompt_4'] = "What structure would be better?";
			$_SESSION['prompt_5'] = "How can you delegate things be better?";
			$_SESSION['prompt_6'] = "Discuss to optimise your services...";
		}
	}
}

if('network' == $_GET['primary_folder']){
	if($_GET['secondary_folder'] == 'people'){
		if($_GET['tertiary_folder'] == 'item'){
			$_SESSION['prompt_1'] = "How are you going with this person right now?";
			$_SESSION['prompt_2'] = "How the relationship working for you?";
			$_SESSION['prompt_3'] = "How much work is it taking to have a good relationship with them?";
			$_SESSION['prompt_4'] = "What are the drawbacks?";
			$_SESSION['prompt_5'] = "How could things be better?";
			$_SESSION['prompt_6'] = "Discuss to optimise your engagement with this person...";
		}
		else{
			$_SESSION['prompt_1'] = "Who are you engaging with most right now?";
			$_SESSION['prompt_2'] = "Who is best for your business now?";
			$_SESSION['prompt_3'] = "Who if any are just going to be friends?";
			$_SESSION['prompt_4'] = "What other patterns are you seeing with these people?";
			$_SESSION['prompt_5'] = "Can you tighten your target market definition now?";
			$_SESSION['prompt_6'] = "Discuss to optimise your productivity...";		
		}
	}
	if($_GET['secondary_folder'] == 'businesses'){
		if($_GET['tertiary_folder'] == 'item'){
			$_SESSION['prompt_1'] = "How are you going with this business right now?";
			$_SESSION['prompt_2'] = "What work is there to be done here?";
			$_SESSION['prompt_3'] = "How ideal will this business be for your business?";
			$_SESSION['prompt_4'] = "Is continuing with them worth it?";
			$_SESSION['prompt_5'] = "How could things be better?";
			$_SESSION['prompt_6'] = "Discuss to optimise make the most from this business...";
		}
		else{
			$_SESSION['prompt_1'] = "What businesses are you engaging with most right now?";
			$_SESSION['prompt_2'] = "How are you finding that engagement?";
			$_SESSION['prompt_3'] = "What patterns are you seeing within these businesses?";
			$_SESSION['prompt_4'] = "Which are most beneficial for your business?";
			$_SESSION['prompt_5'] = "Can you tighten your target market definition now?";
			$_SESSION['prompt_6'] = "Discuss to optimise your productivity...";		
		}
	}	
	if($_GET['secondary_folder'] == 'groups'){
		if($_GET['tertiary_folder'] == 'item'){
			$_SESSION['prompt_1'] = "How are you going with this group right now?";
			$_SESSION['prompt_2'] = "How is it helping you?";
			$_SESSION['prompt_3'] = "How much work is it taking to have a good relationship with it?";
			$_SESSION['prompt_4'] = "What are the drawbacks?";
			$_SESSION['prompt_5'] = "How could things be better?";
			$_SESSION['prompt_6'] = "Discuss to optimise your engagement with this group...";
		}
		else{
			$_SESSION['prompt_1'] = "What communities are you finding helpful right now?";
			$_SESSION['prompt_2'] = "Where is your time best spent?";
			$_SESSION['prompt_3'] = "Where is your time probably being wasted?";
			$_SESSION['prompt_4'] = "Where should you double down your efforts?";
			$_SESSION['prompt_5'] = "Who in these groups do you need to target?";
			$_SESSION['prompt_6'] = "Discuss to optimise your productivity...";		
		}

	}		
}
if($_GET['primary_folder'] == 'biz_dev'){
	if($_GET['secondary_folder'] == 'events'){
		if($_GET['tertiary_folder'] == 'item'){
			$_SESSION['prompt_1'] = "How did this event go?";
			$_SESSION['prompt_2'] = "What did you gain?";
			$_SESSION['prompt_3'] = "What successes did you have?";
			$_SESSION['prompt_4'] = "What did it cost you in time and money?";
			$_SESSION['prompt_5'] = "How could things be better going forward now?";
			$_SESSION['prompt_6'] = "Discuss to optimise your future event success...";
		}
		else{
			$_SESSION['prompt_1'] = "How are your events going at the moment?";
			$_SESSION['prompt_2'] = "What are your current goals?";
			$_SESSION['prompt_3'] = "What events are you targeting?";
			$_SESSION['prompt_4'] = "Are you seeing the rewards?";
			$_SESSION['prompt_5'] = "How can you improve your events strategy?";
			$_SESSION['prompt_6'] = "Discuss to optimise your events strategy...";		
		}
	}
	if($_GET['secondary_folder'] == 'one_to_ones'){
		if($_GET['tertiary_folder'] == 'item'){		
			$_SESSION['prompt_1'] = "Add notes about this one to one...";
			$_SESSION['prompt_2'] = "How did it go?";
			$_SESSION['prompt_3'] = "How should we categorise this person now then?";
			$_SESSION['prompt_4'] = "What&#39;s the plan going forward now?";
			$_SESSION['prompt_5'] = "What have you learnt for the future?";
			$_SESSION['prompt_6'] = "Discuss these through to improve your sales...";		
		}
		else{	
			$_SESSION['prompt_1'] = "How many one to ones have you had recently?";
			$_SESSION['prompt_2'] = "What is your current one to one goal?";
			$_SESSION['prompt_3'] = "Who are you meeting with?";
			$_SESSION['prompt_4'] = "What could be going better?";
			$_SESSION['prompt_5'] = "Where should you be focussing now then?";
			$_SESSION['prompt_6'] = "Discuss these through to improve your BD work...";
		}
	}
	if($_GET['secondary_folder'] == 'referrers'){
		if($_GET['tertiary_folder'] == 'item'){		
			$_SESSION['prompt_1'] = "How is this referrer going right now?";
			$_SESSION['prompt_2'] = "Are they delivering for you right now?";
			$_SESSION['prompt_3'] = "Are they taking up lots of time or money?";
			$_SESSION['prompt_4'] = "Are they worth focussing on?";
			$_SESSION['prompt_5'] = "What action should you take?";
			$_SESSION['prompt_6'] = "Discuss these through to improve your referrals...";		
		}
		else{	
			$_SESSION['prompt_1'] = "How are your referrers helping you at the moment?";
			$_SESSION['prompt_2'] = "How much are they contributing to your organisation?";
			$_SESSION['prompt_3'] = "What sub-set are working best for you?";
			$_SESSION['prompt_4'] = "How can we improve their effectiveness?";
			$_SESSION['prompt_5'] = "How much time should we allocate to this?";
			$_SESSION['prompt_6'] = "Discuss these to improve your referral network...";
		}
	}		
}
if($_GET['primary_folder'] == 'sales'){
	if($_GET['secondary_folder'] == 'new_potentials'){
		if($_GET['tertiary_folder'] == 'item'){		
			$_SESSION['prompt_1'] = "Add notes about this potential sale...";
			$_SESSION['prompt_2'] = "What is the next touchpoint?";
			$_SESSION['prompt_3'] = "How confident are you about it?";
			$_SESSION['prompt_4'] = "How can you make more from it?";
			$_SESSION['prompt_5'] = "What&#39;s the plan?";
			$_SESSION['prompt_6'] = "Discuss these through to improve your conversion rate...";		
		}
		else{	
			$_SESSION['prompt_1'] = "How are your initial sales going right now?";
			$_SESSION['prompt_2'] = "Are you converting well?";
			$_SESSION['prompt_3'] = "Why are you missing some conversions?";
			$_SESSION['prompt_4'] = "What if anything should change?";
			$_SESSION['prompt_5'] = "Where is best to start now then?";
			$_SESSION['prompt_6'] = "Discuss these through to improve your sales...";
		}
	}		
	if($_GET['secondary_folder'] == 'potential_upsells'){
		if($_GET['tertiary_folder'] == 'item'){		
			$_SESSION['prompt_1'] = "Add notes about this upsell...";
			$_SESSION['prompt_2'] = "Are you doing it / have you done it?";
			$_SESSION['prompt_3'] = "How is it going?";
			$_SESSION['prompt_4'] = "How can you make more from it?";
			$_SESSION['prompt_5'] = "What&#39;s the plan?";
			$_SESSION['prompt_6'] = "Discuss these through to improve your sales...";		
		}
		else{	
			$_SESSION['prompt_1'] = "How are your upsells going?";
			$_SESSION['prompt_2'] = "What other opportunities exist right now?";
			$_SESSION['prompt_3'] = "Are you getting through them?";
			$_SESSION['prompt_4'] = "What if anything should change?";
			$_SESSION['prompt_5'] = "Where is best to start now then?";
			$_SESSION['prompt_6'] = "Discuss these through to improve your sales...";
		}
	}
	if($_GET['secondary_folder'] == 'recurring_sales'){
		if($_GET['tertiary_folder'] == 'item'){		
			$_SESSION['prompt_1'] = "Add notes about this sale...";
			$_SESSION['prompt_2'] = "Are you doing it / have you done it?";
			$_SESSION['prompt_3'] = "How is it going?";
			$_SESSION['prompt_4'] = "How can you make more from it?";
			$_SESSION['prompt_5'] = "What&#39;s the plan?";
			$_SESSION['prompt_6'] = "Discuss these through to improve your sales...";		
		}
		else{	
			$_SESSION['prompt_1'] = "How are your recurring sales going right now?";
			$_SESSION['prompt_2'] = "Are you maintaining them well?";
			$_SESSION['prompt_3'] = "Why are you losing any and why?";
			$_SESSION['prompt_4'] = "What if anything should change?";
			$_SESSION['prompt_5'] = "Where is best to start now then?";
			$_SESSION['prompt_6'] = "Discuss these through to improve your recurring sales...";
		}
	}
	if($_GET['secondary_folder'] == 'all'){
		if($_GET['tertiary_folder'] == 'item'){		
			$_SESSION['prompt_1'] = "Add notes about this sale...";
			$_SESSION['prompt_2'] = "Are you doing it / have you done it?";
			$_SESSION['prompt_3'] = "How is it going?";
			$_SESSION['prompt_4'] = "How can you make more from it?";
			$_SESSION['prompt_5'] = "What&#39;s the plan?";
			$_SESSION['prompt_6'] = "Discuss these through to improve your sales...";		
		}
		else{	
			$_SESSION['prompt_1'] = "How are your sales going right now?";
			$_SESSION['prompt_2'] = "Are you consistently improving?";
			$_SESSION['prompt_3'] = "Where do you want them to be?";
			$_SESSION['prompt_4'] = "What if anything should change?";
			$_SESSION['prompt_5'] = "Where is best to start now then?";
			$_SESSION['prompt_6'] = "Discuss these through to improve your sales...";
		}
	}

}
if($_GET['primary_folder'] == 'marketing'){
	if($_GET['secondary_folder'] == 'target_markets'){
		if($_GET['tertiary_folder'] == 'item'){
			$_SESSION['prompt_1'] = "Add notes about this target market...";
			$_SESSION['prompt_2'] = "How rewarding is it for you right now?";
			$_SESSION['prompt_3'] = "How important to your business is this target market right now?";
			$_SESSION['prompt_4'] = "Should you be allocating more attention to it going forward?";
			$_SESSION['prompt_5'] = "What can you do to optimise the profitability of this target market?";
			$_SESSION['prompt_6'] = "Discuss these questions to improve your marketing...";	
		}
		else{	
			$_SESSION['prompt_1'] = "How are your target markets working right now?";
			$_SESSION['prompt_2'] = "Do you need to edit them?";
			$_SESSION['prompt_3'] = "Do you need to reprioritise them?";
			$_SESSION['prompt_4'] = "What targeting gaps orWhat do you need to be achieving right now?";
			$_SESSION['prompt_5'] = "So how can you refocus your marketing?";
			$_SESSION['prompt_6'] = "Discuss these through to improve your marketing...";
		}
	}
	if($_GET['secondary_folder'] == 'channels'){
		if($_GET['tertiary_folder'] == 'item'){
			$_SESSION['prompt_1'] = "Add notes about this channel...";
			$_SESSION['prompt_2'] = "Is it working as desired right now?";
			$_SESSION['prompt_3'] = "What results and rewards have been achieved?";
			$_SESSION['prompt_4'] = "All things considered do we double down, maintain or remove this channel?";
			$_SESSION['prompt_5'] = "So how can you refocus this channel?";
			$_SESSION['prompt_6'] = "Discuss these questions to improve your marketing...";	
		}
		else{	
			$_SESSION['prompt_1'] = "How is your marketing going right now?";
			$_SESSION['prompt_2'] = "Which channels are going really well?";
			$_SESSION['prompt_3'] = "Which channels are lagging?";
			$_SESSION['prompt_4'] = "What do you need to be achieving right now?";
			$_SESSION['prompt_5'] = "So how can you refocus your marketing?";
			$_SESSION['prompt_6'] = "Discuss these through to improve your marketing...";
		}
	}
	if($_GET['secondary_folder'] == 'promotion'){
		if($_GET['tertiary_folder'] == 'item'){
			$_SESSION['prompt_1'] = "Add notes about this promotion...";
			$_SESSION['prompt_2'] = "Is it working as desired right now?";
			$_SESSION['prompt_3'] = "What results and rewards have been achieved?";
			$_SESSION['prompt_4'] = "All things considered do we double down, maintain or remove this activity?";
			$_SESSION['prompt_5'] = "So how can you refocus this activity?";
			$_SESSION['prompt_6'] = "Discuss these questions to improve your marketing...";	
		}
		else{	
			$_SESSION['prompt_1'] = "How are your promotions going right now?";
			$_SESSION['prompt_2'] = "Could your targeting be better?";
			$_SESSION['prompt_3'] = "Could your messaging be clearer?";
			$_SESSION['prompt_4'] = "How many leads to you really need?";
			$_SESSION['prompt_5'] = "So how can you refocus your marketing?";
			$_SESSION['prompt_6'] = "Discuss these through to improve your marketing...";
		}
	}	
	if($_GET['secondary_folder'] == 'tasks'){
		if($_GET['tertiary_folder'] == 'item'){
			$_SESSION['prompt_1'] = "Add notes about this marketing task...";
			$_SESSION['prompt_2'] = "Are you getting it done?";
			$_SESSION['prompt_3'] = "How important does it seem right now?";
			$_SESSION['prompt_4'] = "All things considered do we double down, maintain or remove this activity?";
			$_SESSION['prompt_5'] = "So how can you refocus this activity?";
			$_SESSION['prompt_6'] = "Discuss these questions to improve your marketing...";	
		}
		else{	
			$_SESSION['prompt_1'] = "How are your marketing tasks going right now?";
			$_SESSION['prompt_2'] = "Could you be focussing your energy better?";
			$_SESSION['prompt_3'] = "What&#39;s most important right now?";
			$_SESSION['prompt_4'] = "What needs to be done in the next week or so?";
			$_SESSION['prompt_5'] = "Do you need to do it all yourself?";
			$_SESSION['prompt_6'] = "Discuss these through to improve your marketing...";
		}
	}		
}	


if($_GET['primary_folder'] == 'management'){
	if($_GET['secondary_folder'] == 'assets'){
		if($_GET['tertiary_folder'] == 'item'){
			$_SESSION['prompt_1'] = "Add notes about this asset...";
			$_SESSION['prompt_2'] = "How great is it for the business?";
			$_SESSION['prompt_3'] = "What are you gaining from using it?";
			$_SESSION['prompt_4'] = "How is the usage of it going?";
			$_SESSION['prompt_5'] = "How can it be improved?";
			$_SESSION['prompt_6'] = "Discuss to optimise your business systems...";		
		}
		else{
			$_SESSION['prompt_1'] = "How are your assets performing right now?";
			$_SESSION['prompt_2'] = "Do they feel like they are a good fit for your needs still?";
			$_SESSION['prompt_3'] = "What&#39;s going well with them?";
			$_SESSION['prompt_4'] = "What&#39;s not going so well?";
			$_SESSION['prompt_5'] = "How could things be better?";
			$_SESSION['prompt_6'] = "Discuss to optimise your asset values...";
		}
	}
	if($_GET['secondary_folder'] == 'systems'){
		if($_GET['tertiary_folder'] == 'item'){
			$_SESSION['prompt_1'] = "Add notes about this system...";
			$_SESSION['prompt_2'] = "How great is it for the business?";
			$_SESSION['prompt_3'] = "What are you gaining from using it?";
			$_SESSION['prompt_4'] = "How is the usage of it going?";
			$_SESSION['prompt_5'] = "How can it be improved?";
			$_SESSION['prompt_6'] = "Discuss to optimise your business systems...";		
		}
		else{
			$_SESSION['prompt_1'] = "How are your support systems performing right now?";
			$_SESSION['prompt_2'] = "Do they feel like they are a good fit for your needs still?";
			$_SESSION['prompt_3'] = "What&#39;s going well with them?";
			$_SESSION['prompt_4'] = "What&#39;s not going so well?";
			$_SESSION['prompt_5'] = "How could things be better?";
			$_SESSION['prompt_6'] = "Discuss to optimise your business systems...";
		}
	}
	if($_GET['secondary_folder'] == 'staff'){
		if($_GET['tertiary_folder'] == 'item'){		
			$_SESSION['prompt_1'] = "Add notes about this staff member...";
			$_SESSION['prompt_2'] = "How are they performing right now?";
			$_SESSION['prompt_3'] = "Do you trust them?";
			$_SESSION['prompt_4'] = "Where do you think they could improve?";
			$_SESSION['prompt_5'] = "How much more work can they handle right now?";
			$_SESSION['prompt_6'] = "Discuss this staff member to start improving their performance...";
		}
		else{	
			$_SESSION['prompt_1'] = "How are your staff going now?";
			$_SESSION['prompt_2'] = "Who&#39;s crushing it?";
			$_SESSION['prompt_3'] = "Who can you trust most?";
			$_SESSION['prompt_4'] = "What gaps are appearing?";
			$_SESSION['prompt_5'] = "Where do you think they could improve?";
			$_SESSION['prompt_6'] = "Answer these questions to the function of your staff...";
		}
	}
	if($_GET['secondary_folder'] == 'other'){
		if($_GET['tertiary_folder'] == 'item'){		
			$_SESSION['prompt_1'] = "Add notes about this management topic...";
			$_SESSION['prompt_2'] = "How is it going?";
			$_SESSION['prompt_3'] = "What concerns do you have?";
			$_SESSION['prompt_4'] = "";
			$_SESSION['prompt_5'] = "";
			$_SESSION['prompt_6'] = "Discuss this topic to optimise your management of it...";
		}
		else{	
			$_SESSION['prompt_1'] = "How is your management going right now?";
			$_SESSION['prompt_2'] = "What are you behind on?";
			$_SESSION['prompt_3'] = "What issues are currently outstanding?";
			$_SESSION['prompt_4'] = "Where are you vulnerable?";
			$_SESSION['prompt_5'] = "And what tasks must you get done?";
			$_SESSION['prompt_6'] = "Answer these questions to tighten your management...";
		}
	}

	if($_GET['secondary_folder'] == 'clients'){
		$singular = substr($_SESSION['viewing_client_what_clients_are_called'], 0, -1);
		$plural = $_SESSION['viewing_client_what_clients_are_called'];	
	
		if($_GET['tertiary_folder'] == 'item'){
			$_SESSION['prompt_1'] = "Add notes about this $singular...";
			$_SESSION['prompt_2'] = "How is this $singular going?";
			$_SESSION['prompt_3'] = "How happy are they?";
			$_SESSION['prompt_4'] = "When did you speak to them last?";
			$_SESSION['prompt_5'] = "How good are they for the business direction?";
			$_SESSION['prompt_6'] = "How can they fit the business better/help the business more?";
		}
		else{	
			$_SESSION['prompt_1'] = "How are your $plural going right now?";
			$_SESSION['prompt_2'] = "Is anyone lagging?";
			$_SESSION['prompt_3'] = "Who&#39;s causing you more stress than you deserve?";
			$_SESSION['prompt_4'] = "How can we help them more?";
			$_SESSION['prompt_5'] = "What else do they need?";
			$_SESSION['prompt_6'] = "Discuss these questions to improve your $singular relationships...";
		}
	}		
}


if($_GET['primary_folder'] == 'tracking'){
	if($_GET['secondary_folder'] == 'kpis'){
		$_SESSION['prompt_1'] = "How are we progressing?";
		$_SESSION['prompt_2'] = "Do you feel things are on track right now?";		
		$_SESSION['prompt_3'] = "If not, why not and how can we fix it?";
		$_SESSION['prompt_4'] = "What is required to make it happen?";
		$_SESSION['prompt_5'] = "How can we ensure we acheive it in good time?";	
		$_SESSION['prompt_6'] = "";	
	}
	if($_GET['secondary_folder'] == 'revenue_and_profit'){
		$_SESSION['prompt_1'] = "How are we progressing?";
		$_SESSION['prompt_2'] = "Do you feel things are on track right now?";		
		$_SESSION['prompt_3'] = "If not, why not and how can we fix it?";
		$_SESSION['prompt_4'] = "What is required to make it happen?";
		$_SESSION['prompt_5'] = "How can we ensure we acheive it in good time?";	
		$_SESSION['prompt_6'] = "";	
	}
	if($_GET['secondary_folder'] == 'revenue_and_income'){
		$_SESSION['prompt_1'] = "How are we progressing?";
		$_SESSION['prompt_2'] = "Do you feel things are on track right now?";		
		$_SESSION['prompt_3'] = "If not, why not and how can we fix it?";
		$_SESSION['prompt_4'] = "What is required to make it happen?";
		$_SESSION['prompt_5'] = "How can we ensure we acheive it on time?";	
		$_SESSION['prompt_6'] = "";		
	}
	if($_GET['secondary_folder'] == 'income_and_hours'){	
		$_SESSION['prompt_1'] = "How are we progressing?";
		$_SESSION['prompt_2'] = "Do you feel things are on track right now?";		
		$_SESSION['prompt_3'] = "If not, why not and how can we fix it?";
		$_SESSION['prompt_4'] = "What is required to make it happen?";
		$_SESSION['prompt_5'] = "How can we ensure we acheive it in good time?";
		$_SESSION['prompt_6'] = "";		
	}
	if($_GET['secondary_folder'] == 'productivity'){	
		$_SESSION['prompt_1'] = "How are we progressing?";
		$_SESSION['prompt_2'] = "Do you feel things are on track right now?";		
		$_SESSION['prompt_3'] = "If not, why not and how can we fix it?";
		$_SESSION['prompt_4'] = "What is required to make it happen?";
		$_SESSION['prompt_5'] = "How can we ensure we acheive it in good time?";
		$_SESSION['prompt_6'] = "";		
	}
}

if($_GET['primary_folder'] == 'improvements'){
	if($_GET['secondary_folder'] == 'planned'){
		if($_GET['tertiary_folder'] == 'item'){
			$_SESSION['prompt_1'] = "How can you define this planned improvement better right now?";
			$_SESSION['prompt_2'] = "What needs to be acheived?";
			$_SESSION['prompt_3'] = "Why does this improvement matter so much?";
			$_SESSION['prompt_4'] = "What will follow it?";
			$_SESSION['prompt_5'] = "And when can it start?";
			$_SESSION['prompt_6'] = "Discuss these plans to structure the improvement better...";		
		}
		else{	
			$_SESSION['prompt_1'] = "How are your planned improvements looking right now?";
			$_SESSION['prompt_2'] = "Is the order roughly correct?";
			$_SESSION['prompt_3'] = "Is anything missing?";
			$_SESSION['prompt_4'] = "What timeline adjustments are required?";
			$_SESSION['prompt_5'] = "What else is needed?";
			$_SESSION['prompt_6'] = "Discuss these plans to structure the future better...";	
		}
	}	
	if($_GET['secondary_folder'] == 'completed'){
		if($_GET['tertiary_folder'] == 'item'){
			$_SESSION['prompt_1'] = "Why are you looking back at this improvement?";
			$_SESSION['prompt_2'] = "What new ideas have you had?";
			$_SESSION['prompt_3'] = "Are you happy with how it went?";
			$_SESSION['prompt_4'] = "Do you want to do more similar to this now?";
			$_SESSION['prompt_5'] = "What are you thinking about?";
			$_SESSION['prompt_6'] = "Discuss this to maximise your general rate of improvement...";		
		}
		else{		
			$_SESSION['prompt_1'] = "Why are you looking back at these completed improvements?";
			$_SESSION['prompt_2'] = "How can you use them to keep improving now?";
			$_SESSION['prompt_3'] = "What was most beneficial and why?";
			$_SESSION['prompt_4'] = "What else can you do now?";
			$_SESSION['prompt_5'] = "";
			$_SESSION['prompt_6'] = "Discuss your past improvements to move forward better now...";

		}
	}
	if($_GET['secondary_folder'] == 'underway'){
		if($_GET['tertiary_folder'] == 'item'){
			$_SESSION['prompt_1'] = "How is this improvement going?";
			$_SESSION['prompt_2'] = "What&#39;s good, what&#39;s bad what&#39;s ugly?";
			$_SESSION['prompt_3'] = "How will things change once it&#39;s completed?";
			$_SESSION['prompt_4'] = "What if anything are you struggling with?";
			$_SESSION['prompt_5'] = "What else is needed?";
			$_SESSION['prompt_6'] = "Discuss this to better implement this improvement...";		
		}
		else{		
			$_SESSION['prompt_1'] = "How are these improvements going?";
			$_SESSION['prompt_2'] = "Are you making decent progress?";
			$_SESSION['prompt_3'] = "Are there any stumbling blocks right now?";
			$_SESSION['prompt_4'] = "Do you think you&#39;ll successfully complete it soon?";
			$_SESSION['prompt_5'] = "";
			$_SESSION['prompt_6'] = "Discuss your current improvements to keep them rolling...";
		}
	}	
}
if($_GET['primary_folder'] == 'time'){
			$_SESSION['prompt_1'] = "Where is your time going?";
			$_SESSION['prompt_2'] = "Where are you losing time?";
			$_SESSION['prompt_3'] = "Where can you gain time?";
			$_SESSION['prompt_4'] = "How could it be better spent?";
			$_SESSION['prompt_5'] = "Is it all accounted for?";
			$_SESSION['prompt_6'] = "Discuss to improve your time utilisation...";
}




if($_GET['primary_folder'] == 'admin'){
	if('general_notes' == $_GET['secondary_folder']){
		if('item' == $_GET['tertiary_folder']){
			$_SESSION['prompt_1'] = "What do you need to document on this topic?";
			$_SESSION['prompt_2'] = "What general comments come to mind?";
			$_SESSION['prompt_3'] = "What are they working on?";
			$_SESSION['prompt_4'] = "Where do you think its going?";
			$_SESSION['prompt_5'] = "Where could they improve?";
			$_SESSION['prompt_6'] = "What aren&#39;t you telling them?";			
		}
		else{
			$_SESSION['prompt_1'] = "How is this client going?";
			$_SESSION['prompt_2'] = "What general comments come to mind?";
			$_SESSION['prompt_3'] = "What are they working on?";
			$_SESSION['prompt_4'] = "Where do you think its going?";
			$_SESSION['prompt_5'] = "Where could they improve?";
			$_SESSION['prompt_6'] = "What aren&#39;t you telling them?";
		}
	}


	if('homework' == $_GET['secondary_folder']){
		if('item' == $_GET['tertiary_folder']){
			$_SESSION['prompt_1'] = "Add notes about this homework...";
			$_SESSION['prompt_2'] = "How is it going?";
			$_SESSION['prompt_3'] = "What is it leading to?";
			$_SESSION['prompt_4'] = "How important is it now?";
			$_SESSION['prompt_5'] = "What needs to be done now?";
			$_SESSION['prompt_6'] = "";			
		}
		else{
			$_SESSION['prompt_1'] = "How are your little homework tasks going?";
			$_SESSION['prompt_2'] = "Are you getting through all of them?";
			$_SESSION['prompt_3'] = "What&#39;s else needs to happen?";
			$_SESSION['prompt_4'] = "";
			$_SESSION['prompt_5'] = "";
			$_SESSION['prompt_6'] = "Discuss your homework to move forward faster...";
		}
	}	
}



if($_GET['primary_folder'] == 'wheelhouse'){
	if($_GET['secondary_folder'] == 'dreams'){
		if('item' == $_GET['tertiary_folder']){
			$_SESSION['prompt_1'] = "Add notes about this dream...";
			$_SESSION['prompt_2'] = "How are we progressing?";
			$_SESSION['prompt_3'] = "Do you feel things are on track right now?";		
			$_SESSION['prompt_4'] = "If not, why not and how can we fix it?";
			$_SESSION['prompt_5'] = "What is required to make it happen?";
			$_SESSION['prompt_6'] = "How can we ensure we acheive it in good time?";
		}
		else{
			$_SESSION['prompt_1'] = "What dreams are you chasing at the moment?";
			$_SESSION['prompt_2'] = "Are they all stored here?";
			$_SESSION['prompt_3'] = "What priority are they for you?";
			$_SESSION['prompt_4'] = "How confident about achieving them are you?";
			$_SESSION['prompt_5'] = "What&#39;s most important to you right now?";
			$_SESSION['prompt_6'] = "... and why?";		
		}	
	}
	if($_GET['secondary_folder'] == 'goals'){
		if('item' == $_GET['tertiary_folder']){
			$_SESSION['prompt_1'] = "Add notes about this goal...";
			$_SESSION['prompt_2'] = "How are we progressing?";
			$_SESSION['prompt_3'] = "Do you feel things are on track right now?";		
			$_SESSION['prompt_4'] = "If not, why not and how can we fix it?";
			$_SESSION['prompt_5'] = "What is required to make it happen?";
			$_SESSION['prompt_6'] = "How can we ensure we acheive it in good time?";		
		}
		else{
			$_SESSION['prompt_1'] = "What goals are you focussed on right now?";
			$_SESSION['prompt_2'] = "Are they all stored here?";
			$_SESSION['prompt_3'] = "What priority are they for you?";
			$_SESSION['prompt_4'] = "How confident about achieving them are you?";
			$_SESSION['prompt_5'] = "What&#39;s most important to you right now?";
			$_SESSION['prompt_6'] = "... and why?";	
		}
	}
	if($_GET['secondary_folder'] == 'milestones'){
		if('item' == $_GET['tertiary_folder']){
			$_SESSION['prompt_1'] = "Add notes about this milestone...";
			$_SESSION['prompt_2'] = "How are we progressing?";
			$_SESSION['prompt_3'] = "Do you feel things are on track right now?";		
			$_SESSION['prompt_4'] = "If not, why not and how can we fix it?";
			$_SESSION['prompt_5'] = "What is required to make it happen?";
			$_SESSION['prompt_6'] = "How can we ensure we acheive it on time?";			
		}
		else{
			$_SESSION['prompt_1'] = "What milestones are you trying to achieve right now?";
			$_SESSION['prompt_2'] = "What do they need to add?";
			$_SESSION['prompt_3'] = "What sequencing issues are there?";
			$_SESSION['prompt_4'] = "What should you be prioritising?";
			$_SESSION['prompt_5'] = "What&#39;s most important to you right now?";
			$_SESSION['prompt_6'] = "... and why?";	
		}
	}
	if($_GET['secondary_folder'] == 'tasks'){	
		if('item' == $_GET['tertiary_folder']){
			$_SESSION['prompt_1'] = "Add notes about this task...";
			$_SESSION['prompt_2'] = "How are we progressing?";
			$_SESSION['prompt_3'] = "Do you feel things are on track right now?";		
			$_SESSION['prompt_4'] = "If not, why not and how can we fix it?";
			$_SESSION['prompt_5'] = "What is required to make it happen?";
			$_SESSION['prompt_6'] = "How can we ensure we acheive it in good time?";		
		}
		else{
			$_SESSION['prompt_1'] = "What tasks are you trying to crush right now?";
			$_SESSION['prompt_2'] = "What do they need to add?";
			$_SESSION['prompt_3'] = "What should you be prioritising?";
			$_SESSION['prompt_4'] = "How can you progress faster?";
			$_SESSION['prompt_5'] = "What&#39;s most important to you right now?";
			$_SESSION['prompt_6'] = "... and why?";	
		}
	}
	if('issues' == $_GET['secondary_folder']){
		if('item' == $_GET['tertiary_folder']){
			$_SESSION['prompt_1'] = "Add notes about this issue...";
			$_SESSION['prompt_2'] = "How is it going?";
			$_SESSION['prompt_3'] = "What has happened since the last update?";
			$_SESSION['prompt_4'] = "How important is it now?";
			$_SESSION['prompt_5'] = "What needs to be done now?";		
			$_SESSION['prompt_6'] = "";		
		}
		else{	
			$_SESSION['prompt_1'] = "What issues are you facing at the moment?";
			$_SESSION['prompt_2'] = "How are they impacting your right at this moment?";
			$_SESSION['prompt_3'] = "What is your plan for them?";
			$_SESSION['prompt_4'] = "How can you progress further if you remove an issue or two?";
			$_SESSION['prompt_5'] = "Is there anything else really bugging you?";
			$_SESSION['prompt_6'] = "Discuss these questions to move faster...";
		}
	}
}


	




if($_GET['primary_folder'] == 'messages'){
	if($_SESSION['dreamboat_crew'] == 'yes'){$to = 'client '.$_SESSION['viewing_client_first_name']."?";}
	else{$to = 'Productivity Pilot '.$_SESSION['pilots_first_name']."?";}				
		$_SESSION['prompt_1'] = "What do you want to say to your ".$to;
	if($_SESSION['dreamboat_crew'] != 'yes'){			
		$_SESSION['prompt_2'] = "Don&#39;t forget you can just call them too.";
		$_SESSION['prompt_3'] = "Their number is in the top right corner of your screen.";
	}
	$_SESSION['prompt_4'] = "";
	$_SESSION['prompt_5'] = "";
	$_SESSION['prompt_6'] = "";
}










?>