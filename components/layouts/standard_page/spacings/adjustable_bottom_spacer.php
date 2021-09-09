<?php
if(!isset($_SESSION)){session_start();}
echo"
<style>
	@media screen and (min-width: 900px){.adjustable_bottom_spacer{height:100px;}}
	@media screen and (max-width: 900px){.adjustable_bottom_spacer{height:70px;}}				  
	@media screen and (max-width: 900px) and (min-height: 812px){.adjustable_bottom_spacer{height:70px;}}
	@media screen and (max-width: 900px) and (max-height: 812px){.adjustable_bottom_spacer{height:50px;}}
</style>
";

echo "<div class='adjustable_bottom_spacer' style='background-color:transparent;'></div>";

?>
