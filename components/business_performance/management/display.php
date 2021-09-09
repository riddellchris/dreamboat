<?php
if(!isset($_SESSION)){session_start();}





require $_SERVER['DOCUMENT_ROOT']."/components/performance/management/sub_menu/display.php";

if($_SESSION['performance_management_sub_menu'] == 'auto_coach'){
	require $_SERVER['DOCUMENT_ROOT']."/components/back_of_house/auto_coach/new_prompt_or_not_form.php";
}
if($_SESSION['performance_management_sub_menu'] == 'tech'){
			require $_SERVER['DOCUMENT_ROOT']."/components/performance/management/technology/display.php";
			}
if($_SESSION['performance_management_sub_menu'] == 'staff'){
echo "
this will in time include everything from start of hirhing processes through to management of staff responsiveness
for now it&#39;s just blank but will probably start with responsiveness of messages and inputs from clients
then through to hiring and onwards and upwards from there
";


}			
			
?>



