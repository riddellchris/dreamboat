<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";



paragraph_detailed('no',8,8,8,"The most critical expected outcomes will be to avoid:");
list_start();
    point_detailed_start('no',8,10,10,"The list of significant <a href='/knowledgebase/economy/downside_risks/' target='_blank'>downside risks</a>.");
    point_detailed_start('no',8,10,10,"Other <a href='/knowledgebase/economy/other_real_world_implications/' target='_blank'>real world implications</a>.");
    point_detailed_start('no',8,10,10,"And a serious degradation of the way of life in Australia.");   
list_end();

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";