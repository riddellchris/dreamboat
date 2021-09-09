<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_detailed('no',10,10,10,"Our technology brings together numerous data sources to provide & predict the most beneficial productivity improvements for each person every day.");

paragraph_detailed('no',9,8,8,"Combining:");
list_start();
    point_detailed_start('no',8,10,10,"SaaS application data via basic exports & API connections");
    point_detailed_start('no',8,10,10,"Pilot inputs &");
    point_detailed_start('no',8,10,10,"...in some test cases direct user inputs too.");			
list_end();

paragraph_detailed('no',9,8,8,"The Dreamboat Productivity Optimisation engine is able to assess the productivity networks of each user and find the fastest and best ways to improve their productivity.");


echo "<br>";
paragraph_detailed('yes',9,8,8,"Our platform");
paragraph_detailed('no',9,8,8,"Currently available to Pilots and a handful of test clients, our platform brings together all this data for users to view their productivity networks, add to and optimise them in one simple interface.");

//paragraph_detailed('yes',9,8,8,"Our platform");
//paragraph_detailed('no',9,8,8,"Currently available to Pilots and a handful of test clients, our platform brings together all this data for users to view their productivity networks, add to and optimise them in one simple interface.");


require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";