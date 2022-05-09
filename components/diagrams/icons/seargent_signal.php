<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/account/security/logged_in_check.php";
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";


echo "
<style>

.seargent_top_left{
//background-color: red;
float:left;
height:20px;
width:20px;
  border-right: solid 3px #000;
  border-color: #000 transparent transparent transparent;
  border-radius:  100% 0% 61% 39% / 0% 0% 100% 100% ;
}
.seargent_top_right{
//background-color: green;
float:left;
height:20px;
width:20px;
  border: solid 3px #000;
  border-color: #000 transparent transparent transparent;
 border-radius:  100% 0% 39% 61% / 0% 0% 100% 100% ;
}
.seargent_bottom{
background-color: blue;clear: left; height: 15px; width:40px;


}


</style>
";



echo "

<div class='seargent_top_left'	 style=''></div>
<div class='seargent_top_right'	 style=''></div>
<div class='seargent_bottom'	 style=''></div>


";