<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";


echo "<br><br>";
faq_title("Why can't the government do this?");
faq_response("Unfortunately they just don't look at things in terms of solving the problem from any angle.");
faq_response("Their main weapons are taxation, legislation and spending in general.");
faq_response("In contrast, we originally approached this problem from the perspective of a hedge fund, looking to bet on a certainty and unfortunately realised that if productivity doesn't keep improving the economy would almost certainly collapse. However if the economy stumbles even just a little bit productivity is at risk. As a result we wanted to stop that from happening.");

		//approximation_or_estimation.php
		$type = 'both';
		$copy = "We expect that both the powers of the RBA and Government are at their limits to control this situation, hence a new solution is required.";		
		require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/notifiers/approximation_or_estimation.php";






echo "<br><br>";
faq_title("Can't I just do this myself/ourselves?");
faq_response("You can try but what we find is that most people's ability to do this themselves is often spasmodic, inconsistent and lacking the appropriate skills and abilities that we bring by doing this all day every day.");


echo "<br><br>";
faq_title("I know my business better than you ever will, how can you help?");
faq_response("Absolutely you do, as per our model of productivity we are just good at finding small tweaks and productivity improvements across all businesses that ultimately drive improved productivity and profitability. While you're focussing on the big picture we will be helping clean out any and all productivity sapping issues from within.");


echo "<br><br>";
faq_title("Why should I invest in something I can't perfectly calculate my returns from?");
faq_response("While like most things, results may  and will vary with Dreamboat depending on your situation, consider the downside of engaging in consistent productivity improvement for yourself, your business and the economy as a whole. Our estimates are that there are almost no downsides and only upside for a reasonably small investment which especially in today's investment environment is nothing but a great thing.");








require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";