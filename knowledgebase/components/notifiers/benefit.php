<?php
if(!isset($_SESSION)){session_start();}

echo "
<div class='highlights'>
	<span style='color: #26ff00;'>
		<i class='fas fa-thumbs-up'></i> Benefit:</span> ".$copy;
echo "</div>";

unset($copy);
