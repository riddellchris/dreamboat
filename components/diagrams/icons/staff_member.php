<?php
if(!isset($_SESSION)){session_start();}
//require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

echo "
<style>
.staff_member_parent {
  position: relative;
  width: 210px;
  height: 260px;
    float:none;
  margin-left: auto;
  margin-right: auto;
}

.staff_member_a {
  position: absolute;
  z-index: 100;
}

.staff_member_b {
font-weight: 900;
font-size: 2.5em;
color : #FFD700;
position: absolute;
z-index: 1100;
bottom: 65px;
right: 12px;
}
.staff_member_c {
font-weight: 900;
font-size: 2.5em; 
color : #FFD700;
position: absolute;
z-index: 1100;
bottom: 65px;
left: 12px;
}

</style>
";



echo "
	<div class='staff_member_parent'>
		<div class='staff_member_a'><i class='fas fa-user' style='font-size: 15em;'></i></div>
		<div class='staff_member_b'>^</div>
		<div class='staff_member_c'>^</div>		
	</div>
	";

