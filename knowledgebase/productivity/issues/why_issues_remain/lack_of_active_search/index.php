<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

		paragraph_detailed('no',8,8,8,"Most people are busy as it is just doing the work, so their ability to and or continuous attempts to improve their productivity are often limited. This also occurs because of their limited ability to actually make the appropriate changes to productivity themselves, so eventually they stop looking as hard, as often for ways to improve their productivity.");
		
		paragraph_detailed('no',8,8,8,"Without a continuous process to actually implement (and therefore reward looking for) productivity improvement active awareness or as we call it active search is often signficantly lower than it should be to remove as many productivity imperfections as possible.");
		
		
		//fact 
		$copy = "With appropriate implementation of such a process, active search often resumes and starts to drive significant change.";
		require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/notifiers/fact.php";
		
		
		
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";