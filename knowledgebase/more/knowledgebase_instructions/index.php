<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";



	paragraph_start('no', 6, 7, 9, "We run this knowledgebase as a moderated and continously expanding <a href='https://en.wikipedia.org/wiki/Wiki' target='_blank'>wiki</a> to help our clients and the world in general understand more about what we are about as well as improve their own productivity because ultimately that's our mission.");
		
		
	paragraph_start('no', 5, 7,8, "With that said, this is a working document that we continue to expand upon to add more granularity, information, specificity and reliablity too in exactly the same what that we approach developing the service and our foundational technology.");
	
	paragraph_start('no', 5, 7, 8, "For that reason, it is imperative that you understand how this document is built to guide your understanding of our level of certainty, clarity and complete satisfaction with what is entailed. We have done this in order to provide you with as much information as possible in order to understand what we are doing, where we are going and how we intend on doing so, while at the same time providing you with as much transparency about the importance, certainty and criticality of each and every piece of information contained within.");
	
	//size, 	importance<br>
	paragraph_start('no', 5, 7, 8, "As such the size of any font reflects it's <span style='color:red;'>importance</span> with font ");
		paragraph_middling('no',1,7,8,"this size");
		echo " being least important and font ";
		paragraph_middling('no',10,7,8, "this size");
		echo " being most important.";
	paragraph_end();	
	
	paragraph_start('no', 5, 7, 8, "The thickness of any font is also used as a reflection of our certainty around each word, so those we are perfectly certain of will be thickest ");	
		paragraph_middling('no',5,10,8,"as seen here");
		echo " and those we are less certain of but still need to be said are ";
		paragraph_middling('no',5,1,8," this thick.");
	
	paragraph_start('no', 5, 7,8, "Finally the opacity of any font is used to emphasise its criticality as ");
		paragraph_middling('no',5,10, 10," seen here ");
		echo "in font that is critical to read and consume vs";
		paragraph_middling('no',5,10, 1, " here ");
		echo "which is not so.";
	
	paragraph_start('yes', 5, 7,8, "Overall, none of this should impact the overall message contained within but should add additional layers to your understanding where appropriate.");
	
	
	echo "<br><br>";
	paragraph_start('no', 5, 7,8, "Further to simply how to interepret this document we have additional notifiers placed within the document to both signify critical information and encourage/enable discussion with users in order to optimise the improvement of the knowledgebase as a whole. A few examples of these are listed below:");
	
		//shameless_self_promotion.php
		$copy = "We don't like to be boastful, but sometimes, it just needs to be said.";				
		require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/notifiers/shameless_self_promotion.php";
		
		//thought_experiment.php
		$copy = "Is just that, something to consider and interrogate leading to new understanding.";		
		require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/notifiers/thought_experiment.php";	
		
		
		//problem_or_issue.php
		$copy = "Raises a clear problem or issue related to the content.";		
		require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/notifiers/problem_or_issue.php";
		
		
		//approximation_or_estimation.php
		$type = 'both';
		$copy = "Relates to an approximated / estimated/ or expected value based on any combination of past experience, experimental data and/or theoretical expectations.";		
		require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/notifiers/approximation_or_estimation.php";
		
		
		//fact.php
		$copy = "Defines an indisputable fact.";		
		require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/notifiers/fact.php";
		
		
		//benefit.php
		$copy = "Obviously defines a benefit to be aware of related to the copy above.";
		require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/notifiers/benefit.php";
		
		
		//stub.php
		//require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/notifiers/stub.php";

		//question.php
		//http://talkerscode.com/webtricks/show-button-on-hover-using-html-and-css.php
		//should on hover over any paragraph allow question to be asked
	
	paragraph_start('yes', 5, 7,8, "It is important to note at this point that any purchase decisions you make are up to your interpretation of this document and every other aspect of the service itself, including how it serves you if you choose to use it on an ongoing basis.");
	
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";