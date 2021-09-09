<?php
if(!isset($_SESSION)){session_start();}

echo "<br>";
echo "<a class='strong-green-button wide-button' 	href='/flow/submit.php?value=3'>".$row['7_point_scale_plus_3'] ."</a>";
echo "<br>";
echo "<a class='light-green-button wide-button' 	href='/flow/submit.php?value=2'>".$row['7_point_scale_plus_2']."</a>";
echo "<br>";
echo "<a class='lightest-green-button wide-button' 	href='/flow/submit.php?value=1'>".$row['7_point_scale_plus_1']."</a>";
echo "<br>";
echo "<a class='grey-button wide-button' 	href='/flow/submit.php?value=0'>".$row['7_point_scale_midpoint']."</a>";
echo "<br>";
echo "<a class='lightest-red-button wide-button' 	href='/flow/submit.php?value=-1'>".$row['7_point_scale_minus_1']."</a>";
echo "<br>";
echo "<a class='light-red-button wide-button' 	href='/flow/submit.php?value=-2'>".$row['7_point_scale_minus_2']."</a>";
echo "<br>";
echo "<a class='strong-red-button wide-button' 	href='/flow/submit.php?value=-3'>".$row['7_point_scale_minus_3']."</a>";



?>