<?php
if(!isset($_SESSION)){session_start();}

echo "
<style>
//.gdp_percentage_change{  margin: 90px 0px 50px 0px; }
.gdp_percentage_change{  margin: 5vh 0px 0.8vh 0px; }
</style>
";

echo "<div class='gdp_percentage_change'>";

gcharts_div_display('economic_background_gdp_percentage_change','100%','600px');

echo "</div>";
