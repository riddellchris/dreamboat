<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/layouts/start_of_page.php";


echo "<style>
.grey-button{color: #4332ff;}
</style>";

echo "<br>";
echo "<a class='grey-button wide-button' 	href='/flow/submit.php?value=3'>ddd".$row['7_point_scale_plus_3'] ."</a>";
echo "<br>";
echo "<a class='grey-button wide-button' 	href='/flow/submit.php?value=2'>sdfds".$row['7_point_scale_plus_2']."</a>";
echo "<br>";
echo "<a class='grey-button wide-button' 	href='/flow/submit.php?value=1'>dfsf".$row['7_point_scale_plus_1']."</a>";
echo "<br>";
echo "<a class='grey-button wide-button' 	href='/flow/submit.php?value=0'>fdsddd".$row['7_point_scale_midpoint']."</a>";
echo "<br>";
echo "<a class='grey-button wide-button' 	href='/flow/submit.php?value=-1'>dddddd".$row['7_point_scale_minus_1']."</a>";
echo "<br>";
echo "<a class='grey-button wide-button' 	href='/flow/submit.php?value=-2'>asdfasgggg".$row['7_point_scale_minus_2']."</a>";
echo "<br>";
echo "<a class='grey-button wide-button' 	href='/flow/submit.php?value=-3'>ggg".$row['7_point_scale_minus_3']."</a>";



?>