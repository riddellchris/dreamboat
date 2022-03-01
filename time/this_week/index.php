<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

//this can really be that connection between clients and time spent
//clearly there are other options here as well.
//i can probably white label things here

//ideally this can be split up by all those other things
//the biggest challenge here is just making sure that multiple charts fit
//the biggest challenge with that i think/beleive is the naming of each chart such that none of the functions mess each other up
//that's the critical element
//the absolute critical element - obviously



require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";