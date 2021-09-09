<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_detailed('no',8,10,8,"Our productivity contention is that: to create individual productivity improvement, all that is required is to remove all the reasons that <a href='/knowledgebase/productivity/issues/why_issues_remain/' target='_blank'>productivity issues remain,</a> thereby turning:");

echo "
<style>
//@media only screen and (max-width: 1250px) {	.productivity_contention_images{max-width:25vw;}
//						
//							}
@media only screen and (min-width: 1250px) {.productivity_contention_images{max-height:40vh;}}
.productivity_contention_images_into{max-width:30vw;margin-left:auto;margin-right:auto;display:block;}
</style>";


echo "<img src='/knowledgebase/productivity/contention/diagrams/productivity_issues_daisy_chain.svg' class='productivity_contention_images'></img>";
//paragraph_detailed('no',8,10,8,"Into:");
echo "<br><BR><BR><BR>";
echo "
	<div style='width:100%;'>
	<img src='/knowledgebase/productivity/contention/diagrams/into.svg' class='productivity_contention_images_into'></img>
	</div>
";
echo "<br><BR><BR><BR>";
echo "<img src='/knowledgebase/productivity/contention/diagrams/productivity_issues_daisy_chain_with_dreamboat.svg' class='productivity_contention_images'></img>";

paragraph_detailed('no',8,10,8,"Our contention is that if a product and process satisfies that in such a way that it more than pays for itself, then the <a href='/knowledgebase/economy/contention/' target='_blank'>economic contention</a> will be true, and the <a href='/knowledgebase/economy/problem/' target='_blank'>economic problem</a> will be solved too.");

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";