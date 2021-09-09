<?php
if(!isset($_SESSION)){session_start();}
?>

<html
	<?php
		//obviously just for the /account/security/pages
		/*
		if(	is_numeric(strpos($_SERVER['REQUEST_URI'],'/account/security/')) == 1 &&
			is_numeric(strpos($_SERVER['REQUEST_URI'],'/account/security/reset_password_email_sent_successfully.php')) != 1 &&
			is_numeric(strpos($_SERVER['REQUEST_URI'],'/account/security/reset_password.php')) != 1 
			){
			echo "style='
							background-image:url(/components/design/images/shutterstock_653213968.jpg);
							background-position: center;
							background-repeat: no-repeat;
							background-size: cover;'";
			}
			*/

if($_GET['primary_folder'] == 'slideshow' OR $_GET['secondary_folder'] == 'letter' 

){
	echo " class='mobile_scrolling_for_slideshow'";
}

	?>
	>
<?php
/*
if($_GET['primary_folder'] == 'slideshow'){
echo "
<style>
html {
    overflow: scroll;
    overflow-x: hidden;
}
::-webkit-scrollbar {
    width: 0;  /* Remove scrollbar space */
//    background: transparent;  /* Optional: just make scrollbar invisible */
//}
/* Optional: show position indicator in red */
//::-webkit-scrollbar-thumb {
//    background: #FF0000;
//}

//</style>";
//}
//*/
?>