<?php
if(!isset($_SESSION)){session_start();}

echo "	
<style>
	@media screen and (min-width: 480px){.adjustable_top_spacer{height:50px;}}
	@media screen and (max-width: 480px){.adjustable_top_spacer{height:40px;}}

</style>
";

echo "<div id='adjustable_top_spacer'  class='adjustable_top_spacer' style='background-color:transparent;'></div>";

?>
