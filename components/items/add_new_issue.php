<?php
if(!isset($_SESSION)){session_start();}
header("Location: /components/items/add_new.php?adding_new=issues");
exit();

?>