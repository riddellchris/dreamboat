<?php
if(!isset($_SESSION)){session_start();}

//this is really about setting up the averaging data systems to look at those comparative systems

echo "<select>";
    echo "<option>Apply no averages</option>";
        echo "<optgroup label = 'Daily averages'>";
            //if daily periods chosen then 
            echo "<option>3 day moving average</option>";
            echo "<option>7 day moving average</option>";
            echo "<option>14 day moving average</option>";

        echo "<optgroup label = 'Weekly averages'>";           
            //if weekly periods chosen then 
            echo "<option>2 week moving average</option>";
            echo "<option>4 week moving average</option>";
            echo "<option>6 week moving average</option>";   
            echo "<option>8 week moving average</option>";   
            echo "<option>10 week moving average</option>";   
            echo "<option>12 week moving average</option>";   

        echo "<optgroup label = 'Monthly averages'>";
            //if monthly periods chosen then 
            echo "<option>2 month moving average</option>";
            echo "<option>3 month moving average</option>";     
            echo "<option>4 month moving average</option>";
            echo "<option>6 month moving average</option>";   

echo "</select>";