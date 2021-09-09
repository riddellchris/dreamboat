<?php
if(!isset($_SESSION)){session_start();}

if(	$_GET['primary_folder'] == 'legal' OR
	$_GET['secondary_folder'] == 'standard'){$default_open = 'open';}
else{$default_open = 'not_open';}

copy_big_title_open('Current&nbsp;Product&nbsp;Disclosure','current_product_disclosure', $default_open);


if(	$_GET['primary_folder'] == 'legal'){$default_open = 'open';}
else{$default_open = 'not_open';}


	copy_title_open('Introduction','current_product_disclosure_introduction',$default_open);
		paragraph("Dreamboat is a structured workforce productivity improvement system built with both technology and people to ensure optimal workforce productivity improvement amongst:");
		
		/*
		echo "
			<div style='margin-left: 6vw;margin-right:6vw;margin-top:10vh;'>
				<div id='business_owner' class='icon_divs' style='width:33%;float:left;margin-left:auto;margin-right:auto;'>";
				require $_SERVER['DOCUMENT_ROOT']."/components/diagrams/icons/business_owner.php";
		echo "		</div>
				<div id='manager' style='width:33%;float:left;'>";
				require $_SERVER['DOCUMENT_ROOT']."/components/diagrams/icons/manager.php";		
		echo "		</div>
				<div id='staff_member' style='width:33%;float:left;'>";
				require $_SERVER['DOCUMENT_ROOT']."/components/diagrams/icons/staff_member.php";		
		echo "		</div>
			</div>";
		echo "
			<div style='margin-left: 6vw;margin-right:6vw;margin-bottom:6vh;clear:left;'>
				<div id='business_owner' style='width:33%;float:left;text-align:center;'>Owners & Directors</div>
				<div id='manager' style='width:33%;float:left;text-align:center;'>Managers</div>
				<div id='staff_member' style='width:33%;float:left;text-align:center;'>Front line staff</div>
			</div>";	
		*/	
			
			echo "<img src='/knowledgebase/components/sections/current_product_disclosure/diagrams/user_types.svg' style='width:100%;'>";	
		
			
		paragraph("Our model utilises both humans and technology because humans are essential to help observe productivity issues and patterns that the users themselves cannot see, and with recurring experience are able to guide and expedite productivity improvement above and beyond that of any individual user themselves.");
		
		
		
		
		//simple fa diagram 1	
		echo "<br><br><br><br><br><br><br>";
		
		
		
		
		paragraph("Technology on the other hand provides for both day to day client integration and the reliability of our improvement capacity.");
		
		paragraph("<br><span style='color:red;font-size:larger;'>The principle benefit of engaging Dreamboat is that we are all about productivity improvement, not management, and to do this we turn each and every employee of a business into an agent of productivity improvement as we help enable them to identify, prioritise and resolve productivity issues in themselves as well as around their daily operations to drive the business forward.</span>");
		
		//single agents of change
		//layout with three layers and only 1 really looking at productivity 
		
		
		
		
		
		
		echo "<br><br><br><br><br><br><br>";
		
		
		//all agents of change
		echo "<br><br><br><br><br><br><br>";
		
		
		
		
		paragraph("This approach not only lowers the burden of productivity improvement on owners, directors and managers but encourages an entire company in continuous productivity improvement for optimal results and a clear focus of the best way for everyone to get what they want from the company.");
	copy_title_close();
	
	
	
	
	
	
	
	
	
	
	
	
	
	copy_title_open('Process','process',$default_open);
		paragraph("Our process is all about the identification, prioritisation and resolution of issues impacting productivity with each and every employee in an organisation in such a way that over time less productivity sapping issues exist and therefore productivity improves. As a by-product of this process, less stress and improved workplace mental health is typically found as a result.");
		paragraph("As each individual goes through their day they observe or 'smell' productivity issues of all sorts within any organisation but what happens with those smells is critical to continuous productivity improvement.");
		
		/*	rubbish diagram	*/
		echo "<br><br><br><br><br><br><br>";
		

		
		
		paragraph("
		We begin each engagement by selecting appropriate measures of productivity for each individual, be that financial or other KPIs. These may be predefined by the business or if they are not presently defined our Pilots will assist with each user to define set these objectives based on comparative examples and the specific business environment.<br>
		<br>
		Following the selection of a key productivity indicator we actively work with each client to work in the direction of improved productivity by removing the issues that are occurring and defining simple improvements that can be undertaken to rectify and/or remove these issues as required.");
	
		echo "<br><br><br><br><br><br><br>";	
		/*	activities charts
			issues removal charts	*/	
	copy_title_close();
	
	
	
	
	
	
	
	
	
	
	copy_title_open('Pilots','pilots',$default_open);
	
		paragraph("Our Pilots are the ones working with you each and every day to improve your productivity.");	
		paragraph("Built to help you observe, track and tackle your productivity in a simple constructive way, Dreamboat’s Productivity Pilots are experts at helping individual members of the workforce improve their productivity. Managing a curated user list to maximise their expertise in a specific domain all our Pilots track, manage and optimise the productivity of their users via our platform to ensure optimal reliability of service.");
		paragraph("Typically from a Business Analyst, Marketing Analyst, Mathematics, Commerce and Engineering backgrounds our Pilots bring intelligence and simple guidance to every engagement. Managing anywhere between 50 and 80 clients at any one time, there is nothing they haven’t seen before and ultimately end up with a gut to guide them further to our technology if people are on track or not.");
	copy_title_close();
	
	
	
	
	
	
	copy_title_open('Technology','technology',$default_open);
		paragraph("At the heart of all Dreamboat’s services is our technology that takes in all data sources to provide optimal control and improvement inline with the goal of steady productivity improvement within the target range of 10-20% every 6 months.");
		paragraph("This platform can be accessed at <a href='/'>www.dreamboat.com.au</a>.");
		
		
		$copy = "Ask your pilot for a walkthrough / guided tour if you haven't already.";
		require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/endpoints/hint.php";
		
		
		paragraph("Central to the success of our technology is our automated prompting system that pulls together all previous system inputs to optimise the effectiveness of our Pilots by enabling them to ask the most pertinent question at the most pertinent time to each and every client.");
	copy_title_close();
	
	
	
	
	
	
	copy_title_open('Services','services',$default_open);
	paragraph("To provide a complete suite of products in such a way to tackle productivity improvement and workplace mental health at a price and budget to suit all situations our services include:");
	list_start();
		point("Workplace mental health support");
		point("Platform access");
		point("Text consulting &");
		point("Audio consulting");
	list_end();
	
	
	$copy = "Workplace mental health(iness) and productivity are highly correlated";
	require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/endpoints/fact.php";
	
	
	paragraph("
	Our workplace mental health support comes in the for of unlimited text based conversations with our Pilots about concentration, stress, confidence and other issues impacting performance. Free for all Australian workplaces we offer this service to ensure that everyone has some access to the support they need.<br>
	<br>
	Platform access is often used by small businesses to manage and improve their own performance by themselves as they track and manage their business. Our CRM, task management, improvement and issue tracking is optimised to improve productivity and manage workplace mental health at the same time providing a unique solution to small business ERP.<br>
	<br>
	Text consulting ensures unlimited ongoing conversations about all the issues currently at place for each user. Rather than ongoing, messy email conversations our platform ensures simple structured communication and progress tracking across everything each user has going on.");
	
	paragraph("Audio/phone consulting provided in 4 levels:");
	list_start();
		point("Monthly half hour");
		point("Fortnightly half hour");
		point("Weekly half hour &");
		point("Weekly hour");
	list_end();
	paragraph("
	Consultations ensure that no matter the current level of challenge and desired productivity improvement there is a solution that fits each user’s situation.<br>
	<br>
	Most popular for staff are fortnightly half hour consultations such that some productivity improvement can be made while output is not impacted.<br>
	<br>
	Most popular for Owners, Directors and Managers is weekly half hour consultations such that stress is reduced and optimal productivity is ensured.<br>
	<br>
	Where productivity maintenance or a sense of workforce inclusion is required, monthly half hour sessions are possible and in extreme cases hour long sessions may be required for short period but not recommended for any longer than 2-3 months.<br>
	<br>
	Most consultations are limited to half-an-hour to ensure that they are effective & proactive while not taking up endless time and attention. Typically these conversations are completed at a regular “down time” the user has in the office, on the road or within their weekly workload.");
	copy_title_close();
	
	
	echo "	
	<style>
		#pricing_details{width:100%;}
	</style>
	";
	copy_title_open('Pricing','pricing',$default_open);
	echo "
		<style>
			.pricing_cell{padding: 0px;vertical-align:top;}
		</style>
	
		<table style='color:#281e96;padding: 0px;margin-top: 25px;margin-left:auto;margin-right:auto;max-width:600px;vertical-align:top;'>
			<tr><td style=''>&nbsp;</td><td style='text-align:right;'></td></tr>
			<tr><td class='pricing_cell'>DIGITIAL WORKPLACE MENTAL HEALTH SUPPORT		</td><td style='text-align:right;'>FREE</td></tr>
			<tr><td class='pricing_cell'>&nbsp;</td><td style='text-align:right;'></td></tr>
			<tr><td class='pricing_cell'>PLATFORM ACCESS	</td><td style='text-align:right;'>$20 +GST per user per month</td></tr>
			<tr><td class='pricing_cell'>&nbsp;</td><td style='text-align:right;'></td></tr>		
			<tr><td class='pricing_cell'>UNLIMITED TEXT CONSULTING<br>Includes platform access		</td><td style='text-align:right;'>$50 +GST per user per month*</td></tr>		
	
			
			<tr><td class='pricing_cell'>&nbsp;</td><td style='text-align:right;'></td></tr>		
			<tr><td class='pricing_cell'>AUDIO CONSULTING</td><td style='text-align:right;'></td></tr>		
			<tr><td class='pricing_cell'>Monthly, half hour phone consultations </td><td style='text-align:right;'>$50+GST per user per month*</td></tr>
			<tr><td class='pricing_cell'>Fortnightly, half hour phone consultations</td><td style='text-align:right;'>$100+GST per user per month*</td></tr>
			<tr><td class='pricing_cell'>Weekly, half hour phone consultations </td><td style='text-align:right;'>$200+GST per user per month*</td></tr>
			<tr><td class='pricing_cell'>Weekly, hour long phone consultations</td><td style='text-align:right;'>$400+GST per user per month*</td></tr>
			<tr><td class='pricing_cell' colspan='2'>All audio consulting includes text consulting, platform access and digital workplace mental health support.</td></tr>		
			<tr><td class='pricing_cell'>&nbsp;</td><td style='text-align:right;'></td></tr>		
			<tr><td class='pricing_cell'>&nbsp;</td><td style='text-align:right;'></td></tr>	
			<tr><td class='pricing_cell' colspan='2'>
			*Our staffing tiers further to this Junior Pilot pricing do increase $25AUD + GST for weekly meetings and pro-rata for other services that require consultants.<br><br>
			Weekly & Fortnightly sessions are held barring illness, injury or typical holiday allowances of each user’s Pilot, therefore allowing maximum continuity.<br><br>
			
			</td></tr>		
		</table>";
	
	copy_title_close();
	
	copy_title_open('Suggested investments', 'suggested_investments',$default_open);
		paragraph("While we have numerous services, the best performance improvement typically results from weekly Pilot conversations for managers, owners and directors and fortnightly conversations for staff members.<br><br>Therefore the suggested investments are:");
		paragraph("
		$100 per month per staff member and 2x30 minutes of that staff members time a month in such a way that it’s the lowest producing time possible has the least negative impacts on that business possible ever either.");
		paragraph("$200 per month per manager, director or owner and 4x30 minutes of that staff members time a month in such a way that it’s the lowest producing time possible has the least negative impacts on that business possible ever either.");
		
	//	echo "<br><br><br><br><br><br><br>";	
		/*	
		cost calculator
		*/	
		
	copy_title_close();
	
	
	
	
if(	$_GET['primary_folder'] == 'legal' OR
	$_GET['secondary_folder'] == 'standard'){$default_open = 'open';}
else{$default_open = 'not_open';}	
	
	copy_title_open('Expected Benefits', 'expected_benefits',$default_open);
if(	$_GET['primary_folder'] == 'legal'){$default_open = 'open';}
else{$default_open = 'not_open';}	
		paragraph("<span style='color:red;'>In general</span>");
	//	paragraph("Beyond the obvious financial incentive and productivity improvement, other benefits primarily include:");
		list_start();
			point("Complete identification of all issues limiting an individuals productivity.");
			point("Systematic support, advice and encouragement to remove issues limiting productivity.");
			point("A consistent focus & reminders about productivity improvement.");
			point("Optimisation of, and drawing forward of internal productivity improvements.");		
			point("Overall improved productivity & financial reward.");
		list_end();
	
	echo "<br>";	
		paragraph("<span style='color:red;'>For you</span>");
		paragraph("Beyond the obvious financial incentive and productivity improvement, other benefits primarily include:");
		list_start();
			point("Less management stress and the path forward becomes simple and reliable.");
			point("Greater simplicity and reliability in your daily workloads.");
			point("An improved ability to switch off at the end of every day.");
		list_end();
	
	echo "<br>";
	
		paragraph("<span style='color:red;'>For your business</span>");
		paragraph("Further to simply reducing costs and improving productivity there are other business benefits:");
		list_start();
			point("Simplified processes and more employee trust.");
			point("Steady consistent progess towards better productivity across the entire company.");
			point("More internal motivation from employees.");
			point("Better marketing efficiency due to improved message clarity");		
		list_end();
	
	echo "<br>";
	
	
	
		paragraph("<span style='color:red;'>For your country</span>");
		paragraph("While your business is not a charity for the country, some of the benefits of joining Dreamboat to improve your business' productivity will flow onto country wide benefits.");
		list_start();
			point("Improved productivity.");
			point("Greater economic stability.");			
			point("A general transition back to a functioning economy over the next 10-15 years.");			
		list_end();	
		
	
	
	copy_title_close();
	
	
	
	
	
	
	
	
	
	copy_title_open('Initial engagement periods','initial_engagement_periods',$default_open);
	echo "At Dreamboat we like to keep things simple so our initial engagement period is always one month.";
	copy_title_close();
	
	
	
	
	
	
	copy_title_open('Risks','risks',$default_open);
	echo "While trying to achieve these productivity improvements there are two principal risks listed below that impact our ability to deliver these returns that it is important to be aware of:<br><br>
	
	<span style='color:red;'>Market downturn risk</span><br>
	Sometimes there is a real market downturn, within a company or within the economy for the skills and services you provide, for example as bar-keep at the end of any gold rush, however other than structural market-place adjustments or severe economic downturns in any established economy these risks remain minimal so long as your business, or business pursuit is not chasing short term market opportunities, as such we only encourage the construction and improvement of businesses for the longer term.<br>
	<br>
	<span style='color:red;'>Unforeseen personal issues</span><br>
	Unfortunately people do get sick and things happen that require substantial mental energy above and beyond the abilities of the users ability in the short term to take great or any steps forward in their productivity because they are so consumed by these external circumstances. In such instances Dreamboat may provide a consistent supportive and encouraging perspective but we are not always able to maintain or improve performance with those users.";
	copy_title_close();
	
	
	
	
	
	
	
	copy_title_open('Reporting','reporting',$default_open);
	echo "Most if not all reporting is completed on a user by user basis but on the odd occasion verbal and or numerical reporting is requested from our clients on a specific user. Typically we do discuss general user progress with our clients but to ensure maximum effectiveness a level of user confidentiality is maintained.";
	copy_title_close();
	
	
	
	
	
	copy_title_open('Payments','payments',$default_open);
	echo "
	All payments are due prior to engagement with and use of the Dreamboat service. Dreamboat reserves the right to withhold and/or withdraw its service at any point that payments are behind schedule.";
	copy_title_close();
	
	
	
	
	
	
	
	copy_title_open('Refunds & Exit Clauses','refunds_and_exit_clauses',$default_open);
	echo "
	If at any point you are unhappy with the service provided by Dreamboat please write to us at <a href='complaints@dreamboat.co'>complaints@dreamboat.co</a> or tell your Productivity Pilot and we will deal with your issues as fast as possible.<br>
	<br>
	Our process for dealing with complaints includes a complete review of all data points relevant to your account, the specific user(s) of the service, comparative data for users and industries that we have on our service and any other notes that we have on your file. If it is deemed that we have failed to provide sufficient service, then a refund is due, however where it is deemed you are clearly and definitively suffering from one of the key risk factors in purchasing this product further discussion is required to either address the associated risk factor or release you from your contract in order to achieve the best outcome for both parties.";
	copy_title_close();

end_of_title_div();

copy_big_title_close();