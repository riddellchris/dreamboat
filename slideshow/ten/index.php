<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/styling/main_css.php";


echo "<div class='slideshow_title_container'>";
//    echo "<div style='float: left;'>";
        echo "WINNING TOGETHER";
//    echo "</div>";
echo "</div>";

require $_SERVER['DOCUMENT_ROOT']."/slideshow/components/process_layout.php";
echo "<div class='slideshow_descriptive_text'>";
list_start();
    point_detailed_start('yes', 10,8,8,"Your business wins with more productivity and profitability.");
    point_detailed_start('no', 10,8,8,"Your country wins with a better economy for the future.");
list_end();
echo "</div>";










require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";