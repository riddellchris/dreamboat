<?php
if(!isset($_SESSION)){session_start();}


require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";


echo "
<style>
.circle {
  height: 100px;
  width:  100px;
  background-color: red;
  border-radius: 50%;
  display: inline-block;
}
</style>


<div class='circle'></div>
";