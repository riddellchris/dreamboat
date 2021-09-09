<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/url_and_folder_functions.php";


if(check_primary_folder('legal') != 1){
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";
}

//echo "only for pilots so far<br> this is where how it works can go intially to train staff then go onwards and upwards from there";


//API connections

//autocoach

//neural networks
paragraph_start('no', 10, 8, 9, "Built with the sole purpose of:");
	list_start();
		point_detailed_start('no',8,8,8,"Identification");	
		point_detailed_start('no',8,8,8,"Measurement");	
		point_detailed_start('no',8,8,8,"Evaluation");	
		point_detailed_start('no',8,8,8,"Prediction &");	
		point_detailed_start('no',8,8,8,"Removal");	
	list_end();
paragraph_start('no', 10, 8, 9, " of productivity sapping issues from productivity networks, our intial product is one simple solution that:");
	list_start();
		point_detailed_start('no',8,8,8,"Minimises user training & upskilling");	
		point_detailed_start('no',8,8,8,"Minimises barriers to entry");	
		point_detailed_start('no',8,8,8,"Minimises barriers to non-use &");	
		point_detailed_start('no',8,8,8,"Maximises productivity improvement");	
	list_end();


paragraph_detailed('no',10,10,8,"<span style='color:grey;'>While ultimately Dreamboat should be a digital only service, until such time as a completely digital system is possible and up to the required impact standards without phone conversations, <a href='/knowledgebase/system/pilots/' target='_blank'>Pilots</a> are required.<br></span> <br>");

paragraph_detailed('no', 10,8,8, "Our simple confidential process provides the easiest, most cost effective and most reliable system to improve the productivity of everyone within your business to make more money and simplify the path forward each and every day.");




		paragraph_detailed('no',8,8,8,"At the heart of all Dreamboat’s services is our technology that takes in all data sources to provide optimal control and improvement inline with the goal of steady productivity improvement.");// within the target range of 10-20% every 6 months.");
		paragraph_detailed('no',8,8,8,"This platform can be accessed at <a href='/' target='_blank'>www.dreamboat.com.au</a>.");	

		$copy = "Ask your pilot for a walkthrough / guided tour if you haven't already.";
		require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/notifiers/hint.php";			
		
		paragraph_detailed('no',8,8,8,"Central to the success of our technology is our automated prompting system that increasingly pulls together all previous system inputs and questions to optimise the effectiveness of our Pilots by enabling them to ask the most pertinent question at the most pertinent time to each and every client.");


/*
		$copy = "In coming years we hope to fully utilise the power of neural networks, voice recognition and business data sets to optimise this even further.";
		require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/notifiers/fact.php";
*/

if(check_primary_folder('legal') != 1){
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";
}