<?php
if(!isset($_SESSION)){session_start();}

echo "<style>";

if($_GET['tertiary_folder'] == 'print'){

    if($_SESSION['viewing_client_id'] == '4383'){ $print_width = '1070px';}
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


        echo "<tr>";
            echo "<td style='width:100%;' colspan='2'>";
                echo "<table >";
                    echo "<tr>";
                        echo "<td class='title_blocks'>";
                            $go_to_dummy['logo'] = 'yes';
                            if($_SESSION['viewing_client_id'] == '1'){   echo "<img src='/components/whitelabeling/dreamboat/screenshot_dreamboat_logo.png' alt='Dreamboat Logo'  style=' margin-left: 25px; max-width:300; min-height:40px;'>";
                                $go_to_dummy['logo'] = 'no';
}
                            if($_SESSION['viewing_client_id'] == '4231'){   echo "<img src='/components/whitelabeling/national_pc/NationalPCLogo.png' alt='National PC Logo'  style='margin-top: 10px; margin-left: 25px;  max-width:300; '>";
                                                                            $go_to_dummy['logo'] = 'no';
                            }

                            if($_SESSION['viewing_client_id'] == '4383'){   echo "<img src='/components/whitelabeling/prime_strategies/laila PNG.png' alt='Laila & Me' width='100' height='100' style='margin-bottom: 20px;'>";
                                                                            echo "<img src='/components/whitelabeling/prime_strategies/WEB_NO BG_Vertical Logo with Tag.png' alt='Laila & Me' width='140' height='140'>";
                                                                            $go_to_dummy['logo'] = 'no';
                            }
                            if($go_to_dummy['logo'] == 'yes'){                 echo "<div style='margin-left: 25px;'>Your Logo</div>";}

                        echo "</td>";
                        echo "<td class='title_blocks' style='text-align:center;'>";
                            echo "<span style='font-size: 30px; text-decoration: underline; padding-bottom: 5px; font-weight: 800;'>";
                                $go_to_dummy['title'] = 'yes';
                                if($_SESSION['viewing_client_id'] == '1'){      echo "Dreamboat";                   $go_to_dummy['title'] = 'no';}
                                if($_SESSION['viewing_client_id'] == '4231'){   echo "National PC";                 $go_to_dummy['title'] = 'no';}
                                if($_SESSION['viewing_client_id'] == '4383'){   echo "Laila and Me / Rawvolution";  $go_to_dummy['title'] = 'no';}

                                if($go_to_dummy['title'] == 'yes'){echo "Your Company Name";}
                            echo "</span>";
                            
                            echo "<br>";

                            echo "MONTHLY KPI DASHBOARD";

                            echo "<br>";

                                    echo "Accurate as at:<br>".date("F j, Y");

                            echo "<br>";
                            echo "";

                        echo "</td>";
                        echo "<td class='title_blocks' style='text-align:right;'>";

                        if($_SESSION['viewing_client_id'] == '4231'){   echo "<img src='/components/whitelabeling/dreamboat/screenshot_dreamboat_logo.png' alt='Dreamboat Logo'  style=' margin-left: 25px; max-width:300; min-height:40px;'>";

                        }


                            if($_SESSION['viewing_client_id'] == '4383'){
                                echo "<img src='/components/whitelabeling/prime_strategies/Prime-Strategies-logo-1500pxW.PNG' alt='Laila & Me' style='max-height:100;'>";
                            }
                        echo "</td>";
                        
                    echo "</tr>";


                    echo "</table>";
            echo "</td>";
            echo "<td>";
            echo "</td>";
        echo "</tr>";



    echo "<tr class='chart_row'>";
        echo "<td>";
            echo "<div id='financials_revenue_tracker_div' class='google_charts_print'></div>";
        echo "</td>";
        echo "<td>";
            echo "<div id='financials_revenue_sales_mix_div'  class='google_charts_print'></div>";
        echo "</td>";
    echo "</tr>";
    echo "<tr class='chart_row'>";
        echo "<td>";
            echo "<div id='financials_revenue_shopify_comparison_div'  class='google_charts_print'></div>";
        echo "</td>";
        echo "<td>";
            echo "<div id='financials_revenue_breakdown_div'  class='google_charts_print'></div>";
        echo "</td>";
    echo "</tr>";
    echo "<tr class='chart_row'>";
        echo "<td>";
            echo "<div id='financials_expenses_total_div'  class='google_charts_print'></div>";
        echo "</td>";
        echo "<td>";
            echo "<div id='financials_expenses_adspend_vs_return_div'  class='google_charts_print'></div>";
        echo "</td>";
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