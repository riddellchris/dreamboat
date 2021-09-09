<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_detailed('yes',8,8,8, "If we can get the vast majority of the countries workforce to improve their productivity in the order of 5-10% p.a. with a stretch goal of 10-20% every 6 months for each member of the workforce, then 
as some share of that flows through to wage increases above CPI increases we start to increase real wages.");

paragraph_detailed('no',8,8,8, "If we achieve this then we can start to support the asset prices at more normal/useful and functional interest rates.");
paragraph_detailed('no',8,8,8, "If we achieve this then assuming no more income tax decreases some level of sustainability will be achieveable with Government spending.");
paragraph_detailed('no',8,8,8, "If we achieve this then growth can occur without more debt.");

paragraph_detailed('yes',8,8,8, "This all relies on better <a href='/knowledgebase/productivity/'>productivity</a> starting at each and every individual.");

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";