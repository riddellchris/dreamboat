<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

require $_SERVER['DOCUMENT_ROOT']."/components/content/components/code.php";


echo "<style>
@media only screen and (max-width: 800px) {.prompt-font{margin-top:unset;} }
@media only screen and (min-width: 800px) {.prompt-font{margin-top:25vh;} }
</style>";


echo "<div class='prompt-font' style='".$container_div_class."max-width:800px;'>
	If we get sufficient uptake across the economy we will achieve the <a href='/solution/' style='color:red;' target='_blank'>solution</a> we are working towards and avoid all the <a href='/knowledgebase/economy/disaster/downside_risks/' style='color:red;' target='_blank'>downside risks</a> we are looking at as an economy.
	
	</div>";



echo "<br><br><br><br>";


require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";