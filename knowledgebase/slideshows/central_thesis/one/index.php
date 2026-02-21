<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

echo "<div class='slideshow_title_container'>";
//    echo "<div style='width:50%;float: left;'>";
        echo "AUSTRALIA'S GDP SINCE 1988";
//    echo "</div>";
//    echo "<div style='margin-left: 50%; width:50%; text-align: right;'>";
//        echo "CURRENT";
//    echo "</div>";
echo "</div>";







require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/economy/charts/gdp_per_capita/div.php";
echo "<div class='slideshow_descriptive_text' >";
list_start();
    point_detailed_start('no', 10, 10, 10, "If the peaks and troughs continue to decline year on year<br> then the point of no positive improvement will occur all too soon leading to great uncertainty.");
    point_detailed_start('no', 10, 10, 10, "This problem and uncertainty are backed up by the federal government's<br> recent  <a href='https://treasury.gov.au/sites/default/files/2021-06/p2021-182464.pdf' target='_blank'>intergenerational report</a> and other <a href='/knowledgebase/economy/fundamentals' target='_blank'>economic fundamentals</a>.");
list_end();
echo "</div>";



require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";