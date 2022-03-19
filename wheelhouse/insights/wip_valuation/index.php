<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

//there are clearly two bits here that can work or not frankly

//let's split into two lots here
//don't worry so much about duplicating that chart there
//just 

//iff less than 860
//three key boxes
//work completed
//invoiced value
//payments transferred

//then one chart withwork completed  -- bar chart
//invoiced value  --  bar chart
//WIP value as a red line

$output['1'] = "$35,000<br>Work completed this month";
$output['2'] = "$12,000<br>Invoiced this month";
$output['3'] = "$8,000<br>Payments received this month";

?>
<style>

.critical_numbers_box{
    text-align: center;
    font-family: Comfortaa;
    font-size: 40px;
}

@media screen and (max-width: 800px) {
    .chart_div{width: 100%; height: 85vh;}
    .div_right{display:none; }
    .div_top{   display: inline-block; width: 100%; height: 25vh;}   
    .critical_numbers_box{width: 100%; height: calc(15vh / 3);}
}
@media screen and (min-width: 800px) {
    .chart_div{width: 70%; height: 85vh; float: left; clear: left;}
    .div_right{ display: inline-block; float: left; height: 85vh; width:30%; }
    .div_top{   display: none;}
    .critical_numbers_box{width: 100%; height: 23vh; float:left; clear: left;}
}
</style>
<div class='key_numbers div_top' style=' background-color: blue;'>
    <div class='critical_numbers_box'>
        <?php echo $output['1'];?>
    </div>
    <div class='critical_numbers_box'>
        <?php echo $output['2'];?>
    </div>
    <div class='critical_numbers_box'>
        <?php echo $output['2'];?>
    </div>

</div>
<div></div>
<div>
    
<!--   
    Just here to explain the layout pretty simply.
    <div name='chart_div' style='width: 70%;'> </div>    <div  class='key_numbers div_right' style='width:30%'> </div>  
-->
<div id='insights_wip_valuation' class='chart_div' style='background-color: black; '> </div>    

<div class='key_numbers div_right' style='background-color: red;'> 
    <div class='critical_numbers_box'><?php echo $output['1'];?></div>
    <div class='critical_numbers_box'><?php echo $output['2'];?></div>
    <div class='critical_numbers_box'><?php echo $output['3'];?></div>
</div>  




</div>


<?php
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";