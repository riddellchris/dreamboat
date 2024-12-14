<?php 
if(!isset($_SESSION)){session_start();}

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//manages the menu settings
if(isset($_GET['tertiary_folder']) && !isset($_GET['quarternary_folder'])){
$_SESSION[$_GET['primary_folder']."_".$_GET['secondary_folder']] = $_GET['tertiary_folder'];

$_SESSION[$_GET['primary_folder']."_".$_GET['secondary_folder']."_".$_GET['tertiary_folder']] = $_GET['quarternary_folder'];
}




//knowledgebase specific requirements
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/styling/main_css.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/functions/include_images.php";

//page specific requirements
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/layout/pre_content/styling/files/1.1.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/functions/folders.php";

echo "
<section class='container' style='position: absolute;'>
	<div id='mobile_menu' class='left'>
        <div style='height:12px;'></div>";	//this last line is clearly just for some padding of the menu from the top to allow for some shadowing


require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/menu/structure.php";


	echo "<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>";
?>
	</div>
	<div id = 'knowledgebase_right' class='right'>
		
<div id='knowledgebase_breadcrumbs'>
	<?php
		echo "<a class='breadcrumb_links' href='javascript:void(0);' onclick='myFunction();topFunction();'>>".strip_underscores($_GET['secondary_folder'])."</a>";
		if(isset($_GET['tertiary_folder'])){
			echo "<br>";
			echo "<a class='breadcrumb_links' href='javascript:void(0);' onclick='myFunction();topFunction();'>>".strip_underscores($_GET['tertiary_folder'])."</a>";			
		}
		if($_GET['quarternary_folder'] != 'unknown'){
			echo "<br>";
			echo "<a class='breadcrumb_links' href='javascript:void(0);' onclick='myFunction();topFunction();'>>".strip_underscores($_GET['quarternary_folder'])."</a>";			
		}
	?>	
</div>
		
		
		
		
<?php

    //this is a nice feature but turned off for now
    /*
	if(check_url('/faqs/') == 1 && $_GET['secondary_folder'] != 'faqs'){
	
		//find //faqs, remove and produce that URL
		//$original_folder_faq = strpos($_SERVER[REQUEST_URI], '/faqs/');
		$original_folder_faq = substr($_SERVER[REQUEST_URI], 0, strpos($_SERVER[REQUEST_URI], '/faqs/'));
	
		echo "	<div style='width:100%;text-align: center;margin-top:3vh;text-transform:uppercase;'><a href='".$original_folder_faq."/' class='faq'> << back to original page </a> </div>";
	}
    */
?>
