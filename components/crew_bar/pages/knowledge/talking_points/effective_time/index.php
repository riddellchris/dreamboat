<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

//helping people slowly identify where time is being lost or wasted helps at every step of the way.
//be it endless product research
//inefficient systems
//poor equipment
//team and task assignment inefficiencies
//or more

//helping each individiual tweak their time effectivness obviously yields great results.


require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";