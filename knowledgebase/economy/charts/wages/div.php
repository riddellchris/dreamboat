<?php
if(!isset($_SESSION)){session_start();}

echo "
<style>
//.wages_div{  margin: 90px 0px 50px 0px; }
.wages_div{  margin: 5vh 0px 0.8vh 0px; }
</style>
";

echo "<div class='wages_div'>";

gcharts_div_display('economic_background_wages','100%','600px');

echo "</div>";