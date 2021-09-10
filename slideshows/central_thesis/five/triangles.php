<?php
if(!isset($_SESSION)){session_start();}
//$triangle_size = '55px';

$triangle_size = '2vmax';

echo "
    #down_triangle{  
        width: 0; 
        height: 0; 
        border-left:    ".$triangle_size." solid transparent;
        border-right:   ".$triangle_size." solid transparent;
        border-top:     ".$triangle_size." solid red;
        transform:         translate(0.4vmax, 3.5vmax);
    }
    #up_left_triangle{
        width: 0; 
        height: 0; 
        border-left:    ".$triangle_size." solid transparent;
        border-right:   ".$triangle_size." solid transparent;
        border-top:     ".$triangle_size." solid red;
            transform:          rotate(120deg) translate(-4vmax, -1vmax);
    }
    #up_right_triangle{
        width: 0; 
        height: 0; 
        border-left:    ".$triangle_size." solid transparent;
        border-right:   ".$triangle_size." solid transparent;
        border-top:     ".$triangle_size." solid red;
        transform:      rotate(-120deg) translate(2vmax, 6vmax);

    }";