<style>

#body:fullscreen 		#main_top_nav_bar{  		display:none;}
#body:not(:fullscreen) 	#main_top_nav_bar  {  		display:block;}
#body:fullscreen 		#sub_menu_div_container{  	display:none;}
#body:not(:fullscreen) 	#sub_menu_div_container  {  display:block;}
#body:fullscreen 		#adjustable_top_spacer{  	display:none;}
#body:not(:fullscreen) 	#adjustable_top_spacer  {  	display:block;}
#body:fullscreen 		#footer{  		            display:none;}
#body:not(:fullscreen) 	#footer  {  	            display:block;}
#body:fullscreen 		#admin_container{  		    display:none;}
#body:not(:fullscreen) 	#admin_container  {  	    display:block;}


#body:fullscreen 		#map_engine_container{  	height:100vh;}

<?php
if($_SESSION['dreamboat_crew'] == 'yes'){
    echo "#body:not(:fullscreen) #map_engine_container{height: calc(100vh - 200px);}";
}
else{
    echo "#body:not(:fullscreen) #map_engine_container{height: calc(100vh - 150px);}";

}

?>
</style>