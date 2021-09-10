<?php
if(!isset($_SESSION)){session_start();}




if($_GET['primary_folder'] != 'slideshows'){

echo "
<style>
@media only screen and (min-width: 800px) {
    .gdp_per_capita_target_div{  margin: 5vh 0px 0.8vh 0px; }
}
@media only screen and (max-width: 800px) {
    .gdp_per_capita_target_div{  margin: -1vh 0px 0.8vh 0px; }
}
</style>
";
}
else{   // echo $_GET['primary_folder'];exit();
echo "
<style>
@media only screen and (min-width: 1710px) {
    .gdp_per_capita_target_div{  margin: 9vh 0px 0.8vh 0px; }
}
@media only screen and (max-width: 1710px) {
    .gdp_per_capita_target_div{  margin: 0vh 0px 0.8vh 0px; }
}
</style>
";
}

echo "<div class='gdp_per_capita_target_div'>";

if($_GET['primary_folder'] == 'slideshows'){  	gcharts_div_display('economic_background_gdp_per_capita_percentage_change_target','100%','70vh');}
else{                               			gcharts_div_display('economic_background_gdp_per_capita_percentage_change_target','100%','600px');}

echo "</div>";