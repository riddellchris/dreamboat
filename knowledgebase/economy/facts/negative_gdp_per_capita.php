<?php
if(!isset($_SESSION)){session_start();}

$copy = "Negative growth is equivalent to a decrease in our standard of living, as <a href='https://www.investopedia.com/terms/p/per-capita-gdp.asp' target='_blank'>GDP per capita</a> is proportional to our standard of living.";
//this is all we are saying re mental health, environment etc
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/notifiers/fact.php";

?>