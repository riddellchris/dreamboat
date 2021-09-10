<?php
if(!isset($_SESSION)){session_start();}

$shadow_definition = "box-shadow: 4px 0px 8px 4px rgb(0 0 0 / 13%);";

echo "
<style>
    .slideshow_menu_container{  width:100%; 
					            bottom: 50;
					            position: fixed;
					            height: 50px;    ";   
if($_GET['tertiary_folder'] != 'one' &&
    $_GET['tertiary_folder'] != 'ten'){
     echo $shadow_definition;
    }
    echo "
                              }

    .hide_slideshow_menu_container{display:none;}
    .show_slideshow_menu_container{display:block;}

    .slideshow_menu_inner{  width: 50%;
                            height: 50px;  
                            text-align: center;
                            font-family: Helvetica;
                            font-weight: 600;
                            float: left;
                            color: white;
                            text-decoration: none;
    }



    @media only screen and (min-width: 800px) {
        .slideshow_menu_inner{ 
            font-size: 25px;
            padding-top: 9px;
        }
    }

    @media only screen and (max-width: 800px) {
        .slideshow_menu_inner{ 
            font-size: 20px;
            padding-top: 3px;
        }
    }


        
    .slideshow_menu_left{   ";
	        if(check_tertiary_folder('one') == true){
					echo	"background-color: transparent;";
                        }
			else {
					echo "background-color: #ff9494;";
			}
	        if(check_tertiary_folder('ten') == true){
                echo $shadow_definition;
            }	

	echo "
		}";
	
    if(check_tertiary_folder('one') == 0){	
		echo ".slideshow_menu_left:hover{background-color: red;}"; //
	}

	echo "
    .slideshow_menu_right{  ";
	        if(check_tertiary_folder('ten') == true){
					echo	"background-color: #cecece;";
                        }
			else {
					echo "background-color: #93e092;";
			}
	        if(check_tertiary_folder('one') == true){
                echo $shadow_definition;
            }
    echo "}";

    if(check_tertiary_folder('ten') == 0){	
        echo ".slideshow_menu_right:hover{background-color: green;}"; //#60d15e
    }


echo "
</style>
";


echo "<div id='slideshow_menu' class='slideshow_menu_container' style='display:block;'>";

    echo "<a class ='slideshow_menu_inner slideshow_menu_left' ";
        if(check_tertiary_folder('one') == 0){
        echo "href='/slideshows/components/menu/move.php?direction=backwards&show=".$_GET['secondary_folder']."&from=".$_GET['tertiary_folder']."'";
		}

		echo ">";
        if(check_tertiary_folder('one') == 0){
        echo "BACK";
		}
    echo "</a>";
    echo "<a class ='slideshow_menu_inner slideshow_menu_right' ";
        if(check_tertiary_folder('ten') == 0){    
        echo "href='/slideshows/components/menu/move.php?direction=forwards&show=".$_GET['secondary_folder']."&from=".$_GET['tertiary_folder']."'";
		}
        else{
            echo "href='/knowledgebase/'";
        }
		echo ">";

        if(check_tertiary_folder('ten') == 0){   		
        echo "NEXT";
            }
        else{
            echo "READ MORE...";
        }

    echo "</a>";					
					
echo "</div>";