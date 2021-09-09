<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/url_and_folder_functions.php";



//echo "only for pilots so far<br> this is where how it works can go intially to train staff then go onwards and upwards from there";


//API connections

//autocoach

//neural networks



if(check_primary_folder('legal') != 1){
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";
}


		paragraph_detailed('no',8,8,8,"At the heart of all Dreamboat’s services is our technology that takes in all data sources to provide optimal control and improvement inline with the goal of steady productivity improvement.");// within the target range of 10-20% every 6 months.");
		paragraph_detailed('no',8,8,8,"This platform can be accessed at <a href='/' target='_blank'>www.dreamboat.com.au</a>.");	

		$copy = "Ask your pilot for a walkthrough / guided tour if you haven't already.";
		require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/notifiers/hint.php";			
		
		paragraph_detailed('no',8,8,8,"Central to the success of our technology is our automated prompting system that increasingly pulls together all previous system inputs and questions to optimise the effectiveness of our Pilots by enabling them to ask the most pertinent question at the most pertinent time to each and every client.");

		$copy = "In coming years we hope to fully utilise the power of neural networks, voice recognition and business data sets to optimise this even further.";
		require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/notifiers/fact.php";

if(check_primary_folder('legal') != 1){
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";
}