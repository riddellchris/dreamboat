<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/design/layouts/start_of_page.php";




echo "
Your current billing is ready up to date

Your last payment was on the x for

Your next payment is on the x for

//or pay... with this button
";


echo "<a class='green-button wide-button' href='network.php'>network</a>";
echo "<br>";

echo "<br>";

echo "<a class='grey-button wide-button' style='padding-top:0px;' href='/account/services/progress_plus/'>back</a>";



require $_SERVER['DOCUMENT_ROOT']."/design/layouts/end_of_page.php";
?>