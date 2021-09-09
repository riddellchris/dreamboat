<?php
if(!isset($_SESSION)){session_start();}
?>
<br>
<div style='width:100%;text-align:center;'>
<a class='login-submit' href='/users/alterations/add_new.php?to=sales' style = 'margin-bottom:50px;'>Add MORE FORM SPREADSHEETs & lists</a>
</div>
<br><br><br>
<?php

	echo "<div style='display: table-row;'>";		
		echo "<div style='width:100%;padding-bottom:35px;'>";
		echo "<span style='font-size:larger;'>";
		echo "	Hi,<br>I&#39;m ".$_SESSION['first_name']." from Dreamboat,<br>
		We are a technology platform changing the game in small business sales, marketing and business development and I'm calling today to offer you a walkthrough of our platform and how we're helping people like you sell more, network better and drive their businesses forward.
		Is that something you would like?<br>
		<br><br>";
		echo "</div>";
	echo "</div>";	


	require $_SERVER['DOCUMENT_ROOT']."/components/performance/sales/sub_menu/display.php";
	require $_SERVER['DOCUMENT_ROOT']."/components/performance/sales/list/display.php";

?>

