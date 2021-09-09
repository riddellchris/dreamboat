<?php
if(!isset($_SESSION)){session_start();}

function details_row_starter($title){
	echo "<div  style='display:table-row;'>
		<div  style='display:table-cell;text-align:left;'>".$title."	
		</div>	
		<div  style='display:table-cell;' class='right'>";
}
function details_row_ender(){
	echo "
				</div>
			</div>	";
}