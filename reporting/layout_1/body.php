<?php
if(!isset($_SESSION)){session_start();}

echo "<style>";

if($_GET['tertiary_folder'] == 'print'){echo "table{width: 1120px;}";}
else{echo "table{width:100%;}";}

echo"
td{width: 50%; height: 25vh;}
.print_link{
    font-family: helvetica;
    margin-top: 30px;

    font-weight: 800;
}

.google_charts_print{
width:100%;
height:100%;

}

</style>";

if($_GET['tertiary_folder'] != 'print'){
    echo "  <div style='text-align:center; width: 100%;'>
                <a href='/reporting/".$_GET['secondary_folder']."/print/' target='_blank' class='blink_me print_link'>PRINT</a>
            </div>";
}

//this is just hard coding a 6 up table.
echo "<table>";
    echo "<tr>";
        echo "<td>";
            echo "<div id='financials_revenue_tracker_div' class='google_charts_print'></div>";
        echo "</td>";
        echo "<td>";
            echo "<div id='financials_revenue_sales_mix_div'  class='google_charts_print'></div>";
        echo "</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>";
            echo "<div id='financials_revenue_shopify_comparison_div'  class='google_charts_print'></div>";
        echo "</td>";
        echo "<td>";
            echo "<div id='financials_revenue_breakdown_div'  class='google_charts_print'></div>";
        echo "</td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td>";
            echo "<div id='financials_expenses_total_div'  class='google_charts_print'></div>";
        echo "</td>";
        echo "<td>";
            echo "<div id='financials_expenses_adspend_vs_return_div'  class='google_charts_print'></div>";
        echo "</td>";
    echo "</tr>";
echo "</table>";


/*
$prompts    = 'yes';
$placeholder ='Add your comments as you need';
require $_SERVER['DOCUMENT_ROOT']."/components/discussion/display.php";
*/