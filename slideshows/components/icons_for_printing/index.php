<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
?>



<i class='fas fa-users'     style='position: fixed; font-size: 8vmax; top: calc(30vh - 4vmax); left: calc(20vw - 5vmax); color:forestgreen;' title='Everyone in the workforce'></i>


<div id="curve_chart" style="   width: 100vw; 
                                height: 100vh; 
                                position: fixed; 
                                top: 0; 
                                left: 0; 
                                z-index: -1000;"></div>

<i class='fas fa-database'  style='position: fixed; font-size: 8vmax; top: calc(50vh - 4vmax); left: calc(10vw - 5vmax); color:orange;' title='Everyone in the workforce'></i>
<i class='fas fa-database'  style='position: fixed; font-size: 8vmax; top: calc(70vh - 4vmax); left: calc(21vw - 5vmax); color:black;' title='Everyone in the workforce'></i>

<i class='fas fa-server'    style='position: fixed; font-size: 10vmax; top: calc(50vh - 5vmax); left: calc(50vw - 5vmax); color: #4332ff;'></i>
