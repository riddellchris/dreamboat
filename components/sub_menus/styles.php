<style>

<?php
$hover_code = "
	-moz-box-shadow: 	inset 0 -30px 30px -30px #801e17;
	-webkit-box-shadow: 	inset 0 -30px 30px -30px #801e17;
	box-shadow: 		inset 0 -30px 30px -30px #801e17;
";
?>

.sub_menu_div{
	display:inline-block;
	text-align:center;
	
	font-family:helvetica;
	text-transform: uppercase;
	color:white;
	
	text-decoration:none;
}
.sub_menu_div:hover{
	background-color:#ff2424;
	color:#ffe6e6; 
	<?php echo $hover_code; ?>
}

.highlighted{	
	background-color:red;
}
	
@media only screen and (min-width: 768px) {
	.sub_menu_div{padding-top: 1.5vh;	padding-bottom: 1vh;
			//font-size: 1vh;
			font-size: 16px;
			}
	.sub_menu_div:hover{	<?php echo $hover_code; ?>}
	.highlighted{<?php echo $hover_code; ?>}
}	
@media only screen and (max-width: 768px) {	
	.sub_menu_div{padding-top: 2vh;	padding-bottom: 2vh;font-size: 1.8vh;}
}
</style>