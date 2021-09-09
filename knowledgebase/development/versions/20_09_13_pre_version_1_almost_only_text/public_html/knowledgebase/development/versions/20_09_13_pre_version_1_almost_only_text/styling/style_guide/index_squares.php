<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";






$box_size = '25vmin';

echo "
<style>
	.test_box{height: ".$box_size."; width: ".$box_size."; position: absolute; }
	.red{background-color: red;}
	.orange{background-color: orange;}
	.blue{background-color: #4332ff;}
	.green{background-color: green;}


@media screen and (min-width: 700px) {	
	.top_left{	top: calc(40vh - ".$box_size."); 	right: 50vw;}
	.top_right{	top: calc(40vh - ".$box_size."); 	left: 50vw;}
	.bottom_left{	top: 40vh; 				left: 50vw;}
	.bottom_right{	top: 40vh; 				right: 50vw;}
}
@media screen and (max-width: 700px) {	
	.top_left{	top: calc(35vh - ".$box_size."); 	right: 50vw;}
	.top_right{	top: calc(35vh - ".$box_size."); 	left: 50vw;}
	.bottom_left{	top: 35vh; 				left: 50vw;}
	.bottom_right{	top: 35vh; 				right: 50vw;}
}



    .trapezoid {
      border-bottom: 100px solid red;
      border-left: 25px solid transparent;
      border-right: 25px solid transparent;
      height: 0;
      width: 100px;
    }



</style>
<div style='position: relative; max-height:100vh; ' >
	<div class='test_box red	top_left'> </div>
	<div class='test_box orange	top_right'> </div>
	<div class='test_box blue	bottom_left'> </div>
	<div class='test_box green	bottom_right'> </div>
	
	
</div>
";


require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
?>
