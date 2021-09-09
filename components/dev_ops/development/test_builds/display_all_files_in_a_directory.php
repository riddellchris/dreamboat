<?php
echo __DIR__;

foreach (new DirectoryIterator('/home/customer/www/dreamboat.com.au/public_html/results/') as $file) {
  if ($file->isFile()) {
  	echo "<br>";
      print $file->getFilename() . "<br>";
  }
}



/*
//https://www.php.net/manual/en/function.scandir.php
//https://www.w3schools.com/php/func_directory_scandir.asp

$dir = "/components/";

// Sort in ascending order - this is default
$a = scandir($dir);

// Sort in descending order
$b = scandir($dir,1);

print_r($a);
print_r($b);*/
?>
