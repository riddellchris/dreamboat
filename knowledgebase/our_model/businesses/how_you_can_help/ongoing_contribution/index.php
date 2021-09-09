<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";


//it's a pretty simple process really.
//$100 a month per month per staff member
//we'll talk to them every other week for half an hour
//both of you will gain from improved productivity and it's that simple

paragraph_detailed('yes',10,10,10, "If after your initial trial, working with us helps you and your team, keep working with us as required and desired.");

paragraph_detailed('yes',10,10,10, "It's that simple, it really is.");

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";