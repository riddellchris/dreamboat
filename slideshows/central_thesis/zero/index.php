<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

echo "<div class='slideshow_title_container'>";
//    echo "<div style='width:50%;float: left;'>";
        echo "AN ALARMING TREND IN AUS";
//    echo "</div>";
//    echo "<div style='margin-left: 50%; width:50%; text-align: right;'>";
//        echo "CURRENT";
//    echo "</div>";
echo "</div>";







require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/charts/gdp_per_capita_problem/div.php";
echo "<div class='slideshow_descriptive_text' >";
list_start();
    point_detailed_start('no', 10, 10, 10, "Over the last 25 years an alarming trend has appeared in Australia's per Capita GDP growth rate.");
    point_detailed_start('no', 10, 10, 10, "Given our aging population, declining productivity growth and other future risks....");
    point_detailed_start('no', 10, 10, 10, "If nothing is done then our way of life & our bright futures are in jeopardy.");
list_end();
echo "</div>";



require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";