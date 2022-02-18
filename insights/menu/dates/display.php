<?php
if(!isset($_SESSION)){session_start();}

echo "<form method='post' action='/insights/menu/dates/change.php' style='display: inline-block;'>";
        echo "<span class='inputs_menu_titles'>Start date</span>";
        echo "
            <input  
                class       ='insights_date'
                name        ='insights_start_date'
                onchange    ='this.form.submit()' 
                type        ='date' 
                value       ='".$_SESSION['insights_menu']['start_date']."'

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
                value       ='".$_SESSION['insights_menu']['end_date']."'
                ";
        //        value='2018-07-22'


            //in the future this should be set but right now it's not critical
            //this ultimately should be all about how far the data goes backwards
            //this would be dependend on the chart and the api data that is required to build that specific chart obvously
            //    min='2018-01-01'
            echo "
                >
                ";


//perhaps in time select or /cut by days of the week here as well
//for example to dig deeper into anything or just look at single days for example
//this can and almost certainly will be coded into the platform for critial requests obviously and built out in time as an additional feature


echo "</form>";