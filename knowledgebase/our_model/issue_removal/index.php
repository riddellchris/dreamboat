<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content.php";

paragraph_detailed('yes',8,9,8,"Most often, the simplest way to improve productivity networks is simply by observing, prioritising and removing issues that are attached to the networks themselves.");

paragraph_detailed('no',8,8,8,"While, quite clearly, issues can be defined as gaps between a given productivity network and the gold standard for similar networks.");

paragraph_detailed('no',8,8,8,"Far more often, these issues are found to be <a href='https://en.wikipedia.org/wiki/Qualitative_research' target='_blank'>qualitative</a> issues, 
    with <a href='https://en.wikipedia.org/wiki/Quantitative_research' target='_blank'>quantitative</a> signals, rather than purely quantitative.");
    
$copy = "A quantitative signal is like seeing 'smoke' in the terms of profit, time utilisations or other numbers that indicate there is an underlying issue to be resolved (the fire). Importantly you can't just try and 'wave' the smoke away in this scenario.";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/notifiers/comparative_analogy.php";

paragraph_detailed('no',8,8,8,"As we remove issues from specific edges within the network, the edge improves as does those around them.");

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/post_content.php";