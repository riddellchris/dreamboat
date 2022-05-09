<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

echo "
<style>
.staff_member_with_wrench_parent {
  position: relative;
  width: 210px;
  height: 260px;
}

.staff_member_with_wrench_a {
  position: absolute;
  z-index: 100;
}

.staff_member_with_wrench_b {
font-weight: 900;
font-size: 2.5em;
color : #FFD700;
position: absolute;
z-index: 1100;
bottom: 80px;
right: 28px;
}
.staff_member_with_wrench_c {
font-weight: 900;
font-size: 2.5em; 
color : #FFD700;
position: absolute;
z-index: 1100;
bottom: 80px;
left: 28px;
}
.staff_member_with_wrench_d {
font-size: 5em; 
color : #cecece;
  position: absolute;
  z-index: 1100;
 bottom: 0px;
 right: 0px;
}
</style>
";


echo "<br><br>";
echo "
	<div class='staff_member_with_wrench_parent'>
		<div class='staff_member_with_wrench_a'><i class='fas fa-user' style='font-size: 15em;'></i></div>
		<div class='staff_member_with_wrench_b'>^</div>
		<div class='staff_member_with_wrench_c'>^</div>
		<div class='staff_member_with_wrench_d'><i class='fas fa-wrench'></i></div>		
	</div>
	";

