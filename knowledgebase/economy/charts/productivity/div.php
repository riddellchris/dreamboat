<?php
if(!isset($_SESSION)){session_start();}

echo "
<style>
//.productivity_div{  margin: 90px 0px 50px 0px; }
.productivity_div{  margin: 5vh 0px 0.8vh 0px; }
</style>
";

echo "<div class='productivity_div'>";

gcharts_div_display('economic_background_productivity','100%','600px');

echo "</div>";