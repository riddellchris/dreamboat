<?php
if(!isset($_SESSION)){session_start();}

echo "
<style>
//.household_debt_to_gdp_div{  margin: 90px 0px 50px 0px; }
.household_debt_to_gdp_div{  margin: 6vh 0px 1vh 0px; }
</style>
";

echo "<div class='household_debt_to_gdp_div'>";

gcharts_div_display('economic_background_household_debt_to_gdp','100%','600px');

echo "</div>";





