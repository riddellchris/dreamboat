<?php
if(!isset($_SESSION)){session_start();}

//echo "hi";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";


point_detailed_start('no',10,10,10,"Overarching strategy");point_end_only();
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/implementation_plan/market_penetration/overarching_strategy.php";


list_start();
	point_detailed_start('no',4,10,10,"DONE - Very light 'introductory', community engagement");point_end_only();
list_end();

list_start();

	point_detailed_start('yes',10,10,10,"In person - 'seeding' events");point_end_only();
		list_start();
			point_detailed_start('no',8,8,8,"Benefit: the feedback in person here is very high - though frankly that seems almost unneeded now.");point_end_only();			
			point_detailed_start('no',8,8,8,"Fact: unquestionably this is the strongest suit");point_end_only();		
			point_detailed_start('no',8,8,8,"Issue: Obviously this will be a slower process than in cold calling");point_end_only();
			point_detailed_start('no',8,8,8,"Issue: the scalability of this is not ideal");point_end_only();
			point_detailed_start('no',8,8,8,"Benefit: the conversion ratio here is high - especially if very very confident.");point_end_only();
			point_detailed_start('no',8,8,8,"Fact though: this is perfect for initial drops into an area - without question.");point_end_only();		
			point_detailed_start('no',8,8,8,"Ideal scenario: calling ahead and getting 2-3 minutes and to arrive with folders - nail it.");point_end_only();				
		    list_start();
			    point_detailed_start('yes',8,8,8,"not critical");point_end_only();
		    list_end();              
			point_detailed_start('no',8,8,8,"Issue: Worse still it does impede on life as it's outside of standard business hours of me but that's OK for a short period");point_end_only();
		    list_start();
			    point_detailed_start('yes',8,8,8,"This is essential to seed the areas and industries that we can't otherwise crack via calling and connection links");point_end_only();
		    list_end();  


			point_detailed_start('no',8,8,8,"All that said if we can seed an area with an initial strike in person then Worse still it does impede on life as it's outside of standard business hours");point_end_only();
			//covid implemenations
			//bumps in the road
			//business card updates will be required
			//there seems to be some slight gap in terms of gathering business cards / takehome
			//I suspect a "light" 8 page handout (as opposed to a full on implementation document read: full economic plan would be awesome)
				//don't stress about this exactly - it will become clear in no time.
		    list_start();
                point_detailed_start('no',8,8,8,"Events");

               
		    list_end();  
		list_end();
 	point_detailed_start('no',3,3,4,"Cold calling");point_end_only();
		list_start();
			point_detailed_start('yes',10,10,10,"Requires great website first.");point_end_only();			
			point_detailed_start('no',3,3,4,"Issue: culturally off nothing is bad but works PERFECTLY if done connecting futher dots");point_end_only();
			point_detailed_start('no',6,6,6,"Fact: Might become possible as soon as the website is done.");point_end_only();	
			point_detailed_start('no',6,6,6,"Fact: Might be required if COVID continues to be a real pain.");point_end_only();					
			point_detailed_start('yes',6,6,6,"Unquestionably though, the strongest suit will be me in person.");point_end_only();		
			//this needs the abstract - which should match the abstract in terms of the 5 slides
			//any follow up emails would just be a link to the knowledgebase here.
			//while obviously strength will be to hit the same people multiple times
			//cold calls should run industry verticals
				//starting with mortgage brokers
				//then finance brokers
				//work our way onwards and upwards from there
				//if in person shows some very very easy verticals to change directions then do so
				//other wise press on and make it stick

		list_end();
	point_detailed_start('yes',8,10,10,"Connection calling & engagement");point_end_only();
		list_start();
			point_detailed_start('no',8,8,8,"Essentially following up on / leveraging initial connections made then we can call leverage the mission and reach out to them from there");point_end_only();
			point_detailed_start('no',8,8,8,"This requires notes '@mentions' and ideally mapping to be completely but this isn't essential");point_end_only();
		    list_start();
			    point_detailed_start('yes',8,8,8,"This still remains the primary mode but growth but certainly NOT the intial mode of execution");point_end_only();
		    list_end(); 
		    	list_start();			
                point_detailed_start('no',8,8,8,"&nbsp;&nbsp;'Shop' walkins -- could work with economic plan drop ins");
		    	list_start();
                	point_detailed_start('no',8,8,8,"There is some/plenty of vailidity to this where needed");
			    list_end(); 
		    list_end();
		list_end();
	

    point_detailed_start('no',8,8,8,"&nbsp;&nbsp;Media spots"); 
		list_start();
			point_detailed_start('yes',8,8,8,"&nbsp;&nbsp;Requires some progress first?");
			point_detailed_start('no',8,8,8,"&nbsp;&nbsp;Sunrise, The business, Alan Kohler");
				list_start();			
					point_detailed_start('no',5,5,5,"The way to start this is to start write and respond to major developments in this area. Perhaps I start working for Josh or for Tim or treasury or I do it myself. Either way is no big issue.");
					point_detailed_start('no',8,8,8,"I think it's critical to wait for this corflute to be ready and stick to that plan.");
					
				list_end();	
			point_detailed_start('no',8,8,8,"Meeting people at events is critical too.");
			point_detailed_start('no',8,8,8,"Eventually hiring someone to help make it happen regularly will be key.");
		list_end();	

	point_detailed_start('no',8,8,8,"Networking with Tim Smith & Josh Frydenberg, liberal party events");	
		list_start();	
			point_detailed_start('no',5,4,3,"Requires - most likely progress first");point_end_only();
		list_end();

	point_detailed_start('no',5,4,3,"Follow up with digital advertising");point_end_only();
		list_start();	
			point_detailed_start('no',5,4,3,"Effectively brand building 'psy ops' as <a href='https://www.youtube.com/watch?v=wKi3NwLFkX4' target='_blank'>General Schwarzkopf</a> would call them");point_end_only();
				list_start();	
					point_detailed_start('no',5,4,3,"Requires - money first from paying clients");point_end_only();
				list_end();

		list_end();



list_end();



require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";
