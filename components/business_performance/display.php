<?php
if(!isset($_SESSION)){session_start();}

echo"
<style>
.textarea_input{font-family:Comfortaa;color:#ffffff;text-align:left;}
.textarea_input::placeholder{color:#ffffff;}
select{font-family:Comfortaa;background-color:white;color:#ffffff;}
input{font-family:Comfortaa;}
</style>
";

echo "<div style='height:50vh;padding:0px;'>";
	echo"	<div class='details-font' style='font-family:Monda;color: white;text-transform:uppercase;padding-top:0px;font-size:2em;'>performance</div>";

	

		require $_SERVER['DOCUMENT_ROOT']."/components/performance/sub_menu/display.php";
	
	
		if($_SESSION['performance_sub_menu'] == 'sales'){	require $_SERVER['DOCUMENT_ROOT']."/components/performance/sales/display.php";}
		if($_SESSION['performance_sub_menu'] == 'management'){	require $_SERVER['DOCUMENT_ROOT']."/components/performance/management/display.php";}	
		if($_SESSION['performance_sub_menu'] == 'financials'){	require $_SERVER['DOCUMENT_ROOT']."/components/performance/financials/display.php";}	

		echo "</form>";
	
	

echo "</div>";
?>