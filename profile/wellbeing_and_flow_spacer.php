<?php
if(!isset($_SESSION)){session_start();}

//the point of this is to ensure that the users eye is drawn to the questions to select rather than just the empty box
echo "<div style='height:10vh;'>&nbsp;</div>";