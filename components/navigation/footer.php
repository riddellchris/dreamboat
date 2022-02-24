<?php
if(!isset($_SESSION)){session_start();}

if($_GET['primary_folder'] == 'slideshows' OR
	$_GET['secondary_folder'] == 'letter' 
	){require $_SERVER['DOCUMENT_ROOT']."/components/layouts/pieces/dreamboat_logo/display.php";}


if($_GET['primary_folder'] != 'slideshows' AND $_GET['secondary_folder'] != 'letter' 
){
	echo "<style>
		@media only screen and (max-width: 768px) {.short{display: inline;}	.long{display:none;}}
		@media only screen and (min-width: 768px) {.short{display: none;}	.long{display:inline;}}	
	</style>";
}
else{
	echo "<style>
		.short{display: none;}

		@media only screen and (min-width: 928px) {.long{display: inline;}}	
		@media only screen and (max-width: 928px) {.long{display: none;}}
		
	</style>";

}


//just to test if margin-left=0px is required for the contact us or not 
$back_used = 'no';
if(	isset($_SESSION['last_page_used']) && 
	(check_url('/account/security/') != 1) &&
	check_url('knowledgebase') != 1 &&
	check_url('/snapshot/') != 1  &&
	check_url('/problem/') != 1 &&
	check_url('/solution/') != 1 &&
	check_url('/solutions/') != 1 &&	
	check_url('/processes/') != 1 &&
	check_url('/contact_us/') &&
	check_url('/impact/')!= 1	
	){
	echo "<a class='nav-links' href='https://dreamboat.com.au".$_SESSION['last_page_used']."' style='margin-bottom:18px;margin-left:0px;'";
	echo ">BACK</a>";
	$back_used = 'yes';
}


if(check_url('/legal/prospectus/') == 1){
	//there is no menu left on the flyer or snapshot versions of all this any longer
	if(	check_tertiary_folder_not('flyer') AND
		check_tertiary_folder_not('snapshot')){
		if($back_used == 'no'){$contact_margin_left = "margin-left:0px;"; $back_used = 'yes';}else{$contact_margin_left = "";}
		echo "<a class='nav-links blink_me' href='#menu'  style='".$contact_margin_left;
		echo "'>menu</a>";
	}
}




if($_GET['primary_folder'] != 'slideshows' AND $_GET['secondary_folder'] != 'letter' ){
    require $_SERVER['DOCUMENT_ROOT']."/components/navigation/footer/components/legal.php";
    require $_SERVER['DOCUMENT_ROOT']."/components/navigation/footer/components/contact.php";
    require $_SERVER['DOCUMENT_ROOT']."/components/navigation/footer/components/support.php";
    require $_SERVER['DOCUMENT_ROOT']."/components/navigation/footer/components/login.php";
	if(!isset($_SESSION['masked_domain'])){
    	require $_SERVER['DOCUMENT_ROOT']."/components/navigation/footer/components/knowledgebase.php";
	}
}
else{

echo "
<style>
.long{float:right;}

</style>
"; 
    require $_SERVER['DOCUMENT_ROOT']."/components/navigation/footer/components/login.php";

	if(!isset($_SESSION['masked_domain'])){
    	require $_SERVER['DOCUMENT_ROOT']."/components/navigation/footer/components/knowledgebase.php";
	}
    require $_SERVER['DOCUMENT_ROOT']."/components/navigation/footer/components/support.php";
    require $_SERVER['DOCUMENT_ROOT']."/components/navigation/footer/components/contact.php";
    require $_SERVER['DOCUMENT_ROOT']."/components/navigation/footer/components/legal.php";
}





//CR 21.01.14
//Note no 'home' to display for the 'top'


if(	check_url('/legal/') == 1 OR
	check_url('knowledgebase') == 1 OR
	check_url('/snapshot/') == 1  OR
	check_url('/problem/') == 1  OR
	check_url('/product/') == 1 OR
	check_url('/solution/') == 1 OR
	check_url('/solutions/') == 1 OR	
	check_url('/impact/') == 1 OR
	check_url('/processes/') == 1 
){
	//CR 20.12.31
	//this should really only be visible when required for a page based on appropriate scrolling and other systems to check
	//I assume this would all be done/managed with javascript

	echo "<a class='nav-links blink_me' href='#top'>top</a>";
}


if($_GET['primary_folder'] == 'slideshows' OR $_GET['secondary_folder'] == 'letter'){				require $_SERVER['DOCUMENT_ROOT']."/components/navigation/mobile_hamburger_icon.php"; }


?>

