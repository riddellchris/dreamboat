<?php
if(!isset($_SESSION)){session_start();}

if(!isset($_SESSION['insights_menu'])){
    if($_SESSION['viewing_client_id'] == 4231 OR $_SESSION['viewing_client_id'] == 1){
        $_SESSION['insights_menu'] = 'time_per_activity';
    }
        $_SESSION['insights_menu'] = 'stacked_revenue';
}



echo "<div style='width: 100%;'>";
    //then display and allow these people to make new views
    echo "<form>";
        echo "<select>";
            if($_SESSION['viewing_client_id'] == 4231 OR $_SESSION['viewing_client_id'] == 1){
                echo "<optgroup label = 'Time Charts'>";
                    echo "<option name = ''>Time per activity chart</option>";
                    echo "<option name = ''>Time per client revenue</option>";//bar for now
            }
                echo "<optgroup label = 'Revenue Charts'>";
                    echo "<option name = ''>Stacked Revenue Chart</option>";
                    echo "<option name = ''>Client Category Growth Charts</option>";

                echo "<optgroup label = 'Sales Charts'>";            
                    echo "<option name = ''>Client Product Matrix</option>";

                //echo "<optgroup label = 'Task Charts'>";  
        echo "</select>";
    echo "</form>";

echo "</div>";