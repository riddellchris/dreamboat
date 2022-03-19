<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/finances/holding_page.php";

/*
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
*/


//require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";


//this should really be including all the other tracking system data BUT
//WITH A FEW KEY DIFFERENCES

//storing and setting budgets is critical 
//very critical
//pulling out the most serious accounts ///
//I really want the last bit to include some analysis of the past year or more
//how taht works as a:
    //percent of revenue
    //growth YoY
    //then set and calculate ideally
    //what's going on here


//require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";