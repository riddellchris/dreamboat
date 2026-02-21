<?php
if(!isset($_SESSION)){session_start();}

echo "
<style>
#map_engine_sliding_container{
	position: relative;
//	z-index:-2000;
	width:20000px; 
	height: 20000px;
}
#body:fullscreen 	#map_engine_sliding_container{  background-color: white;}

.map_layer{
    height: 100%;
    width: 100%;
    /* important part */
    grid-area: inner-div;
                                
    }

.issues{color: red;}
.issues:hover{color: #bf0000; text-decoration:none;}

.standard_node{color: #4332ff;}
.standard_node:hover{color: #1302cf; text-decoration:none;}    
</style>

";