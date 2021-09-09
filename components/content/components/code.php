<?php
if(!isset($_SESSION)){session_start();}


$intial_div = "<div style='display:inline-block; position:relative;width:100%;'>";


$arrow = "<img src='/components/content/images/point_arrow.svg' style='max-height:30px;display:inline-block;float:left;width:8%;margin-top:8px;'>";
$container_div_class = "padding:6vh 3vw;position:relative;";

$text_div_class = "float:left;max-width:90%;";


echo "
<style>
.prompt-font{text-transform:none;font-family: Barlow Semi Condensed;}
</style>";