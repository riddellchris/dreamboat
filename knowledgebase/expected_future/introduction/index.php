<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

	//build the facebook of productivity improvement NOT productivity management and provide sufficient services to enable and 
	
	paragraph_detailed('no',8,10,10,"To continuously achieve our <a href='/knowledgebase/economy/contention/'>economic contention</a>, continuous investment and development of our technology foundations are required to facilitate increased use, improved reliability and a more comprehensive product suite.");
	
	paragraph_detailed('no',8,10,10,"We picture this situation as the diagram below describes, such that technology supports all of our activities.");
	
		
	echo "<img src='/knowledgebase/expected_future/diagrams/technology_foundations.svg' style='width: 80%; margin-left: 10%;'>";
	echo "<br><br><br><br>";
	
	$copy = "Imagine the impact on the world and what could be achieved if an equivalent platform to Facebook was built but rather than a social focus a productivity focus was achieved.";
	require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/notifiers/thought_experiment.php";
	echo "<br><br>";
	$copy = "This thought experiment is our intention with every dollar spent on technology development";
	require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/notifiers/shameless_self_promotion.php";
	
	paragraph_detailed('no',8,10,10,"In more specific terms, this means we need the following elements to our development plans:");


	paragraph_detailed('yes',8,10,10,"<a target='_blank' href='/knowledgebase/expected_future/reinvestment_plans/'>Financial Reinvestment Plans</a>");	
	paragraph_detailed('yes',8,10,10,"<a target='_blank' href='/knowledgebase/expected_future/graphical_user_interface/'>Graphical User Interface</a>");	
	paragraph_detailed('yes',8,10,10,"<a target='_blank' href='/knowledgebase/expected_future/statistical_reliability_objectives/'>Statistical Reliability Objectives</a>");	
	paragraph_detailed('yes',8,10,10,"<a target='_blank' href='/knowledgebase/expected_future/user_support_systems/'>User Support Systems</a>");	
	paragraph_detailed('yes',8,10,10,"<a target='_blank' href='/knowledgebase/expected_future/pilot_support_systems/'>Pilot Support Systems</a>");	
	paragraph_detailed('yes',8,10,10,"<a target='_blank' href='/knowledgebase/expected_future/unique_products_and_services/'>Unique Products & Services</a>");	
	paragraph_detailed('yes',8,10,10,"<a target='_blank' href='/knowledgebase/expected_future/external_optimisation/'>External Optimsation</a>");	



require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";