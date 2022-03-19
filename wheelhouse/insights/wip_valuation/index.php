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

$output['1'] = "<span class='highlight_number'>$35,000</span><br>Work completed this month";
$output['2'] = "<span class='highlight_number'>$12,000</span><br>Invoiced this month";
$output['3'] = "<span class='highlight_number'>$25,000</span><br>Total invoiced this month";

?>
<style>

.highlight_number{
    font-size: larger;
    font-family: Barlow Semi Condensed;
    color: #281e96;
}

.critical_numbers_box{
    text-align: center;
    font-family: Comfortaa;
    font-size: 40px;
}
@media screen and (max-width: 800px) and (max-height: 1200px){
    .critical_numbers_box{font-size: 2vmax;}
}


@media screen and (max-width: 800px) {
    .chart_div{width: 100%; height: 85vh;}
    .div_right{display:none; }
    .div_top{   display: inline-block; width: 100%; height: 25vh;}   
    .critical_numbers_box{width: 100%; height: calc(15vh / 3);  padding-top: 2.5vh;}
}
@media screen and (min-width: 800px) {
    .chart_div{width: 70%; height: 85vh; float: left; clear: left;}
    .div_right{ display: inline-block; float: left; height: 85vh; width:30%; }
    .div_top{   display: none;}
    .critical_numbers_box{width: 100%; height: 23vh; float:left; clear: left; padding-top: 5vh;}
}
</style>
<div class='key_numbers div_top'>
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
<div id='insights_wip_valuation' class='chart_div'> </div>    

<div class='key_numbers div_right'> 
    <div class='critical_numbers_box'><?php echo $output['1'];?></div>
    <div class='critical_numbers_box'><?php echo $output['2'];?></div>
    <div class='critical_numbers_box'><?php echo $output['3'];?></div>
</div>  




</div>


<?php
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";