<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
?>







  <style>
  #container {
  position: relative;
}
  #num1,
#chart_div {
  position: absolute;
  left: 25%;
}
  </style>
  <div id='container'>
	<div id='num_1' 	style='z-index:1000; left:25%;'	>
	<?php require $_SERVER['DOCUMENT_ROOT']."/components/diagrams/icons/manager_with_wrench.php";	?>
	</div>
	<div id="chart_div" 	style='width: 900px; height: 500px;'	></div>
  </div>
