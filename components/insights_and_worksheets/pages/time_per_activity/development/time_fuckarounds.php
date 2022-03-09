<?php

echo "string:<br>";
echo $string[1] = "2022-02-08T22:33:37.877"; 
echo "<br>";
echo $string[2] = "2022-02-08T23:43:57.996";
//$test_date = DateTime::date_create_from_format($string[1]);

$date[1] = new DateTime($string[1]);
echo "<br>";
echo $date[1] = $date[1] -> format('U');

echo "<br><BR><BR>";
echo $date[1];

$date[2] = new DateTime($string[2]);
echo "<br>";
echo $date[2] = $date[2] -> format('U');

echo "<br><BR><BR>";
echo $date[2];
echo "<br><BR><BR>";
echo $gap = $date[2] - $date[1]; 
echo " seconds";
/*
echo "<br>";
echo "re-arranged:<BR>";
echo $string[1] = substr($string[1], 0, 10)." ".substr($string[1], 11, -4);
echo "<br>";
echo $string[2] = substr($string[2], 0, 10)." ".substr($string[2], 11, -4);

echo "<br>";
//now to find the difference between them all
//that's just as simple as 
echo "<br>";
echo "date times:";
echo $date1 = date_create_from_format('Y-m-d', '2026-05-10');;
echo $date[1] = date_create_from_format('Y-m-d H:i:s', $string[1]);
echo "<br>";
echo $date[2] = new DateTime($string[2]);
*/


