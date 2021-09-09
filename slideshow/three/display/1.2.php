<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";


echo "<div class='slideshow_title_container'>";
    echo "OUR COLLECTIVE MISSION";
echo "</div>";

require $_SERVER['DOCUMENT_ROOT']."/slideshow/components/process_layout.php";


echo "<div class='slideshow_descriptive_text'>";
list_start();
    point_detailed_start('yes', 10,8,8,"With debt, the RBA, the government and immigration doing all it can to achieve this end already.");
    point_detailed_start('no', 10,8,8,"The only untapped solution is to pool all our <span style='color:forestgreen;'>people</span>, all our <span style='color: #F5BD02;'>business data</span> and other <span style='color:black;'>external sources</span>...");
    point_detailed_start('no', 9,8,8,"...such that we can learn and optimise our collective productivity, our collective economy.");
list_end();
echo "</div>";



require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";