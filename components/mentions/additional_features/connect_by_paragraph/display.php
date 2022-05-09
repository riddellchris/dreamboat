<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

//cut by paragraph and allow for adding any others
//probalby for this one use the "two colmn display"

//then finally return to the actual page we began on

//obviously in time this can get faster and faster