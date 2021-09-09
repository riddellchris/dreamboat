<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/charts/interest_rate_chart/script.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/charts/household_debt_to_gdp/script.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/charts/gdp/script.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/charts/gdp_percentage_change/script.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/charts/gdp_per_capita/script.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/charts/gdp_per_capita_target/script.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/charts/wages/script.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/charts/productivity/script.php";