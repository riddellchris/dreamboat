<?php
if(!isset($_SESSION)){session_start();}
//require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

echo "
<style>
.business_owner_parent {
  position: relative;
  max-width: 210px;
  width: 100%;
  max-height: 272px;
  height: 100vh;
  float:none;
  margin-left: auto;
  margin-right: auto;
}

.business_owner_a {
  position: absolute;
  z-index: 100;
}

.business_owner_b {
  position: absolute;
  z-index: 1100;
 bottom: 100px;
 right: 0px;
}
.business_owner_c {
  position: absolute;
  z-index: 1100;
 bottom: 100px;
 left: 0px;
}

</style>
";


echo "	<br><br><br><br>
	<div class='business_owner_parent'>
		<div class='business_owner_a'><i class='fas fa-user' style='font-size: 15vmin;'></i></div>
		<div class='business_owner_b'><i class='fas fa-star' style='font-size: 2.5vmin; color : #FFD700;'></i>	</div>
		<div class='business_owner_c'><i class='fas fa-star' style='font-size: 2.5vmin; color : #FFD700;'></i>	</div>		
	</div>
	";

