<?php
if(!isset($_SESSION)){session_start();}

echo "
<div class='highlights'>
	<span style='color: #ffaa32;'>
		<i class='far fa-smile-beam'></i> Potential solution:</span> ".$copy;
echo "</div>";

unset($copy);