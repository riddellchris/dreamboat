<?php
if(!isset($_SESSION)){session_start();}

echo "
<div class='highlights'>
	<span style='color: #b516b5;'>
		<i class='fas fa-hashtag'></i> Shameless self promotion:</span> ".$copy;
echo "</div>";

unset($copy);
