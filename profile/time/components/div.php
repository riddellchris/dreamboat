<?php
if(!isset($_SESSION)){session_start();}

echo "<div class='time_charts'>";

gcharts_div_display("time_charts_".$_GET['secondary_folder']."_".$_GET['tertiary_folder'],'100%','70vh');

echo "</div>";