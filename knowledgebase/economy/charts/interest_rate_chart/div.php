<?php
if(!isset($_SESSION)){session_start();}

echo "
<style>
//.rba_cash_rate_div{  margin: 90px 0px 50px 0px; }
.rba_cash_rate_div{  margin: 5vh 0px 0.8vh 0px; }
</style>
";

echo "<div class='rba_cash_rate_div'>";

gcharts_div_display('economic_background_interest_rates','100%','600px');


echo "</div>";
