<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_detailed('no', 10, 8, 8, "Built on our <a href='/knowledgebase/productivity/assumptions/' style='color:red;' target='_blank'>assumptions</a> about who controls and drives productivity and therefore profitability, our model of trickle right up productivity and economics is built upon shared risk, reward and responsibility for productivity and profitability from the employee all the way up through to the business entity and ultimately through to the economy as a whole.");


paragraph_detailed('yes', 10, 8, 8, "As every employee is supported, encouraged and enabled to move towards the absolute gold standard of productivity for their role and position, everyone wins.");


paragraph_detailed('no', 10, 8, 8, "Due to advances in technology, especially business technology, individuals have far more impact and control over their own productivity than ever before so it is possible for everyone to benefit from this emerging opportunity.");

paragraph_detailed('no', 10, 8, 8, "Further to that with a failing economy, economic policies and a rapidly changing world the time is right to shift from the two extremes of wage driven 'grow and trickle down' economic mantras to the central position of trickle right up economics.");


echo "
<style>
@media only screen and (max-width: 768px) {.trickle_up_image{width: 100%;}}
@media only screen and (min-width: 768px) {.trickle_up_image{height:35vh;}}

</style>
";
echo "
<div style='width:100%; text-align:center;'>
<img src='/knowledgebase/further_reading/trickle_right_up_economics/diagrams/a_balanced_approach.svg' class='trickle_up_image'>
</div>
";

paragraph_detailed('yes', 10, 10, 10, "This way everyone wins from the employee right through to the economy as a whole.");

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";