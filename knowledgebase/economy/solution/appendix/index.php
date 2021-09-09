<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_detailed('yes',10,10,10,"While, we confess it seems wildly outrageous to suggest that <a href='/' target='_blank'>Dreamboat</a>, in any way whatsoever, would, could or should actually fill this role....");

paragraph_detailed('no',10,8,8,"We can't help but think that a new independent <span style='color:red;'> productivity improvement </span> body is required as a third pillar to economic stability.<br>
And we fear that given the low probability that anyone else thinks this problem is fixable we might actually be that institution.");


echo "<div style='width: 100%; text-align: center;'>";
	echo "<img src='/knowledgebase/economy/solution/appendix/diagrams/institutional.svg'  style='max-height:65vh;'>";
	echo "<br><br>";echo "<br><br>";
echo "</div>";

paragraph_detailed('no',10,8,8,"The objective of this institution and organisation would be to <span style='color:red;'>actively facilitate & expedite productivity improvement & wage growth</span> with every member of the workforce. Thereby enabling a functioning economic system for the 21st century, and avoiding the <a href='/knowledgebase/economy/downside_risks/' style='color:red;' target='_blank'>downside risks</a> that lie ahead.");

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";