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
    point_detailed_start('no', 10, 10, 10, "Australia's <a href='https://www.investopedia.com/terms/p/per-capita-gdp.asp' target='_blank'>GDP per capita</a> is collapsing and with it the chances of a stable economic future.");
    point_detailed_start('no', 10, 10, 10, "This is backed up by the recent <a href='https://treasury.gov.au/sites/default/files/2021-06/p2021-182464.pdf' target='_blank'>intergenerational report</a> and other <a href='/knowledgebase/economy/fundamentals' target='_blank'>economic fundamentals</a>.");
    point_detailed_start('no', 10, 10, 10, "Something new has to be done about it, because everyone else is already doing their best.");
list_end();
echo "</div>";



require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";