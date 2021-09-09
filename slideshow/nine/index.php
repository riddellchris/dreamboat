<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";


echo "<div class='slideshow_title_container'>";
 //   echo "<div style='float: left;'>";
        echo "A WIN WIN APPROACH";
//    echo "</div>";
echo "</div>";

require $_SERVER['DOCUMENT_ROOT']."/slideshow/components/process_layout.php";

echo "<div class='slideshow_descriptive_text'>";
list_start();
    point_detailed_start('yes', 10,8,8,"In return, you win, by being more productive and therefore earning more.");
    point_detailed_start('no', 10,8,8,"Your family wins with more money today and a brigther future tomorrow.");
list_end();
echo "</div>";









require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";