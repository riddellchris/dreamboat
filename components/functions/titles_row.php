<?php

function titles_row(){
		echo "<style>
			.admin_table_titles{
				display:table-cell;
				color:grey;
			}
			</style>";

		echo "<div style='display:table-row;'>";
			echo "<div class='admin_table_titles'>5 years ago</div>";		
			echo "<div class='admin_table_titles'>3 years ago</div>";		
			echo "<div class='admin_table_titles'>2 years ago</div>";
			echo "<div class='admin_table_titles'>1 year ago</div>";			
			echo "<div class='admin_table_titles'>6 months ago</div>";					
			echo "<div class='admin_table_titles'>in recent weeks</div>";
		echo "</div>";
}
