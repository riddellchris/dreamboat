<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require_once $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require_once $_SERVER['DOCUMENT_ROOT']."/components/layouts/two_column_layout/styling.php";
?>

<div class='container'>
    	<div class='two' style='text-align:center;'>	
	  
			<?php 
				require $_SERVER['DOCUMENT_ROOT']."/components/layouts/pieces/columns/two_left.php";
			?>
	

    	
    	</div>
</div>




<?php
require_once $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>
