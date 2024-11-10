<?php
if(!isset($_SESSION)){session_start();}


$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if (strpos($url,'agedcareforeveryone') !== false) {
    echo "	<title>Aged Care for Everyone - Solving the agency problem.'></title> ";
    echo "	<meta name='description' content='Aged Care for Everyone - Solving the agency problem.'>";
} else {
    echo "	<title>".$_SESSION['masked_domain_html_title'];	
/* 
The next and let's be honest only change to this tagline will be "Building the future." 
However this will not occur until the economy is "under control" or at the very least we have done all we can in that direction.
CR 21.06.05
*/
//if($_SESSION['logged_in'] == 'yes'){echo " - v4.1.2.2";}
echo "</title>";
//CR 21.05.29 Ultimately this version control should be controlled by collecting up all the versions of all code and then automatically determining what version the user is actually viewing.
//This shouldn't really change at all within a viewing

echo "	<meta name='description' content='DREAMBOAT - Transforming the Australian economy.'>";
}



