<?php
if(!isset($_SESSION)){session_start();}

if(!isset($_SESSION['knowledgebase_product_features'])){$_SESSION['knowledgebase_product_features'] = 'summary';}
header("Location: /knowledgebase/product/features/".$_SESSION['knowledgebase_product_features']."/");
exit();