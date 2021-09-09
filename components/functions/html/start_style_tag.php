<?php
if(!isset($_SESSION)){session_start();}

function start_style_tag(){
echo "<style ";
if($_SESSION['dreamboat_crew'] == 'yes'){echo " file_address = '".__FILE__."'";}
echo ">";
}

?>
