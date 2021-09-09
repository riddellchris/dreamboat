<?php
if(!isset($_SESSION)){session_start();}

if(!isset($_SESSION['knowledgebase_critical_organisations_government'])){$_SESSION['knowledgebase_critical_organisations_government'] = 'budgets';}
header("Location: /knowledgebase/critical_organisations/government/".$_SESSION['knowledgebase_critical_organisations_government']."/");
exit();
