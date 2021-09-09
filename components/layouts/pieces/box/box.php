<style>
	.view_full{
			background-color:#281e96;
			color: white;        
			box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.4);
			max-width:1100px;
			width:100%;
			margin:auto;
			padding-top: 10px;
			height: 26px;
			font-family: Arial,Helvetica,sans-serif;				
			}

	.view_full:hover{	background-color:#4332ff;
				box-shadow: 0px 0px 0px rgba(0, 0, 0, 0);
			}
	
	.view_full.alert{background-color: orange;}
	.view_full.alert:hover{background-color: yellow;color:#4332ff;}	
	
	.standard_box{
		position: relative;
		max-width:1100px;
		padding: 150px 0px;
		width:100%;
		color:#fff;
		display: inline-block;
		font-family: Comfortaa;
		font-size:24px;    
	}
	
	.corner-link{	padding:6px;
			text-decoration:none;
			color:#281e96;
			background-color:rgba(238, 238, 238, 0.6);
			}
	.corner-link:hover{
				color:#4332ff;
				background-color:rgba(238, 238, 238, 1);
			}
</style>

<?php
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/pieces/box/box_positioning.php";
?>