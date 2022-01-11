<?php
if(!isset($_SESSION)){session_start();}
echo "'"; //this just ends the placeholder prompt

/*
//this shouldn't be an issue either for now
if($_GET['primary_folder'] == 'flow' OR $_GET['primary_folder'] == 'wellbeing'){ 
 	echo "onkeydown = 'if(event.keyCode == 13){this.form.submit();event.preventDefault();return false;}'";
}
*/
echo " autocomplete='off'></textarea>";







//this is mainly used for discussion
$margin_bottom = "0px";
//important that this isn't require once because it's used multiple times
require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/submits/standard.php";


echo "</form>";

require $_SERVER['DOCUMENT_ROOT']."/components/discussion/pieces/reminders_reviews_and_charts_extra_buttons.php";