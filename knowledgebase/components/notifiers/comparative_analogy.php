<?php
if(!isset($_SESSION)){session_start();}

echo "
	<div class='highlights'>
		<span style='color: #33BB00'>
			<i class='fas fa-comment-dots'></i>&nbsp;COMPARATIVE ANALOGY:</span> &nbsp;".$copy;
echo "	</div>";
unset($copy);



//https://fontawesome.com/icons/gem?style=regular