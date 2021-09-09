<?php
if(!isset($_SESSION)){session_start();}


//$html may be html but may also just be copy of any form
function print_copy_for_pilots_only($html){
	if($_SESSION['dreamboat_crew'] == 'yes'){
		echo "<div class='pilots_eyes_only_font'>";
			echo $html;
		echo "</div>";
	}
}