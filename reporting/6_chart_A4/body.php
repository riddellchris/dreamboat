<?php
if(!isset($_SESSION)){session_start();}

require $_SERVER['DOCUMENT_ROOT']."/reporting/components/styling.php";
require $_SERVER['DOCUMENT_ROOT']."/reporting/components/print_me_link.php";

//this is just hard coding a 6 up table.
echo "<table>";

    require $_SERVER['DOCUMENT_ROOT']."/reporting/components/report_header_setup.php";

    $default_setup = 'yes';
    if( $_SESSION['viewing_client_id'] == '4383' OR
        $_SESSION['viewing_client_id'] == '4397' OR
        $_SESSION['viewing_client_id'] == '4398'
        ){
        $default_setup = 'no';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][1] = 'financials_revenue_tracker_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][2] = 'financials_revenue_sales_mix_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][3] = 'financials_revenue_shopify_comparison_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][4] = 'financials_revenue_breakdown_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][5] = 'financials_expenses_total_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][6] = 'financials_expenses_adspend_vs_return_div';
    }

    //Emily Cubbins Client ids
    if( $_SESSION['viewing_client_id'] == '4386' OR
        $_SESSION['viewing_client_id'] == '4387' OR
        $_SESSION['viewing_client_id'] == '4388' OR
        $_SESSION['viewing_client_id'] == '4389' OR
        $_SESSION['viewing_client_id'] == '4390' OR
        $_SESSION['viewing_client_id'] == '4391' OR
        $_SESSION['viewing_client_id'] == '4392'
        ){
        $default_setup = 'no';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][1] = 'financials_revenue_tracker_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][2] = 'financials_cashflow_debtor_days_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][3] = 'financials_expenses_opertaing_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][4] = 'financials_revenue_breakdown_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][5] = 'financials_profit_and_loss_gross_profit_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][6] = 'financials_profit_and_loss_net_profit_div';
    }



    if($default_setup == 'yes'){
        $_SESSION['reporting']['6_chart_A4']['chart_position'][1] = 'financials_revenue_tracker_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][2] = 'financials_revenue_sales_mix_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][3] = 'financials_revenue_shopify_comparison_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][4] = 'financials_revenue_breakdown_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][5] = 'financials_expenses_total_div';
        $_SESSION['reporting']['6_chart_A4']['chart_position'][6] = 'financials_expenses_adspend_vs_return_div';
    }

    $n = 1; $chart[$n] = $_SESSION['reporting']['6_chart_A4']['chart_position'][$n];
    $n = 2; $chart[$n] = $_SESSION['reporting']['6_chart_A4']['chart_position'][$n];
    $n = 3; $chart[$n] = $_SESSION['reporting']['6_chart_A4']['chart_position'][$n];
    $n = 4; $chart[$n] = $_SESSION['reporting']['6_chart_A4']['chart_position'][$n];
    $n = 5; $chart[$n] = $_SESSION['reporting']['6_chart_A4']['chart_position'][$n];
    $n = 6; $chart[$n] = $_SESSION['reporting']['6_chart_A4']['chart_position'][$n];


    echo "<tr class='chart_row'>";
        $n = 1;
            echo "<td>";
                echo "<div id='".$chart[$n]."' class='google_charts_print'></div>";
            echo "</td>";
        $n = 2;
            echo "<td>";
                echo "<div id='$chart[$n]'  class='google_charts_print'></div>";
            echo "</td>";
    echo "</tr>";
    echo "<tr class='chart_row'>";
        $n = 3;
            echo "<td>";
                echo "<div id='$chart[$n]'  class='google_charts_print'></div>";
            echo "</td>";
        $n = 4;
            echo "<td>";
                echo "<div id='$chart[$n]'  class='google_charts_print'></div>";
            echo "</td>";
    echo "</tr>";
    echo "<tr class='chart_row'>";
        $n = 5;
            echo "<td>";
                echo "<div id='$chart[$n]'  class='google_charts_print'></div>";
            echo "</td>";
        $n = 6;
            echo "<td>";
                echo "<div id='$chart[$n]'  class='google_charts_print'></div>";
            echo "</td>";
    echo "</tr>";

    require $_SERVER['DOCUMENT_ROOT']."/reporting/components/notes_textarea.php";

echo "</table>";


/*
$prompts    = 'yes';
$placeholder ='Add your comments as you need';
require $_SERVER['DOCUMENT_ROOT']."/components/discussion/display.php";
*/