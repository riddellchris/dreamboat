<?php
echo "	
<style>
/* Style the hamburger menu */
	.nav-div a.icon { 
			  display: block;
			  position: absolute;
			  right: 0;
			  top: 0;
			  z-index:101;
			}";

if($_GET['primary_folder'] != 'slideshow' AND $_GET['secondary_folder'] != 'letter'){
	echo "			
			@media screen and (max-width: 480px){#mobile_menu_icon{padding-top:4px;}}
			@media screen and (min-width: 480px){#mobile_menu_icon{padding-top:9px;}}
		";
	}
else{
	echo "			
			@media screen and (max-width: 480px){#mobile_menu_icon{margin-top:-14px;}}
			@media screen and (min-width: 480px){#mobile_menu_icon{margin-top:-9px;}}
			#mobile_menu_icon{float:right;}
		";
}

echo "
			#mobile_menu_icon:hover{color:#00ff00;}
			.mobile_menu_red{	color:#00ff00;}
			.mobile_menu_white{	color:#fff;}	
</style>";





echo "
<a href='javascript:void(0);' class='icon'>
	<i id='mobile_menu_icon' class='fa fa-bars fa-2x mobile_menu_white' style='padding-right:10px;'  onclick='myFunction();topFunction();'></i>
</a>";	