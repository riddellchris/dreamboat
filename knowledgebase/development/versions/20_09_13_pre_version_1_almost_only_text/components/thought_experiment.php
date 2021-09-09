<?php
if(!isset($_SESSION)){session_start();}


echo "
	<div class='highlights'>
		<span style='color: orange'>
			<i class='fas fa-vials'></i> Thought experiment:</span> ".$copy;
echo "	</div>";
unset($copy);
