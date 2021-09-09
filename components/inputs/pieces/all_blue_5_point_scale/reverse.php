<?php
if(!isset($_SESSION)){session_start();}
//require $_SERVER['DOCUMENT_ROOT']."/layouts/start_of_page.php";


echo "
<style>
.grey-button{color: #281e96;background-color: #f3f2ff;font-weight: 700;}
@media screen and (min-width: 1090px) {.grey-button{font-size:24px;}}
@media screen and (max-width: 1090px) {.grey-button{font-size:18px;}}
</style>
";


if($flow_row['7_point_scale_plus_3'] != ''){
	echo "<br>";
	echo "<a class='grey-button wide-button' 	href='/inputs/submit.php?value=6'>".$flow_row['7_point_scale_plus_3']."</a>";
}

if($flow_row['7_point_scale_plus_2'] != ''){
echo "<br>";
echo "<a class='grey-button wide-button' 	href='/inputs/submit.php?value=5'>".$flow_row['7_point_scale_plus_2']."</a>";
}
if($flow_row['7_point_scale_plus_1'] != ''){
echo "<br>";
echo "<a class='grey-button wide-button' 	href='/inputs/submit.php?value=4'>".$flow_row['7_point_scale_plus_1']."</a>";
}
if($flow_row['7_point_scale_midpoint'] != ''){
echo "<br>";
echo "<a class='grey-button wide-button' 	href='/inputs/submit.php?value=3'>".$flow_row['7_point_scale_midpoint']."</a>";
}
if($flow_row['7_point_scale_minus_1'] != ''){
echo "<br>";
echo "<a class='grey-button wide-button' 	href='/inputs/submit.php?value=2'>".$flow_row['7_point_scale_minus_1']."</a>";
}
if($flow_row['7_point_scale_minus_2'] != ''){
echo "<br>";
echo "<a class='grey-button wide-button' 	href='/inputs/submit.php?value=1'>".$flow_row['7_point_scale_minus_2']."</a>";
}
if($flow_row['7_point_scale_minus_3'] != ''){
echo "<br>";
echo "<a class='grey-button wide-button' 	href='/inputs/submit.php?value=0'>".$flow_row['7_point_scale_minus_3']."</a>";
}
echo "<br>";


?>