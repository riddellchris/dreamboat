<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_detailed('yes',10,8,8,"Can't I just do this myself/ourselves?");
paragraph_detailed('no',8,8,8,"You can try but what we find is that most people's ability to do this themselves is often spasmodic, inconsistent and lacking the appropriate skills and abilities that we bring by doing this all day every day.");


paragraph_detailed('yes',10,8,8,"What benefits do I get?");
paragraph_detailed('no',8,8,8,"To learn more about the outputs to expect <a href='/knowledgebase/current_product_disclosure/expected_outputs/' target='_blank' style='color:red;'>click here</a>.");

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";