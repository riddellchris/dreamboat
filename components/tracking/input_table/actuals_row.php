<?php

$sql = "SELECT * FROM tracking_inputs WHERE data_type = '".$variable_name."' 
        AND user_id = '".$user_to_display."' 
        AND latest_version_of_this_data_type = 'yes' ORDER BY entry_id DESC LIMIT 1"; // select column
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 0){
            $sql = "INSERT INTO tracking_inputs (data_type, user_id, latest_version_of_this_data_type) VALUES ('".$variable_name."', '".$user_to_display."', 'yes')";
            //echo $sql;exit();
            mysqli_query($conn, $sql);

            $sql = "SELECT * FROM tracking_inputs WHERE data_type = '".$variable_name."' 
            AND user_id = '".$user_to_display."' 
            AND latest_version_of_this_data_type = 'yes' ORDER BY entry_id DESC LIMIT 1"; // select column
        }
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>

<?php
if($_GET['primary_folder'] == 'financials'):
    echo"<div class='div-table-row' style='display:none;'>";
else:
    echo"<div class='row'>";
endif;
?>
    
    <div class='table-cell title <?=$variable_name?>'>    
    <?=$display_variable_name?>
    </div>
    <?php
        for($i = 0; $i <= $month_to_loop; $i++){
            echo "<div class='table-cell'>	
                <input ";
                    echo "class	='table-cell_input ".$variable_name."'"; 
                    echo "name ='".$variable_name."_".$month_combo_reverse[$i]."'"; 
                    echo "value ='".$row[$month_combo_reverse[$i]]."'";
            echo ">
                </input>
            </div>";
        }
        ?>
        
    </div>
