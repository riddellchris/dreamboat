
<br>
<style>
    .fas{display:block;}
    #process_diagram{
        width: 100%;
    }
    #process_diagram_left_block{
        display: inline-block;
        margin-left: 10%; 
        text-align: center;
        width: 10%;
        float:left;
    }
    #process_diagram_mid_arrows_block{ 
        display: inline-block;
        margin-left: 8%;
        width: 6%;  
        margin-top: 7vh;
		float:left;
    }
    #process_diagram_central_block{
        display: inline-block;
        margin-left: 5%;
        width: 10%;  
        margin-top: 30vh;
		float:left;
    }
    #process_diagram_triangle_block{
        display: inline-block;
        margin-left: 5%;
        width: 10%;  
        margin-top: 30vh;
		float:left;
    }

    #process_diagram_right_block{
        display: inline-block;
        width: 30%;  
		height: 40%;
		margin-top: 20vh;
		margin-left:  5%;

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

#slideshow_people{          font-size: 8vmax;    padding-top: 8vh;}
#slideshow_internal_data{   font-size: 8vmax;    padding-top: 8vh;}
#slideshow_external_data{   font-size: 8vmax;    padding-top: 8vh;}
#slideshow_server{          font-size: 10vmax;   padding-top: 2%;}

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

#small_triangle_to_left{
  width: 0; 
  height: 0; 
  border-top: 60px solid transparent;
  border-bottom: 60px solid transparent;
  
  border-left: 60px solid red;
  margin-top: 100;

}




</style>

<?php
if($_GET['secondary_folder'] == 'three'){ $people = 'forestgreen'; $internal_data = '#F5BD02'; $external_data = 'black';    $triangle_color= 'red';}
if($_GET['secondary_folder'] == 'four'){  $people = 'forestgreen'; $internal_data = '#F5BD02'; $external_data = 'black';    $triangle_color= '#cecece';}
if($_GET['secondary_folder'] == 'seven'){ $people = 'forestgreen'; $internal_data = '#cecece'; $external_data = '#cecece';  $triangle_color= 'red';}
if($_GET['secondary_folder'] == 'eight'){ $people = '#cecece';     $internal_data = '#cecece'; $external_data = '#cecece';  $triangle_color= 'red';}


echo "

<div id='slideshow_diagram_block'>
    <div id='process_diagram_left_block'>
        <i id='slideshow_people'        class='fas fa-users'     style='    color: ".$people.";'></i>
        <i id='slideshow_internal_data' class='fas fa-database'  style='    color: ".$internal_data."'></i>
        <i id='slideshow_external_data' class='fas fa-database'  style='    color: ".$external_data."'></i>
    </div>
    <div id='process_diagram_mid_arrows_block'>
        <div id='small_triangle_to_left'>
        </div>
        <div id='small_triangle_to_left'>
        </div>";

echo "
            <div id='small_triangle_to_left'>
            </div>
";
        

    echo "
    </div>


    <div id='process_diagram_central_block'>
        <i id='slideshow_server' class='fas fa-server'    style='        float:left; color: #4332ff;'></i>
    </div>
    <div id='process_diagram_triangle_block'>
        <div id='big_triangle_to_right'>
        </div>
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