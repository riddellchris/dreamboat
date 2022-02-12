<?php
if(!isset($_SESSION)){session_start();}

if(!isset($_SESSION['start_date'])){    $_SESSION['insights_menu_start_date']   = date("Y-m-d", strtotime(date('Y')."-".date('m')."-".date('d')." -1 year"));}//one year ago
if(!isset($_SESSION['end_date'])){      $_SESSION['insights_menu_end_date']     = date("Y-m-d");} 





echo "<form method='post' action='/insights/components/menu/dates/change.php' style='display: inline-block;'>";
        echo "<span class='inputs_menu_titles'>Start date</span>";
        echo "
            <input  
                class       ='insights_date'
                name        ='insights_start_date'
                onchange    ='this.form.submit()' 
                type        ='date' 
                value       ='".$_SESSION['insights_menu_start_date']."'

                ";
        //        value='2018-07-22'";

            //in the future this should be set but right now it's not critical
            //this ultimately should be all about how far the data goes backwards
            //this would be dependend on the chart and the api data that is required to build that specific chart obvously
            //    min='2018-01-01'
            echo "
                >
            ";



        echo "<span class='inputs_menu_titles'>End date</span>";
        echo "
            <input  
                class       ='insights_date'
                name        ='insights_end_date'
                onchange    ='this.form.submit()' 
                type        ='date' 
                value       ='".$_SESSION['insights_menu_end_date']."'
                ";
        //        value='2018-07-22'


            //in the future this should be set but right now it's not critical
            //this ultimately should be all about how far the data goes backwards
            //this would be dependend on the chart and the api data that is required to build that specific chart obvously
            //    min='2018-01-01'
            echo "
                >
                ";
echo "</form>";