<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_detailed('no',8,10,8,"Productivity networks are everywhere from individual transactions between two people, to businesses and economies. On a network issues that effect one effect all.");


paragraph_detailed('no',8,10,8,"In the transaction below <a target='_blank' href='/knowledgebase/productivity/resistance/' style='color:red;'>resistance</a> is the summation of the issues related to both people in the transaction, ultimately limiting both people's productivity.");

//productivity/networks
include_knowledgebase_image('/knowledgebase/productivity/networks/diagrams/transaction.svg', 'default', '65vh');


paragraph_detailed('no',8,10,8,"As you lower the issues of one user productivity of both people increases.");
paragraph_detailed('no',8,10,8,"The same can be said for businesses interacting and economies interacting.");
paragraph_detailed('no',8,10,8,"Most importantly as you remove issues and improve productivity around one person, it is removed from the business, which is removed from the economy so microeconomic changes ultimately impact macro economic indicators as per our <a href='/knowledgebase/economy/contention/' target='_blank'>economic contention</a>.");





require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";