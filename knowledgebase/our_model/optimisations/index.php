<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_detailed('no',10,10,10,"Further to our <a target='_blank' href='/knowledgebase/our_model/issue_removal/'>issue removal</a> process our optimisation engine focusses on identifying potential optimisations based on three distinct categories:"); 

list_start();
    point_detailed_start('no',8,8,8,"<span style='color:red;'>Structural problems</span> are normally indicated by incorrectly connected nodes.");point_end_only();
    list_start();
        point_detailed_start('no',8,8,8,"Connecting the wrong pricing model to the wrong target market.");
        point_detailed_start('no',8,8,8,"Connecting the wrong staff member(s) to the wrong tasks.");
        point_detailed_start('no',8,8,8,"Connecting the wrong assets to the wrong department.");   
        point_detailed_start('no',8,8,8,"Connecting the wrong technology to the wrong processes.");      
    list_end();

    point_detailed_start('no',8,8,8,"Thankfully these are often the simplest to identify as <a href='/knowledgebase/our_model/pilots/' target='_blank'>Pilots</a> carefully putting together each productivity network.");point_end_only();
    point_detailed_start('no',8,8,8,"Further to that, quantitative '<a href='https://en.wikipedia.org/wiki/Code_smell.' target='_blank'>smells</a>' of these structural problems are often found by comparative assessments of similar nodes.");point_end_only();
list_end();    

list_start();
    point_detailed_start('no',8,8,8,"<span style='color:red;'>Comparative problems</span> are normally indictated by quantitative issues between nodes or node sets when compared with the typical cohort of similar businesses.");point_end_only();
    list_start();
        point_detailed_start('no',8,8,8,"What ratio of a business in a target market's budget would normally be allocated to various elements of their business."); 
        point_detailed_start('no',8,8,8,"What ratio of management time is typically allocated ratio of a business in a target market's budget would normally be allocated to various elements of their business."); 
        //trust, communication knowledgegaps between people/groupsof peopoe
    list_end();
list_end();


list_start();
    point_detailed_start('no',8,8,8,"<span style='color:red;'>Predictive problems</span> are normally indictated by people and or businesses following similar patterns and then coming across similar issues in the future. By identifiying these potential issues and the best potential solutions based on historial/<a href='https://en.wikipedia.org/wiki/Backtesting' target='_blank'>backtested</a> data.");point_end_only();
 		//fact.php
		$copy = "This are without doubt the most exciting innovations that are truly world firsts.";		
		require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/notifiers/fact.php";   
	
	list_start();
//        point_detailed_start('no',8,8,8,"Seeing ahead of time the changing preferences of people or businesses that lead to faster."); 
    list_end();
list_end();

/*
<a href='https://www.investopedia.com/terms/b/backtesting.asp' target='_blank'>backtesting</a> processes and capability we are able to adivse businesses on almost endless numbers of optimisations collected in the list below. 
									While the list of optimisations seems almost endless - as much as we can many are collected in the following folders:");
*/
/*
list_start();
    point_detailed_start('no',8,8,8,"<a href='/knowledgebase/our_model/optimisations/structural/' 	target='_blank'>Structural</a>");				point_end_only();




    point_detailed_start('no',8,8,8,"<a href='/knowledgebase/our_model/optimisations/comparative/' 	target='_blank'>Comparative</a>");				point_end_only();




    
    point_detailed_start('no',8,8,8,"<a href='/knowledgebase/our_model/optimisations/predictive/' 	target='_blank'>Predictive</a>");				point_end_only();
list_end();
*/

//ideal number of referrers per target market
//different go to market strategies per target market as a result
    //this can be displayed as a set of nodes or many nodes

//optimal number of staff per manager per industry/job type

//process gold standard metrics for comparative processes across numerous industries

//time utilisations
//this all comes down to estimating the time spent per user and finding the optimal allocatins of these 
//freelancers are the most obvious because we can assess time spent working 
//then break down these times and use that to build up an optimsiation model for time spent working and doing things based on all the input received
//this is the easiest win based on expected and estimated time spent working
//obviously breaking this down into small and smaller chunks and fractions is the way to go but that's not something that I can promise today.
//it is quite clearly something that we can do moving into the future though

//obviously issue management is a critical element of all this, but it's not a critical problem today when it comes to the actual optimisation engine

//pricing
//this is pretty much the second one / area for most success
//clearly this data doesn't really exist very well so that's why we need to create it most

//connecting the dots between each page
//way down the track we will be able to use far more complicated mathematics to really truly understand and optimse the productivity "knockon effects of varied and complex arrangements"
//for now as of 21.06.30 time tracking, utilisation and optimisation is the most critical stuff to really optimise for and focus on probably for the next 6-12 months.

//all that's really required now is collecting more people finally :)

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";
