<!--<div class='top-right' style='overflow-x:hidden;'>-->
<style>
.design_lines{height:3.2vh;background-color:red;margin-top:2vh;}
.design_lines:hover{background-color: transparent; background-image: linear-gradient(to right, red , blue);
</style>
<?php


for($i = 0; $i <12; $i++){
$full_array_of_lines .= "<div class = 'design_lines'  style='margin-left:".rand (-25, 65)."%;width:75%;'></div>";
}

for($i = 0; $i <6; $i++){
$divider_lines .= "<div class = 'design_lines'  style='margin-left:".rand (-25, 65)."%;width:75%;'></div>";
}

//$full_array_of_lines .= "</div>";
//$divider_lines .= "</div>";

?>

