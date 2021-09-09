<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/url_and_folder_functions.php";




if(check_primary_folder('legal') != 1){
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";
}

		paragraph_detailed('no',8,8,8,"Our Pilots are the ones working with you each and every day to help you navigate to better productivity using the Dreamboat platform.");		
			
		paragraph_detailed('no',8,8,8,"Built to help you observe, track and tackle your productivity in a simple constructive way, Dreamboat’s Productivity Pilots are experts at helping individual members of the workforce improve their productivity. Managing a curated user list to maximise their expertise in a specific domain all our Pilots track, manage and optimise the productivity of their users via our platform to ensure optimal reliability of service.");
		paragraph_detailed('no',8,8,8,"Typically from a Business Analyst, Marketing Analyst, Mathematics, Commerce and Engineering backgrounds our Pilots bring intelligence and simple guidance to every engagement. Managing anywhere between 50 and 150 clients at any one time, there is nothing they haven’t seen before and ultimately end up with a gut to guide them further to our technology if people are on track or not.");


if(check_primary_folder('legal') != 1){
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";
}