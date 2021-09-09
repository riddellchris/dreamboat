<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_detailed('yes',10,9,8, "Innovation is king.");
paragraph_detailed('no', 8, 8, 8, "If we look back at what we were doing 6 months ago and think it’s still awesome today then we aren’t innovating fast enough. It might still work, it might still be useful but if our perspective hasn’t improved far enough in that time to see many potential improvements then we are probably failing somewhere somehow.");

echo "<br>";
paragraph_detailed('yes', 10, 8, 8, "Try and do what’s right.");
paragraph_detailed('no', 8, 8, 8, "We can’t always be perfect or do what’s best but we should always do what’s best for most of us using the best data we have available.");	


echo "<br>";
paragraph_detailed('yes', 10, 8, 8, "Be comfortable on the edge.");	
paragraph_detailed('no', 8, 8, 8, "As we dive further and further into unknown territories or maths, science, business, economics and technology we must be comfortable to explore the unknown and discover what we discover along the way.");	



require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";