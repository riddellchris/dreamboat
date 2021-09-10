<?php
if(!isset($_SESSION)){session_start();}
require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/start.php";
require $_SERVER['DOCUMENT_ROOT']."/knowledgebase/components/styling/main_css.php";

echo "<div class='slideshow_title_container'>";
    echo "OUR PROCESS";
echo "</div>";

//require $_SERVER['DOCUMENT_ROOT']."/slideshows/components/process_diagram_2/display.php";



echo "
<style>";

require $_SERVER['DOCUMENT_ROOT']."/slideshows/five/triangles.php";


echo "
    #slideshow_left{
        display: inline-block;
        margin-left: 2%;
        margin-right: 2%;
		float:left;
        }
    #slideshow_middle{
        width: 10%;  
		float:left;
        }    

    @media only screen and (max-width: 1200px) {
            #slideshow_middle{              display: none;}
            #optimise_content_wide{         display: none;}
            #optimise_content_not_wide{     display: inline-block;}   
            #slideshow_optimise{            margin-top: 2vh;} 
            #slideshow_analyse{             margin-top: 2vh;}
            #slideshow_left{        width:      96%;}
            }
     @media only screen and (min-width: 1200px) {           
            #slideshow_middle{          display: inline-block;}
            #optimise_content_wide{     display: inline-block;}
            #optimise_content_not_wide{ display: none;}
            #slideshow_optimise{        margin-top: 24vh;} 
            #slideshow_analyse{         margin-top: 20vh;} 
            #slideshow_left{            width: 41%;}
            }


    #slideshow_right{
        display: inline-block;
        margin-left: 2%;
        margin-right: 2%;       
        width: 41%;  
		float:left;
        }    

    #slideshow_middle_left{
        display: inline-block;
        width: 100%;  
		float:left;
        }
    @media only screen and (max-width: 1200px) {#slideshow_middle_left{ display:    none;}
                                              
                                                
                                                }
    @media only screen and (min-width: 1200px) {#slideshow_middle_left{ display:    inline-block;}
                                       
                                                }   

    #slideshow_middle_right{
 //       display: inline-block;
  //      width: 45%;
  //      margin-left: 10%; 
//		float:left;
        }



</style>
";

$optimise_content_top =
    "<div id='slideshow_optimise' style='width: 100%;' class='db_info_box blue'>
            <div class='box_title'>
                Optimise
            </div>
             <div class='box_content'>";/*
                list_start();
                   point_detailed_start('no',10,10,10,"Communicate and implement suggested optimisations via various <a href='/knowledgebase/current_service/pricing/' target='_blank'>access points</a>.");
                   point_detailed_start('no',10,10,10,"Where required and possible implement other supporting implementations.");
                   point_detailed_start('no',10,10,10,"Review as mapping further...");                  
                list_end();*/
$optimise_content_bottom =    "<br><BR><br>
            </div> 
      </div>";



echo "<div id='slideshow_diagram_block'>";
    echo "<div id='slideshow_left'>";
        echo "<div id='slideshow_map' style=' width: 100%;' class='db_info_box blue'>";
            echo "<div class='box_title'>";
                echo "Map";
            echo "</div>";
            echo "<div class='box_content'>";
                list_start();
                   point_detailed_start('no',10,10,10,"Map each individual productivity network, live on platform.");
                   point_detailed_start('yes',10,10,10,"Connect individual maps to form oganisations and economies.");
                   point_detailed_start('no',10,10,10,"Integrate data sets and direct from user data.");
                list_end();

                echo"<div style=' background-image: url(/components/diagrams/images/map_live.svg); background-repeat:no-repeat;background-position: right; height:100; margin-top: -20px;'></div>";
            echo "</div>";           
        echo "</div>";

  


        echo "<div id='slideshow_analyse' style='width: 100%; padding-bottom:25px;' class='db_info_box blue'>";
            echo "<div class='box_title'>";
                echo "Analyse";
            echo "</div>";
            echo "<div class='box_content'>";
                list_start();
                   point_detailed_start('no',10,10,10,"Find comparative scenarios in historical data sets.");
                   point_detailed_start('no',10,10,10,"Identify the fastest, slowest progression paths & issues raised.");
                   point_detailed_start('no',10,10,10,"Run predictive testing to check against this scenario.");
                   point_detailed_start('yes',10,10,10,"Test across individual, business and economic layers.");                   
                list_end();

              // echo"<div style=' background-image: url(/components/diagrams/images/map_live.svg); background-repeat:no-repeat;background-position: right; height:100;'></div>";
            echo "</div>"; 
        echo "</div>";
    
            echo "<div id='optimise_content_not_wide'>";
            echo $optimise_content_top;
                    list_start();
                    point_detailed_start('no',10,10,10,"Implement suggested optimisations via our various <a href='/knowledgebase/current_service/pricing/' target='_blank'>access points</a>.");
                    point_detailed_start('no',10,10,10,"Where required and possible implement other supporting & surrounding implementations.");
                    point_detailed_start('yes',10,10,10,"Review optimisation success as part of further / future mapping...");                  
                    list_end();
            echo $optimise_content_bottom;   
        echo "</div>";   
    
    echo "</div>";

    echo "<div id='slideshow_middle' style='margin-top: 20vh;'>";
    /*
        echo "<div id='slideshow_middle_left'>";
            echo "<div id='down_triangle' style='margin-top: calc(".$triangle_size." * 3)'>";
            echo "</div>";
        echo "</div>";
        echo "<div id='slideshow_middle_right'>";
            echo "<div id='up_left_triangle'>";
            echo "</div>";   
            echo "<div id='up_right_triangle'  style='margin-left: calc(".$triangle_size." * 0.75);margin-top: calc(".$triangle_size." * 2)'>";
            echo "</div>";   
         echo "</div>";      
         */ 
        echo "<div id='slideshow_middle_left' style='padding-top: 2vh;'>";
            echo "<div id='down_triangle' style='margin-top: calc(".$triangle_size." * 3)'>";
            echo "</div>";
            echo "<div id='up_left_triangle'>";
            echo "</div>";   
            echo "<div id='up_right_triangle'  style='margin-left: calc(".$triangle_size." * 0.75);margin-top: calc(".$triangle_size." * 2)'>";
            echo "</div>";   
         echo "</div>";           
    echo "</div>";
    
    echo "<div id='slideshow_right'>";
        echo "<div id='optimise_content_wide'>";
            echo $optimise_content_top;
                list_start();
                    point_detailed_start('no',10,10,10,"Implement suggested optimisations via our various <a href='/knowledgebase/current_service/pricing/' target='_blank'>access points</a>.");
                    point_detailed_start('no',10,10,10,"Where required and possible implement other supporting & surrounding implementations.");
                    point_detailed_start('yes',10,10,10,"Review optimisation success as part of further / future mapping...");                    
                list_end();
            echo $optimise_content_bottom;
        echo "</div>";
    echo "</div>";
echo "</div>";
echo "<div class='slideshow_descriptive_text'>";
list_start();
    point_detailed_start('yes', 10,8,8,"As we step through our <a href='' target='_blank'>phases of engagement</a> we collect increasing layers, volumes & sources of data.");
    point_detailed_start('no', 10,8,8,"This allows us to provide ever increasing surity around our <a target='_blank' href='https://www.investopedia.com/terms/b/backtesting.asp'>backtested</a> <a target='_blank' href='/knowledgebase/our_model/optimisations/'>optimisations</a>.");
//   point_detailed_start('no', 10,8,8,"... we can use all our collective intelligence and data to drive a new, stable & prosperous future for Australia.");
list_end();
echo "</div>";




require $_SERVER['DOCUMENT_ROOT']."/components/layouts/standard_page/end.php";   