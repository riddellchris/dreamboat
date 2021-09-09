<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

		paragraph_detailed('no',10,10,10,"Like any network there are nodes and links as below with nodes in purple and links in grey:");

		//productivity/network_productivity/symbology
		include_knowledgebase_image('/knowledgebase/productivity/network_productivity/symbology/diagrams/initial_node_design.svg', 'default', '65vh');


		paragraph_detailed('no',10,10,10,"In our productivity network analysis we denote the overall function of a link as a color spectrum from gold to grey and the thickness of the link by the overall value of that link, where gold is a well functioning link.");
echo "<br><br>";
		//productivity/network_productivity/symbology
		include_knowledgebase_image('/knowledgebase/productivity/network_productivity/symbology/diagrams/complex_node_design.svg', 'default', '65vh');

		paragraph_detailed('no',10,10,10,"Further to this, we place issues of varying impact on each line to represent the impact on a given link as below where the lighter the issue the less impact it has. It is important to note that a single issue can impact multiple links but in 2 dimensional diagrams this is not used to simplify both network diagrams and visual complexity.");
echo "<br><br>";
		//productivity/network_productivity/symbology
		include_knowledgebase_image('/knowledgebase/productivity/network_productivity/symbology/diagrams/issue_link_comparisons.svg', 'default', '65vh');

		paragraph_detailed('no',10,10,10,"Any issue can also be defined both qualitatively and it's impact defined quantitatively by the <a href='/knowledgebase/productivity/factors/' target='_blank'>factors of productivity</a>.<br> The exact symbology of this is currently evolving internally and therefore not currently displayed here.");
echo "<br><br>";


require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";