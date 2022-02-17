<?php
if(!isset($_SESSION)){session_start();}

if(isset($top_biller)){echo "<br>".$top_biller."<br>";}
if(isset($summed_revenue)){echo '<pre>' , var_dump($summed_revenue) , '</pre>';}
?>

<div style='width:100%; '>
    <div id="chart_div" style="width: 90vw; height: 75vh; margin: 0 auto;"></div>
</div>