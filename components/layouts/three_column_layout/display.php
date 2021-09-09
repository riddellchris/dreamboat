<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require_once $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require_once $_SERVER['DOCUMENT_ROOT']."/components/lhs_side_panels/styling.php";
require_once $_SERVER['DOCUMENT_ROOT']."/components/layouts/three_column_layout/styling.php";
?>

<div class='container'>
	<div class='one'>
		<?php require $_SERVER['DOCUMENT_ROOT']."/components/lhs_side_panels/".$_GET['primary_folder']."_".$_GET['secondary_folder'].".php";?>
	</div>
    	
    	<div class='two' style='text-align:center;'>	
	    	<div class='two_left'>
			<?php require $_SERVER['DOCUMENT_ROOT']."/components/layouts/pieces/columns/two_left.php"; ?>
	    	</div>
	    	<div class='two_right'>
			<?php require $_SERVER['DOCUMENT_ROOT']."/components/layouts/pieces/columns/two_right.php"; ?>
	    	</div>
       	</div>
    	
	<div class ='mobile'>
		<?php require $_SERVER['DOCUMENT_ROOT']."/components/lhs_side_panels/".$_GET['primary_folder']."_".$_GET['secondary_folder'].".php";?>
	</div>
</div>

<?php
require_once $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>
