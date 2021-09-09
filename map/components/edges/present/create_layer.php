<?php
if(!isset($_SESSION)){session_start();}


for($i = 0; $i < count($edges['relationship_id']); $i++){

    echo "
    <style>
        .test_relationship_".$edges['relationship_id'][$i]."{
            background-color: ".$edges['still_color'][$i]."; 
            z-index: 1750;
            box-shadow: 0 0 0px #f2f2f2;
            -webkit-box-shadow: 0 0 0px #f2f2f2;
            }
        .test_relationship_".$edges['relationship_id'][$i].":hover{
                background-color:  ".$edges['hover_color'][$i]."; 
                z-index: 2500;
                box-shadow: 0 0 10px #f2f2f2;
                -webkit-box-shadow: 0 0 10px #f2f2f2;
                }
    </style>

    <a target='_blank' href='/map/edges/index.php?item_id=".$edges['relationship_id'][$i]."'>
        <div            
            class='test_relationship_".$edges['relationship_id'][$i]."'";

            
            


    $custom = 'yes';
    $style_string = '';
    $calc_pieces_string = '';
    if( $edges['item_a_x_pos'][$i] <= $edges['item_b_x_pos'][$i] ){
        $calc_pieces_string = " a_is_less_than_or_equal_to_b ";
        $style_string       = " transform-origin: left; ";

    }
    else{
        $calc_pieces_string = " a_is_less_than_b ";
        $style_string       = " transform-origin: right; ";

    }


    $a_x = $edges['item_a_x_pos'][$i];
    $a_y = $edges['item_a_y_pos'][$i];
    $b_x = $edges['item_b_x_pos'][$i];
    $b_y = $edges['item_b_y_pos'][$i];


    //these are just adjustments for the layout and to get to the middle of every box
    //these apply to every box and every line so aren't part of the problem of making each line adjust

    $style_string       .= " left: calc(300px + 127px); ";
    $style_string       .= " top: calc(200px  + 62px ); ";

    //this is the 'length' of the line
    $style_string       .= " width: ".abs($edges['line_length'][$i])."px;";

    //this is the 'thickness' of the line
    $style_string       .= " height: ".$edges['a_to_b_thickness_in_pts'][$i]."px;";




    $style_string       .= " transform: ";
    if($a_x > $b_x){ $tranform_right_adjustment = -1 * $edges['line_length'][$i];} else{$tranform_right_adjustment = 0;} //this is because the transform origin is from the right here so we must cancel out the line length from the translation
    if($a_x > $b_x){ $style_string       .= "translateX(".$tranform_right_adjustment."px)";}
    $style_string       .= "translateX(".$edges['item_a_x_pos'][$i]."px)";

    $style_string       .= "translateY(".$edges['item_a_y_pos'][$i]."px)";

    //now all we need to do here is get this rotation right
    //to keep it simple rather than going clockwise as per how the rotate function works we are going to go with "-" angle every time.




$rotation = 1700;
 //   $edges['rotation'][$i] = 200;
    //there are eight conditions we need to adjust for here:
        //a'x < b'x
        if($a_x < $b_x){
            //a'y < b'y  //rotation angle = - inverse sin of abs(y_diff)/line length
            if($a_y < $b_y){  /*$rotation = 5;*/ $edges['rotation'][$i] =       rad2deg(asin( abs($edges['y_diff'][$i]) / $edges['line_length'][$i]));
             }         
            //a'y > b'y  //rotation angle = - ( 360 - inverse sin of abs(y_diff)/line length )
            if($a_y > $b_y){   /*$rotation = 2;*/ $edges['rotation'][$i] =  (360 - rad2deg(asin( abs($edges['y_diff'][$i]) /  $edges['line_length'][$i])));
             }    
        }
        //a'x > b'x
        if($a_x > $b_x){
            //a'y < b'y  //rotation angle = - (180  - inverse sin of abs(x_diff)/line length )
            if($a_y < $b_y){  /* $rotation = 3;*/ $edges['rotation'][$i] =  -1 * rad2deg(acos( abs($edges['x_diff'][$i]) /  $edges['line_length'][$i])); 
            }  
            //a'y > b'y  //rotation angle = - (180  + inverse cos of abs(x_diff)/line length )
            if($a_y > $b_y){  /*$rotation = 4; */ $edges['rotation'][$i] =    rad2deg(acos( abs($edges['x_diff'][$i]) /  $edges['line_length'][$i]));
             }  
        }

        //these ones are just going to be fixed numbers 
        //a'x = b'x
        if($a_x == $b_x){
            //a'y < b'y  -90 degrees
            if($a_y < $b_y){    $edges['rotation'][$i] = -270; } 
            //a'y > b'y  -270 degrees
            if($a_y > $b_y){   $edges['rotation'][$i] = -90; } 
        }
        //a'y = b'y
        if($a_y == $b_y){
            //a'x < b'x  0 degrees
            if($a_x < $b_x){    $edges['rotation'][$i] = 0; } 
            //a'x > b'x  -180 degrees
            if($a_x > $b_x){    $edges['rotation'][$i]= 0; } 
        }


        $style_string       .= "rotate(".$edges['rotation'][$i]."deg)";       
        //$style_string       .= "rotate(".$edges['rotation'][$i]."deg)";



        $style_string       .= "translateY(calc(".$edges['a_to_b_thickness_in_pts'][$i]."px / -2))"; //this is done after the rotation so that it is done in a rotated "y" direction
$style_string       .= ";";
 

$style_string       .= "    font-family: Barlow Semi Condensed;
                            font-weight: 600;
                            position: absolute; 
                            '";

                            
                            echo "style ='".$style_string."'";



    //now finally all that we need to do here is build the "title string"

    if($_SESSION['map_edge_colour'] == 'non_descript'){	                        $color_title_string = "";                                       $color_unit_string = "";}
    if($_SESSION['map_edge_colour'] == 'users_time'){		                    $color_title_string = "User&#x27;s time: ";                          $color_unit_string = " hours";}
    if($_SESSION['map_edge_colour'] == 'financial'){		                    $color_title_string = "User&#x27;s perspective financial: $ ";       $color_unit_string = "";}
    if($_SESSION['map_edge_colour'] == 'productivity'){	                        $color_title_string = "Productivity: $ ";                       $color_unit_string = " / hr";}
    if($_SESSION['map_edge_colour'] == 'productivity_improvement_potential'){	$color_title_string = "Productivity improvement potential: ";	$color_unit_string = "%";}
    if($_SESSION['map_edge_colour'] == 'communication'){	                    $color_title_string = "Total communication quality: ";          $color_unit_string = " /10";}
    if($_SESSION['map_edge_colour'] == 'trust'){			                    $color_title_string = "Trust: ";	                            $color_unit_string = " /10";}
    if($_SESSION['map_edge_colour'] == 'quality'){			                    $color_title_string = "Quality: ";	                            $color_unit_string = " /10";}	
    if($_SESSION['map_edge_colour'] == 'kpi_1'){			                    $color_title_string = "".$kpi_1_title.": ";	                    $color_unit_string = "";}
    if($_SESSION['map_edge_colour'] == 'kpi_2'){			                    $color_title_string = "".$kpi_2_title.": ";	                    $color_unit_string = "";}
    if($_SESSION['map_edge_colour'] == 'kpi_3'){			                    $color_title_string = "".$kpi_3_title.": ";	                    $color_unit_string = "";}
    if($_SESSION['map_edge_colour'] == 'kpi_4'){			                    $color_title_string = "".$kpi_4_title.": ";                     $color_unit_string = "";}

    if($_SESSION['map_edge_thickness'] == 'non_descript'){	                        $thickness_title_string = "";                                       $thickness_unit_string = "";}
    if($_SESSION['map_edge_thickness'] == 'users_time'){		                    $thickness_title_string = "User&#x27;s time: ";                          $thickness_unit_string = " hours";}
    if($_SESSION['map_edge_thickness'] == 'financial'){		                        $thickness_title_string = "User&#x27;s perspective financial: $ ";       $thickness_unit_string = "";}
    if($_SESSION['map_edge_thickness'] == 'productivity'){	                        $thickness_title_string = "Productivity: $ ";                       $thickness_unit_string = " / hr";}
    if($_SESSION['map_edge_thickness'] == 'productivity_improvement_potential'){	$thickness_title_string = "Productivity improvement potential: ";	$thickness_unit_string = "%";}
    if($_SESSION['map_edge_thickness'] == 'communication'){	                        $thickness_title_string = "Total communication quality: ";          $thickness_unit_string = " /10";}
    if($_SESSION['map_edge_thickness'] == 'trust'){			                        $thickness_title_string = "Trust: ";	                            $thickness_unit_string = " /10";}
    if($_SESSION['map_edge_thickness'] == 'quality'){			                    $thickness_title_string = "Quality: ";	                            $thickness_unit_string = " /10";}	
    if($_SESSION['map_edge_thickness'] == 'kpi_1'){			                        $thickness_title_string = "".$kpi_1_title.": ";	                    $thickness_unit_string = "";}
    if($_SESSION['map_edge_thickness'] == 'kpi_2'){			                        $thickness_title_string = "".$kpi_2_title.": ";	                    $thickness_unit_string = "";}
    if($_SESSION['map_edge_thickness'] == 'kpi_3'){			                        $thickness_title_string = "".$kpi_3_title.": ";	                    $thickness_unit_string = "";}
    if($_SESSION['map_edge_thickness'] == 'kpi_4'){			                        $thickness_title_string = "".$kpi_4_title.": ";                     $thickness_unit_string = "";}





















    //if($_SESSION[''])
    $title_string = '';
        if($_SESSION['map_edge_colour'] != 'non_descript'){
            $title_string .= $color_title_string.$edges['a_to_b_color_score'][$i].$color_unit_string; //FORMAT: value: x units
        }
        if($_SESSION['map_edge_thickness'] != 'non_descript'){
            if($_SESSION['map_edge_colour'] != 'non_descript'){
                $title_string .= "\n";
            }
            $title_string .= $thickness_title_string.$edges['a_to_b_thickness_score'][$i].$thickness_unit_string; //FORMAT: value: x units
        }




         echo "   title='".$title_string."'        ";
                    echo "
                    >
        </div>
    </a>"; 

}
