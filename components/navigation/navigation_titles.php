<?php
if(!isset($_SESSION)){session_start();}

unset($navigation_titles);
$navigation_titles = array();

if(isset($_SESSION['dreamboat_crew'])){
	if($_SESSION['dreamboat_crew'] != 'yes'){
		$navigation_titles['call'] 				= 'Go on, call as much as you need to.';
		$navigation_titles['account'] 			= 'All your account based fun.';
	//	$navigation_titles['admin'] 			= 'All those clients, and you.';	//not really 
		$navigation_titles['notifications'] 	= '';
		$navigation_titles['messages'] 			= 'Communications central.';
		$navigation_titles['results'] 			= 'How your results are improving.';
		$navigation_titles['time'] 				= 'Where your time is going.';
		$navigation_titles['wheelhouse'] 		= 'What you&#39;re working towards.';
		$navigation_titles['issues'] 			= 'Issues impacting your productivity.';
		$navigation_titles['improvements'] 		= 'Ways to improve your productivity.';
		$navigation_titles['management'] 		= 'General management tracking & improvement.';
		$navigation_titles['marketing'] 		= 'Marketing, planning, tracking and improvement.';
		$navigation_titles['sales'] 			= 'Tracking your sales productivity.';
		$navigation_titles['biz_dev'] 			= 'All your BD fun!';
		$navigation_titles['network'] 			= 'Your commercial network.';
		$navigation_titles['profile'] 			= 'The business you work for.';
		$navigation_titles['business'] 			= 'All about you.';
	}
	if($_SESSION['dreamboat_crew'] == 'yes'){
	//	$navigation_titles['call'] 				= 'Go on, call as much as you need to.';
		$navigation_titles['account'] 			= 'All your account based fun.';
	//	$navigation_titles['admin'] 			= 'All those clients, and you.';	//not really 
		$navigation_titles['notifications'] 	= '';
		$navigation_titles['messages'] 			= 'Communications central.';
		$navigation_titles['results'] 			= 'How your results are improving.';
		$navigation_titles['time'] 				= 'Where your time is going.';
		$navigation_titles['wheelhouse'] 		= 'What you&#39;re working towards.';
		$navigation_titles['issues'] 			= 'Issues impacting your productivity.';
		$navigation_titles['improvements'] 		= 'Ways to improve your productivity.';
		$navigation_titles['management'] 		= 'General management tracking & improvement.';
		$navigation_titles['marketing'] 		= 'Marketing, planning, tracking and improvement.';
		$navigation_titles['sales'] 			= 'Tracking your sales productivity.';
		$navigation_titles['biz_dev'] 			= 'All your BD fun!';
		$navigation_titles['network'] 			= 'Your commercial network.';
		$navigation_titles['profile'] 			= 'The business you work for.';
		$navigation_titles['business'] 			= 'All about you.';
	}		
}