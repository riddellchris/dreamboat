<?php
if(!isset($_SESSION)){session_start();}

echo "
	<div class='highlights'>
		<span style='color: #808080'>
			<i class='far fa-gem'></i> FACT:</span> ".$copy;
echo "	</div>";
unset($copy);


//https://fontawesome.com/icons/gem?style=regular