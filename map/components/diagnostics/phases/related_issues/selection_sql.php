<?php
if(!isset($_SESSION)){session_start();}

echo "<div class='diagnostics_title green'>INCLUDING RELATED ISSUES</div>";
			echo $diagnostics['related_issues_selection_sql'];
			//related issues display
			//including those that it is connected to