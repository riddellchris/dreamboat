<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/url_and_folder_functions.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";
?>

<div id="anticipated_development_sequences" style="width: 100%; height: 100vh;"></div>


<div id="anticipated_timings" style="width: 100%; height: 100vh;"></div>


<?php
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";
