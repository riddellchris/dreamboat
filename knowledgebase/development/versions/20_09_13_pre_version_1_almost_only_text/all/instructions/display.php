<?php
if(!isset($_SESSION)){session_start();}

copy_big_title_open('Instructions','instructions');

// as no sub titles need to open up the div... will be closed later on by close_title_details

echo "<div>";

	paragraph("We run this knowledgebase as a moderated and continously expanding wiki to help our clients and the world in general understand more about what we are about as well as improve their own productivity because ultimately that's our mission.");
		
		
	paragraph("With that said, this is a working document that we continue to expand upon to add more granularity, information, specificity and reliablity too in exactly the same what that we approach developing the service and our foundational technology.<br> For that reason, it is imperative that you understand how this document is built to guide your understanding of our level of certainty, clarity and complete satisfaction with what is entailed. We have done this in order to provide you with as much information as possible in order to understand what we are doing, where we are going and how we intend on doing so, while at the same time providing you with as much transparency about the importance, certainty and criticality of each and every piece of information contained within.");
	
	/*
		<br>
		<br>
		size, 	importance<br>
		weight, certainty<br>
		opacity,critically<br>
		
		// /legal/prospectus/all_code/development/test_builds/comfortaa_weights.php
		//therefore tomorrow, importance, need to re-write a whole lot to that stuff to be more accurate
		//colors //based on opacticty
		
	*/
	
	echo "<br><br>";
	paragraph("Further to simply how to interepret this document we have additional notifiers and endpoints placed within the document to both signify critical information and encourage/enable discussion with users in order to optimise the improvement of the knowledgebase as a whole.");
	
	//	/knowledgebase/components
		//a div and description of each 
	
	
	copy_title_close();
	
	
	paragraph("Any purchase decisions you make are up to your interpretation of this document and every other aspect of the service itself, including how it serves you if you chose to use it on an ongoing basis.");
copy_big_title_close();