<?php
if(!isset($_SESSION)){session_start();}

if($_GET['secondary_folder'] == 'standard'){$default_open = 'open';}
else{$default_open = 'not_open';}



copy_big_title_open('Our&nbsp;model&nbsp;of&nbsp;productivity&nbsp;improvement','our_model_of_productivity_improvement', $default_open);
	
	echo "<div class='content'>";
	
		paragraph("<span style='color:red;'>Awareness</span>");
		paragraph("The first step in any improvement process is awareness of the issues holding you back and our productivity improvement process is no different.<br>Further to helping you collect and categorise the issues impacting you, we draw out and help you identify the critical issues that we can see but an individual may be struggling to identify themselves.<br>Obviously after collecting all issues impacting productivity, some will start to resolve themselves of the course of time, simply as a result of increased & improved awareness.");
		
		paragraph("<span style='color:red;'>Prioritisation</span>");
		paragraph("With all the issues impacting productivity we capture and assess these issues in order to help each user prioritise, rank and group them as an intermediary step prior to targeted removal.<br>In this process, many issues are resolved as improvements are identified and discussed as part of the natural prioritistion process.<br>Most importantly though, the most critical issues with the biggest improvement potential rise to the top, ready for targeted removal.");
	
		
		paragraph("<span style='color:red;'>Targeted Removal</span>");	
		paragraph("Of the remaining, high priority issues & related improvements, we help each user tackle and remove them as appropriate with a targeted removal process that simply focusses on finding simple solutions to remove and or minimise the impact of these issues one step at a time.<br> Using prior experience and general intelect our Pilots discuss, strategise and plan the most appropriate methods to move forward in the coming days and weeks to ensure the greatest possible sustainable productivity improvments with each user.");
		
		$copy = "This process ultimately draws forward the most important productivity improvements from within your business, making improvement faster that it would otherwise be.";
		require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/endpoints/benefit.php";
		
		
		echo "<br><BR><BR><BR>";
	//	paragraph("<span style='color:red;'>Application to the original problems</span>");
		paragraph("As we apply this to individiuals, the productivity improvements, trickle up into the businesses that employ them, markets that those businesses engage in and ultimately the economies that house those markets.");
		
	//diagrams here for sure
	
	copy_title_close();
	
copy_big_title_close();