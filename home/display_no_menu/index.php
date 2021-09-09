<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
?>

<style>
#chart_div{
	z-index:-2000;
	margin-left: auto;
	margin-right: auto;
	height: 85vh;	
	}
	
@media screen and (max-width: 780px) {	#chart_div{	width: 100vw; }}
@media screen and (min-width: 780px) {	#chart_div{	width: 95vw; }}
	
.home_button{
	//min-width:200px;
	padding: 15px 30px;
	margin-top: 20px;
	display: inline-block;
	font-family: Montserrat;
	text-transform: uppercase;
	text-decoration: none;
	color: white;
	}
.home_button:hover{ 
	 -moz-box-shadow:    inset 0 0 10px #000000;
	 -webkit-box-shadow: inset 0 0 10px #000000;
	 box-shadow:         inset 0 0 10px #000000;
	}
	
.main_title_copy{	color: black;
			font-family: Cursive;
			//font-size:2.5vmax;
			width:100%;
			text-align:center;
			padding-top:18vh;}	
			
			
	
@media screen and (max-width: 780px) {	.main_title_copy{font-size: 25px;} #chart_div{display: none;}}
@media screen and (min-width: 780px) {	.main_title_copy{font-size: 30px;} #chart_div{display: inline-block;}}		
	
</style>



<div>
	<div style='position:absolute;' id='chart_div'></div>


	<div style='position:absolute;width: 100%;'>
		<div class='main_title_copy'>Welcome to Dreamboat</div>
		<br>
		<div style='text-align:center;width: 100%;'>
			<a class='home_button'  style='background-color: forestgreen;' href='/knowledgebase/'>visit our knowledgebase</a><br>
			<a class='home_button' style='background-color: red;'  href='/account/security/'>or login</a><br>
		</div>
	</div>

</div>




<?php
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>