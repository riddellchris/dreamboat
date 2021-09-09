<?php
if(!isset($_SESSION)){session_start();}

echo "
<style name='/slideshow/components/'>
@media only screen and (max-width: 600px) {.slideshow_text{padding: 0px 0px;}}
@media only screen and (min-width: 600px) {.slideshow_text{padding: 0px 2vw;}}

@media only screen and (max-width: 900px) {.slideshow_title_container{padding-left: 0px;}}
@media only screen and (min-width: 900px) {.slideshow_title_container{padding-left: 18px;}}
";

if($_GET['secondary_folder'] == 'one'){   $breakpoint = '1950';}
if($_GET['secondary_folder'] == 'two'){   $breakpoint = '1710';}
if($_GET['secondary_folder'] == 'three'){ $breakpoint = '1730';}
if($_GET['secondary_folder'] == 'four'){  $breakpoint = '1730';}
if($_GET['secondary_folder'] == 'five'){  $breakpoint = '1730';}
if($_GET['secondary_folder'] == 'six'){   $breakpoint = '1730';}
if($_GET['secondary_folder'] == 'seven'){ $breakpoint = '1730';}
if($_GET['secondary_folder'] == 'eight'){ $breakpoint = '1730';}
if($_GET['secondary_folder'] == 'nine'){ $breakpoint = '1730';}
if($_GET['secondary_folder'] == 'ten'){ $breakpoint = '1730';}


echo "
@media only screen and (min-width: ".$breakpoint."px) {.slideshow_descriptive_text{ position: fixed; 
                                                                                    top:0; 
                                                                                    right: 0px;}";

        if( $_GET['secondary_folder'] != 'three' AND
            $_GET['secondary_folder'] != 'four' AND  
            $_GET['secondary_folder'] != 'six' AND  
            $_GET['secondary_folder'] != 'seven' AND 
            $_GET['secondary_folder'] != 'eight'AND  
            $_GET['secondary_folder'] != 'nine' AND 
            $_GET['secondary_folder'] != 'ten'
            
            ){echo " #slideshow_diagram_block{padding-top:5vh;} ";}
        else{echo " #slideshow_diagram_block{padding-top:0vh;} ";}
                                                                         
                                                       

                                                        echo "                            
                                                                                    }
@media only screen and (max-width: ".$breakpoint."px) {.slideshow_descriptive_text{ position: relative; 
                                                                                    float: left;}
                                                           #slideshow_diagram_block{padding-top:0vh;}                              
                                                                                    }

.slideshow_title_container{
    font-family: Barlow Semi Condensed, sans-serif; 
    font-size: 48px; 
    font-weight: 700; 
    color: black;  
    margin: auto;
    text-decoration: underline;
}

.slideshow_descriptive_text{
    font-family: Comfortaa; 
    min-width: 50%; 
    padding-right: 1vw;
    padding-bottom: 100px;
    }


.db_info_box{
        border: 2px solid tranparent;
        border-bottom-right-radius: 40px 26px;
        font-family: Comfortaa;
        text-align:left;
    ";

  if($_GET['secondary_folder'] == 'five'){
    echo "  
        min-height: 25%;
    ";
  }
  else{
    echo "width: 100%;
        min-height: 75px;
        margin-bottom: 25px;
      ";
  }
        echo "
}

.db_info_box.blue{
        background: linear-gradient(to bottom right, #281e96 50%,transparent 50%) 0 0/50px 50px, #e3e0ff;
        background-repeat:no-repeat;
    }
.db_info_box.red{
        background: linear-gradient(to bottom right, red 50%,transparent 50%) 0 0/50px 50px, #ffe0e0;
        background-repeat:no-repeat;
    }
.db_info_box.grey{
        background: linear-gradient(to bottom right, #cccccc 50%,transparent 50%) 0 0/50px 50px, #f0f0f0;
        background-repeat:no-repeat;
    }

    #slideshow_diagram_block{float: left; width: 100%; }

    .box_title{
        font-family: Barlow Semi Condensed, san-serif;
        color: black;
        font-weight: 600;
        font-size: 2vmax;
        padding-top: 30px;
        padding-left: 40px;
        text-transform: uppercase;
        text-align: left;
        }
    .box_title.grey{color: #cecece;}
    .box_content{
        font-family: Comfortaa;
        padding-left: 35px;
        padding-top: 10px;
        }
    .db_info_box{box-shadow: -12px -9px 5px 0px rgb(0 0 0 / 5%);}

</style>
"; 