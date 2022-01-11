<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";

if(!isset($_SESSION['viewing_client_id'])){header("Location: /users/"); exit();}
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
			<?php require $_SERVER['DOCUMENT_ROOT']."/components/discussion/display.php";?>
	    	</div>

	    	<div class='two_right'>
			<?php require $_SERVER['DOCUMENT_ROOT']."/components/lists/display_list.php";?>
	    	</div>
	    	

    	</div>
</div>




<div class ='mobile'>
<!--	<div class ='mobile_top'>
			<?php// require $_SERVER['DOCUMENT_ROOT']."/components/discussion/display.php";?>
	</div>
	-->
	
	<div class ='mobile_middle' style='min-height:400px;'>
			<?php require $_SERVER['DOCUMENT_ROOT']."/components/lists/display_list.php";?>
	</div>				
	<div class ='mobile_bottom'>
			<?php require $_SERVER['DOCUMENT_ROOT']."/components/lhs_side_panels/".$_GET['primary_folder']."_".$_GET['secondary_folder'].".php";?>
	</div>
</div>


<?php
require_once $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>
