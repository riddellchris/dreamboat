
<br>
<style>
    .fas{display:block;}
    #process_diagram{
        width: 100%;
    }

@media only screen and (min-width: 1200px) {   
    #process_diagram_left_block{
        display: inline-block;
        text-align: center;
        width: calc(100% / 3 - 2%);
        float:left;
        margin-left: 1%;
    }
    #process_diagram_central_block{
        display: inline-block;
        width: calc(100% / 3 - 2%);
		float:left;
        margin-left: 1%;        
        margin-right: 1%;
    }
    #process_diagram_right_block{

        margin-top: 10vh;
        display: inline-block;
        width: calc(100% / 3 - 2%);
		float:left;
   
        margin-right: 1%;
    }
    #optimisation_engine_box{margin-top: 22.5vh;}
}
@media only screen and (min-width: 1200px) {   



}
    #process_diagram_image_block{
        margin: 0 auto;
        display: inline-block;
        width: 100%;  
		height: 50vh;
        text-align: center;

<?php
    if($_GET['tertiary_folder'] == 'three'){   $image_to_show = '1';}
    if($_GET['tertiary_folder'] == 'four'){    $image_to_show = '1';}
    if($_GET['tertiary_folder'] == 'nine'){    $image_to_show = '3';}
    if($_GET['tertiary_folder'] == 'ten'){     $image_to_show = '1';}

    echo "	background-image: url('/knowledgebase/components/diagrams/combo_chart_".$image_to_show.".svg');";
?>


		background-repeat: no-repeat;
    }


#slideshow_diagram_block{float: left; width: 100%;}

#slideshow_people{          font-size: 50px;    }
#slideshow_internal_data{   font-size: 50px;    }
#slideshow_external_data{   font-size: 50px;    }
#slideshow_server{          font-size: 50px;   }


.small_triangle_to_left{
  width: 0; 
  height: 0; 
  border-top: 2.5vmax solid transparent;
  border-bottom: 2.5vmax solid transparent;
  margin-top: 11vh;
}

.icon_div{text-align:right; padding-right: 25px; padding-bottom: 25px;
    }

</style>

<?php
if($_GET['tertiary_folder'] == 'three'){ $people = 'forestgreen'; $internal_data = '#F5BD02'; $external_data = 'black';    $triangle_color= 'red';}
if($_GET['tertiary_folder'] == 'four'){  $people = '#cecece'; $internal_data = '#cecece'; $external_data = '#cecece';    $triangle_color= '#cecece';}
if($_GET['tertiary_folder'] == 'nine'){ $people = 'forestgreen'; $internal_data = '#cecece'; $external_data = '#cecece';  $triangle_color= 'red';}
if($_GET['tertiary_folder'] == 'ten'){ $people = '#cecece';     $internal_data = '#F5BD02'; $external_data = '#cecece';  $triangle_color= 'red';}





echo "

<div id='slideshow_diagram_block'>
    <div id='process_diagram_left_block'>
        <div class='db_info_box ";
            if($_GET['tertiary_folder'] == 'ten' OR $_GET['tertiary_folder'] == 'four' ){echo " grey ";}
            else{echo " blue ";}
                echo "'>
            <div class='box_title";
                if($_GET['tertiary_folder'] == 'ten' OR $_GET['tertiary_folder'] == 'four' ){echo " grey ";}
                echo "'>
                Workforce data
                  </div>
                  
                
                  ";
                  
          if($_GET['tertiary_folder'] == 'ten' OR $_GET['tertiary_folder'] == 'four' ){echo "      <ul style='color: #cecece;'>";}     
          else{echo "<ul>";}  
                        point_detailed_start('no',8,8,8,"Real time spent per task/activity/person information.");
                        point_detailed_start('no',8,8,8,"Productivity issue information.");
                        point_detailed_start('no',8,8,8,"Personal motivation information.");                       
                    list_end();
                echo "
                                <style>
                   li {color: unset;}
                </style>
            <div class='icon_div'>
                <i id='slideshow_people' class='fas fa-users'  style='    color: ".$people."'></i>    
            </div>
        </div>
      <div class='db_info_box ";
            if(
            $_GET['tertiary_folder'] == 'nine'  OR $_GET['tertiary_folder'] == 'four' 
            ){echo " grey ";}
            else{echo " blue ";}
                echo "'>
            <div class='box_title";
                if($_GET['tertiary_folder'] == 'nine'  OR $_GET['tertiary_folder'] == 'four' 
                ){echo " grey ";}
                echo "'>
                business data
            </div>";
          if(
          $_GET['tertiary_folder'] == 'nine'  OR $_GET['tertiary_folder'] == 'four' 
          
          ){echo "      <ul style='color: #cecece;'>";}     
          else{echo "<ul>";} 
                        point_detailed_start('no',8,8,8,"&nbsp;&nbsp;Task management platforms");
                            list_start();
                                point_detailed_start('no',6,6,6,"e.g. Accelo, Aroflo, Trello etc.");
                            list_end();
                        point_detailed_start('no',8,8,8,"&nbsp;&nbsp;Accounting management platforms");
                            list_start();
                                point_detailed_start('no',6,6,6,"e.g. Xero, MYOB, Reckon etc.");
                            list_end();
                        point_detailed_start('no',8,8,8,"&nbsp;&nbsp;Customer management platforms"); 
                            list_start();
                                point_detailed_start('no',6,6,6,"e.g. Salesforce, Insightly, Zoho etc.");
                            list_end();
                        point_detailed_start('no',8,8,8,"&nbsp;&nbsp;Marketing platforms ");   
                            list_start();
                                point_detailed_start('no',6,6,6,"e.g. Ad data, social metrics, call data etc. ");
                            list_end();
                    list_end();

            echo "    

            <div class='icon_div'>
                <i id='slideshow_internal_data' class='fas fa-database'  style='    color: ".$internal_data."'></i> 
            </div>     
        </div>
      <div class='db_info_box ";
            if( $_GET['tertiary_folder'] == 'ten' OR
                $_GET['tertiary_folder'] == 'nine'  OR $_GET['tertiary_folder'] == 'four' 
            ){echo " grey ";}
            else{echo " blue ";}
                echo "'>
            <div class='box_title";
                if($_GET['tertiary_folder'] == 'ten' OR $_GET['tertiary_folder'] == 'nine'  OR $_GET['tertiary_folder'] == 'four' 
                ){echo " grey ";}
                echo "'>
                External data
            </div>    
                ";
          if($_GET['tertiary_folder'] == 'ten' OR
          $_GET['tertiary_folder'] == 'nine'  OR $_GET['tertiary_folder'] == 'four' 
          
          ){echo "      <ul style='color: #cecece;'>";}     
          else{echo "<ul>";}  
                        point_detailed_start('no',8,8,8,"Search data");
                        point_detailed_start('no',8,8,8,"Traffic & weather data");
                        point_detailed_start('no',8,8,8,"Economic data"); 
                        point_detailed_start('no',8,8,8,"Financial market data");                                               
                    list_end();

                echo"
            <div class='icon_div'>
                <i id='slideshow_external_data' class='fas fa-database'  style='    color: ".$external_data."'></i>
            </div>       
        </div>
    </div>
    <div id='process_diagram_central_block'>
        <div id='optimisation_engine_box' class='db_info_box ";
                    if( $_GET['tertiary_folder'] == 'three'            ){echo " grey ";}
            else{echo " red ";}
           //     echo "'>";
                     echo "style='color: #281e96;'>";    
         echo " 
            <div class='box_title";
            if($_GET['tertiary_folder'] == 'three' 
                ){echo " grey ";}
                echo "'>
                DB Optimisation Engine
            </div>";
          if($_GET['tertiary_folder'] == 'three' 
          
          ){echo "      <ul style='color: #cecece;'>";}     
          else{echo "<ul style='color: #281e96;'>";}  
                        point_detailed_start('no',8,8,8,"Probability based productivity analysis & improvement.");
                        point_detailed_start('no',8,8,8,"Built on historical data from your business & comparative businesses from from various sizes and industries.");
          if($_GET['tertiary_folder'] == 'three'){
point_detailed_start('no',8,8,8,"As well as basic productivity issue removal based on Pilot observations."); 
                        
          }
          else{point_detailed_start('no',8,8,8,"As well as basic productivity issue removal based on <a href='/knowledgebase/our_model/pilots/' target='_blank'>Pilot</a> observations.");  

          }                    
                    list_end();
                echo "

            <div class='icon_div'>
                <i id='slideshow_server' class='fas fa-server' ";
                    if($_GET['tertiary_folder'] == 'three'){echo "style='         color: #cecece;'";}
                    else{echo "style='         color: #4332ff;'";}
                   
                   
                   echo "></i>
            </div>
        </div>
    </div>
    <div id='process_diagram_right_block'>
        <div id='process_diagram_image_block'>";

            /*
                require $_SERVER['DOCUMENT_ROOT'].'knowledgebase/components/functions/include_images.php';
                include_knowledgebase_image('/knowledgebase/components/diagrams/combo_chart_1.svg', 'default', '100%');
                */
    echo"
        </div>
    </div>
</div>";
