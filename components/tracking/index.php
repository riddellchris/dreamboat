<?php
if(!isset($_SESSION)){session_start();}
//require $_SERVER['DOCUMENT_ROOT']."/layouts/start_of_page.php";

if(!isset($_SESSION['tracking_page'])){$_SESSION['tracking_page'] = 'productivity';}

//echo $_SESSION['tracking_page'];
if($_SESSION['tracking_page'] == 'revenue_and_profit'){	header("Location:/tracking/revenue_and_profit/");exit();}
if($_SESSION['tracking_page'] == 'revenue_and_income'){	header("Location:/tracking/revenue_and_income/");exit();}
if($_SESSION['tracking_page'] == 'kpis'){		header("Location:/tracking/kpis/");exit();}
if($_SESSION['tracking_page'] == 'income_and_hours'){	header("Location:/tracking/income_and_hours/");exit();}
if($_SESSION['tracking_page'] == 'productivity'){	header("Location:/tracking/productivity/");exit();}
if($_SESSION['tracking_page'] == 'daily_improvement'){	header("Location:/tracking/daily_improvement/");exit();}


//require $_SERVER['DOCUMENT_ROOT']."/layouts/end_of_page.php";
?>