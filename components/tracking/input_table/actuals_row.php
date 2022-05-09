<?php

echo "<div class='div-table-row'";
        if($_GET['primary_folder'] == 'financials'){ echo "style='display:none;'";}
        echo ">";
    echo "<div class='div-table-col-1'>";	

        
        echo "
            <div class='div-table-cell title ".$variable_name."' style='border: 0px solid;'>
        ";
        
        echo $display_variable_name;
        $sql = "SELECT * FROM tracking_inputs 
            WHERE data_type = '".$variable_name."' 
            AND user_id = '".$user_to_display."' 
            AND latest_version_of_this_data_type = 'yes' ORDER BY entry_id DESC LIMIT 1"; // select column
            //echo $sql;exit();
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 0){
            $sql = "INSERT INTO tracking_inputs (data_type, user_id, latest_version_of_this_data_type) VALUES ('".$variable_name."', '".$user_to_display."', 'yes')";
            //echo $sql;exit();
            mysqli_query($conn, $sql);

            $sql = "SELECT * FROM tracking_inputs 
            WHERE data_type = '".$variable_name."' 
            AND user_id = '".$user_to_display."' 
            AND latest_version_of_this_data_type = 'yes' ORDER BY entry_id DESC LIMIT 1"; // select column
            //echo $sql;exit();
        }
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        
    echo "</div>";

    //echo '<pre>' , var_dump($row) , '</pre>';
    //exit();

        for($i = 0; $i < 13; $i++){
            echo "<div class='div-table-cell'>	
                <input ";
                    echo "class	='si_digits_wide ".$variable_name."'"; 
                    echo "name	='".$variable_name."_".$month_combo[$i]."'"; 
                    echo "value 	='".$row[$month_combo[$i]]."'";
            echo "		>
                </input>
            </div>";
        }

    echo "</div>";
echo "</div>";