<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

echo "<br><br><br><br><br>";


echo "
<style>
.fas{font-size:10em;margin-left:50%;}
</style>
";

echo "<i class='fas fa-calendar-week'></i>";
echo "<br><br>";
echo "<i class='fas fa-stopwatch'></i>";
echo "<br><br>";
echo "<i class='fas fa-funnel-dollar'></i>";
echo "<br><br>";
echo "<i class='fas fa-users'></i>";
echo "<br><br>";
echo "<i class='fas fa-phone'></i>";
echo "<br><br>";
echo "<i class='fas fa-check' style='color: red;'></i>";
