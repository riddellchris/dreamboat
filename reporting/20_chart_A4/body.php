<?php
if(!isset($_SESSION)){session_start();}

echo "<style>";

if($_GET['tertiary_folder'] == 'print'){

    if($_SESSION['user_id'] == '4397'){ $print_width = '1070px';}
    else{ $print_width = '1120px';}

    echo "table{width: ".$print_width.";}";
}
else{echo "table{width:100%;}";}

echo"
.chart_row td{width: 50%; height: 22.5vh;}
.print_link{
    font-family: helvetica;
    margin-top: 30px;

    font-weight: 800;
}

.google_charts_print{
    width:100%;
    height:100%;
}

.title_blocks{
    width: calc(100%/3);
}

table{
    font-family: Barlow Semi Condensed;

}
</style>";

if($_GET['tertiary_folder'] != 'print'){
    echo "  <div style='text-align:center; width: 100%;'>
                <a href='/reporting/".$_GET['secondary_folder']."/print/' target='_blank' class='blink_me print_link'>PRINT</a>
            </div>";
}

//this is just hard coding a 6 up table.
echo "<table >";

require $_SERVER['DOCUMENT_ROOT']."/reporting/components/report_header_setup.php";

/*
    $_SESSION['reporting'] = array();
    $_SESSION['reporting']['6_chart_A4'] = array();
    $_SESSION['reporting']['6_chart_A4']['chart_position'] = array();
*/


    $default_setup = 'yes';
    if($_SESSION['viewing_client_id'] == '4383'){
        $default_setup = 'no';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][1] = 'financials_revenue_tracker_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][2] = 'financials_revenue_sales_mix_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][3] = 'financials_revenue_shopify_comparison_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][4] = 'financials_revenue_breakdown_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][5] = 'financials_expenses_total_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][6] = 'financials_expenses_adspend_vs_return_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][7] = 'financials_revenue_tracker_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][8] = 'financials_revenue_sales_mix_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][9] = 'financials_revenue_shopify_comparison_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][10] = 'financials_revenue_breakdown_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][11] = 'financials_expenses_total_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][12] = 'financials_expenses_adspend_vs_return_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][13] = 'financials_revenue_tracker_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][14] = 'financials_revenue_sales_mix_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][15] = 'financials_revenue_shopify_comparison_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][16] = 'financials_revenue_breakdown_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][17] = 'financials_expenses_total_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][18] = 'financials_expenses_adspend_vs_return_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][19] = 'financials_expenses_total_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][20] = 'financials_expenses_adspend_vs_return_div';

    }
    if($default_setup == 'yes'){
        $_SESSION['reporting']['6_chart_A4']['chart_position'][1] = 'financials_revenue_tracker_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][2] = 'financials_revenue_sales_mix_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][3] = 'financials_revenue_shopify_comparison_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][4] = 'financials_revenue_breakdown_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][5] = 'financials_expenses_total_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][6] = 'financials_expenses_adspend_vs_return_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][7] = 'financials_revenue_tracker_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][8] = 'financials_revenue_sales_mix_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][9] = 'financials_revenue_shopify_comparison_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][10] = 'financials_revenue_breakdown_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][11] = 'financials_expenses_total_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][12] = 'financials_expenses_adspend_vs_return_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][13] = 'financials_revenue_tracker_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][14] = 'financials_revenue_sales_mix_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][15] = 'financials_revenue_shopify_comparison_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][16] = 'financials_revenue_breakdown_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][17] = 'financials_expenses_total_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][18] = 'financials_expenses_adspend_vs_return_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][19] = 'financials_expenses_total_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][20] = 'financials_expenses_adspend_vs_return_div';

    }

    $n = 1; $chart[$n] = $_SESSION['reporting']['6_chart_A4']['chart_position'][$n];
    $n = 2; $chart[$n] = $_SESSION['reporting']['6_chart_A4']['chart_position'][$n];
    $n = 3; $chart[$n] = $_SESSION['reporting']['6_chart_A4']['chart_position'][$n];
    $n = 4; $chart[$n] = $_SESSION['reporting']['6_chart_A4']['chart_position'][$n];
    $n = 5; $chart[$n] = $_SESSION['reporting']['6_chart_A4']['chart_position'][$n];
    $n = 6; $chart[$n] = $_SESSION['reporting']['6_chart_A4']['chart_position'][$n];

    $n = 1;
    echo "<tr class='chart_row'>";
        $n ++;  echo "<td><div id='".$chart[$n]."' class='google_charts_print'></div></td>";
        $n ++;  echo "<td><div id='".$chart[$n]."' class='google_charts_print'></div></td>";
    echo "</tr>";
    echo "<tr class='chart_row'>";
        $n ++;  echo "<td><div id='".$chart[$n]."' class='google_charts_print'></div></td>";
        $n ++;  echo "<td><div id='".$chart[$n]."' class='google_charts_print'></div></td>";
    echo "</tr>";
    echo "<tr class='chart_row'>";
        $n ++;  echo "<td><div id='".$chart[$n]."' class='google_charts_print'></div></td>";
        $n ++;  echo "<td><div id='".$chart[$n]."' class='google_charts_print'></div></td>";
    echo "</tr>";
    echo "<tr class='chart_row'>";
        $n ++;  echo "<td><div id='".$chart[$n]."' class='google_charts_print'></div></td>";
        $n ++;  echo "<td><div id='".$chart[$n]."' class='google_charts_print'></div></td>";
    echo "</tr>";
    echo "<tr class='chart_row'>";
        $n ++;  echo "<td><div id='".$chart[$n]."' class='google_charts_print'></div></td>";
        $n ++;  echo "<td><div id='".$chart[$n]."' class='google_charts_print'></div></td>";
    echo "</tr>";
    echo "<tr class='chart_row'>";
        $n ++;  echo "<td><div id='".$chart[$n]."' class='google_charts_print'></div></td>";
        $n ++;  echo "<td><div id='".$chart[$n]."' class='google_charts_print'></div></td>";
    echo "</tr>";
    echo "<tr class='chart_row'>";
        $n ++;  echo "<td><div id='".$chart[$n]."' class='google_charts_print'></div></td>";
        $n ++;  echo "<td><div id='".$chart[$n]."' class='google_charts_print'></div></td>";
    echo "</tr>";
    echo "<tr class='chart_row'>";
        $n ++;  echo "<td><div id='".$chart[$n]."' class='google_charts_print'></div></td>";
        $n ++;  echo "<td><div id='".$chart[$n]."' class='google_charts_print'></div></td>";
    echo "</tr>";
    echo "<tr class='chart_row'>";
        $n ++;  echo "<td><div id='".$chart[$n]."' class='google_charts_print'></div></td>";
        $n ++;  echo "<td><div id='".$chart[$n]."' class='google_charts_print'></div></td>";
    echo "</tr>";
    echo "<tr class='chart_row'>";
        $n ++;  echo "<td><div id='".$chart[$n]."' class='google_charts_print'></div></td>";
        $n ++;  echo "<td><div id='".$chart[$n]."' class='google_charts_print'></div></td>";
    echo "</tr>";
    echo "<tr>";
        echo "<td colspan='2'>";
            echo "<form action='/reporting/notes/submit.php'>";

//                if(isset()){



      //          }


echo "
<style>
@media print {
     #reporting_notes{
        box-shadow: none;
    }
}

</style>

";




                echo "<textarea id='reporting_notes' name='textarea_input' style='max-width:1100px;margin-left: auto; margin-right: auto; display: block; text-align: left;' rows='10'>";

                $sql = "SELECT * FROM notes 
                        WHERE user_id           = '".mysqli_real_escape_string($conn, $_SESSION['user_id'])."'
                        AND viewing_client_id = '".mysqli_real_escape_string($conn, $_SESSION['viewing_client_id'])."'
                        ORDER BY entry_id DESC LIMIT 1";
                    //    echo $sql; exit();
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) != 0){
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    echo stripslashes(str_replace('\r\n', PHP_EOL, $row['text']));              

                }







                echo "</textarea>";
                    
                    $display_submit = 'yes';
                    if(isset($_GET['tertiary_folder'])){
                        if($_GET['tertiary_folder'] == 'print'){
                            $display_submit = 'no';
                        }
                    }
                    if($display_submit == 'yes'){
                        require $_SERVER['DOCUMENT_ROOT']."/components/inputs/pieces/submits/standard.php";

                    }

            echo "</form>";


            echo "<div style='height: 300px;display:block;'>&nbsp;</div>";
        echo "</td>";
    echo "</tr>";
echo "</table>";


/*
$prompts    = 'yes';
$placeholder ='Add your comments as you need';
require $_SERVER['DOCUMENT_ROOT']."/components/discussion/display.php";
*/