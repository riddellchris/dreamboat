<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/design/layouts/start_of_page.php";

//always green as paid up and always active
echo "<span class='prompt-font'>At DREAMBOAT OUR NETWORK IS ALWAYS FREE<BR>SO YOUR PAYMENTS ARE UP TO DATE<BR>TO LEARN A LITTLE MORE ABOUT OUR NETWORK CLICK THE BUTTON BELOW</span>";
echo "<br>";
echo "<br>";
echo "<br>";



echo "<a class='login-submit' href='/about_us/our_products/'>LEARN MORE</a>";

echo "<br>";
echo "<br>";
echo "<br>";

echo "<a class='grey-button wide-button' style='padding-top:0px;' href='/account/services/'>back</a>";

require $_SERVER['DOCUMENT_ROOT']."/design/layouts/end_of_page.php";
?>