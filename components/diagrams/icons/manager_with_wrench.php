<?php
if(!isset($_SESSION)){session_start();}
//require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

/*
echo "
<style>
.manager_with_wrench_parent {
  position: relative;
  width: 210px;
  height: 260px;
}

.manager_with_wrench_a {
  position: absolute;
  z-index: 100;
}

.manager_with_wrench_b {
font-size: 2.5em; color : #FFD700;
  position: absolute;
  z-index: 1100;
 bottom: 90px;
 right: 20px;
}
.manager_with_wrench_c {
font-size: 2.5em; color : #FFD700;
  position: absolute;
  z-index: 1100;
 bottom: 90px;
 left: 20px;
}
.manager_with_wrench_d {
font-size: 5em; color : #cecece;
  position: absolute;
  z-index: 1100;
 bottom: 0px;
 right: 0px;
}
</style>
";


//echo "<br><br>";
echo "
	<div class='manager_with_wrench_parent'>
		<div class='manager_with_wrench_a'><i class='fas fa-user' style='font-size: 15em;'></i></div>
		<div class='manager_with_wrench_b'>=</div>
		<div class='manager_with_wrench_c'>=</div>
		<div class='manager_with_wrench_d'><i class='fas fa-wrench'></i></div>				
	</div>
	";
*/

echo "<i class='fas fa-user' style='font-size: 15em;left: calc(50% - 100px);position: absolute;'></i>";