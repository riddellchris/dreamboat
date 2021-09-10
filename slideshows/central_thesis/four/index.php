<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/styling/main_css.php";

echo "<div class='slideshow_title_container'>";
    echo "COLLECTIVE OPTIMISATION";
echo "</div>";

require $_SERVER['DOCUMENT_ROOT']."/slideshows/components/process_layout.php";

echo "<div class='slideshow_descriptive_text'>";
list_start();
//    point_detailed_start('yes', 10,8,8,"By collecting all this data and returning to the market large & small optmisations in: time utilisation, expense, revenue, skills, process and many others...");
//     point_detailed_start('no', 10,8,8,"... we can use all our collective intelligence and data to drive a new, stable & prosperous future for Australia.");
//     point_detailed_start('no', 10,6,6,"N.B. We collect data iteratively and on an as needed basis, with your permission, every time.");     

    point_detailed_start('yes', 10,8,8,"By collecting this information & returning proven <a href='/knowledgebase/our_model/optimisations/' target='_blank'>optimisations</a> to the market...");
    point_detailed_start('no', 10,8,8,"... we can use all our collective intelligence and data to drive a new, stable & prosperous future for Australia.");
     point_detailed_start('no', 10,6,6,"N.B. We collect data iteratively and on an as needed basis, with your permission, every time.");  
list_end();
echo "</div>";




require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";