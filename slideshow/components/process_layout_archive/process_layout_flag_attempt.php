
<br>
<style>
    .fas{display:block;}
    #process_diagram{
        width: 100%;
    }
    #process_diagram_left_block{
        display: inline-block;
        text-align: center;
        width: calc(100% / 3);
        float:left;
    }
    #process_diagram_central_block{
        display: inline-block;
        width: calc(100% / 3);
        height: 66vh;
		float:left;
    }
    #process_diagram_right_block{
        display: inline-block;
        width: calc(100% / 3); 
		height: 40%;
		margin-top: 20vh;

<?php
    if($_GET['secondary_folder'] == 'three'){   $image_to_show = '1';}
    if($_GET['secondary_folder'] == 'four'){    $image_to_show = '2';}
    if($_GET['secondary_folder'] == 'seven'){   $image_to_show = '3';}
    if($_GET['secondary_folder'] == 'eight'){   $image_to_show = '1';}

    echo "	background-image: url('/knowledgebase/components/diagrams/combo_chart_".$image_to_show.".svg');";
?>


		background-repeat: no-repeat;
    }


#slideshow_diagram_block{float: left; width: 100%;}

#slideshow_people{          font-size: 4vmax;    padding-top: 1vh; padding-left: 1vh;}
#slideshow_internal_data{   font-size: 4vmax;    padding-top: 1vh; padding-left: 1vh;}
#slideshow_external_data{   font-size: 4vmax;    padding-top: 1vh; padding-left: 1vh;}
#slideshow_server{          font-size: 4vmax;    padding-top: 1vh; padding-left: 1vh;}

#big_triangle_to_right{
  width: 0; 
  height: 0; 
  border-top: 5.5vmax solid transparent;
  border-bottom: 5.5vmax solid transparent;
  border-left: 5.5vmax solid 

<?php
if($_GET['secondary_folder'] == 'four'){ echo "#cecece;";}
else{    echo "red;";}
?>

}

.small_triangle_to_left{
  width: 0; 
  height: 0; 
  border-top: 2.5vmax solid transparent;
  border-bottom: 2.5vmax solid transparent;
  margin-top: 11vh;
}


<?php
if($_GET['secondary_folder'] == 'three'){ $top = 'red';     $middle = 'red';        $bottom = 'red';    }
if($_GET['secondary_folder'] == 'four'){  $top = 'red';     $middle = 'red';        $bottom = '#cecece';}
if($_GET['secondary_folder'] == 'seven'){ $top = 'red';     $middle = '#cecece';    $bottom = '#cecece';}
if($_GET['secondary_folder'] == 'eight'){ $top = '#cecece'; $middle = '#cecece';    $bottom = '#cecece';}


echo "
#small_triangle_to_left_top{    border-left: 2.5vmax solid ".$top.";}
#small_triangle_to_left_middle{ border-left: 2.5vmax solid ".$middle.";}
#small_triangle_to_left_bottom{ border-left: 2.5vmax solid ".$bottom.";}
";
?>

</style>

<?php
if($_GET['secondary_folder'] == 'three'){ $people = 'forestgreen'; $internal_data = '#F5BD02'; $external_data = 'black';    $triangle_color= 'red';}
if($_GET['secondary_folder'] == 'four'){  $people = 'forestgreen'; $internal_data = '#F5BD02'; $external_data = 'black';    $triangle_color= '#cecece';}
if($_GET['secondary_folder'] == 'seven'){ $people = 'forestgreen'; $internal_data = '#cecece'; $external_data = '#cecece';  $triangle_color= 'red';}
if($_GET['secondary_folder'] == 'eight'){ $people = '#cecece';     $internal_data = '#cecece'; $external_data = '#cecece';  $triangle_color= 'red';}


echo "

<div id='slideshow_diagram_block'>
    <div id='process_diagram_left_block'> 
        <div style='background-color:".$people.";float:left;width:100%;        height: 22vh;'>
            <i id='slideshow_people'        class='fas fa-users'     style='    color: white;float: left;'></i>
        </div>
        <div style='background-color:".$internal_data.";float:left;width:100%;height: 22vh;'>
            <i id='slideshow_internal_data' class='fas fa-database'  style='    color:white;float: left;'></i>
        </div>   
        <div style='background-color:".$external_data.";float:left;width:100%;height: 22vh;'>
            <i id='slideshow_external_data' class='fas fa-database'  style='    color:white;float: left;'></i>
        </div>        
    </div>
    <div id='process_diagram_central_block' style='background-color: #4332ff;'>

        <i id='slideshow_server' class='fas fa-server'    style='        float:left; color: white;'></i>
    </div>
    <div id='process_diagram_right_block'>";

		/*
			require $_SERVER['DOCUMENT_ROOT'].'knowledgebase/components/functions/include_images.php';
			include_knowledgebase_image('/knowledgebase/components/diagrams/combo_chart_1.svg', 'default', '100%');
			*/
echo"
	</div>
</div>";
?>      