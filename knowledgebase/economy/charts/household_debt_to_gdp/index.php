<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

///notes////only to display on other things/ or if access it directly


require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/charts/household_debt_to_gdp/div.php";

paragraph_detailed('no', 10, 8, 8, "If this increases any more, we may never repay it.");



require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";

?>