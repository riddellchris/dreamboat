<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

echo "<div class='slideshow_title_container'>";
//    echo "<div style='width:50%;float: left;'>";
        echo "THE CRITICAL TURNAROUND";
//    echo "</div>";
//    echo "<div style='margin-left: 50%; width:50%; text-align: right;'>";
//        echo "MISSION";
//    echo "</div>";
echo "</div>";




require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/charts/gdp_per_capita_target/div.php";

echo "<div class='slideshow_descriptive_text'>";
list_start();
    point_detailed_start('no', 10, 10,10,"If we don't manage to turn this <a href='https://www.investopedia.com/terms/p/per-capita-gdp.asp'>GDP per capita</a> trend around to look like what is above.");
    point_detailed_start('no', 10, 10,10,"Then there are all sorts of <a href='/knowledgebase/economy/downside_risks/'>risks</a> and <a href='https://dreamboat.com.au/knowledgebase/economy/other_real_world_implications/' target='_blank'>implications</a> that will almost certainly occur.");
    point_detailed_start('no', 10, 10,10,"Leading to the degradation of this <a href='https://en.wikipedia.org/wiki/Australia' target='_blank'>great nation</a>.");
list_end();
echo "</div>";




require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";