<?php
if(!isset($_SESSION)){session_start();}
require_once $_SERVER['DOCUMENT_ROOT']."/components/functions/register_function_usage.php";

function echo_advice_to_pilots($advice){
	admin_functions_in_pages_usage(__FUNCTION__,__FILE__);
echo "	<br>
	<span class='pilots_eyes_only_font' style='font-size: 1.4vw;'>";
	echo $advice;
echo "	</span>";

}