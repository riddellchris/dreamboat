<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";


//if shift to a world where everyone is an agent for productivity improvement..

//then magic will happen

paragraph_detailed('no', 10,10,8, "Traditional management and improvement of productivity relies heavily on management seeing & implementing change, but our model and the new opportunity is that everyone in an organisation is facilitated to see and implement productivity improvements therefore driving business forward from the ground up.");
	
	paragraph_detailed('no',8,8,8,"While productivity may be managed to a lower bound for each and every employee...");
	
	include_knowledgebase_image('/knowledgebase/productivity/new_opportunities/diagrams/lower_bound_management.svg', 'default', '65vh');	
	
	paragraph_detailed('no',8,8,8,"...as all staff get closer and closer to being businesses themselves, thanks to technology, casualisation of the workforce and lower barriers to being businesses unto themselves, there is greater upside potential above the lower bound that remain untapped.");
	
		//fact.php
		$copy = "No longer are we in the age of industrial employment and workforces.";		
		require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/notifiers/fact.php";	
	
	
	
	paragraph_detailed('no',8,8,8,"However to tap into that, individual consultation and optimisation is required which is often too challenging for any business to handle internally and/or consistently.");
		
	paragraph_detailed('no',8,8,8,"The solution here is to optimise productivity of each individual on a low-cost, ongoing basis such that ultimately both the individual and the businesses alike improve their productivity, creating positive results at every level.");
		

		

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";

	