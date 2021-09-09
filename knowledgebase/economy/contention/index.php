<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/contention/one_line_contention.php";

paragraph_detailed('yes',8,8,8, "Further to that, if we can get the vast majority of the country's workforce to improve their productivity 10% faster than they already are, then 
as some share of that flows through to wage increases above CPI increases we start to increase <a href='https://en.wikipedia.org/wiki/Real_wages' target='_blank'>real wages</a>.");

paragraph_detailed('no',8,8,8, "If we achieve this then we can start to support the asset prices at more normal/useful and functional interest rates.");
paragraph_detailed('no',8,8,8, "If we achieve this then assuming no more income tax decreases some level of sustainability will be achievable with Government spending.");
paragraph_detailed('no',8,8,8, "If we achieve this then growth can occur without more debt.");

paragraph_detailed('yes',8,8,8, "This all relies on better <a href='/knowledgebase/productivity/linear_productivity/'>productivity</a> starting at each and every individual.");

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";