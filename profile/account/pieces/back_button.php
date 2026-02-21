<?php
if(!isset($_SESSION)){session_start();}
echo "<a class='grey-button wide-button' href='".$_SESSION['last_page_used']."'>back</a>";
?>