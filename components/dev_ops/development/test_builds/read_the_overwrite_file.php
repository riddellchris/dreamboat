<?php

readfile("testfile.txt");

echo "<br>";

$myfile = fopen("testfile.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse rocks no\n";
fwrite($myfile, $txt);
fclose($myfile);

readfile("testfile.txt");
?>