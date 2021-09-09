<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

echo "
<style>
.pilot_parent {
  position: relative;
  width: 230px;
  height: 260px;
}

.pilot_a {
  position: absolute;
  z-index: 100;
}

.pilot_b {
  position: absolute;
  z-index: 1100;
 bottom: 0px;
 right: 0px;
}


</style>
";


echo "<br><br>";
echo "
	<div class='pilot_parent'>
		<div class='pilot_a'><i class='fas fa-user' style='font-size: 15em;'></i></div>
		<div class='pilot_b'><i class='fas fa-dharmachakra' style='font-size: 5em; color : #cecece;'></i>	</div>
		
	</div>
	";

