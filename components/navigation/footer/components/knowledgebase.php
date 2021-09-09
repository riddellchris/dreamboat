<?php
if(!isset($_SESSION)){session_start();}

echo "<a class='nav-links long' href='/knowledgebase/' title='Yes we believe it should be just one single, meaningful word.' ";
if(check_url('knowledgebase') == 1){echo "style='color:#63f263;margin-top: 18px;'";}
echo ">knowledgebase</a>";

if($_GET['primary_folder'] != 'slideshow' AND $_GET['secondary_folder'] != 'letter'){	
	echo "<a class='nav-links short' href='/knowledgebase/'";
	if(check_url('knowledgebase') == 1){echo "style='color:#63f263;margin-top: 18px;'";}
	echo ">k'base</a>";	
}