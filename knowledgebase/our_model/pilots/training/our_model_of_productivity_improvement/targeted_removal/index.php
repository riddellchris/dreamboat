<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

		paragraph_detailed('no',8,8,8,"Of the remaining, high priority issues & related improvements, we help each user tackle and remove them as appropriate with a targeted removal process that simply focusses on finding simple solutions to remove and or minimise the impact of these issues one step at a time.");
		
		paragraph_detailed('no',8,8,8,"Using prior experience and general intelect our Pilots discuss, strategise and plan the most appropriate methods to move forward in the coming days and weeks to ensure the greatest possible sustainable productivity improvments with each user.");
		
		$copy = "This process ultimately draws forward the most important productivity improvements from within your business, making improvement faster that it would otherwise be.";
		require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/notifiers/benefit.php";
		



		
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";