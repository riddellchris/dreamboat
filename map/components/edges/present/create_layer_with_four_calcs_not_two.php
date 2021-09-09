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
if( $edges['item_a_x_pos'][$i] <= $edges['item_b_x_pos'][$i] && $edges['item_a_y_pos'][$i] <= $edges['item_b_y_pos'][$i]){

    echo "translation-category = 'a'";

    echo "style ='";
    echo "left: calc(300px + 125px);";
    echo "top: calc(200px  + 62px );";

    echo " transform-origin: top right;";
    echo " transform: ";
        echo "translateX(".$edges['smaller_x'][$i]."px)";
        echo "translateY(".$edges['smaller_y'][$i]."px)";
        echo "rotate(".$edges['rotation'][$i] ."deg)";
        echo "translateY(calc(".$edges['a_to_b_thickness_in_pts'][$i]."px / -2))";
        echo ";";
    
    echo " width: ".abs($edges['line_length'][$i])."px;";
    echo " height: ".$edges['a_to_b_thickness_in_pts'][$i]."px;";

    $custom = 'no';
    }
    
if( $edges['item_a_x_pos'][$i] <= $edges['item_b_x_pos'][$i] && $edges['item_a_y_pos'][$i] > $edges['item_b_y_pos'][$i]){

    echo "translation-category = 'b'";

    echo "style ='"; 
    echo "left: calc(300px + 125px + ".abs($edges['x_diff'][$i])."px);";
    echo "top: calc(200px  + 62px );";
    echo " transform-origin: top left;";
    echo " transform: ";
        echo "translateX(".$edges['smaller_x'][$i]."px)";
        echo "translateY(".$edges['smaller_y'][$i]."px)";
        echo "rotate(".$edges['rotation'][$i] ."deg)";
        echo "translateY(calc(".$edges['a_to_b_thickness_in_pts'][$i]."px / -2))";
        echo ";";
    
    echo " width: ".abs($edges['line_length'][$i])."px;";
    echo " height: ".$edges['a_to_b_thickness_in_pts'][$i]."px;";

    $custom = 'no';
}
if( $edges['item_a_x_pos'][$i] > $edges['item_b_x_pos'][$i] && $edges['item_a_y_pos'][$i] <= $edges['item_b_y_pos'][$i]){

    echo "translation-category = 'c'";

    echo "style ='";
    echo "left: calc(300px + 125px  );";
    echo "top: calc(200px  + 62px );";

    echo " transform-origin: top right;";
    echo " transform: ";
        echo "translateX(".$edges['smaller_x'][$i]."px)";
        echo "translateY(".$edges['smaller_y'][$i]."px)";
        echo "rotate(".$edges['rotation'][$i] ."deg)";
        echo "translateY(calc(".$edges['a_to_b_thickness_in_pts'][$i]."px / -2))";
        echo ";";
    
    echo " width: ".abs($edges['line_length'][$i])."px;";
    echo " height: ".$edges['a_to_b_thickness_in_pts'][$i]."px;";

    $custom = 'no';
    }
    
if( $edges['item_a_x_pos'][$i] > $edges['item_b_x_pos'][$i] && $edges['item_a_y_pos'][$i] > $edges['item_b_y_pos'][$i]){

    echo "translation-category = 'd'";

    echo "style ='";    
    echo "left: calc(300px + 125px );";
    echo "top: calc(200px  + 62px );";
    echo " transform-origin: top left;";
    echo " transform: ";
        echo "translateX(".$edges['smaller_x'][$i]."px)";
        echo "translateY(".$edges['smaller_y'][$i]."px)";
        echo "rotate(".$edges['rotation'][$i] ."deg)";
        echo "translateY(calc(".$edges['a_to_b_thickness_in_pts'][$i]."px / -2))";
        echo ";";
    
    echo " width: ".abs($edges['line_length'][$i])."px;";
    echo " height: ".$edges['a_to_b_thickness_in_pts'][$i]."px;";

    $custom = 'no';
}


if($custom == 'yes'){

    echo "translation-category = 'e'";

    echo "style ='";    
    echo "left: calc(400px + 125px );";
    echo "top: calc(200px  + 62px );";
    echo " transform-origin: top left;";
    echo " transform: ";
        echo "translateX(".$edges['smaller_x'][$i]."px)";
        echo "translateY(".$edges['smaller_y'][$i]."px)";
        echo "rotate(".$edges['rotation'][$i] ."deg)";
        echo "translateY(calc(".$edges['a_to_b_thickness_in_pts'][$i]."px / -2))";
        echo ";";
    
    echo " width: ".abs($edges['line_length'][$i])."px;";
    echo " height: ".$edges['a_to_b_thickness_in_pts'][$i]."px;";


}

echo "
                    font-family: Barlow Semi Condensed;
                    font-weight: 600;
                    position: absolute; 
                    '";
                                
 //           title='value: x units'        ";
                    echo "
                    >
        </div>
    </a>"; 

}
