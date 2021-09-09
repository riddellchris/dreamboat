<?php
if(!isset($_SESSION)){session_start();}
if($_SESSION['dreamboat_crew'] == 'yes'){	if(!isset($_SESSION['knowledgebase_productivity_issues'])){$_SESSION['knowledgebase_productivity_issues'] = 'examples';}}
else{						                if(!isset($_SESSION['knowledgebase_productivity_issues'])){$_SESSION['knowledgebase_productivity_issues'] = 'definition';}}

header("Location: /knowledgebase/productivity/issues/".$_SESSION['knowledgebase_productivity_issues']."/");
exit();
