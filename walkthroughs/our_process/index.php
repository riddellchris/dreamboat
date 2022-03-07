<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";

echo "<div>";

echo "
<div style='font-family: Helvetica; color: #281e96; font-size: 1.5em; padding-top: 10vh; max-width: 1100px; margin: auto;' >

    <span>
    The first thing we do is to ensure that the goals which are set are on point.<br>
    &nbsp;&nbsp; If none, then obviously we help set some in the same process.<br><br>
    Typically this means reviewing progress over past years (as much as is practical with COVID) obviously.<br><br>
    Following this we asses a 'trend' set of goals - revenue, expenses, sales, marketing - and stretch set of goals for the same.<br>
    &nbsp;&nbsp; Trend = something challenging obviously.<br>
    <br>
    This process is typically pretty straightforward following some basic data gathering, charting that and discussing with the business owner:<br>
    &nbsp;&nbsp;  What they want.<br>
    &nbsp;&nbsp; What would challenge the business.<br>
    &nbsp;&nbsp; How & why.      <br>   
         <br>
    Then from there we keep them on track with that with monthly review and planning meeting, if not more regular as clients and elements of their business require.<br>
    <br>

    <span style=''>    
    When it comes to dashboards and reporting we work this through with them based on what will give them the absolute most control over their business.    <br>
    <br>
    Further to that we typically start with some very basic reporting and expand over time as more critical numbers become apparent.    <br>
    <br>
    </span>

</div>
";



echo "</div>";


require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";
