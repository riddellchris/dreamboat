<?php
if(!isset($_SESSION)){session_start();}

echo "
<div class='highlights'>
	<span style='color: #ffaa32;'>
		<i class='far fa-smile-wink'></i> Hint:</span> ".$copy;
echo "</div>";

unset($copy);
