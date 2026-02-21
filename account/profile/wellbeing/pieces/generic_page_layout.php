<?php
if(!isset($_SESSION)){session_start();}
//if a dreamboat crew member we can't update the flow boxes but we can see the results
require $_SERVER['DOCUMENT_ROOT']."/layouts/start_of_page.php";
require $_SERVER['DOCUMENT_ROOT']."/components/sub_menus/index.php";
require $_SERVER['DOCUMENT_ROOT']."/wellbeing/pieces/top_of_form.php";
require $_SERVER['DOCUMENT_ROOT']."/wellbeing/pieces/initial_questions.php";
require $_SERVER['DOCUMENT_ROOT']."/wellbeing/pieces/question_echoing.php";
require $_SERVER['DOCUMENT_ROOT']."/wellbeing/pieces/end_of_form.php";
require $_SERVER['DOCUMENT_ROOT']."/wellbeing/pieces/view_history.php";
require $_SERVER['DOCUMENT_ROOT']."/layouts/end_of_page.php";
?>