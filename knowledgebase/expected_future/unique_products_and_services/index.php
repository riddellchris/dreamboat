<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_detailed('no',8,8,8,"As we bring together all these technologies in fundamentally new ways, new opportunities to future improve the productivity of our clients and users will undoubtedly appear and we intend to deliver on these to add yet more strings the bow of productivity improvment reliability that we provide for our clients. In order to ensure we can deliver these products our focus will be on:");	
list_start();		 
    point_detailed_start('no',8,8,8,"Building all our systems internally to support build a rich ecosystem of tools ready for user deployment as and when appropriate.");point_end_only();
    point_detailed_start('no',8,8,8,"Ensuring that we work towards productivity improvement systems not just productivity management systems.");point_end_only();
    point_detailed_start('no',8,8,8,"Building modular tools, such as a logistics engine for transport companies as well as mobile tradies, as opposed to rigid, industry specific solutions."); point_end_only();
    point_detailed_start('no',8,8,8,"Continously and clearly defining & measuring investment into new technology.");point_end_only();
list_end();

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/facts/future_product_extentions.php";
		
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";