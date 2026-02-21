<?php
if(!isset($_SESSION)){session_start();}
$triangle_size = '55px';
echo "
    #down_triangle{  
        width: 0; 
        height: 0; 
        border-left:    ".$triangle_size." solid transparent;
        border-right:   ".$triangle_size." solid transparent;
        border-top:     ".$triangle_size." solid red;
    }
    #up_left_triangle{
            width: 0; 
            height: 0; 
            border-top:         ".$triangle_size." solid transparent;
            border-bottom:      ".$triangle_size." solid transparent; 
            border-right:       ".$triangle_size." solid red; 
            transform:          rotate(45deg);
    }
    #up_right_triangle{
        width: 0; 
        height: 0; 
        border-top:         ".$triangle_size." solid transparent;
        border-bottom:      ".$triangle_size." solid transparent;
        border-left:        ".$triangle_size." solid red;
        transform:          rotate(-45deg);
    }";