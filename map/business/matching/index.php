<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

//CR 07.01.21
/*
NOw what becomes apparent is that there isn't a company entity but perhaps there should be to make all those edges count - but I guess that just goes in inishgts
the matching should be though for client to contact in xero for example really shouldn't it so that's how that goes

*/


/*
There are actually two elements to this matching folder which has to be 
1. Matching contacts to each one of the API inputs such that they are all known and defined
2. Matching those contacts and connections across multiple users within a business and ultimlately an economy.
  -- for this one in particular we need to note that the user
Really it isn't impossible but important none the less.

so where do i begin here though?
I think clearly the first thing to do is pull out all the contacts from Xero and go that way do let's start there.

the biggest issue here is that this should really be done with just well it should really be part of a submenu shouldn't it not anything else so let's do that first and foremost so let's make that change 

*/






require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";