<?php
if(!isset($_SESSION)){session_start();}

//echo $_SESSION['insights_menu']['headline_chart'];
//exit();

if(!isset($_SESSION['insights_menu']['headline_chart'])){$_SESSION['insights_menu']['headline_chart'] = 'time_per_activity';}

//then display and allow these people to make new views
echo "<form method='post' action='/insights/menu/headline_chart/change.php' style='display:inline-block;'>";
    echo "<select name='headline_chart'  onchange='this.form.submit()'>";

        //this really should only be for those with a timeular or clear time tracking ability
        //ideally we will know that from the function of the bloody api connections that have been build in
        if($_SESSION['viewing_client_id'] == 4231 OR $_SESSION['viewing_client_id'] == 1){
            echo "<optgroup label = 'Time Charts'>";
                $name = 'time_per_activity';                
                echo "<option value = '".$name."'";
                if($_SESSION['insights_menu']['headline_chart'] == $name){echo " selected ";}
                echo ">Time per activity chart</option>";

                $name = 'time_per_client';                
                echo "<option value = '".$name."'";    
                if($_SESSION['insights_menu']['headline_chart'] == $name){echo " selected ";}                    
                echo ">Time per client revenue</option>";//bar for now
        }


        
        echo "<optgroup label = 'Automatic insights'>";
        $name = '12_month_product_sales_review';                  
        echo "<option value = '".$name."'";    
        if($_SESSION['insights_menu']['headline_chart'] == $name){echo " selected ";}                       
        echo ">12 month product sales review</option>";


        /*
            echo "<optgroup label = 'Revenue Charts'>";
                $name = 'revenue_stacked';                  
                echo "<option value = '".$name."'";    
                if($_SESSION['insights_menu']['headline_chart'] == $name){echo " selected ";}                       
                echo ">Stacked Revenue Chart</option>";

                $name = 'revenue_per_client_growth';        
                echo "<option value = '".$name."'";    
                if($_SESSION['insights_menu']['headline_chart'] == $name){echo " selected ";}                       
                echo ">Client Category Growth Charts</option>";

            echo "<optgroup label = 'Sales Charts'>";            
                $name = 'sales_client_vs_product_matrix';   
                echo "<option value = '".$name."'";   
                if($_SESSION['insights_menu']['headline_chart'] == $name){echo " selected ";}                     
                echo ">Client Product Matrix</option>";

                */


            //this stuff therefore indicates exactly what we need in order to be able to pull out of xero in order to really make it all stick and work
            //it's not an endless list by ANY stretch of the imagination
            //not even close to an endless list
            //but first we need to store the menu chart - as a session variable.
                //that's all done
                //so what we need to do next is deal with the change in these thigns.







            //echo "<optgroup label = 'Task Charts'>";  
    echo "</select>";

    //require $_SERVER['DOCUMENT_ROOT']."/components/functions/hidden_form_inputs_for_folders_and_items.php";
    hidden_form_inputs_for_folders_and_items();
echo "</form>";