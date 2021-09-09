<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/disaster/part_1.php";

echo "<BR><BR>";
echo "<BR><BR>";
paragraph_detailed('no',9,10,10,"Sadly, worse still, is the per capita GDP improvement trends as they are much closer approximation of the standard of living across the country.");
paragraph_detailed('no',9,10,10,"This trend has fallen from around <span class='blink_me'>2.454%</span> around 1988 to only <span class='blink_me'>0.833%</span> around 2021 and is well on the way to heading backwards.");
paragraph_detailed('yes',10,10,10,"Unquestionably this will bring pain to the country for a horrifically long time if not sufficiently addressed by all of us.");
echo "<BR><BR>";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/charts/gdp_per_capita/div.php";
echo "<BR><BR>";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/facts/negative_gdp_per_capita.php";
echo "<BR><BR>";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/disaster/part_2.php";

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";