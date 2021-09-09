

<br>

<?php
require $_SERVER['DOCUMENT_ROOT']."/slideshow/components/process_diagram/chart_behind_the_scenes/script.php";
?>




<i class='fas fa-users'     style='position: fixed; font-size: 8vmax; top: calc(30vh - 4vmax); left: calc(18.5vw - 5vmax); color:forestgreen;' title='Everyone in the workforce'></i>


<div id="curve_chart" style="   width: 100vw; 
                                height: 100vh; 
                                position: fixed; 
                                top: 0; 
                                left: 0; 
                                z-index: -1000;"></div>

<i class='fas fa-database'  style='position: fixed; font-size: 8vmax; top: calc(50vh - 4vmax); left: calc(20vw - 5vmax); color:#F5BD02;' title='Everyone in the workforce'></i>
<i class='fas fa-database'  style='position: fixed; font-size: 8vmax; top: calc(70vh - 4vmax); left: calc(20vw - 5vmax); color:black;' title='Everyone in the workforce'></i>

<i class='fas fa-server'    style='position: fixed; font-size: 10vmax; top: calc(50vh - 5vmax); left: calc(50vw - 5vmax); color: #4332ff;'></i>

<style>
.productivity_curve{
background-image: url("/knowledgebase/components/diagrams/Productivity_curves.svg"); 
  background-repeat: no-repeat;
position:fixed; 
}

@media only screen and (min-width: 800px) {
    .productivity_curve{
        top:    35vh;
        height: 30vh;
        left:   75vw;
        width:  40vw;
    }
}
@media only screen and (max-width: 800px) {
    .productivity_curve{
        top:    42vh;
        height: 30vh;
        left:   68vw;
        width:  30vw;
    }
}

</style>

<div class='productivity_curve' > </div>
