<?php
if(!isset($_SESSION)){session_start();}

if($setup_completed == 'yes'){ // this is defined in the actual user settings
    require $_SERVER['DOCUMENT_ROOT']."/financials/expenses/wages_as_percentage_of_revenue_3/user_specific_calculations/parts/sql_query.php";
    //require $_SERVER['DOCUMENT_ROOT']."/financials/expenses/wages_as_percentage_of_revenue_3/user_specific_calculations/parts/actual_user_specific.php";



    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    $date_index = $row['date_index'];
    if(in_array($row['account_name'], $denominator_names)){     if(!isset($extracted['denominator'][$date_index])){  $extracted['denominator'][$date_index]  = 0;} $extracted['denominator'][$date_index]  += $row['value'];} 

    //obviously this can be turned into some sort of array simplification.
    if(in_array($row['account_name'], $numerator_names)){   if(!isset($extracted['numerator'] [$date_index])){        $extracted['numerator'] [$date_index]  = 0;} $extracted['numerator'] [$date_index]  += $row['value'];}    
    //if($row['account_name'] == $numerator_names[1]){   if(!isset($extracted['numerator'] [$date_index])){        $extracted['numerator'] [$date_index]  = 0;} $extracted['numerator'] [$date_index]  += $row['value'];}  
                    
    $extracted['period_for_chart_display'][$date_index] = $row['period_for_chart_display'];
    }

    echo "['Month',   '".$title_for_chart[0]."', { role: 'annotation' } ";
    /*
        , 'Total Income', { role: 'annotation' }, 'Wages', { role: 'annotation' }
    */
    echo "],";
    for($extraction_counter = -6; $extraction_counter < 0; $extraction_counter ++){

        //run the calculation
        $correct_elements = 0;
        if(isset($extracted['numerator'][$extraction_counter]   )){$correct_elements ++;}
        if(isset($extracted['denominator'][$extraction_counter] )){$correct_elements ++;}
        if($correct_elements == 2){
            $computed['wages_percentage'][$extraction_counter] = round($extracted['numerator'][$extraction_counter] / $extracted['denominator'][$extraction_counter] * 100, 1);
        }

        echo " ['".$extracted['period_for_chart_display'][$extraction_counter]."',      
                ".$computed['wages_percentage'][$extraction_counter].",  '".$computed['wages_percentage'][$extraction_counter]."'";
            /*
            ,                       
            ".$extracted['denominator'][$extraction_counter].",           '".$extracted['denominator'][$extraction_counter]."',    
            ".$extracted['numerator'][$extraction_counter].",           '".$extracted['numerator'][$extraction_counter]."' 
            */
            echo "]      ";
            
        if($extraction_counter < -1){echo ",";}

        $sub_title = $row['accurate_as_at_string'];

        //RAW_Contract Manufacturing not included as not a sales item

    }   
}