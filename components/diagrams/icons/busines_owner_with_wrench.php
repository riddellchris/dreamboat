<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

echo "
<style>
.busines_owner_with_wrench_parent {
  position: relative;
  width: 210px;
  height: 260px;
}

.busines_owner_with_wrench_a {
  position: absolute;
  z-index: 100;
}

.busines_owner_with_wrench_b {
  position: absolute;
  z-index: 1100;
 bottom: 100px;
 right: 0px;
}
.busines_owner_with_wrench_c {
  position: absolute;
  z-index: 1100;
 bottom: 100px;
 left: 0px;
}
.busines_owner_with_wrench_d {
font-size: 5em; color : #cecece;
  position: absolute;
  z-index: 1100;
 bottom: 0px;
 right: 0px;
}
</style>
";


echo "<br><br>";
echo "
	<div class='busines_owner_with_wrench_parent'>
		<div class='busines_owner_with_wrench_a'><i class='fas fa-user' style='font-size: 15em;'></i></div>
		<div class='busines_owner_with_wrench_b'><i class='fas fa-star' style='font-size: 2.5em; color : #FFD700;'></i>	</div>
		<div class='busines_owner_with_wrench_c'><i class='fas fa-star' style='font-size: 2.5em; color : #FFD700;'></i>	</div>	
		<div class='busines_owner_with_wrench_d'><i class='fas fa-wrench'></i></div>			
	</div>
	";

