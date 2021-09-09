<?php
if(!isset($_SESSION)){session_start();}
//require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

echo "
<style>
.manager_parent {
  position: relative;
  width: 210px;
  height: 260px;
    float:none;
  margin-left: auto;
  margin-right: auto;
}

.manager_a {
  position: absolute;
  z-index: 100;
}

.manager_b {
font-size: 5em; color : #FFD700;
  position: absolute;
  z-index: 1100;
 bottom: 55px;
 right: 9px;
 font-weight: 900;
}
.manager_c {
font-size: 5em; color : #FFD700;
  position: absolute;
  z-index: 1100;
 bottom: 55px;
 left: 9px;
  font-weight: 900;
}

</style>
";



echo "
	<div class='manager_parent'>
		<div class='manager_a'><i class='fas fa-user' style='font-size: 15em;'></i></div>
		<div class='manager_b'>=</div>
		<div class='manager_c'>=</div>		
	</div>
	";

