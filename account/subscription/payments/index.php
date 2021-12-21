<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/design/layouts/start_of_page.php";

//always green as paid up and always active
echo "<a class='green-button wide-button' href='network.php'>network</a>";
echo "<br>";

if($wheelhouse == 'yes'){echo "<a class='blue-button wide-button' href=''>productivity plus</a>";}
else{echo "<a class='fixed-grey-button wide-button'>wheelhouse</a>";}
echo "<br>";

if($productivity_plus == 'yes'){echo "<a class='blue-button wide-button' href=''>productivity plus</a>";}
else{echo "<a class='fixed-grey-button wide-button'>progress plus</a>";}
echo "<br>";

/*CODE OUT
if($auto_coach_released == 'yes'){echo "<a class='blue-button wide-button' href=''>auto coach</a>";}
else{echo "<a class='fixed-grey-button wide-button'>you're not ready yet</a>";}
echo "<br>";


if($text_coaching_released == 'yes'){echo "<a class='blue-button wide-button' href=''>text coaching</a>";}
else{echo "<a class='fixed-grey-button wide-button'>we're not ready yet</a>";}
echo "<br>";
*/

if($phone_coaching_released == 'yes'){echo "<a class='blue-button wide-button' href=''>phone coaching</a>";}
else{echo "<a class='fixed-grey-button wide-button'>productivity pilots</a>";}
echo "<br>";

echo "<a class='grey-button wide-button' style='padding-top:0px;' href='../'>back</a>";



require $_SERVER['DOCUMENT_ROOT']."/design/layouts/end_of_page.php";
?>