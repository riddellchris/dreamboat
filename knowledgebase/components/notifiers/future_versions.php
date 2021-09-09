<?php
if(!isset($_SESSION)){session_start();}

echo "
<div class='highlights'>
	<span style='color: #26ff00;'>
		<i class='fas fa-robot'></i> Future versions:</span> ".$copy;
echo "</div>";

unset($copy);
