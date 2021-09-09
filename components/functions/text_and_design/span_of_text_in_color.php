<?php
if(!isset($_SESSION)){session_start();}
function span_of_text_in_color($text, $color){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
	echo "<span style = 'color:".$color."'>".$text."</span>";
}