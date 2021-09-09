<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_start('no', 10, 9, 9, "In order to optimise labour productivity across the country we need:");
//our model is built upon the phy
	list_start();
		point_detailed_start('no',8,8,8,"Sufficient <a href='/knowledgebase/training_data/' target='_blank'>training data</a> specific to labour productivity");
		point_detailed_start('no',8,8,8,"To assume that people are working as 'hard' as their productivity network allows rather than anything other draconian assumptions.");
		point_detailed_start('no',8,8,8,"& most importantly to understand the economy in terms of labour productivity.");
	list_end();

paragraph_start('no', 10, 9, 9, "As a result we define a productivity network of an individual, using the definition below:");
paragraph_start('no', 8, 10, 10, "A productivity network is a network built of an individual's interactions with other assets, people and processes to create value.");

// removing issues that limit productivity from Australia's .");
include_knowledgebase_image('/knowledgebase/components/diagrams/individual_network_no_issues.svg', 'default', '65vh');

paragraph_start('no', 10, 9, 9, "Of course, these connections can be 'good' and 'bad':");
include_knowledgebase_image('/knowledgebase/components/diagrams/individual_productivity_networks_good_and_bad.svg', 'default', '65vh');

paragraph_start('no', 10, 9, 9, "This occurs as a result of many factors and issues that arise between each node within the network:");
include_knowledgebase_image('/knowledgebase/components/diagrams/individual_productivity_networks_with_issues.svg', 'default', '65vh');

paragraph_start('no', 10, 9, 9, "Thankfully, literally every member of the economy operates with such a network, so:");
	list_start();
		point_detailed_start('no',8,8,8,"Learning how to optimise the value of each network is possible via the oceans of <a href='/knowledgebase/our_model/training_data/'>training data</a> that already exist.");
		point_detailed_start('no',8,8,8,"The economy simply becomes a network of multiple productivity networks, so by optimising one, then many networks, we transform the economy.");
	list_end();

//comparative analogy ##
$copy = "This is exactly the same modelly procedure used in modern material analysis systems such as <a href='https://en.wikipedia.org/wiki/Finite_element_method' target='blank'>FEA</a> to optimise material properties.
Here we have repurposed this math for economic outcomes.";		
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/notifiers/fact.php";

//unlike governement agencies we can provide these improvements and optimisations direct to every user
//ideally feedback chart of the loop - sort of BDA stylez

//our model collects this data, runs optimisation algorithims and feeds back this information to each member of the labour force to optimise productivity and outcomes for everyone.

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";
